<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-intem">
                <a class="nav_link" href="index.php">Home</a>
            </li>
            <li class="nav-intem">
                <a class="nav_link" href="usuario_formulario.php">Cadastre-se</a>
            </li>
            <li class="nav-intem">
                <a class="nav_link" href="login_formulario.php">Login</a>
            </li>
            <?php if (isset($_SESSION['login'])) : ?>
            <li class="nav-intem">
                <a class="nav_link" href="post_formulario.php">Incluir Post</a>
            </li>
            <?php endif; ?>
            <?php if ((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['adm'] === 1)) : ?>
            <li class="nav-intem">
                <a class="nav_link" href="usuario.php">Usuário</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>