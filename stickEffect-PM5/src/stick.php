<?php

declare(strict_types=1);

namespace wax_dev\stickEffect_PM5;

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemTypeIds;

class stick implements Listener{

    public function stickspeed(PlayerInteractEvent $vit){
        $player = $vit->getPlayer ();
        $item = $vit->getItem ();
        if($item->getTypeId () === ItemTypeIds::BLAZE_ROD){
            $player->getInventory ()->setItemInHand ($item->setCount ($item->getCount ()-1));
            if($player->getEffects ()->has (VanillaEffects::SPEED ())){
                $speed = New EffectInstance(VanillaEffects::SPEED (), 10*80, 5, true);
                $player->getEffects ()->add ($speed);
            }
        }
    }


    public function stickforce(PlayerInteractEvent $stre){
        $player = $stre->getPlayer ();
        $item = $stre->getItem ();
        if($item->getTypeId () === ItemTypeIds::BRICK){
            $player->getInventory ()->setItemInHand ($item->setCount ($item->getCount ()-1));
            if($player->getEffects ()->has (VanillaEffects::STRENGTH ())){
                $force = New EffectInstance(VanillaEffects::STRENGTH (), 10*40, 8, true);
                $player->getEffects ()->add ($force);
            }
        }
    }

}