<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * CategoryManagements Controller
 *
 * @property \App\Model\Table\CategoryManagementsTable $CategoryManagements
 */
class CategoryManagementsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.CategoryManagements');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'CategoryManagements');
		$this->set('subtitle', 'Gerenciar categoryManagements');
		
        $categoryManagements = $this->CategoryManagements->find('all');

        $this->set(compact('categoryManagements'));
        $this->set('_serialize', ['categoryManagements']);
    }

    /**
     * View method
     *
     * @param string|null $id Category Management id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryManagement = $this->CategoryManagements->get($id, [
            'contain' => ['Managements']
        ]);

        $this->set('categoryManagement', $categoryManagement);
        $this->set('_serialize', ['categoryManagement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'CategoryManagements');
		$this->set('subtitle', 'Adicionar categoryManagement');
		
        $categoryManagement = $this->CategoryManagements->newEntity();
        if ($this->request->is('post')) {
            $categoryManagement = $this->CategoryManagements->patchEntity($categoryManagement, $this->request->data);
            if ($this->CategoryManagements->save($categoryManagement)) {
                $this->Flash->success(__('category management salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar category management. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('categoryManagement'));
        $this->set('_serialize', ['categoryManagement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Management id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'CategoryManagements');
		$this->set('subtitle', 'Editar categoryManagement');
	
        $categoryManagement = $this->CategoryManagements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryManagement = $this->CategoryManagements->patchEntity($categoryManagement, $this->request->data);
            if ($this->CategoryManagements->save($categoryManagement)) {
                $this->Flash->success(__('category management editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar category management. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('categoryManagement'));
        $this->set('_serialize', ['categoryManagement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Management id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryManagement = $this->CategoryManagements->get($id);
        if ($this->CategoryManagements->delete($categoryManagement)) {
            $this->Flash->success(__('category management deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar category management. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
