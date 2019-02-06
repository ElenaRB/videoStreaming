<?php
    class Funciones { 
        
        function inicioSesion() {
            session_name("SESION");
            session_cache_limiter("nocache, private");
            session_start();
            if (!isset($_SESSION["variable"])) {
                $_SESSION["variable"] = uniqid();
            }
       }
    }
?>
