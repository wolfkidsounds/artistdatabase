<?php // src/Menu/MenuBuilder.php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

class MenuBuilder
{
    private $factory;

    /**
     * Add any other dependency you need...
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function breadcrumbs(): ItemInterface
    {
        $menu = $this->factory->createItem('main');

        $menu->addChild('Profile', [
            'route' => 'app_main'
        ]);

        $menu['Profile']->addChild('Profile', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-circle-user',
            ]
        ]);

        $menu['Profile']->addChild('Account', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-user',
            ]
        ]);

        $menu['Profile']->addChild('Notifications', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-bell',
            ]
        ]);

        $menu['Profile']->addChild('Messages', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-message',
            ]
        ]);

        $menu['Profile']->addChild('Settings', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-gear',
            ]
        ]);

        $menu->addChild('All Members', ['route' => 'app_main']);

        $menu['All Members']->addChild('Members', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-user-group',
            ]
        ]);

        $menu['All Members']->addChild('Artists', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-music',
            ]
        ]);

        $menu['All Members']->addChild('DJs', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-record-vinyl',
            ]
        ]);

        $menu['All Members']->addChild('Live Acts', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-guitar',
            ]
        ]);

        $menu['All Members']->addChild('Producers', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-headphones',
            ]
        ]);

        $menu->addChild('All Groups', ['route' => 'app_main']);

        $menu['All Groups']->addChild('Groups', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-people-group',
            ]
        ]);

        $menu['All Groups']->addChild('Labels', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-users-rectangle',
            ]
        ]);

        $menu['All Groups']->addChild('Crews', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-people-roof',
            ]
        ]);

        return $menu;
    }
}