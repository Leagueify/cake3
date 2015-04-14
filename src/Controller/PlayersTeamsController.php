<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlayersTeams Controller
 *
 * @property \App\Model\Table\PlayersTeamsTable $PlayersTeams
 */
class PlayersTeamsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Players', 'Teams']
        ];
        $this->set('playersTeams', $this->paginate($this->PlayersTeams));
        $this->set('_serialize', ['playersTeams']);
    }

    /**
     * View method
     *
     * @param string|null $id Players Team id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playersTeam = $this->PlayersTeams->get($id, [
            'contain' => ['Players', 'Teams']
        ]);
        $this->set('playersTeam', $playersTeam);
        $this->set('_serialize', ['playersTeam']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playersTeam = $this->PlayersTeams->newEntity();
        if ($this->request->is('post')) {
            $playersTeam = $this->PlayersTeams->patchEntity($playersTeam, $this->request->data);
            if ($this->PlayersTeams->save($playersTeam)) {
                $this->Flash->success('The players team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The players team could not be saved. Please, try again.');
            }
        }
        $players = $this->PlayersTeams->Players->find('list', ['limit' => 200]);
        $teams = $this->PlayersTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('playersTeam', 'players', 'teams'));
        $this->set('_serialize', ['playersTeam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Players Team id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playersTeam = $this->PlayersTeams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playersTeam = $this->PlayersTeams->patchEntity($playersTeam, $this->request->data);
            if ($this->PlayersTeams->save($playersTeam)) {
                $this->Flash->success('The players team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The players team could not be saved. Please, try again.');
            }
        }
        $players = $this->PlayersTeams->Players->find('list', ['limit' => 200]);
        $teams = $this->PlayersTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('playersTeam', 'players', 'teams'));
        $this->set('_serialize', ['playersTeam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Players Team id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playersTeam = $this->PlayersTeams->get($id);
        if ($this->PlayersTeams->delete($playersTeam)) {
            $this->Flash->success('The players team has been deleted.');
        } else {
            $this->Flash->error('The players team could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
