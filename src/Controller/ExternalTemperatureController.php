<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExternalTemperature Controller
 *
 * @property \App\Model\Table\ExternalTemperatureTable $ExternalTemperature
 *
 * @method \App\Model\Entity\ExternalTemperature[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExternalTemperatureController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $externalTemperature = $this->paginate($this->ExternalTemperature);

        $this->set(compact('externalTemperature'));
    }

    /**
     * View method
     *
     * @param string|null $id External Temperature id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $externalTemperature = $this->ExternalTemperature->get($id, [
            'contain' => []
        ]);

        $this->set('externalTemperature', $externalTemperature);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $externalTemperature = $this->ExternalTemperature->newEntity();
        if ($this->request->is('post')) {
            $externalTemperature = $this->ExternalTemperature->patchEntity($externalTemperature, $this->request->getData());
            if ($this->ExternalTemperature->save($externalTemperature)) {
                $this->Flash->success(__('The external temperature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The external temperature could not be saved. Please, try again.'));
        }
        $this->set(compact('externalTemperature'));
    }

    /**
     * Edit method
     *
     * @param string|null $id External Temperature id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $externalTemperature = $this->ExternalTemperature->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $externalTemperature = $this->ExternalTemperature->patchEntity($externalTemperature, $this->request->getData());
            if ($this->ExternalTemperature->save($externalTemperature)) {
                $this->Flash->success(__('The external temperature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The external temperature could not be saved. Please, try again.'));
        }
        $this->set(compact('externalTemperature'));
    }

    /**
     * Delete method
     *
     * @param string|null $id External Temperature id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $externalTemperature = $this->ExternalTemperature->get($id);
        if ($this->ExternalTemperature->delete($externalTemperature)) {
            $this->Flash->success(__('The external temperature has been deleted.'));
        } else {
            $this->Flash->error(__('The external temperature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
