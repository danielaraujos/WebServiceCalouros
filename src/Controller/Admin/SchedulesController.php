<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Schedules Controller
 *
 * @property \App\Model\Table\SchedulesTable $Schedules
 */
class SchedulesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Schedules');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Schedules');
		$this->set('subtitle', 'Gerenciar schedules');
		
        $this->paginate = [
            'contain' => ['Shifts']
        ];
        $schedules = $this->Schedules->find('all');

        $this->set(compact('schedules'));
        $this->set('_serialize', ['schedules']);
    }

    /**
     * View method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedule = $this->Schedules->get($id, [
            'contain' => ['Shifts', 'Transports']
        ]);

        $this->set('schedule', $schedule);
        $this->set('_serialize', ['schedule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Schedules');
		$this->set('subtitle', 'Adicionar schedule');
		
        $schedule = $this->Schedules->newEntity();
        if ($this->request->is('post')) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->data);
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('schedule salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar schedule. Por favor, tente novamente.'));
            }
        }
        $shifts = $this->Schedules->Shifts->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'shifts'));
        $this->set('_serialize', ['schedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Schedules');
		$this->set('subtitle', 'Editar schedule');
	
        $schedule = $this->Schedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->data);
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('schedule editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar schedule. Por favor, tente novamente.'));
            }
        }
        $shifts = $this->Schedules->Shifts->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'shifts'));
        $this->set('_serialize', ['schedule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedule = $this->Schedules->get($id);
        if ($this->Schedules->delete($schedule)) {
            $this->Flash->success(__('schedule deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar schedule. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
