<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Transports Controller
 *
 * @property \App\Model\Table\TransportsTable $Transports
 */
class TransportsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Transports');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Transports');
		$this->set('subtitle', 'Gerenciar transports');
		
        $transports = $this->Transports->find('all');

        $this->set(compact('transports'));
        $this->set('_serialize', ['transports']);
    }

    /**
     * View method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transport = $this->Transports->get($id, [
            'contain' => []
        ]);

        $this->set('transport', $transport);
        $this->set('_serialize', ['transport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Transports');
		$this->set('subtitle', 'Adicionar transport');
		
        $transport = $this->Transports->newEntity();
        if ($this->request->is('post')) {
            $transport = $this->Transports->patchEntity($transport, $this->request->data);
            if ($this->Transports->save($transport)) {
                $this->Flash->success(__('transport salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar transport. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('transport'));
        $this->set('_serialize', ['transport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Transports');
		$this->set('subtitle', 'Editar transport');
	
        $transport = $this->Transports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transport = $this->Transports->patchEntity($transport, $this->request->data);
            if ($this->Transports->save($transport)) {
                $this->Flash->success(__('transport editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar transport. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('transport'));
        $this->set('_serialize', ['transport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transport = $this->Transports->get($id);
        if ($this->Transports->delete($transport)) {
            $this->Flash->success(__('transport deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar transport. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
