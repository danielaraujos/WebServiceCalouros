<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * MonthCalendars Controller
 *
 * @property \App\Model\Table\MonthCalendarsTable $MonthCalendars
 */
class MonthCalendarsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.MonthCalendars');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'MonthCalendars');
		$this->set('subtitle', 'Gerenciar monthCalendars');
		
        $monthCalendars = $this->MonthCalendars->find('all');

        $this->set(compact('monthCalendars'));
        $this->set('_serialize', ['monthCalendars']);
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'MonthCalendars');
		$this->set('subtitle', 'Adicionar monthCalendar');
		
        $monthCalendar = $this->MonthCalendars->newEntity();
        if ($this->request->is('post')) {
            $monthCalendar = $this->MonthCalendars->patchEntity($monthCalendar, $this->request->data);
            if ($this->MonthCalendars->save($monthCalendar)) {
                $this->Flash->success(__('month calendar salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar month calendar. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('monthCalendar'));
        $this->set('_serialize', ['monthCalendar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Month Calendar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'MonthCalendars');
		$this->set('subtitle', 'Editar monthCalendar');
	
        $monthCalendar = $this->MonthCalendars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monthCalendar = $this->MonthCalendars->patchEntity($monthCalendar, $this->request->data);
            if ($this->MonthCalendars->save($monthCalendar)) {
                $this->Flash->success(__('month calendar editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar month calendar. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('monthCalendar'));
        $this->set('_serialize', ['monthCalendar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Month Calendar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monthCalendar = $this->MonthCalendars->get($id);
        if ($this->MonthCalendars->delete($monthCalendar)) {
            $this->Flash->success(__('month calendar deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar month calendar. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
