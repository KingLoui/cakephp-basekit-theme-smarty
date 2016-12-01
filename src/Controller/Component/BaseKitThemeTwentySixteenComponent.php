<?php

namespace KingLoui\BaseKitThemeTwentySixteen\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;

class BaseKitThemeTwentySixteenComponent extends Component
{
    public $Controller;

    public function initialize(array $config) {
        $controller = $this->_registry->getController();
        $this->Controller = $controller;
    }

    public function startup(Event $event) {
        // show/hide theme examples and settings based on config
        if(!Configure::read('BaseKitThemeTwentySixteen.Admin.Sidebar.ShowThemeExamples'))
            Configure::delete('BaseKit.Menu.AdminMenu.Theme Examples');
        if(!Configure::read('BaseKitThemeTwentySixteen.Admin.Sidebar.ShowThemeSettings'))
            Configure::delete('BaseKit.Menu.AdminMenu.Theme.Settings');
    }

    public function beforeRender(Event $event) { 
        // basekit admin setup
        if($this->Controller->viewBuilder()->className() != 'Ajax.Ajax') {

            if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {

                // load admin theme view
                $this->Controller->viewBuilder()->className('KingLoui/BaseKitThemeTwentySixteen.Admin');

                // set view vars
                $this->Controller->set('headerElement', Configure::read('BaseKitThemeTwentySixteen.Admin.Sidebar.HeaderElement'));
                $this->Controller->set('headerLogo', Configure::read('BaseKitThemeTwentySixteen.Admin.Sidebar.HeaderLogo'));
                $this->Controller->set('topLinksElement', Configure::read('BaseKitThemeTwentySixteen.Admin.NavTop.TopLinksElement'));
            } else {
                // load default theme view
                $this->Controller->viewBuilder()->className('KingLoui/BaseKitThemeTwentySixteen.Default');
            }
        }
    }
}