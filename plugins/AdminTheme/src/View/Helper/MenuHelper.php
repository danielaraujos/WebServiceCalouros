<?php
namespace AdminTheme\View\Helper;

use Cake\View\Helper;

class MenuHelper extends Helper {

    var $helpers = array('Html');

    /**
     * @param null $icon Icone do link
     * @param null $title Titulo do Link
     * @param null $controller Controller do Link
     * @param null $action Ação do Link
     * @param array $options Opções do link
     * @return string link criado
     */
    function item($icon = 'fa fa-circle-o', $title = null, $controller = null, $action = null, $options = array()) {
        $class = (
            ( strtolower($this->request->params['controller']) == strtolower($controller) ) &&
            ( strtolower($this->request->params['action']) == strtolower($action) )
        ) ? 'active' : '';

        $options['escape'] = false;

        $right = '';
        if( isset($options['right']) && isset($options['right']['color']) && isset($options['right']['text']) ) {
            $right = "<small class='label pull-right bg-{$options['right']['color']}'>{$options['right']['text']}</small>";
        }

        $titulo = "<i class='{$icon}'></i> <span>{$title}</span>";
        $link = $this->Html->link(
            $titulo . $right,
            [
                'controller' => $controller,
                'action' => $action,
            ],
            $options
        );

        return "<li class='{$class}'>{$link}</li>";
    }

    /**
     * @param null $icon icone
     * @param null $title titulo
     * @param null $controller controller
     * @param null $itens itens (gerado pela funcao)
     * @return string retorna o menu
     */
    function treeView($icon = null, $title = null, $controller = null, $itens = array()) {
        $class = (
            ( strtolower($this->request->params['controller']) == strtolower($controller) )
        ) ? ' active' : '';

        $text = "<li class='treeview{$class}'>";
        $text .= "<a href='#'>";
        $text .= "<i class='{$icon}'></i>";
        $text .= "<span>{$title}</span>";
        $text .= "<i class='fa fa-angle-left pull-right'></i>";
        $text .= '</a>';
        $text .= "<ul class='treeview-menu'>";
        foreach($itens as $i) {
            //$text .= $i;
            $text .= $this->subitem( $i[0], $controller, $i[1] );
        }
        $text .= "</ul>";
        $text .= "</li>";

        return $text;
    }


    function subitem($title = null, $controller = null, $action = null, $options = array()) {
        return $this->item('fa fa-circle-o', $title, $controller, $action, $options);
    }


    /*
        <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="label label-primary pull-right">4</span>
        </a>
        <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
        </li>
     */
}