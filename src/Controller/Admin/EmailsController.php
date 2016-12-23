<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Emails Controller
 *
 * @property \App\Model\Table\EmailsTable $Emails
 */
class EmailsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Emails');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Emails Institucionais');
		$this->set('subtitle', 'Gerenciar emails');
		
        $emails = $this->Emails->find('all');

        $this->set(compact('emails'));
        $this->set('_serialize', ['emails']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Emails Institucionais');
		$this->set('subtitle', 'Adicionar email');
		
        $email = $this->Emails->newEntity();
        if ($this->request->is('post')) {
            $email = $this->Emails->patchEntity($email, $this->request->data);
            if ($this->Emails->save($email)) {
                $this->Flash->success(__('email salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar email. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('email'));
        $this->set('_serialize', ['email']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Emails Institucionais');
		$this->set('subtitle', 'Editar email');
	
        $email = $this->Emails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $email = $this->Emails->patchEntity($email, $this->request->data);
            if ($this->Emails->save($email)) {
                $this->Flash->success(__('email editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar email. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('email'));
        $this->set('_serialize', ['email']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $email = $this->Emails->get($id);
        if ($this->Emails->delete($email)) {
            $this->Flash->success(__('email deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar email. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}