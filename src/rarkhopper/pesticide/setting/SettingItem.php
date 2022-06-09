<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

use rarkhopper\pesticide\utils\ArrayInterface;

abstract class SettingItem{
	/**
	 * @see SettingItemNames
	 */
	abstract public function getName():string;
	abstract public function init(ArrayInterface $interface):void;

	public function __construct(ArrayInterface $interface){
		$this->init(new ArrayInterface($interface->getArrayNonNull($this->getName())));
	}
}