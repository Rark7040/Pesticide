<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\anti_cheats\debug;

use rarkhopper\pesticide\anti_cheats\AntiCheat;

class Debug extends AntiCheat{

	public function init():void{
		parent::init();
		//register task and more...
	}

	public function getListeners():array{
		return [
			new DebugListener
		];
	}
}