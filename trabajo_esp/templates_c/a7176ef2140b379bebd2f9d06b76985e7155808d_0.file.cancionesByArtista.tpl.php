<?php
/* Smarty version 4.2.1, created on 2024-10-20 07:36:22
  from 'C:\apache\htdocs\tpespecialWeb2\trabajo_esp\app\templates\cancionesByArtista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_671496d646c453_82435538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7176ef2140b379bebd2f9d06b76985e7155808d' => 
    array (
      0 => 'C:\\apache\\htdocs\\tpespecialWeb2\\trabajo_esp\\app\\templates\\cancionesByArtista.tpl',
      1 => 1729402450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671496d646c453_82435538 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
            <li>
                <div>
                    <span><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre_cancion;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['cancion']->value->genero;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['cancion']->value->duracion;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre_artista;?>
</span>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<a href="<?php echo BASE_URL/'listar'-'artistas';?>
">
    <button>volver</button>
</a><?php }
}
