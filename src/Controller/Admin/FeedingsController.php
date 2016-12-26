<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Feedings Controller
 *
 * @property \App\Model\Table\FeedingsTable $Feedings
 */
class FeedingsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Feedings');
    }


    /**
     * Edit method
     *
     * @param string|null $id Feeding id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Alimentação');
		$this->set('subtitle', 'Editar informações');
	
        $feeding = $this->Feedings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feeding = $this->Feedings->patchEntity($feeding, $this->request->data);
            if ($this->Feedings->save($feeding)) {
                $this->Flash->success(__('Alimentação editado com sucesso!'));
                return $this->redirect(['action' => 'edit',1]);
            } else {
                $this->Flash->error(__('Falha ao editar alimentação. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('feeding'));
        $this->set('_serialize', ['feeding']);
    }


}
