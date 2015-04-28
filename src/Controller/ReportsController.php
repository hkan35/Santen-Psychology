<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reports Controller
 *
 * @property \App\Model\Table\ReportsTable $Reports
 */
class ReportsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'ReportTypes']
        ];
        $this->set('reports', $this->paginate($this->Reports));
        $this->set('_serialize', ['reports']);
    }

    /**
     * View method
     *
     * @param string|null $id Report id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $report = $this->Reports->get($id, [
            'contain' => ['Clients', 'ReportTypes']
        ]);
        $this->set('report', $report);
        $this->set('_serialize', ['report']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $report = $this->Reports->newEntity();
        if ($this->request->is('post')) {
            $report = $this->Reports->patchEntity($report, $this->request->data);
            if ($this->Reports->save($report)) {
                $this->Flash->success('The report has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The report could not be saved. Please, try again.');
            }
        }
        $clients = $this->Reports->Clients->find('list', ['limit' => 200]);
        $reportTypes = $this->Reports->ReportTypes->find('list', ['limit' => 200]);
        $this->set(compact('report', 'clients', 'reportTypes'));
        $this->set('_serialize', ['report']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $report = $this->Reports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $report = $this->Reports->patchEntity($report, $this->request->data);
            if ($this->Reports->save($report)) {
                $this->Flash->success('The report has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The report could not be saved. Please, try again.');
            }
        }
        $clients = $this->Reports->Clients->find('list', ['limit' => 200]);
        $reportTypes = $this->Reports->ReportTypes->find('list', ['limit' => 200]);
        $this->set(compact('report', 'clients', 'reportTypes'));
        $this->set('_serialize', ['report']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $report = $this->Reports->get($id);
        if ($this->Reports->delete($report)) {
            $this->Flash->success('The report has been deleted.');
        } else {
            $this->Flash->error('The report could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
