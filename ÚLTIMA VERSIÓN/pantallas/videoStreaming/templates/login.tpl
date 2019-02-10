<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <style>
        *{
            background-color: black;
            color: white;
            font-size: 20px;
        } 
        article{
            margin-left: 550px;
            margin-top: 250px;
        }
        
        
    </style>
</head>

<body onload="muestraMensaje('{$mensaje}');">
    <header>
    </header>
    <section>
        <article>
            <!-- Formulario de inicio de sesión-->
            <form action="validar.php" method="post">
                <table>
                    <caption>Identificación</caption><br/>
                    <tr><br />
                        <td>DNI usuario:</td>
                        <td><input type="text" id="dni" name="dni" size="20" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="password" id="clave" name="clave" size="20" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Validar" /></td>
                    </tr>
                </table>
            </form>
        </article>
    </section>
</body>

</html>
