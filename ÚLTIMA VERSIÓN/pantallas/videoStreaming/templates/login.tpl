<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
</head>
<body onload="muestraMensaje('{$mensaje}');">
    <header>
        Login
    </header>
    <section>
        <article>
            <!-- Formulario de inicio de sesión-->
            <form action="./src/validar.php" method="post">
                <table>
                    <caption>Identificación</caption>
                    <tr><br/>
                        <td>DNI usuario:</td>
                        <td><input type="text" id ="dni" name="dni" size="20" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="password" id ="clave" name="clave" size="20" maxlength="20" /></td>
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
