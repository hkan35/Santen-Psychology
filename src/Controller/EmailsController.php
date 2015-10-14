<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;
/**
 * Clinics Controller
 *
 * @property \App\Model\Table\ClinicsTable $Clinics
 */
class EmailsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clinics', $this->paginate($this->Clinics));
        $this->set('_serialize', ['clinics']);
    }

    /**
     * View method
     *
     * @param string|null $id Clinic id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clinic = $this->Clinics->get($id, [
            'contain' => ['Referrers']
        ]);
        $this->set('clinic', $clinic);
        $this->set('_serialize', ['clinic']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clinic = $this->Clinics->newEntity();
        if ($this->request->is('post')) {
            $clinic = $this->Clinics->patchEntity($clinic, $this->request->data);
            if ($this->Clinics->save($clinic)) {
                $this->Flash->success('The clinic has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The clinic could not be saved. Please, try again.');
            }
        }
        $this->set(compact('clinic'));
        $this->set('_serialize', ['clinic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clinic id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clinic = $this->Clinics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clinic = $this->Clinics->patchEntity($clinic, $this->request->data);
            if ($this->Clinics->save($clinic)) {
                $this->Flash->success('The clinic has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The clinic could not be saved. Please, try again.');
            }
        }
        $this->set(compact('clinic'));
        $this->set('_serialize', ['clinic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clinic id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clinic = $this->Clinics->get($id);
        if ($this->Clinics->delete($clinic)) {
            $this->Flash->success('The clinic has been deleted.');
        } else {
            $this->Flash->error('The clinic could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function email($id = null)

    {
       
		
		$email = new Email();
		
		$email ->template('default')
		       ->emailFormat('html')
			  ->from(['jyi7@student.monash.edu' => 'My Site'])
			  ->to('jyi7@student.monash.edu')
			  ->subject('Reminder')
			  ->transport('default')
			  ->send();
			  
	
		
		//if ($email->send()){
			//$this->Flash->success('The reminder has been successfully sent');
        //} else {
            //$this->Flash->error('The reminder could not be deleted. Please, try again.');
        //}		
			 //return $this->redirect(['action' => 'index']);
	}
	
}
