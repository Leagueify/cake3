<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Intervals Controller
 *
 * @property \App\Model\Table\IntervalsTable $Intervals
 */
class IntervalsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('intervals', $this->paginate($this->Intervals));
        $this->set('_serialize', ['intervals']);
    }

    /**
     * View method
     *
     * @param string|null $id Interval id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interval = $this->Intervals->get($id, [
            'contain' => ['Events']
        ]);
        $this->set('interval', $interval);
        $this->set('_serialize', ['interval']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interval = $this->Intervals->newEntity();
        if ($this->request->is('post')) {
            $interval = $this->Intervals->patchEntity($interval, $this->request->data);
            if ($this->Intervals->save($interval)) {
                $this->Flash->success('The interval has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The interval could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interval'));
        $this->set('_serialize', ['interval']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Interval id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interval = $this->Intervals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interval = $this->Intervals->patchEntity($interval, $this->request->data);
            if ($this->Intervals->save($interval)) {
                $this->Flash->success('The interval has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The interval could not be saved. Please, try again.');
            }
        }
        $this->set(compact('interval'));
        $this->set('_serialize', ['interval']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Interval id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interval = $this->Intervals->get($id);
        if ($this->Intervals->delete($interval)) {
            $this->Flash->success('The interval has been deleted.');
        } else {
            $this->Flash->error('The interval could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
