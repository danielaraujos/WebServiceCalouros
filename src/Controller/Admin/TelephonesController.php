<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Telephones Controller
 *
 * @property \App\Model\Table\TelephonesTable $Telephones
 */
class TelephonesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Telephones');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Telefones Úteis');
		$this->set('subtitle', 'Gerenciar telefones');
		
        $telephones = $this->Telephones->find('all');

        $this->set(compact('telephones'));
        $this->set('_serialize', ['telephones']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Telefones Úteis');
		$this->set('subtitle', 'Adicionar telefone');
		
        $telephone = $this->Telephones->newEntity();
        if ($this->request->is('post')) {
            $telephone = $this->Telephones->patchEntity($telephone, $this->request->data);
            if ($this->Telephones->save($telephone)) {
                $this->Flash->success(__('Telefone salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar telefone. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('telephone'));
        $this->set('_serialize', ['telephone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telephone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Telefones Úteis');
		$this->set('subtitle', 'Editar telefone');
	
        $telephone = $this->Telephones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telephone = $this->Telephones->patchEntity($telephone, $this->request->data);
            if ($this->Telephones->save($telephone)) {
                $this->Flash->success(__('Telefone editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar telefone. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('telephone'));
        $this->set('_serialize', ['telephone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telephone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telephone = $this->Telephones->get($id);
        if ($this->Telephones->delete($telephone)) {
            $this->Flash->success(__('Telefone deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar telefone. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
