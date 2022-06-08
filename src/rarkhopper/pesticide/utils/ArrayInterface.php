<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\utils;

class ArrayInterface{
	protected array $arr;

	public function __construct(array $arr){
		$this->arr = $arr;
	}

	public function getString(string|int $k):?string{
		$val = $this->arr[$k]?? null;
		return $val === null? null: (string) $val;
	}

	public function getBoolean(string|int $k):?bool{
		$val = $this->arr[$k]?? null;
		return $val === null? null: (bool) $val;
	}

	public function getInteger(string|int $k):?int{
		$val = $this->arr[$k]?? null;
		return $val === null? null: (int) $val;
	}

	public function getFloat(string|int $k):?float{
		$val = $this->arr[$k]?? null;
		return $val === null? null: (float) $val;
	}

	public function getArray(string|int $k):?array{
		$val = $this->arr[$k]?? null;
		return $val === null? null: (array) $val;
	}

	public function getStringNonNull(string|int $k):?string{
		$val = $this->arr[$k]?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (string) $val;
	}

	public function getBooleanNonNull(string|int $k):?bool{
		$val = $this->arr[$k]?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (bool) $val;
	}

	public function getIntegerNonNull(string|int $k):?int{
		$val = $this->arr[$k]?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (int) $val;
	}

	public function getFloatNonNull(string|int $k):?float{
		$val = $this->arr[$k]?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (float) $val;
	}

	public function getArrayNonNull(string|int $k):?array{
		$val = $this->arr[$k]?? throw new \InvalidArgumentException('key '.$k.' is not found');
		return (array) $val;
	}
}