<?php
namespace xb\fw\base\ioc;

class Container {
	private $_container = [];
	
	static public function bind($name, $value, $cover = true) {
		$name = strtolower($name);
		if (false === $cover) {
			if (true === array_key_exists($name, self::$_container)) {
				return false;
			}
		}
		if ($value instanceof Closure) {
			self::$_container[$name] = $value;
		} else if (true === is_object())
	}
}