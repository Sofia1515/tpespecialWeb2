<?php
/* Smarty version 4.2.1, created on 2024-10-21 01:42:48
  from 'C:\apache\htdocs\tpespecialWeb2\trabajo_esp\app\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67159578e06380_43646657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b27c2ffb4ce1645d85b4ddf06d72e93f2b04c03f' => 
    array (
      0 => 'C:\\apache\\htdocs\\tpespecialWeb2\\trabajo_esp\\app\\templates\\categories.tpl',
      1 => 1729467290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67159578e06380_43646657 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li>
                <div>
                    <span><?php echo $_smarty_tpl->tpl_vars['category']->value->id_artista;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre_artista;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['category']->value->pais;?>
</span>
                </div>
                <div>
                    <a href="ver-canciones/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_artista;?>
" type="button">Ver Canciones</a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
