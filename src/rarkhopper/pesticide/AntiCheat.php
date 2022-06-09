<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\event\Listener;
use pocketmine\Server;

abstract class AntiCheat{
	abstract public function init():void;
	abstract public function final():void;

	/** @return array<Listener> */
	abstract public function getListeners():array;

	protected function registerListeners():void{
		$plugin = Pesticide::getInstance();
		$plugin_mng = Server::getInstance()->getPluginManager();

		foreach($this->getListeners() as $listener){
			$plugin_mng->registerEvents($listener, $plugin);
		}
	}
}