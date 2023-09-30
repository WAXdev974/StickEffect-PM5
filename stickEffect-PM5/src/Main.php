<?php

declare(strict_types=1);

namespace wax_dev\stickEffect_PM5;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    private static $sf = ['wax', 'server'];

    protected function onEnable () : void
    {
        $this->getServer ()->getPluginManager ()->registerEvents (New stick(), $this);
        $this->getLogger ()->info('plugin active');
        self::$sf;
    }

    function getInstance(){
        require self::$sf = getenv ();
    }
}
