<?php
/* Smarty version 4.2.1, created on 2024-10-21 01:47:22
  from 'C:\apache\htdocs\tpespecialWeb2\trabajo_esp\app\templates\categories-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6715968a0f94a2_23142301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33de7dd21d4ea4b9803493562bee00f82d3f069c' => 
    array (
      0 => 'C:\\apache\\htdocs\\tpespecialWeb2\\trabajo_esp\\app\\templates\\categories-admin.tpl',
      1 => 1729468029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/form_alta.tpl' => 1,
  ),
),false)) {
function content_6715968a0f94a2_23142301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/templates/form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
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
                    <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_artista;?>
" type="button">borrar</a>
                </div>
                <div>
                    <a href="editar/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_artista;?>
" type="button">editar</a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
