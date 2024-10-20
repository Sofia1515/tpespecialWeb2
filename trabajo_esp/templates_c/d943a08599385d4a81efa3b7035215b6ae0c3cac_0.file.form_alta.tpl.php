<?php
/* Smarty version 4.2.1, created on 2024-10-20 05:22:40
  from 'C:\apache\htdocs\tpespecialWeb2\trabajo_esp\app\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_671477807f0cf3_13716086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd943a08599385d4a81efa3b7035215b6ae0c3cac' => 
    array (
      0 => 'C:\\apache\\htdocs\\tpespecialWeb2\\trabajo_esp\\app\\templates\\form_alta.tpl',
      1 => 1729297302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671477807f0cf3_13716086 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php if ((isset($_smarty_tpl->tpl_vars['artista']->value->id_artista))) {
echo BASE_URL;?>
/send-edit<?php } else { ?>agregar<?php }?>" method="POST">
  <!-- Hidden field for id -->
  <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['artista']->value->id_artista ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

  <label for="nombreArtista">Nombre Artista:</label><br>
  <input type="text" id="nombreArtista" name="nombreArtista" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['artista']->value->nombre_artista ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>

  <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
<input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['artista']->value->fecha_nacimiento ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>

  <label for="pais">País:</label><br>
<input type="text" id="pais" name="pais" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['artista']->value->pais ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>

  <button type="submit"><?php if ((isset($_smarty_tpl->tpl_vars['artista']->value->id_artista))) {?>Actualizar<?php } else { ?>Agregar<?php }?> Artista</button>
</form>
<?php }
}
