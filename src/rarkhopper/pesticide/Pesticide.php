<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\plugin\PluginBase;

final class Pesticide extends PluginBase{
	const CONF_NAME = 'config.yml';

	protected static self $instance;
	protected static Container $container;

	protected function onEnable():void{
		$this->loadConfig();;
		$this->initInstance();
		$this->initContainer();
	}

	protected function onDisable():void{
		if(isset(self::$container)){
			self::$container->final();
		}
	}

	public static function getInstance():self{
		if(!isset(self::$instance)) throw new \RuntimeException('instance is not defined');
		return self::$instance;
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

	protected function initInstance():void{
		self::$instance = $this;
	}
}
//TODO 引っかかった時にイベント発火