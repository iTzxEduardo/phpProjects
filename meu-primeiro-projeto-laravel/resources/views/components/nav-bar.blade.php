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

        /* Estilizando os links da navbar */
        .navbar-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Adicionando efeito ao passar o mouse sobre os links */
        .navbar-link:hover {
            background-color: #555;
            color: #fff;
        }

        /* Estilizando o link ativo (opcional) */
        .navbar-link.active {
            background-color: #666;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="navbar-link">Home</a>
        <a href="/produto" class="navbar-link">Produto</a>
        <a href="/contato" class="navbar-link">Contato</a>
    </nav>
</body>
</html>
