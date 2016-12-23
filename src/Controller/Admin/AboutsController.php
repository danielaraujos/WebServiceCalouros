<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Abouts Controller
 *
 * @property \App\Model\Table\AboutsTable $Abouts
 */
class AboutsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('App.Abouts');
    }


    /**
     * Edit method
     *
     * @param string|null $id About id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Sobre');
		$this->set('subtitle', 'Editar informações');
	
        $about = $this->Abouts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $about = $this->Abouts->patchEntity($about, $this->request->data);
            if ($this->Abouts->save($about)) {
                $this->Flash->success(__('Sobre editado com sucesso!'));
                return $this->redirect(['action' => 'edit', 1]);
            } else {
                $this->Flash->error(__('Falha ao editar a página sobre. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }


}
