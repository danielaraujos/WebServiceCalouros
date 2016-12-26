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
		$this->set('title', 'Horários');
		$this->set('subtitle', 'Gerenciar horários');
		
        $this->paginate = [
            'contain' => ['Shifts']
        ];
        $schedules = $this->Schedules->find('all');

        $this->set(compact('schedules'));
        $this->set('_serialize', ['schedules']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Horários');
        $this->set('subtitle', 'Adicionar horários');

        $schedule = $this->Schedules->newEntity();
        if ($this->request->is('post')) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->data);
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('Horário salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar horário. Por favor, tente novamente.'));
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
        $this->set('title', 'Horários');
        $this->set('subtitle', 'Editar horários');

        $schedule = $this->Schedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->data);
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('Horário editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar horário. Por favor, tente novamente.'));
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
            $this->Flash->success(__('Horário deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar horário. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
