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
	
	public function forgetpwd(){
	  

 
 	  

 if(!empty($this->request->data))
	   
 {
 if(empty($this->request->data['email']))
 {
 $this->Flash->error('Please Provide Your Email Address that You used to Register with Us');
 }
 else
 {
 $email=$this->request->data['email'];
 

 $fu=$this->Users->find('all',array('conditions'=>array('email'=>$email)));
 $fu=$fu->first();
 
if($fu)
{
                  //debug($fu);
 if($fu)
 {
 $key = Security::hash(Text::uuid(),'sha512',true);
 $hash=sha1($fu['username'].rand(0,100));
 $url = Router::url( array('controller'=>'users','action'=>'reset'), true ).'/'.$key.'#'.$hash;
 $ms=$url;
 $ms=wordwrap($ms,1000);
              //debug($url);
 $fu['tokenhash']=$key;
 $this->Users->id=$fu['id'];
 if($this->Users->save($fu)){
 
 //============Email================//
 /* SMTP Options */
 
 $email = new Email();
 $email -> template('resetpw')
        ->emailFormat('html')
		->viewVars(['ms'=> $ms])
		->from(['jyi7@student.monash.com' => 'My Site'])
		->to($fu['email'])
		//->to('jyi7@student.monash.com')
		->subject('Reset Your Password')
		->transport('default')
		->send();
 
 
 	    $this->set(compact('users'));
        $this->set('_serialize', ['users']);
 //============EndEmail=============//
 }
 else{
 $this->Flash->error("Error Generating Reset link");
 }
 }
 else
 {
$this->Flash->error('This Account is not Active yet.Check Your mail to activate it');
 }
 }
 else
 {
$this->Flash->error('Email does Not Exist');


 }
 }
 }
 }
 
 
 
 
public function hengrui($token=null){
		//$this->layout="Login";
		//$this->Users->recursive=-1;
		if(!empty($token)){
			//$u=$this->Users->findBytokenhash(null);
			
			 $u=$this->Users->find('all',array('conditions'=>array('tokenhash'=>$token)));
			
			$u=$u->first();
			

			if($u){
									var_dump('test');
					die();

				//$this->Users->id=$u['id'];
				if($this->request->is('post')){
					

								
					$this->Users->data=$this->request->data;
					$this->Users->data['username']=$u['username'];
					
					$new_hash=sha1($u['username'].rand(0,100));//created token
					$this->Users->data['tokenhash']=$new_hash;
					
					if($this->Users->validates(array('fieldList'=>array('password','password_confirm')))){
						if($this->Users->save($this->Users->data))
						{
							$this->Flash->success('Password Has been Updated');
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
				$this->Flash->error('Please Retry..');
			}
		}

		else{
			$this->redirect('/');
		}
	}
	
	
	
	
	public function reset($token=null){
        //$this->layout="Login";
        //$this->User->recursive=-1;

        //$this->layout = 'christelle';

        if(!empty($token)){
            $query = $this->Users->find('all',array('conditions'=>array('Users.tokenhash'=>$token)));

            $u = $query->first();
            $uvalid = $u['username'];

            if($uvalid){

                //$this->Users->id=$u['id'];
                $user = $this->Users->newEntity();
                $user = $this->Users->patchEntity($user,$this->request->data);

                if ($this->request->is('post')) {
                    //$this->Users->id=$u['id'];
                //if(!empty($this->request->data)){

                    $this->Users->data=$this->request->data;
                    //$this->Users->data['username']=$u['username'];
                    $new_hash=sha1($u['username'].rand(0,100));//created token
                    $u['tokenhash']=$new_hash;



                    $passinput=$this->request->data['password'];
                    $passconfirminput=$this->request->data['password_confirm'];


////
//                    var_dump($passinput,$passconfirminput);
//                    die();
////
//                    $validator = new Validator();
//                    $validator
//                        ->requirePresence('password')
//                        ->notEmpty('password', 'We need your password.')
//                        ->requirePresence('password_confirm')
//                        ->notEmpty('password_confirm', 'We need your password.');

//                    var_dump($this->request->data);
//                    die();

//                    $bla = $this->request->data()['data']['User'];
//                    var_dump($bla['password']);
//                    die();
//                    var_dump($bla);


                    //$errors = $validator->errors($this->request->data()['data']['User']);

//                    var_dump($errors);
//                    var_dump('next');

                    if(($passinput === $passconfirminput) ){
                        $passinput=$this->request->data['password'];
                        //var_dump($passinput);
                        //die();
                        $u['password']=$passinput;

                    //if($this->Users->validates(array('fieldList'=>array('password','password_confirm')))){
                        if($this->Users->save($u))
                        {
                            $this->Flash->success('Password Has been Updated');


                            $this->redirect(array('controller'=>'users','action'=>'login'));
                        }

                    }
                    else{

                        $this->Flash->error('Oppss...Sorry, there seem to be an error.');
                    }
                }
            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
                $this->Flash->error('Token Corrupted,,Please Retry.the reset link work only for once.');
            }
        }

        else{
            $this->redirect('/');
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

    }
 
 
	  
	  
	  
  }