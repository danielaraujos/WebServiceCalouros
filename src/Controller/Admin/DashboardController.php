<?php
namespace App\Controller\Admin;

use App\Controller\AppController;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DashboardController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
    }

    public function index()
    {
        $this->set('title', 'Painel Administrativo');
        $this->set('subtitle', '');

        $this->loadModel('Users');
        $this->loadModel('Emails');
        $this->loadModel('Typs');
        $this->loadModel('Telephones');

        $dados = [
          'users'=> $this->Users->find()->all()->count(),
          'emails'=> $this->Emails->find()->all()->count(),
          'dicas'=> $this->Typs->find()->all()->count(),
          'telefones'=> $this->Telephones->find()->all()->count()
        ];

        $this->set(compact('dados'));









    }


}
