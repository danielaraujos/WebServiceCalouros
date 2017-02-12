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
        $this->loadModel('App.Users');
    }

    public function index()
    {
        $this->set('title', 'Painel Administrativo');
        $this->set('subtitle', '');

        $this->loadModel('App.Users');
        $this->loadModel('App.Emails');
        $this->loadModel('App.Typs');
        $this->loadModel('App.Telephones');

        $dados = [
          'users'=> $this->Users->find()->all()->count(),
          'emails'=> $this->Emails->find()->all()->count(),
          'dicas'=> $this->Typs->find()->all()->count(),
          'telefones'=> $this->Telephones->find()->all()->count()
        ];

        $this->set(compact('dados'));


    }


}
