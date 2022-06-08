<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\utils;

use pocketmine\utils\Config;

class ConfigLoader{
	protected Config $conf;

	public function __construct(Config $conf){
		$this->conf = $conf;
	}

	public function getString(string $k):?string{
		$val = $this->conf->get($k, null);
		return $val === null? null: (string) $val;
	}

	public function getBoolean(string $k):?bool{
		$val = $this->conf->get($k, null);
		return $val === null? null: (bool) $val;
	}

	public function getInteger(string $k):?int{
		$val = $this->conf->get($k, null);
		return $val === null? null: (int) $val;
	}

	public function getFloat(string $k):?float{
		$val = $this->conf->get($k, null);
		return $val === null? null: (float) $val;
	}

	public function getStringNonNull(string $k):?string{
		$val = $this->conf->get($k, null)?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (string) $val;
	}

	public function getBooleanNonNull(string $k):?bool{
		$val = $this->conf->get($k, null)?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (bool) $val;
	}

	public function getIntegerNonNull(string $k):?int{
		$val = $this->conf->get($k, null)?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (int) $val;
	}

	public function getFloatNonNull(string $k):?float{
		$val = $this->conf->get($k, null)?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (float) $val;
	}
}