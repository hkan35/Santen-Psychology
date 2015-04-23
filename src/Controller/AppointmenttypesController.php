<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appointmenttypes Controller
 *
 * @property \App\Model\Table\AppointmenttypesTable $Appointmenttypes
 */
class AppointmenttypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('appointmenttypes', $this->paginate($this->Appointmenttypes));
        $this->set('_serialize', ['appointmenttypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Appointmenttype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appointmenttype = $this->Appointmenttypes->get($id, [
            'contain' => []
        ]);
        $this->set('appointmenttype', $appointmenttype);
        $this->set('_serialize', ['appointmenttype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appointmenttype = $this->Appointmenttypes->newEntity();
        if ($this->request->is('post')) {
            $appointmenttype = $this->Appointmenttypes->patchEntity($appointmenttype, $this->request->data);
            if ($this->Appointmenttypes->save($appointmenttype)) {
                $this->Flash->success('The appointmenttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The appointmenttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('appointmenttype'));
        $this->set('_serialize', ['appointmenttype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Appointmenttype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appointmenttype = $this->Appointmenttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointmenttype = $this->Appointmenttypes->patchEntity($appointmenttype, $this->request->data);
            if ($this->Appointmenttypes->save($appointmenttype)) {
                $this->Flash->success('The appointmenttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The appointmenttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('appointmenttype'));
        $this->set('_serialize', ['appointmenttype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointmenttype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appointmenttype = $this->Appointmenttypes->get($id);
        if ($this->Appointmenttypes->delete($appointmenttype)) {
            $this->Flash->success('The appointmenttype has been deleted.');
        } else {
            $this->Flash->error('The appointmenttype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
