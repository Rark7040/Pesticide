<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

class Container{
	protected RuntimeSetting $setting;
	protected AntiCheatsRegistry $registry;

	public function __construct(RuntimeSetting $setting, AntiCheatsRegistry $registry){
		$this->setting = $setting;
		$this->registry = $registry;
	}

	public function getRegistry():AntiCheatsRegistry{
		return $this->registry;
	}

	public function getSetting():RuntimeSetting{
		return $this->setting;
	}
}