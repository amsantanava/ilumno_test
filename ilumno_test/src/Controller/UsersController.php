<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Before filter callback.
     *
     * @param \Cake\Event\Event $event The beforeFilter event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeFilter(Event $event)
    {
        if($this->request->params['action'] != 'login'){
            $session = $this->request->session();
            $email_loged = $session->read('user_loged');
            if(is_null($email_loged) || empty($email_loged)){
                return $this->redirect(['action' => 'login']);
            }
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
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
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido agregado con éxito.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No fue posible agregar el usuario.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido actualizado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No fue posible guardar los cambios.'));
            }
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
            $this->Flash->success(__('Usuario eliminado.'));
        } else {
            $this->Flash->error(__('No fue posible eliminar el usuario.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login method
     *
     * @return \Cake\Network\Response|null Redirects to index.
     */
    public function login()
    {
        if($this->request->is('post')){
            $email = $this->request->data('email');
            $password = $this->request->data('password');
            if(empty($email) || empty($password)){
                $this->Flash->error("Los campos son requeridos");
                return $this->redirect($this->referer());
            }
            if($this->Users->validateUser($email, $password)){
                $session =  $this->request->session();
                $session->write('user_loged', $email);
                $this->Flash->success('Bienvenido al sistema');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Usuario y/o contraseña no válidos');
            }
        }
    }

    /**
     * Logout method
     *
     * @return \Cake\Network\Response|null Redirects to index.
     */
    public function logout()
    {
        $session =  $this->request->session();
        $session->delete('user_loged');
        return $this->redirect(['action' => 'login']);
    }
}
