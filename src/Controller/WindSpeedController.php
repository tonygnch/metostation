<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WindSpeed Controller
 *
 * @property \App\Model\Table\WindSpeedTable $WindSpeed
 *
 * @method \App\Model\Entity\WindSpeed[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WindSpeedController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $windSpeed = $this->paginate($this->WindSpeed);

        $this->set(compact('windSpeed'));
    }

    /**
     * View method
     *
     * @param string|null $id Wind Speed id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $windSpeed = $this->WindSpeed->get($id, [
            'contain' => []
        ]);

        $this->set('windSpeed', $windSpeed);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $windSpeed = $this->WindSpeed->newEntity();
        if ($this->request->is('post')) {
            $windSpeed = $this->WindSpeed->patchEntity($windSpeed, $this->request->getData());
            if ($this->WindSpeed->save($windSpeed)) {
                $this->Flash->success(__('The wind speed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wind speed could not be saved. Please, try again.'));
        }
        $this->set(compact('windSpeed'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wind Speed id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $windSpeed = $this->WindSpeed->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $windSpeed = $this->WindSpeed->patchEntity($windSpeed, $this->request->getData());
            if ($this->WindSpeed->save($windSpeed)) {
                $this->Flash->success(__('The wind speed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wind speed could not be saved. Please, try again.'));
        }
        $this->set(compact('windSpeed'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wind Speed id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $windSpeed = $this->WindSpeed->get($id);
        if ($this->WindSpeed->delete($windSpeed)) {
            $this->Flash->success(__('The wind speed has been deleted.'));
        } else {
            $this->Flash->error(__('The wind speed could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
