<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * CategoryTyps Controller
 *
 * @property \App\Model\Table\CategoryTypsTable $CategoryTyps
 */
class CategoryTypsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.CategoryTyps');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'CategoryTyps');
		$this->set('subtitle', 'Gerenciar categoryTyps');
		
        $categoryTyps = $this->CategoryTyps->find('all');

        $this->set(compact('categoryTyps'));
        $this->set('_serialize', ['categoryTyps']);
    }

    /**
     * View method
     *
     * @param string|null $id Category Typ id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryTyp = $this->CategoryTyps->get($id, [
            'contain' => []
        ]);

        $this->set('categoryTyp', $categoryTyp);
        $this->set('_serialize', ['categoryTyp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'CategoryTyps');
		$this->set('subtitle', 'Adicionar categoryTyp');
		
        $categoryTyp = $this->CategoryTyps->newEntity();
        if ($this->request->is('post')) {
            $categoryTyp = $this->CategoryTyps->patchEntity($categoryTyp, $this->request->data);
            if ($this->CategoryTyps->save($categoryTyp)) {
                $this->Flash->success(__('category typ salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar category typ. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('categoryTyp'));
        $this->set('_serialize', ['categoryTyp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Typ id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'CategoryTyps');
		$this->set('subtitle', 'Editar categoryTyp');
	
        $categoryTyp = $this->CategoryTyps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryTyp = $this->CategoryTyps->patchEntity($categoryTyp, $this->request->data);
            if ($this->CategoryTyps->save($categoryTyp)) {
                $this->Flash->success(__('category typ editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar category typ. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('categoryTyp'));
        $this->set('_serialize', ['categoryTyp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Typ id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryTyp = $this->CategoryTyps->get($id);
        if ($this->CategoryTyps->delete($categoryTyp)) {
            $this->Flash->success(__('category typ deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar category typ. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
