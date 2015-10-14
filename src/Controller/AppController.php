<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
		'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'pages',
                'action' => 'home2'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
              
            ],
			'unauthorizedRedirect' => $this->referer()
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['display']);
    }
	
	public function isAuthorized($user)
{
    
    if (isset($user['role']) /*&& $user['role'] === 'admin'*/) {
        return true;
    }

    return false;
}
}
