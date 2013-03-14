<?php
/**
 * Singleton example
 */

class Singleton
{
	
	private static $instance;

	
	private function __construct()
	{

	}

	public static function getInstance()
	{
		if( null === self::$intance )
		{
			self::$instance = new self();
		}
		return self::$intance;
	}

	private __clone()
	{
		throw new Exception('No clone');
	}
}