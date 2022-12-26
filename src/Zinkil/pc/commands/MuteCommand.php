<?php

declare(strict_types=1);

namespace Zinkil\pc\Commands;

use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use Zinkil\pc\Core;

class MuteCommand extends Command{
	
	private $plugin;
	
	public function __construct(string $name, Translatable|string $description = "")
		    {
		  parent::__construct($name, $description);
		  parent::setAliases(["mute"]);
		    }
	public function execute(CommandSender $player, string $commandLabel, array $args){
		if(!$player->hasPermission("pc.command.mute")){
			$player->sendMessage("§cYou cannot execute this command.");
			return;
		}
		$this->plugin->getStaffUtils()->muteHomeForm($player);
	}
}
