<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class BaseSettings extends SettingItem{
	const PENALTY_OVERLOOK = 0;
	const PENALTY_KICK = 1;
	const PENALTY_BAN = 2;

	protected int $penalty;
	protected bool $debug;

	public function init(ArrayInterface $interface):void{
		$this->penalty = $interface->getIntegerNonNull(SettingItemNames::BASE_SETTINGS__PENALTY);
		$this->debug = $interface->getBooleanNonNull(SettingItemNames::BASE_SETTINGS__DEBUG);
	}

	public function getName():string{
		return SettingItemNames::BASE_SETTINGS;
	}

	public function getPenalty():int{
		return $this->penalty;
	}

	public function isDebugMode():bool{
		return $this->debug;
	}
}