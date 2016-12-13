<?php

namespace KingLoui\BaseKitThemeSmarty\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

class BaseKitThemeSmartyComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;
    }

    public function beforeRender(Event $event) { 
        // basekit admin setup
        if($this->Controller->viewBuilder()->className() != 'Ajax.Ajax') {
            if (!isset($this->request->params['prefix']) || $this->request->params['prefix'] != 'admin') {
                $this->Controller->viewBuilder()->className('KingLoui/BaseKitThemeSmarty.Default');
            } 
        }
    }
}