<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use pocketmine\utils\Config;
use rarkhopper\pesticide\setting\RuntimeSetting;

class ConfigLoader{

	public function __construct(Config $conf){}

	public function load():void{}

	public function genSetting():RuntimeSetting{
		return new RuntimeSetting;
	}
}