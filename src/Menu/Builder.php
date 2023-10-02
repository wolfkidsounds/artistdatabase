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

    public function navSidebar(): ItemInterface
    {
        $menu = $this->factory->createItem('sidebar');

        $menu->addChild('Dashboard', ['route' => 'app_main']);
        $menu->addChild('Members', ['route' => 'app_members']);
        $menu->addChild('Artists', ['route' => 'app_main']);

        return $menu;
    }

    public function navProfile(): ItemInterface
    {
        $menu = $this->factory->createItem('profile');

        $menu->addChild('Profile', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-circle-user',
            ]
        ]);

        $menu->addChild('Account', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-user',
            ]
        ]);

        $menu->addChild('Notifications', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-bell',
            ]
        ]);

        $menu->addChild('Messages', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-message',
            ]
        ]);

        $menu->addChild('Settings', [
            'route' => 'app_main',
            'extras' => [
                'icon' => 'fa-solid fa-gear',
            ]
        ]);

        return $menu;
    }
}