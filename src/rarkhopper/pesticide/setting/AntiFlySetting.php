<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiFlySetting extends SettingItem{
	protected bool $enable;
	protected int $overlook_cnt;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_FLY__ENABLE);
		$this->overlook_cnt = $interface->getIntegerNonNull(SettingItemNames::ANTI_FLY__OVERLOOK_CNT);
	}

	public function getName():string{
		return SettingItemNames::ANTI_FLY;
	}

	public function isEnabled():bool{
		return $this->enable;
	}

	public function getOverlookCnt():int{
		return $this->overlook_cnt;
	}
}