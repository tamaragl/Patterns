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