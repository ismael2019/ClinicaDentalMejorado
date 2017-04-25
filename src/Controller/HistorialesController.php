<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Historiales Controller
 *
 * @property \App\Model\Table\HistorialesTable $Historiales
 */
class HistorialesController extends AppController
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
        $historiales = $this->paginate($this->Historiales);

        $this->set(compact('historiales'));
        $this->set('_serialize', ['historiales']);
    }

    /**
     * View method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historiale = $this->Historiales->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('historiale', $historiale);
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historiale = $this->Historiales->newEntity();
        if ($this->request->is('post')) {
            $historiale = $this->Historiales->patchEntity($historiale, $this->request->getData());
            if ($this->Historiales->save($historiale)) {
                $this->Flash->success(__('The historiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historiale could not be saved. Please, try again.'));
        }
        $pacientes = $this->Historiales->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('historiale', 'pacientes'));
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historiale = $this->Historiales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historiale = $this->Historiales->patchEntity($historiale, $this->request->getData());
            if ($this->Historiales->save($historiale)) {
                $this->Flash->success(__('The historiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historiale could not be saved. Please, try again.'));
        }
        $pacientes = $this->Historiales->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('historiale', 'pacientes'));
        $this->set('_serialize', ['historiale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historiale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historiale = $this->Historiales->get($id);
        if ($this->Historiales->delete($historiale)) {
            $this->Flash->success(__('The historiale has been deleted.'));
        } else {
            $this->Flash->error(__('The historiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
