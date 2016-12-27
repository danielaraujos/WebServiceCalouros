<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Apis Controller
 *
 * @property \App\Model\Table\ApisTable $Apis
 */
class ApisController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Apis');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Apis');
		$this->set('subtitle', 'Gerenciar apis');
		
        $apis = $this->Apis->find('all');

        $this->set(compact('apis'));
        $this->set('_serialize', ['apis']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Apis');
		$this->set('subtitle', 'Adicionar api');
		
        $api = $this->Apis->newEntity();
        if ($this->request->is('post')) {
            $api = $this->Apis->patchEntity($api, $this->request->data);
            if ($this->Apis->save($api)) {
                $this->Flash->success(__('api salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar api. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('api'));
        $this->set('_serialize', ['api']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Api id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Apis');
		$this->set('subtitle', 'Editar api');
	
        $api = $this->Apis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $api = $this->Apis->patchEntity($api, $this->request->data);
            if ($this->Apis->save($api)) {
                $this->Flash->success(__('api editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar api. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('api'));
        $this->set('_serialize', ['api']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Api id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $api = $this->Apis->get($id);
        if ($this->Apis->delete($api)) {
            $this->Flash->success(__('api deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar api. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
