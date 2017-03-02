<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Typs Controller
 *
 * @property \App\Model\Table\TypsTable $Typs
 */
class TypsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Typs');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Dicas');
		$this->set('subtitle', 'Gerenciar dicas');
		
        $this->paginate = [
            'contain' => ['CategoryTyps']
        ];
        //$typs = $this->Typs->find('all');
        $typs = $this->paginate($this->Typs);

        $this->set(compact('typs'));
        $this->set('_serialize', ['typs']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Dicas');
        $this->set('subtitle', 'Adicionar dicas');
		
        $typ = $this->Typs->newEntity();
        if ($this->request->is('post')) {
            $typ = $this->Typs->patchEntity($typ, $this->request->data);
            if ($this->Typs->save($typ)) {
                $this->Flash->success(__('Dicas salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar dica. Por favor, tente novamente.'));
            }
        }
        $categoryTyps = $this->Typs->CategoryTyps->find('list', ['limit' => 200]);
        $this->set(compact('typ', 'categoryTyps'));
        $this->set('_serialize', ['typ']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typ id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('title', 'Dicas');
        $this->set('subtitle', 'Editar dicas');
	
        $typ = $this->Typs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typ = $this->Typs->patchEntity($typ, $this->request->data);
            if ($this->Typs->save($typ)) {
                $this->Flash->success(__('Dicas editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar dica. Por favor, tente novamente.'));
            }
        }
        $categoryTyps = $this->Typs->CategoryTyps->find('list', ['limit' => 200]);
        $this->set(compact('typ', 'categoryTyps'));
        $this->set('_serialize', ['typ']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typ id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typ = $this->Typs->get($id);
        if ($this->Typs->delete($typ)) {
            $this->Flash->success(__('Dicas deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar dica. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
