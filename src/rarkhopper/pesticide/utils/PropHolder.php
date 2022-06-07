<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\utils;

trait PropHolder{
	/** @var array<string> */
	protected array $string_props = [];
	/** @var array<int> */
	protected array $integer_props = [];
	/** @var array<float> */
	protected array $float_props = [];
	/** @var array<bool> */
	protected array $boolean_props = [];

	protected function registerString(string $name, string $val):void{
		$this->string_props[$name] = $val;
	}

	protected function registerInteger(string $name, int $val):void{
		$this->integer_props[$name] = $val;
	}

	protected function registerFloat(string $name, float $val):void{
		$this->float_props[$name] = $val;
	}

	protected function registerBoolean(string $name, bool $val):void{
		$this->boolean_props[$name] = $val;
	}
}