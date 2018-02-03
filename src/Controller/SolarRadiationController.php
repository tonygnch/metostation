<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolarRadiation Controller
 *
 * @property \App\Model\Table\SolarRadiationTable $SolarRadiation
 *
 * @method \App\Model\Entity\SolarRadiation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolarRadiationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $solarRadiation = $this->paginate($this->SolarRadiation);

        $this->set(compact('solarRadiation'));
    }

    /**
     * View method
     *
     * @param string|null $id Solar Radiation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solarRadiation = $this->SolarRadiation->get($id, [
            'contain' => []
        ]);

        $this->set('solarRadiation', $solarRadiation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solarRadiation = $this->SolarRadiation->newEntity();
        if ($this->request->is('post')) {
            $solarRadiation = $this->SolarRadiation->patchEntity($solarRadiation, $this->request->getData());
            if ($this->SolarRadiation->save($solarRadiation)) {
                $this->Flash->success(__('The solar radiation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solar radiation could not be saved. Please, try again.'));
        }
        $this->set(compact('solarRadiation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solar Radiation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solarRadiation = $this->SolarRadiation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solarRadiation = $this->SolarRadiation->patchEntity($solarRadiation, $this->request->getData());
            if ($this->SolarRadiation->save($solarRadiation)) {
                $this->Flash->success(__('The solar radiation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solar radiation could not be saved. Please, try again.'));
        }
        $this->set(compact('solarRadiation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solar Radiation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solarRadiation = $this->SolarRadiation->get($id);
        if ($this->SolarRadiation->delete($solarRadiation)) {
            $this->Flash->success(__('The solar radiation has been deleted.'));
        } else {
            $this->Flash->error(__('The solar radiation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
