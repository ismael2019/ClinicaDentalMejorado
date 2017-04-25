<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tratamientos Controller
 *
 * @property \App\Model\Table\TratamientosTable $Tratamientos
 */
class TratamientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes']
        ];
        $tratamientos = $this->paginate($this->Tratamientos);

        $this->set(compact('tratamientos'));
        $this->set('_serialize', ['tratamientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tratamiento = $this->Tratamientos->get($id, [
            'contain' => ['Pacientes', 'Cuentas']
        ]);

        $this->set('tratamiento', $tratamiento);
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tratamiento = $this->Tratamientos->newEntity();
        if ($this->request->is('post')) {
            $tratamiento = $this->Tratamientos->patchEntity($tratamiento, $this->request->getData());
            if ($this->Tratamientos->save($tratamiento)) {
                $this->Flash->success(__('The tratamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tratamiento could not be saved. Please, try again.'));
        }
        $pacientes = $this->Tratamientos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('tratamiento', 'pacientes'));
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tratamiento = $this->Tratamientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tratamiento = $this->Tratamientos->patchEntity($tratamiento, $this->request->getData());
            if ($this->Tratamientos->save($tratamiento)) {
                $this->Flash->success(__('The tratamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tratamiento could not be saved. Please, try again.'));
        }
        $pacientes = $this->Tratamientos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('tratamiento', 'pacientes'));
        $this->set('_serialize', ['tratamiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tratamiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tratamiento = $this->Tratamientos->get($id);
        if ($this->Tratamientos->delete($tratamiento)) {
            $this->Flash->success(__('The tratamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The tratamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
