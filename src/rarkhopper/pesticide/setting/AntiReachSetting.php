<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiReachSetting extends SettingItem{
	protected bool $enable;
	protected int $distance;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_REACH__ENABLE);
		$this->distance = $interface->getIntegerNonNull(SettingItemNames::ANTI_REACH__LIMIT_DISTANCE);
	}

	public function getName():string{
		return SettingItemNames::ANTI_REACH;
	}

	public function isEnabled():bool{
		return $this->enable;
	}

	public function getLimitDistance():int{
		return $this->distance;
	}
}