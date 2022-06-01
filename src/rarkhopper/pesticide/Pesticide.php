<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\plugin\PluginBase;

final class Pesticide extends PluginBase{
	const CONF_NAME = 'config.yml';

	protected static Container $container;

	protected function onEnable():void{
		$this->loadConfig();;
		$this->initContainer();
	}

	protected function onDisable():void{
		if(isset(self::$container)){
			self::$container->final();
		}
	}

	public static function getContainer():Container{
		if(!isset(self::$container)) throw new \RuntimeException('container is not defined');
		return self::$container;
	}

	protected function loadConfig():void{
		$this->saveResource(self::CONF_NAME);
		(new ConfigLoader($this->getConfig()))->load();
	}

	protected function initContainer():void{
		self::$container = new Container(
			new RuntimeSetting,
			new AntiCheatsRegistry
		);
	}
}
//TODO 引っかかった時にイベント発火