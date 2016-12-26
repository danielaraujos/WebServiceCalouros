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


    public function edit($id = null)
    {
		$this->set('title', 'Transporte');
		$this->set('subtitle', 'Editar transporte');
	
        $transport = $this->Transports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transport = $this->Transports->patchEntity($transport, $this->request->data);
            if ($this->Transports->save($transport)) {
                $this->Flash->success(__('Transporte editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar transporte. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('transport'));
        $this->set('_serialize', ['transport']);
    }


}
