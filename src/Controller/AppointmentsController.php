<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appointments Controller
 *
 * @property \App\Model\Table\AppointmentsTable $Appointments
 */
class AppointmentsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
	
 public function index()
    {
		
		
		         $this->paginate = [
            'contain' => ['Clients','Appointmenttypes']
        ];
        $this->set('appointments', $this->paginate($this->Appointments));
        $this->set('_serialize', ['appointments']);

		
		
		$userRole = $this->Auth->user('role');
		if ( $userRole === 'admin'){
			   $this->set('appointments', $this->paginate($this->Appointments));
        $this->set('_serialize', ['appointments']);
		}
		else{
		$userFilter = $this->Auth->user('client_id');
		    $query = $this->Appointments->find()->where(['client_id' => $userFilter]);
		$this->set('appointments', $this->paginate($query));}
 
 
		
		
		
    }
	
	
	
public function isAuthorized($usertest)
{
    // All registered users can add articles
    if ($this->request->action === 'add') {
        return true;
    }

	    // All registered users can add articles
    if ($this->request->action === 'index') {
        return true;
    }
	
	  // All other actions require an id.
    if (empty($this->request->params['pass'][0])) {
        return false;
    }
	
    // The owner of an article can edit and delete it
	        
    if (in_array($this->request->action, ['edit','view',	'delete'])) {
        $appointmentId = (int)$this->request->params['pass'][0];
        if ($this->Appointments->isOwnedBy($appointmentId, $usertest['client_id']) or $usertest['role'] === 'Admin')  {
            return true;
        }
    }

    return parent::isAuthorized($usertest);
}



	
   

    /**
     * Index method
     *
     * @return void
     */


    /**
     * View method
     *
     * @param string|null $id Appointment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
     public function view($id = null)
    {
        $appointment = $this->Appointments->get($id, [
            'contain' => ['Clients', 'Appointmenttypes']
        ]);
        $this->set('appointment', $appointment);
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appointment = $this->Appointments->newEntity();
 

        if ($this->request->is('post')) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->data);
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success('The appointment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The appointment could not be saved. Please, try again.');
            }
        }
        $this->set(compact('appointment'));
        $this->set('_serialize', ['appointment']);



// Just added the categories list to be able to choose
        // one category for an article
        $clients = $this->Appointments->Clients->find('list');
        $this->set(compact('clients'));
        $this->set('_serialize', ['clients']);




// Just added the categories list to be able to choose
        // one category for an article
        $appointmenttypes = $this->Appointments->Appointmenttypes->find('list');
        $this->set(compact('appointmenttypes'));
        $this->set('_serialize', ['appointmenttypes']);


    }

    /**
     * Edit method
     *
     * @param string|null $id Appointment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appointment = $this->Appointments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->data);
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success('The appointment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The appointment could not be saved. Please, try again.');
            }
        }
        $this->set(compact('appointment'));
        $this->set('_serialize', ['appointment']);
		
		// Just added the categories list to be able to choose
        // one category for an article
        $clients = $this->Appointments->Clients->find('list');
        $this->set(compact('clients'));
        $this->set('_serialize', ['clients']);




// Just added the categories list to be able to choose
        // one category for an article
        $appointmenttypes = $this->Appointments->Appointmenttypes->find('list');
        $this->set(compact('appointmenttypes'));
        $this->set('_serialize', ['appointmenttypes']);

		
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appointment = $this->Appointments->get($id);
        if ($this->Appointments->delete($appointment)) {
            $this->Flash->success('The appointment has been deleted.');
        } else {
            $this->Flash->error('The appointment could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
