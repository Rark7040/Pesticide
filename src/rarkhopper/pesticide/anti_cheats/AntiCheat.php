<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\anti_cheats;

use pocketmine\event\Listener;
use pocketmine\Server;
use rarkhopper\pesticide\Pesticide;

abstract class AntiCheat{
	/** @return array<Listener> */
	abstract public function getListeners():array;

	public function init():void{
		$this->registerListeners();
	}

	protected function registerListeners():void{
		$plugin = Pesticide::getInstance();
		$plugin_mng = Server::getInstance()->getPluginManager();

		foreach($this->getListeners() as $listener){
			$plugin_mng->registerEvents($listener, $plugin);
		}
	}
}