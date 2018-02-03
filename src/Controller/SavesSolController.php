<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SavesSol Controller
 *
 * @property \App\Model\Table\SavesSolTable $SavesSol
 *
 * @method \App\Model\Entity\SavesSol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SavesSolController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $savesSol = $this->paginate($this->SavesSol);

        $this->set(compact('savesSol'));
    }

    /**
     * View method
     *
     * @param string|null $id Saves Sol id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $savesSol = $this->SavesSol->get($id, [
            'contain' => []
        ]);

        $this->set('savesSol', $savesSol);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $savesSol = $this->SavesSol->newEntity();
        if ($this->request->is('post')) {
            $savesSol = $this->SavesSol->patchEntity($savesSol, $this->request->getData());
            if ($this->SavesSol->save($savesSol)) {
                $this->Flash->success(__('The saves sol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saves sol could not be saved. Please, try again.'));
        }
        $this->set(compact('savesSol'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Saves Sol id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $savesSol = $this->SavesSol->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $savesSol = $this->SavesSol->patchEntity($savesSol, $this->request->getData());
            if ($this->SavesSol->save($savesSol)) {
                $this->Flash->success(__('The saves sol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saves sol could not be saved. Please, try again.'));
        }
        $this->set(compact('savesSol'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Saves Sol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $savesSol = $this->SavesSol->get($id);
        if ($this->SavesSol->delete($savesSol)) {
            $this->Flash->success(__('The saves sol has been deleted.'));
        } else {
            $this->Flash->error(__('The saves sol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
