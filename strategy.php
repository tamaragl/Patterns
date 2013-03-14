<?php

 /**
 * Strategy [ Contrato => Interface ]
 *----------------------------------------------------------------
 * Bajo el mismo nombre de método, tendremos varias lógicas.
 * Todas nuestras clases tendran una interface que obligue a
 * implementar los mismo métodos pero en cada clase de manera
 * diferente.
 */

interface ContadorInterface
{
	public function cuenta();
}

class contadorIncrementa implements ContadorInterface
{
	public function cuenta()
	{
		// code 
	}
}


class contadorDecrementa implements ContadorInterface
{
	public function cuenta()
	{
		//code
	}
}


/**
 *  Ejemplo de uso
 *  --------------------------------------------------------------
 *  Si cambiaramos nuestra lógica, es decir, ContadorIncremanta por 
 *  ContadorDecrementa no pasaría nada al resto de nuestro código 
 *  porque amblas clases cumplen el mismo contrato y tienen los mismos
 *  métodos.
 *
 * 	Ej: clases de encriptación (md5, sha1); conectores bbdd (pdo, mysqli)
 */

$mi_contador = new ContadorIncrementa();
$mi_contador->cuenta();

$mi_contador = new ContadorDecrementa();
$mi_contador->cuenta();