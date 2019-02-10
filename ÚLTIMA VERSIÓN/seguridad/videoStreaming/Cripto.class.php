<?php
class Cripto {
    
    public function encriptar ($clave, $ruta) {
		$id = mcrypt_module_open("cast-128", "", "ecb", "");
		$length = mcrypt_enc_get_iv_size($id);
		$vector = mcrypt_create_iv($length, MCRYPT_RAND);
		mcrypt_generic_init($id, $clave, $vector);
		$rutaCifrada = mcrypt_generic($id, $ruta);
        
		mcrypt_generic_deinit($id);
		mcrypt_module_close($id);
		
		return base64_encode($rutaCifrada);
    }
    
    public function desencriptar ($clave, $rutaCodificada){
		$rutaCifrada = base64_decode($rutaCodificada);
		$id = mcrypt_module_open("cast-128", "", "ecb", "");
		$length = mcrypt_enc_get_iv_size($id);
		$vector = mcrypt_create_iv($length, MCRYPT_RAND);
		mcrypt_generic_init($id, $clave, $vector);
        
		$ruta = mdecrypt_generic($id, $rutaCifrada);
		
		mcrypt_generic_deinit($id);
		mcrypt_module_close($id);
        
		return $ruta;
	}
    
}
?>