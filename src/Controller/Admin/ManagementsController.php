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
		$this->set('title', 'Managements');
		$this->set('subtitle', 'Gerenciar managements');
		
        $this->paginate = [
            'contain' => ['CategoryManagements']
        ];
        $managements = $this->Managements->find('all');

        $this->set(compact('managements'));
        $this->set('_serialize', ['managements']);
    }

    /**
     * View method
     *
     * @param string|null $id Management id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $management = $this->Managements->get($id, [
            'contain' => ['CategoryManagements']
        ]);

        $this->set('management', $management);
        $this->set('_serialize', ['management']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Managements');
		$this->set('subtitle', 'Adicionar management');
		
        $management = $this->Managements->newEntity();
        if ($this->request->is('post')) {
            $management = $this->Managements->patchEntity($management, $this->request->data);
            if ($this->Managements->save($management)) {
                $this->Flash->success(__('management salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar management. Por favor, tente novamente.'));
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
		$this->set('title', 'Managements');
		$this->set('subtitle', 'Editar management');
	
        $management = $this->Managements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $management = $this->Managements->patchEntity($management, $this->request->data);
            if ($this->Managements->save($management)) {
                $this->Flash->success(__('management editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar management. Por favor, tente novamente.'));
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
            $this->Flash->success(__('management deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar management. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
