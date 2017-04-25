<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recetas Controller
 *
 * @property \App\Model\Table\RecetasTable $Recetas
 */
class RecetasController extends AppController
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
        $recetas = $this->paginate($this->Recetas);

        $this->set(compact('recetas'));
        $this->set('_serialize', ['recetas']);
    }

    /**
     * View method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receta = $this->Recetas->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('receta', $receta);
        $this->set('_serialize', ['receta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receta = $this->Recetas->newEntity();
        if ($this->request->is('post')) {
            $receta = $this->Recetas->patchEntity($receta, $this->request->getData());
            if ($this->Recetas->save($receta)) {
                $this->Flash->success(__('The receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receta could not be saved. Please, try again.'));
        }
        $pacientes = $this->Recetas->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('receta', 'pacientes'));
        $this->set('_serialize', ['receta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receta = $this->Recetas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receta = $this->Recetas->patchEntity($receta, $this->request->getData());
            if ($this->Recetas->save($receta)) {
                $this->Flash->success(__('The receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receta could not be saved. Please, try again.'));
        }
        $pacientes = $this->Recetas->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('receta', 'pacientes'));
        $this->set('_serialize', ['receta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receta = $this->Recetas->get($id);
        if ($this->Recetas->delete($receta)) {
            $this->Flash->success(__('The receta has been deleted.'));
        } else {
            $this->Flash->error(__('The receta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
