<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reporttypes Controller
 *
 * @property \App\Model\Table\ReporttypesTable $Reporttypes
 */
class ReporttypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('reporttypes', $this->paginate($this->Reporttypes));
        $this->set('_serialize', ['reporttypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Reporttype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reporttype = $this->Reporttypes->get($id, [
            'contain' => []
        ]);
        $this->set('reporttype', $reporttype);
        $this->set('_serialize', ['reporttype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reporttype = $this->Reporttypes->newEntity();
        if ($this->request->is('post')) {
            $reporttype = $this->Reporttypes->patchEntity($reporttype, $this->request->data);
            if ($this->Reporttypes->save($reporttype)) {
                $this->Flash->success('The reporttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reporttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reporttype'));
        $this->set('_serialize', ['reporttype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reporttype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reporttype = $this->Reporttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reporttype = $this->Reporttypes->patchEntity($reporttype, $this->request->data);
            if ($this->Reporttypes->save($reporttype)) {
                $this->Flash->success('The reporttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reporttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reporttype'));
        $this->set('_serialize', ['reporttype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reporttype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reporttype = $this->Reporttypes->get($id);
        if ($this->Reporttypes->delete($reporttype)) {
            $this->Flash->success('The reporttype has been deleted.');
        } else {
            $this->Flash->error('The reporttype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
