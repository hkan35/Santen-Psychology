<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\I18n\Time;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */


class UsersController extends AppController
{


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }
	
		public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
}

	public function logout()
{
    return $this->redirect($this->Auth->logout());

}

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('The user has been deleted.');
        } else {
            $this->Flash->error('The user could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
		
	
	
	
	//forget password
	
	function forgetpwd(){
		//$this->layout="signup";
		$this->Users->recursive=-1;
		if(!empty($this->data))
		{
			if(empty($this->data['Users']['email']))
			{
				$this->Session->setFlash('Please Provide Your Email Adress that You used to Register with Us');
			}
			else
			{
				$email=$this->data['Users']['email'];
				$fu=$this->User->find('first',array('conditions'=>array('Users.email'=>$email)));
				if($fu)
				{
					//debug($fu);
					if($fu['Users']['active'])
					{
						$key = Security::hash(String::uuid(),'sha512',true);
						$hash=sha1($fu['Users']['username'].rand(0,100));
						$url = Router::url( array('controller'=>'users','action'=>'reset'), true ).'/'.$key.'#'.$hash;
						$ms=$url;
						$ms=wordwrap($ms,1000);
						//debug($url);
						$fu['Users']['tokenhash']=$key;
						$this->User->id=$fu['Users']['id'];
						if($this->User->saveField('tokenhash',$fu['Users']['tokenhash'])){

							//============Email================//
							/* SMTP Options */
							$this->Email->smtpOptions = array(
								'port'=>'25',
								'timeout'=>'30',
								'host' => 'mail.example.com',
								'username'=>'accounts+example.com',
								'password'=>'your password'
								  );
							  $this->Email->template = 'resetpw';
							$this->Email->from    = 'Your Email <accounts@example.com>';
							$this->Email->to      = $fu['Users']['username'].'<'.$fu['Users']['email'].'>';
							$this->Email->subject = 'Reset Your Example.com Password';
							$this->Email->sendAs = 'both';

								$this->Email->delivery = 'smtp';
								$this->set('ms', $ms);
								$this->Email->send();
								$this->set('smtp_errors', $this->Email->smtpError);
							$this->Session->setFlash(__('Check Your Email To Reset your password', true));

							//============EndEmail=============//
						}
						else{
							$this->Session->setFlash("Error Generating Reset link");
						}
					}
					else
					{
						$this->Session->setFlash('This Account is not Active yet.Check Your mail to activate it');
					}
				}
				else
				{
					$this->Session->setFlash('Email does Not Exist');
				}
			}
		}
	}
	
	
	function reset($token=null){
		//$this->layout="Login";
		$this->User->recursive=-1;
		if(!empty($token)){
			$u=$this->User->findBytokenhash($token);
			if($u){
				$this->User->id=$u['Users']['id'];
				if(!empty($this->data)){
					$this->User->data=$this->data;
					$this->User->data['Users']['username']=$u['User']['username'];
					$new_hash=sha1($u['Users']['username'].rand(0,100));//created token
					$this->User->data['Users']['tokenhash']=$new_hash;
					if($this->User->validates(array('fieldList'=>array('password','password_confirm')))){
						if($this->User->save($this->User->data))
						{
							$this->Session->setFlash('Password Has been Updated');
							$this->redirect(array('controller'=>'users','action'=>'login'));
						}

					}
					else{

						$this->set('errors',$this->User->invalidFields());
					}
				}
			}
			else
			{
				$this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
			}
		}

		else{
			$this->redirect('/');
		}
	}
	
	
}
