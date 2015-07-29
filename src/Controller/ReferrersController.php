<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Referrers Controller
 *
 * @property \App\Model\Table\ReferrersTable $Referrers
 */
class ReferrersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('referrers', $this->paginate($this->Referrers));
        $this->set('_serialize', ['referrers']);
    }

    /**
     * View method
     *
     * @param string|null $id Referrer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referrer = $this->Referrers->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('referrer', $referrer);
        $this->set('_serialize', ['referrer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referrer = $this->Referrers->newEntity();
        if ($this->request->is('post')) {
            $referrer = $this->Referrers->patchEntity($referrer, $this->request->data);
            if ($this->Referrers->save($referrer)) {
                $this->Flash->success('The referrer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The referrer could not be saved. Please, try again.');
            }
        }
        $users = $this->Referrers->Users->find('list', ['limit' => 200]);
        $this->set(compact('referrer', 'users'));
        $this->set('_serialize', ['referrer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Referrer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referrer = $this->Referrers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referrer = $this->Referrers->patchEntity($referrer, $this->request->data);
            if ($this->Referrers->save($referrer)) {
                $this->Flash->success('The referrer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The referrer could not be saved. Please, try again.');
            }
        }
        $users = $this->Referrers->Users->find('list', ['limit' => 200]);
        $this->set(compact('referrer', 'users'));
        $this->set('_serialize', ['referrer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Referrer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referrer = $this->Referrers->get($id);
        if ($this->Referrers->delete($referrer)) {
            $this->Flash->success('The referrer has been deleted.');
        } else {
            $this->Flash->error('The referrer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
