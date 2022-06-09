<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiAntiImmobileSetting extends SettingItem{
	protected bool $enable;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_ANTI_IMMOBILE__ENABLE);
	}

	public function getName():string{
		return SettingItemNames::ANTI_ANTI_IMMOBILE;
	}

	public function isEnabled():bool{
		return $this->enable;
	}
}