<?php

 /**
 * Singleton example
 *----------------------------------------------------------------
 * Este patrón tiene el propósito de asegurar que esta clase 
 * solo tenga una ÚNICA INSTANCIA y proporciona un punto de
 * acceso global a la misma. USEFULL: archivos de configuración.
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



/**
 * Singleton example commented
 */
class Singleton
{	
	//contenedor de la instancia. solo accesible desde la clase
	private static $instance;
	
	//previene la creación de objetos via new
	private function __construct()
	{

	}

	//static para poder acceder a ella desde cualquier parte Singleton::getInstance()
	public static function getInstance()
	{
		if( null === self::$intance )
		{
			self::$instance = new self();
		}
		return self::$intance;
	}

	//Deshabilitamos el uso de __clone
	private __clone()
	{
		throw new Exception('No clone');
	}
}