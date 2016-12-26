<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Shifts Controller
 *
 * @property \App\Model\Table\ShiftsTable $Shifts
 */
class ShiftsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Shifts');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Shifts');
		$this->set('subtitle', 'Gerenciar shifts');
		
        $shifts = $this->Shifts->find('all');

        $this->set(compact('shifts'));
        $this->set('_serialize', ['shifts']);
    }

    /**
     * View method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shift = $this->Shifts->get($id, [
            'contain' => ['Transports']
        ]);

        $this->set('shift', $shift);
        $this->set('_serialize', ['shift']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Shifts');
		$this->set('subtitle', 'Adicionar shift');
		
        $shift = $this->Shifts->newEntity();
        if ($this->request->is('post')) {
            $shift = $this->Shifts->patchEntity($shift, $this->request->data);
            if ($this->Shifts->save($shift)) {
                $this->Flash->success(__('shift salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar shift. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('shift'));
        $this->set('_serialize', ['shift']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Shifts');
		$this->set('subtitle', 'Editar shift');
	
        $shift = $this->Shifts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shift = $this->Shifts->patchEntity($shift, $this->request->data);
            if ($this->Shifts->save($shift)) {
                $this->Flash->success(__('shift editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar shift. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('shift'));
        $this->set('_serialize', ['shift']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shift = $this->Shifts->get($id);
        if ($this->Shifts->delete($shift)) {
            $this->Flash->success(__('shift deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar shift. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
