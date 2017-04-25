<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Sugerencias Controller
 *
 * @property \App\Model\Table\SugerenciasTable $Sugerencias
 */
class SugerenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }
    public function index()
    {
        $sugerencias = $this->paginate($this->Sugerencias);

        $this->set(compact('sugerencias'));
        $this->set('_serialize', ['sugerencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sugerencia = $this->Sugerencias->get($id, [
            'contain' => []
        ]);

        $this->set('sugerencia', $sugerencia);
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sugerencia = $this->Sugerencias->newEntity();
        if ($this->request->is('post')) {
            $sugerencia = $this->Sugerencias->patchEntity($sugerencia, $this->request->getData());
            if ($this->Sugerencias->save($sugerencia)) {
                $this->Flash->correcto(('Envio correctamente la sugerencia.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->equivocado(('No se envio la sugerencia verifique.'));
        }
        $this->set(compact('sugerencia'));
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sugerencia = $this->Sugerencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sugerencia = $this->Sugerencias->patchEntity($sugerencia, $this->request->getData());
            if ($this->Sugerencias->save($sugerencia)) {
                $this->Flash->correcto(('La sugerencia ha sido modificada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->equivocado(('No se pudo editar la sugerencia.'));
        }
        $this->set(compact('sugerencia'));
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sugerencia = $this->Sugerencias->get($id);
        if ($this->Sugerencias->delete($sugerencia)) {
            $this->Flash->correcto(('Se elimino correctamente la sugerencia.'));
        } else {
            $this->Flash->error(('No se elimino la sugerencia.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
