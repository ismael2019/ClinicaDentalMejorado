<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public $paginate = [
       'limit' => 5
    ];
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login']);
    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    public function bienvenido()
    {
        $this->viewBuilder()->Layout('default');
    }
    public function inicio()
    {
        $this->viewBuilder()->Layout('default');
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->correcto(('Se agrego al nuevo usuario:'.'&nbsp'.$user->username.'&nbsp'.'correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->equivocado(('No se pudo agregar al usuario:'.'&nbsp'.$user->username));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->correcto(('Se modifico correctamente al usuario:'.'&nbsp'.$user->username));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->equivocado(('No se pudo modificar al usuario:'.'&nbsp'.$user->username));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->correcto(('El usuario:'.'&nbsp'.$user->username.'&nbsp'.'se elimino correctamente'));
        } else {
            $this->Flash->equivocado(('No se pudo eliminar al usuario.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->correcto(('Inicio de sesion correctamente'));
                return $this->redirect($this->Auth->redirectUrl());
                

            }
            $this->Flash->equivocado(('Correo o contraseña incorrectos! verifique'));
        }
    }

    public function logout()
    {
        $this->Flash->cerrarsesion(('Cerro sesion correctamente'));
        return $this->redirect($this->Auth->logout());
    }

}
