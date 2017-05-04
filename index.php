<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="index.php">
            <p>
                <span>Usuario:</span>
                <input type="text" name="loginUsuario">
                <input type="password" name="senhaUsuario">
                <button type="submit" name="btnEntrar">logar</button>
            </p>

        </form>
        <?php
        if (isset($_POST['btnEntrar'])) {

            include 'class/DAO/Conexao.class.php';
            include 'class/DAO/UsuarioDAO.class.php';

            $usuarioDAO = new UsuarioDAO();

            $loginUsuario = $_POST['loginUsuario'];
            $senhaUsuario = $_POST['senhaUsuario'];

            $user = $usuarioDAO->login($loginUsuario, $senhaUsuario);
            if ($user == true) {
                session_start();
                $_SESSION['loginUsuario'] = $loginUsuario;
                header('location: admin.php');
                die();
            } else {
                header('location: index.php?erro=senha');
                die();
            }
        }
        if (isset($_GET['erro'])) {
            echo 'usuário ou senha inválidos!';
        }
        ?>
    </body>
</html>
