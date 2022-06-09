<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\anti_cheats\debug;

use rarkhopper\pesticide\AntiCheat;

class Debug extends AntiCheat{
	public function getListeners():array{
		return [];
	}
}