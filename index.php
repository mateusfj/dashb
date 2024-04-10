<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?<?= rand() ?>">
    <title>Login</title>
</head>

<body>
    <div id="main" class="flex">
        <section class="login">
            <div class="title">
                <img src="assets/img/logo-login.png" alt="logo da tela de login">
                <h2>Entre na sua conta</h2>
            </div>
            <div class="btn-options flex">
                <button><img src="assets/img/google.png" alt="icon google">Sign in with Google</button>
                <button><i class="bi bi-apple"></i> Sign in with Apple</button>
            </div>
            <div class="text">
                <p>Or use Email</p>
            </div>

            <form action="#">
                <div class="input-style">
                    <input type="email" placeholder="Email address">
                    <input type="password" placeholder="Password">
                </div>
                <div class="flex">
                    <div class="check">
                        <input type="checkbox" id="remenber" name="remenber">
                        <label for="remenber">Remember me on this device</label>
                    </div>
                    <a href="">Esqueceu a senha?</a>
                </div>
                <button id="btn-entrar">Entrar</button>
            </form>
            <div class="not-member">
                <p>Not a member?<a href="#"> Start a 14-day free trial!</a></p>
            </div>
        </section>
    </div>
</body>

</html>