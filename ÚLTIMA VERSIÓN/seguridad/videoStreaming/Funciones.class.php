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
        
        function validar() {
            if (!isset($_SESSION['validado']) && $_SESSION['validado'] == false) {
                header("Location: login.php");
                exit;
            }
        }
        
    }
?>
