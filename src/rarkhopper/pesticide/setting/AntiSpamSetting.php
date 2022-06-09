<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

class AntiSpamSetting extends SettingItem{
	protected bool $enable;
	protected int $speed;
	protected bool $buffer_mode;

	public function init(ArrayInterface $interface):void{
		$this->enable = $interface->getBooleanNonNull(SettingItemNames::ANTI_SPAM__ENABLE);
		$this->speed = $interface->getIntegerNonNull(SettingItemNames::ANTI_SPAM__LIMIT_SPEED);
		$this->buffer_mode = $interface->getBooleanNonNull(SettingItemNames::ANTI_SPAM__BUFFER_MODE);
	}

	public function getName():string{
		return SettingItemNames::ANTI_SPAM;
	}

	public function isEnabled():bool{
		return $this->enable;
	}

	public function getLimitSpeed():int{
		return $this->speed;
	}

	public function isEnabledBufferMode():bool{
		return $this->buffer_mode;
	}
}