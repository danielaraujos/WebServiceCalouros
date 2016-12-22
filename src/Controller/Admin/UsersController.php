<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Users');
    }

    public function login()
    {
        $this->set('title', 'Painel Administrativo');
        $this->set('subtitle', '');
        if($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else {
                $this->Flash->error( 'Usuário ou senha inválidos!', ['key' => 'auth']);
            }
        }
    }

    public function logout()
    {
        $this->Flash->success(
            __('Você saiu do sistema!'),
            [
                'key' => 'auth'
            ]
        );
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Usuários');
		$this->set('subtitle', 'Gerenciar Usuário');
		
        $users = $this->Users->find('all');

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
    public function perfil($id = null)
    {
        $this->set('title', 'Perfil');
        $this->set('subtitle', 'Editar Perfil');

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
		$this->set('title', 'Usuários');
		$this->set('subtitle', 'Adicionar Usuário');
		
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar user. Por favor, tente novamente.'));
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
		$this->set('title', 'Usuários');
		$this->set('subtitle', 'Editar Usuário');
	
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('user editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar user. Por favor, tente novamente.'));
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
            $this->Flash->success(__('user deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar user. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
