<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 */
class ClientsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clients', $this->paginate($this->Clients));
        $this->set('_serialize', ['clients']);
    }

	public function isAuthorized($user)
{
  

    // The owner of an article can edit and delete it
	        
    if (in_array($this->request->action, ['index', 'edit', 'delete', 'add'])) {

        if ($user['role'] === 'Admin')  {
            return true;
        }
    }

    return parent::isAuthorized($user);
}



    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);
        $this->set('client', $client);
        $this->set('_serialize', ['client']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->data);
            if ($this->Clients->save($client)) {
                $this->Flash->success('The client has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The client could not be saved. Please, try again.');
            }
        }
        $this->set(compact('client'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->data);
            if ($this->Clients->save($client)) {
                $this->Flash->success('The client has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The client could not be saved. Please, try again.');
            }
        }
        $this->set(compact('client'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success('The client has been deleted.');
        } else {
            $this->Flash->error('The client could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
