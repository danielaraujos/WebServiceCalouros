<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Buildings Controller
 *
 * @property \App\Model\Table\BuildingsTable $Buildings
 */
class BuildingsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Buildings');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Edifícios');
		$this->set('subtitle', 'Gerenciar edifícios');
		
        $buildings = $this->Buildings->find('all');

        $this->set(compact('buildings'));
        $this->set('_serialize', ['buildings']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Edifícios');
		$this->set('subtitle', 'Adicionar edifício');
		
        $building = $this->Buildings->newEntity();
        if ($this->request->is('post')) {
            $building = $this->Buildings->patchEntity($building, $this->request->data);
            if ($this->Buildings->save($building)) {
                $this->Flash->success(__('Edifício salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar building. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('building'));
        $this->set('_serialize', ['building']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Building id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Edifícios');
		$this->set('subtitle', 'Editar edifícios');
	
        $building = $this->Buildings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $building = $this->Buildings->patchEntity($building, $this->request->data);
            if ($this->Buildings->save($building)) {
                $this->Flash->success(__('Edifício editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar building. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('building'));
        $this->set('_serialize', ['building']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Building id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $building = $this->Buildings->get($id);
        if ($this->Buildings->delete($building)) {
            $this->Flash->success(__('Edifício deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar building. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
