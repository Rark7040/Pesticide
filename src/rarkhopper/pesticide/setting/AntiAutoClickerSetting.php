<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiAutoClickerSetting extends SettingItem{
	protected bool $enable;
	protected int $cps;
	protected bool $left;
	protected bool $right;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_AUTO_CLICKER__ENABLE);
		$this->cps = $interface->getIntegerNonNull(SettingItemNames::ANTI_AUTO_CLICKER__LIMIT_CPS);
		$this->left = $interface->getBooleanNonNull(SettingItemNames::ANTI_AUTO_CLICKER__LEFT_CLICK);
		$this->right = $interface->getBooleanNonNull(SettingItemNames::ANTI_AUTO_CLICKER__RIGHT_CLICK);
	}

	public function getName():string{
		return SettingItemNames::ANTI_AUTO_CLICKER;
	}

	public function isEnabled():bool{
		return $this->enable;
	}

	public function getLimitCps():int{
		return $this->cps;
	}

	public function isCheckLeftClick():bool{
		return $this->left;
	}

	public function isCheckRightClick():bool{
		return $this->right;
	}
}