<?php
    session_start();
?>

<div class="card">
    <div class="card-header">
        <h1> Projeto Blog em PHP + MySQL IFSP - LUCAS</h1>
    </div>
    <?php
    if(isset($_SESSION['login'])) : ?>
    <div class="card-body test-right">
        Olá <?php echo $_SESSION['login']['usuario']['nome'] ?>!
        <a href="cor/usuario_repositorio.php?acao=logout" class="btn btn-link btn-sm" role="button">Sair</a>
    </div>
    <?php endif ?>
</div>