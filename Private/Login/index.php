<?php require("style.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="style.php">
    <title>Tela de Login</title>
</head>
<body>
    <main class="container">
        <form>
            <h1>Login | Biblioteca Virtual</h1>
            <div class="input-box">
                <input placeholder="Username" type="email">
                <i class="bx bxs-user"></i>
            </div>
            <div
 class="input-box">
                <input placeholder="Password" type="password">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <button type="submit">Login</button>
            </div>
            <div class="input-box remember-me">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember"> Lembrar senha
                </label>
                <a href="#" class="forgot-password">Esqueci a senha</a>
            </div>
            <div class="register-link">
                <p> <a href="#">cadastre-se aqui</a></p>
            </div>
        </form>
    </main>
    <script src="script.js"></script>
</body>
</html>
