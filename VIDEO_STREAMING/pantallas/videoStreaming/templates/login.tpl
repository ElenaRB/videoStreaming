<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>

<body onload="muestraMensaje('{$mensaje}');">
    <header>
        Login
    </header>
    <section>
        <article>
            <!-- Formulario de inicio de sesión-->
            <form action="validar.php" method="post">
                <table>
                    <caption>Identificación</caption>
                    <tr><br/>
                        <td>Usuario:</td>
                        <td><input type="text" name="usuario" size="20" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="password" name="clave" size="20" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Validar" />
                    </tr>
                </table>
            </form>
        </article>
    </section>
</body>

</html>