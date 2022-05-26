<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\plugin\PluginBase;

final class Pesticide extends PluginBase{
	const CONF_NAME = 'config.yml';

	protected static RuntimeSetting $setting;

	protected function onEnable():void{
		$this->loadConfig();;
		$this->initSetting();
	}

	protected function onDisable():void{

	}

	public static function getSetting():RuntimeSetting{
		return self::$setting;
	}

	protected function loadConfig():void{
		$this->saveResource(self::CONF_NAME);
		(new ConfigLoader($this->getConfig()))->load();
	}

	protected function initSetting():void{
		self::$setting = new RuntimeSetting;
	}
}