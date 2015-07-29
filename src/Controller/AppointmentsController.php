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

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Appointmenttypes', 'Invoices']
        ];
        $this->set('appointments', $this->paginate($this->Appointments));
        $this->set('_serialize', ['appointments']);
    }

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
            'contain' => ['Users', 'Appointmenttypes', 'Invoices']
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
        $users = $this->Appointments->Users->find('list', ['limit' => 200]);
        $appointmenttypes = $this->Appointments->Appointmenttypes->find('list', ['limit' => 200]);
        $invoices = $this->Appointments->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('appointment', 'users', 'appointmenttypes', 'invoices'));
        $this->set('_serialize', ['appointment']);
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
        $users = $this->Appointments->Users->find('list', ['limit' => 200]);
        $appointmenttypes = $this->Appointments->Appointmenttypes->find('list', ['limit' => 200]);
        $invoices = $this->Appointments->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('appointment', 'users', 'appointmenttypes', 'invoices'));
        $this->set('_serialize', ['appointment']);
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
