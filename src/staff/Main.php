<?php
namespace staff;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch($command->getName()) {
            case "staff":
                if (count($args) == 0 ){
                    return false;
                }
                var_dump($args); // do stuff
                return true;
        }
    }
}