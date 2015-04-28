<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    //...

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [ 
		        'authorize' => ['Controller'], // Added this line
            'loginRedirect' => [
                'controller' => 'Appointments',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
       $this->Auth->allow(['display']);
    }





	
	public function isAuthorized($user)
{
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
}
    //...
}
