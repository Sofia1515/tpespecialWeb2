<?php
/* Smarty version 4.2.1, created on 2024-10-20 07:25:57
  from 'C:\apache\htdocs\tpespecialWeb2\trabajo_esp\app\templates\header.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67149465460ed0_14815797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1d5627ed633c92a922138d972586216bc9674f' => 
    array (
      0 => 'C:\\apache\\htdocs\\tpespecialWeb2\\trabajo_esp\\app\\templates\\header.phtml',
      1 => 1729400552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67149465460ed0_14815797 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
        <html lang="en">
            <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
            <!-- development version, includes helpful console warnings -->
            <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>

            <title>the book of your favorite music</title>
            </head>
            <body>
            
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
listar">HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link" href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
nosotros">NOSOTROS</a>
                        <a class="nav-link" href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
admin">ADMIN</a>
                        <a class="nav-link" href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
listar-artistas">ARTISTAS</a>
                        </div>
                    </div>
                </nav>

            <h3 class="mx-5 my-4">the book of your favorite music</h3>
<?php }
}
