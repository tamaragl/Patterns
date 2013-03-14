<?php

 /**
 * Factory example
 *----------------------------------------------------------------
 * Objetivos: 
 *  - Crear objetos sin saber como se crean.
 *  - Crear objetos del mismo tipo cumpliendo que heredan de una
 *  	clase abstracta.
 *  - Se utilizan para instanciar las dependencias de cada clase
 */

abstract class Pizza
{
	//common methods of pizza..
}

class Margarita extends Pizza
{
	//code..
}

class Peperoni extends Pizza
{
	//code..
}


class PizzaFactory
{
	public static getClass( $class_name )
	{
		return new $class_name;
	}
}