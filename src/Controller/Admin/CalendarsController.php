<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Calendars Controller
 *
 * @property \App\Model\Table\CalendarsTable $Calendars
 */
class CalendarsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Calendars');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Calendário');
		$this->set('subtitle', 'Gerenciar calendário');
		
        $this->paginate = [
            'contain' => ['MonthCalendars']
        ];
        $calendars = $this->Calendars->find('all');

        $this->set(compact('calendars'));
        $this->set('_serialize', ['calendars']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Calendário');
		$this->set('subtitle', 'Adicionar calendário');
		
        $calendar = $this->Calendars->newEntity();
        if ($this->request->is('post')) {
            $calendar = $this->Calendars->patchEntity($calendar, $this->request->data);
            if ($this->Calendars->save($calendar)) {
                $this->Flash->success(__('Calendário salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar calendário. Por favor, tente novamente.'));
            }
        }
        $monthCalendars = $this->Calendars->MonthCalendars->find('list', ['limit' => 200]);
        $this->set(compact('calendar', 'monthCalendars'));
        $this->set('_serialize', ['calendar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Calendário');
		$this->set('subtitle', 'Editar calendário');
	
        $calendar = $this->Calendars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendar = $this->Calendars->patchEntity($calendar, $this->request->data);
            if ($this->Calendars->save($calendar)) {
                $this->Flash->success(__('Calendário editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar calendário. Por favor, tente novamente.'));
            }
        }
        $monthCalendars = $this->Calendars->MonthCalendars->find('list', ['limit' => 200]);
        $this->set(compact('calendar', 'monthCalendars'));
        $this->set('_serialize', ['calendar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendar = $this->Calendars->get($id);
        if ($this->Calendars->delete($calendar)) {
            $this->Flash->success(__('Calendário deletado(a) com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar calendário. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
