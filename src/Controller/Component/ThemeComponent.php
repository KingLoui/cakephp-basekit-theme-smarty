<?php

namespace KingLoui\BaseKitThemeSmarty\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

class ThemeComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;
    }

    public function beforeRender(Event $event) { 

    }
}