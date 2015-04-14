<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LeaguesTags Controller
 *
 * @property \App\Model\Table\LeaguesTagsTable $LeaguesTags
 */
class LeaguesTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags', 'Leagues']
        ];
        $this->set('leaguesTags', $this->paginate($this->LeaguesTags));
        $this->set('_serialize', ['leaguesTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Leagues Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leaguesTag = $this->LeaguesTags->get($id, [
            'contain' => ['Tags', 'Leagues']
        ]);
        $this->set('leaguesTag', $leaguesTag);
        $this->set('_serialize', ['leaguesTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leaguesTag = $this->LeaguesTags->newEntity();
        if ($this->request->is('post')) {
            $leaguesTag = $this->LeaguesTags->patchEntity($leaguesTag, $this->request->data);
            if ($this->LeaguesTags->save($leaguesTag)) {
                $this->Flash->success('The leagues tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The leagues tag could not be saved. Please, try again.');
            }
        }
        $tags = $this->LeaguesTags->Tags->find('list', ['limit' => 200]);
        $leagues = $this->LeaguesTags->Leagues->find('list', ['limit' => 200]);
        $this->set(compact('leaguesTag', 'tags', 'leagues'));
        $this->set('_serialize', ['leaguesTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Leagues Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leaguesTag = $this->LeaguesTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaguesTag = $this->LeaguesTags->patchEntity($leaguesTag, $this->request->data);
            if ($this->LeaguesTags->save($leaguesTag)) {
                $this->Flash->success('The leagues tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The leagues tag could not be saved. Please, try again.');
            }
        }
        $tags = $this->LeaguesTags->Tags->find('list', ['limit' => 200]);
        $leagues = $this->LeaguesTags->Leagues->find('list', ['limit' => 200]);
        $this->set(compact('leaguesTag', 'tags', 'leagues'));
        $this->set('_serialize', ['leaguesTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Leagues Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leaguesTag = $this->LeaguesTags->get($id);
        if ($this->LeaguesTags->delete($leaguesTag)) {
            $this->Flash->success('The leagues tag has been deleted.');
        } else {
            $this->Flash->error('The leagues tag could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
