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




    }


}
