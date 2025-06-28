<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        form {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            width: 300px;
        }
        input {
            padding: 10px;
            margin: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($_SESSION['erro'])): ?>
        <div class="error">
            <?= $_SESSION['erro']; ?>
        </div>
        <?php unset($_SESSION['erro']); ?>
    <?php endif; ?>

    <form method="POST" action="/login/post">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>
