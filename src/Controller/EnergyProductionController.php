<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EnergyProduction Controller
 *
 * @property \App\Model\Table\EnergyProductionTable $EnergyProduction
 *
 * @method \App\Model\Entity\EnergyProduction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnergyProductionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $energyProduction = $this->paginate($this->EnergyProduction);

        $this->set(compact('energyProduction'));
    }

    /**
     * View method
     *
     * @param string|null $id Energy Production id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $energyProduction = $this->EnergyProduction->get($id, [
            'contain' => []
        ]);

        $this->set('energyProduction', $energyProduction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $energyProduction = $this->EnergyProduction->newEntity();
        if ($this->request->is('post')) {
            $energyProduction = $this->EnergyProduction->patchEntity($energyProduction, $this->request->getData());
            if ($this->EnergyProduction->save($energyProduction)) {
                $this->Flash->success(__('The energy production has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The energy production could not be saved. Please, try again.'));
        }
        $this->set(compact('energyProduction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Energy Production id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $energyProduction = $this->EnergyProduction->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $energyProduction = $this->EnergyProduction->patchEntity($energyProduction, $this->request->getData());
            if ($this->EnergyProduction->save($energyProduction)) {
                $this->Flash->success(__('The energy production has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The energy production could not be saved. Please, try again.'));
        }
        $this->set(compact('energyProduction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Energy Production id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $energyProduction = $this->EnergyProduction->get($id);
        if ($this->EnergyProduction->delete($energyProduction)) {
            $this->Flash->success(__('The energy production has been deleted.'));
        } else {
            $this->Flash->error(__('The energy production could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
