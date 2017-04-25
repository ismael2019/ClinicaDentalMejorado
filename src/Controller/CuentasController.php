<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuentas Controller
 *
 * @property \App\Model\Table\CuentasTable $Cuentas
 */
class CuentasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tratamientos']
        ];
        $cuentas = $this->paginate($this->Cuentas);

        $this->set(compact('cuentas'));
        $this->set('_serialize', ['cuentas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cuenta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cuenta = $this->Cuentas->get($id, [
            'contain' => ['Tratamientos']
        ]);

        $this->set('cuenta', $cuenta);
        $this->set('_serialize', ['cuenta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cuenta = $this->Cuentas->newEntity();
        if ($this->request->is('post')) {
            $cuenta = $this->Cuentas->patchEntity($cuenta, $this->request->getData());
            if ($this->Cuentas->save($cuenta)) {
                $this->Flash->success(__('The cuenta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cuenta could not be saved. Please, try again.'));
        }
        $tratamientos = $this->Cuentas->Tratamientos->find('list', ['limit' => 200]);
        $this->set(compact('cuenta', 'tratamientos'));
        $this->set('_serialize', ['cuenta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cuenta id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cuenta = $this->Cuentas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cuenta = $this->Cuentas->patchEntity($cuenta, $this->request->getData());
            if ($this->Cuentas->save($cuenta)) {
                $this->Flash->success(__('The cuenta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cuenta could not be saved. Please, try again.'));
        }
        $tratamientos = $this->Cuentas->Tratamientos->find('list', ['limit' => 200]);
        $this->set(compact('cuenta', 'tratamientos'));
        $this->set('_serialize', ['cuenta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cuenta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cuenta = $this->Cuentas->get($id);
        if ($this->Cuentas->delete($cuenta)) {
            $this->Flash->success(__('The cuenta has been deleted.'));
        } else {
            $this->Flash->error(__('The cuenta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
