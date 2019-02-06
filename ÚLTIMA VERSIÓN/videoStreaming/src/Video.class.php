<?php

 class video {
        private $codigo;
        private $titulo;
        private $cartel;
        private $descargable;
    
	public function __construct($codigo,$titulo,$cartel,$descargable){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
		$this->descargable=$descargable;
	}

   /* //Función para adquirir los atributos del objeto creado
	public function __get($atributo){
		if (isset($this->$atributo)){
			return $this->$atributo;
		}else{
			return null;
		}		
	}*/
}
?>
