<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Places Controller
 *
 * @property \App\Model\Table\PlacesTable $Places
 */
class PlacesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Places');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Locais');
		$this->set('subtitle', 'Gerenciar locais');
		
        $places = $this->Places->find('all');

        $this->set(compact('places'));
        $this->set('_serialize', ['places']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Locais');
        $this->set('subtitle', 'Adicionar locais');
		
        $place = $this->Places->newEntity();
        if ($this->request->is('post')) {
            $place = $this->Places->patchEntity($place, $this->request->data);
            if ($this->Places->save($place)) {
                $this->Flash->success(__('Local salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar local. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('place'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Place id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('title', 'Locais');
        $this->set('subtitle', 'Editar locais');
	
        $place = $this->Places->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $place = $this->Places->patchEntity($place, $this->request->data);
            if ($this->Places->save($place)) {
                $this->Flash->success(__('Local editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar local. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('place'));
        $this->set('_serialize', ['place']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Place id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $place = $this->Places->get($id);
        if ($this->Places->delete($place)) {
            $this->Flash->success(__('Local deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar local. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
