<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Resetando algumas margens e preenchimentos padrão */
        body, h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        /* Estilizando a navbar */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 10px 0;
        }

        .navbar-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-link:hover {
            background-color: #555;
            color: #fff;
        }

        .navbar-link.active {
            background-color: #666;
        }

        /* Estilizando o conteúdo principal */
        .content {
            padding: 20px;
            text-align: center;
        }

        /* Estilizando o footer */
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>



    <footer class="footer">
        <p>&copy; 2024 Seu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
