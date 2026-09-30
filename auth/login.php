<?php

session_start();

if (isset($_SESSION['admin_id'])) {
    header("Location: ../admin/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - Sweet Cake</title>

    <link rel="stylesheet" href="../assets/style.css">

    <style>

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff5f8;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(185, 92, 122, 0.15);
        }

        .login-card h1 {
            margin-bottom: 10px;
            text-align: center;
            color: #593744;
        }

        .login-card .login-desc {
            text-align: center;
            color: #856b75;
            margin-bottom: 25px;
        }

        .login-form label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            color: #593744;
        }

        .login-form input {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 18px;
            border: 1px solid #e7b8c7;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 15px;
            outline: none;
        }

        .login-form input:focus {
            border-color: #d97f9d;
            box-shadow: 0 0 0 3px rgba(217, 127, 157, 0.12);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #d97f9d;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #b85c7a;
        }

        .login-back {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #b85c7a;
            text-decoration: none;
        }

        .login-back:hover {
            text-decoration: underline;
        }

        .login-alert {
            background: #fde8ef;
            color: #b85c7a;
            padding: 10px 12px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

    </style>

</head>

<body>

<div class="login-page">

    <div class="login-card">

        <h1>Login Admin</h1>

        <p class="login-desc">
            Silakan login untuk masuk ke dashboard.
        </p>

        <?php

        if (isset($_SESSION['error'])) {

            echo '<div class="login-alert">'
                . htmlspecialchars($_SESSION['error']) .
                '</div>';

            unset($_SESSION['error']);
        }

        ?>

        <form
            action="proses_login.php"
            method="POST"
            class="login-form"
        >

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Masukkan username"
                required
            >

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

            <button
                type="submit"
                class="login-btn"
            >
                Login
            </button>

        </form>

        <a
            href="../index.php"
            class="login-back"
        >
            ← Kembali ke Website
        </a>

    </div>

</div>

</body>

</html>