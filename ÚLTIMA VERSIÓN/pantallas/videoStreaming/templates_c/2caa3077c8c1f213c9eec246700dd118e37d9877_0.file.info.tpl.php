<?php
/* Smarty version 3.1.33, created on 2019-02-09 14:35:41
  from 'C:\Users\elena\Desktop\DAW 2\UwAmp\pantallas\videoStreaming\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5ed72dc68759_84762743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2caa3077c8c1f213c9eec246700dd118e37d9877' => 
    array (
      0 => 'C:\\Users\\elena\\Desktop\\DAW 2\\UwAmp\\pantallas\\videoStreaming\\templates\\info.tpl',
      1 => 1549718680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5ed72dc68759_84762743 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />    
    <title>Información de la película</title>
    <style>
        div {
            display: flex;
        }
        
        p {
            margin: 40px;
        }
        
        input {
            margin: 20px;
        }
    </style>
</head>
<body>
    <section>
        <h2><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h2>
        <div>
            <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" />
            <p><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
        </div>
        <form action="ver.php" method="post">
            <input type="hidden" name="ruta" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
" />
            <input type="submit" value="Ver" />
        </form>
        <form action="descargar.php" method="post">
            <input type="hidden" name="ruta" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
" />
            <input type="submit" value="Descargar" />
        </form>
    </section>
    <footer class="pie">
        <div id="id"> <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></div>
    </footer>
</body>

</html>
<?php }
}
