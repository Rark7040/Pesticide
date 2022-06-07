<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

use rarkhopper\pesticide\setting\RuntimeSetting;

class AntiCheatsRegistry{
	/** @var array<AntiCheat> */
	protected array $anti_cheats = [];

	public function init(RuntimeSetting $setting):void{

	}

	public function final():void{
		foreach($this->anti_cheats as $anti_cheat){
			$anti_cheat->final();
		}
	}

	protected function register(AntiCheat $anti_cheat):void{
		$anti_cheat->init();
		$this->anti_cheats[] = $anti_cheat;
	}
}