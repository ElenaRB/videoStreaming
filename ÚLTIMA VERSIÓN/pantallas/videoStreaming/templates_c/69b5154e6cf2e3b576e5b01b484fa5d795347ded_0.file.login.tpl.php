<?php
/* Smarty version 3.1.33, created on 2019-02-09 11:58:43
  from 'C:\Users\elena\Desktop\DAW 2\UwAmp\pantallas\videoStreaming\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5eb2632d0609_95461947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b5154e6cf2e3b576e5b01b484fa5d795347ded' => 
    array (
      0 => 'C:\\Users\\elena\\Desktop\\DAW 2\\UwAmp\\pantallas\\videoStreaming\\templates\\login.tpl',
      1 => 1549709910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5eb2632d0609_95461947 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
</head>
<body onload="muestraMensaje('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
');">
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
<?php }
}
