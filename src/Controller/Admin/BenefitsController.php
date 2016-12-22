<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Benefits Controller
 *
 * @property \App\Model\Table\BenefitsTable $Benefits
 */
class BenefitsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Benefits');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Benefícios');
		$this->set('subtitle', 'Gerenciar benefícios');
		
        $benefits = $this->Benefits->find('all');

        $this->set(compact('benefits'));
        $this->set('_serialize', ['benefits']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Benefícios');
		$this->set('subtitle', 'Adicionar benefício');
		
        $benefit = $this->Benefits->newEntity();
        if ($this->request->is('post')) {
            $benefit = $this->Benefits->patchEntity($benefit, $this->request->data);
            if ($this->Benefits->save($benefit)) {
                $this->Flash->success(__('Benefícios salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o beneficio. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('benefit'));
        $this->set('_serialize', ['benefit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Benefit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Benefícios');
		$this->set('subtitle', 'Editar benefício');
	
        $benefit = $this->Benefits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $benefit = $this->Benefits->patchEntity($benefit, $this->request->data);
            if ($this->Benefits->save($benefit)) {
                $this->Flash->success(__('Benefício editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar benefit. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('benefit'));
        $this->set('_serialize', ['benefit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Benefit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $benefit = $this->Benefits->get($id);
        if ($this->Benefits->delete($benefit)) {
            $this->Flash->success(__('Benefício deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar benefit. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
