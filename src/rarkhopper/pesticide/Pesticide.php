<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use rarkhopper\pesticide\setting\AntiAntiImmobileSetting;
use rarkhopper\pesticide\setting\AntiAutoClickerSetting;
use rarkhopper\pesticide\setting\AntiFlySetting;
use rarkhopper\pesticide\setting\AntiInstabreakSetting;
use rarkhopper\pesticide\setting\AntiNoClipSetting;
use rarkhopper\pesticide\setting\AntiNukerSetting;
use rarkhopper\pesticide\setting\AntiReachSetting;
use rarkhopper\pesticide\setting\AntiSpamSetting;
use rarkhopper\pesticide\setting\AntiSpeedSetting;
use rarkhopper\pesticide\setting\BaseSettings;
use rarkhopper\pesticide\setting\RuntimeSetting;
use rarkhopper\pesticide\utils\ArrayInterface;

final class Pesticide extends PluginBase{
	const CONF_NAME = 'config.yml';

	protected static self $instance;
	protected static Container $container;

	protected function onEnable():void{
		$this->initConfig();
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

	protected function initConfig():void{
		$this->saveResource(self::CONF_NAME);
	}

	protected function getSetting(Config $conf):RuntimeSetting{
		$conf_arr = new ArrayInterface($conf->getAll());

		return new RuntimeSetting(
			new BaseSettings($conf_arr),
			new AntiSpeedSetting($conf_arr),
			new AntiReachSetting($conf_arr),
			new AntiAutoClickerSetting($conf_arr),
			new AntiNukerSetting($conf_arr),
			new AntiSpamSetting($conf_arr),
			new AntiFlySetting($conf_arr),
			new AntiNoClipSetting($conf_arr),
			new AntiAntiImmobileSetting($conf_arr),
			new AntiInstabreakSetting($conf_arr)
		);
	}

	protected function initContainer():void{
		self::$container = new Container(
			$this->getSetting($this->getConfig()),
			new AntiCheatsRegistry
		);
	}

	protected function initInstance():void{
		self::$instance = $this;
	}
}
//TODO 引っかかった時にイベント発火