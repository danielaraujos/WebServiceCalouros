<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});

Router::scope('/api/v1', function (RouteBuilder $routes) {
    //Adicionando Extensao do Json
    $routes->extensions(['Json']);
    //Sobre
    $routes->resources('Abouts');
    //Beneficios
    $routes->resources('Benefits');
    //Edificios
    $routes->resources('Buildings');
    //Calendarios
    $routes->resources('Calendars');
    //Meses do calendario
    $routes->resources('MonthCalendars');
    //Dicas
    $routes->resources('Typs');
    //Categoria de dicas
    $routes->resources('CategoryTyps');
    //Telefones
    $routes->resources('Telephones');
    //Emails
    $routes->resources('Emails');
    //Gestão
    $routes->resources('Managements');
    //Categoria de Gestão
    $routes->resources('CategoryManagements');
    //Alimentacao
    $routes->resources('Feedings');
    //Transportes
    $routes->resources('Transports');
    //Turnos
    $routes->resources('Shifts');
    //Horario
    $routes->resources('Schedules');
    //Locais
    $routes->resources('Places');



    $routes->fallbacks('DashedRoute');
});

Router::prefix('admin',function (RouteBuilder $routes){
    $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
