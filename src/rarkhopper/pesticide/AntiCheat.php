<?php
declare(strict_types=1);

namespace rarkhopper\pesticide;

abstract class AntiCheat{
	abstract public function init():void;
	abstract public function final():void;
}