<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

abstract class SettingItem{
	protected string $name;

	abstract public function getName():string;
	/** @return array<static> */
	abstract public function getChildren():array;

	public function __construct(string $name){
		$this->name = $name;
	}
}