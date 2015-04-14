<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Leagues Controller
 *
 * @property \App\Model\Table\LeaguesTable $Leagues
 */
class LeaguesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $this->set('leagues', $this->paginate($this->Leagues));
        $this->set('_serialize', ['leagues']);
    }

    /**
     * View method
     *
     * @param string|null $id League id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $league = $this->Leagues->get($id, [
            'contain' => ['Events', 'Tags', 'Teams']
        ]);
        $this->set('league', $league);
        $this->set('_serialize', ['league']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $league = $this->Leagues->newEntity();
        if ($this->request->is('post')) {
            $league = $this->Leagues->patchEntity($league, $this->request->data);
            if ($this->Leagues->save($league)) {
                $this->Flash->success('The league has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The league could not be saved. Please, try again.');
            }
        }
        $events = $this->Leagues->Events->find('list', ['limit' => 200]);
        $tags = $this->Leagues->Tags->find('list', ['limit' => 200]);
        $this->set(compact('league', 'events', 'tags'));
        $this->set('_serialize', ['league']);
    }

    /**
     * Edit method
     *
     * @param string|null $id League id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $league = $this->Leagues->get($id, [
            'contain' => ['Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $league = $this->Leagues->patchEntity($league, $this->request->data);
            if ($this->Leagues->save($league)) {
                $this->Flash->success('The league has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The league could not be saved. Please, try again.');
            }
        }
        $events = $this->Leagues->Events->find('list', ['limit' => 200]);
        $tags = $this->Leagues->Tags->find('list', ['limit' => 200]);
        $this->set(compact('league', 'events', 'tags'));
        $this->set('_serialize', ['league']);
    }

    /**
     * Delete method
     *
     * @param string|null $id League id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $league = $this->Leagues->get($id);
        if ($this->Leagues->delete($league)) {
            $this->Flash->success('The league has been deleted.');
        } else {
            $this->Flash->error('The league could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
