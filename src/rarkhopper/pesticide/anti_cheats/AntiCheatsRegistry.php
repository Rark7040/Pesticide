<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\anti_cheats;

use rarkhopper\pesticide\anti_cheats\debug\Debug;
use rarkhopper\pesticide\setting\RuntimeSetting;

class AntiCheatsRegistry{
	/** @var array<AntiCheat> */
	protected array $anti_cheats = [];

	public function init(RuntimeSetting $setting):void{
		$this->register(new Debug, $setting->getBaseSettings()->isDebugMode());
	}

	protected function register(AntiCheat $anti_cheat, bool $is_enabled):void{
		if(!$is_enabled) return;
		$anti_cheat->init();
		$this->anti_cheats[] = $anti_cheat;
	}
}