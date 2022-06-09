<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiNukerSetting extends SettingItem{
	protected bool $enable;
	protected int $break_cnt;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_NUKER__ENABLE);
		$this->break_cnt = $interface->getIntegerNonNull(SettingItemNames::ANTI_NUKER__LIMIT_BREAK_CNT);
	}

	public function getName():string{
		return SettingItemNames::ANTI_NUKER;
	}

	public function isEnabled():bool{
		return $this->enable;
	}

	public function getLimitBreakCount():int{
		return $this->break_cnt;
	}
}