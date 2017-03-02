<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Managements Controller
 *
 * @property \App\Model\Table\ManagementsTable $Managements
 */
class ManagementsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Managements');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Gestões');
		$this->set('subtitle', 'Gerenciar gestão');
		
        $this->paginate = [
            'contain' => ['CategoryManagements']
        ];
        //$managements = $this->Managements->find('all');
        $managements = $this->paginate($this->Managements);

        $this->set(compact('managements'));
        $this->set('_serialize', ['managements']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Gestões');
		$this->set('subtitle', 'Adicionar gestão');
		
        $management = $this->Managements->newEntity();
        if ($this->request->is('post')) {
            $management = $this->Managements->patchEntity($management, $this->request->data);
            if ($this->Managements->save($management)) {
                $this->Flash->success(__('Evento da gestão salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar Evento da gestão. Por favor, tente novamente.'));
            }
        }
        $categoryManagements = $this->Managements->CategoryManagements->find('list', ['limit' => 200]);
        $this->set(compact('management', 'categoryManagements'));
        $this->set('_serialize', ['management']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Gestões');
		$this->set('subtitle', 'Editar gestão');
	
        $management = $this->Managements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $management = $this->Managements->patchEntity($management, $this->request->data);
            if ($this->Managements->save($management)) {
                $this->Flash->success(__('Evento da gestão editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar Evento da gestão. Por favor, tente novamente.'));
            }
        }
        $categoryManagements = $this->Managements->CategoryManagements->find('list', ['limit' => 200]);
        $this->set(compact('management', 'categoryManagements'));
        $this->set('_serialize', ['management']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $management = $this->Managements->get($id);
        if ($this->Managements->delete($management)) {
            $this->Flash->success(__('Evento da gestão deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar Evento da gestão. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
