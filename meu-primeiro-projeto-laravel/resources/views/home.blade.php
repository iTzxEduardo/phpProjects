<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('components.nav-bar')
    @include('components.header')
 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Fundo branco claro */
            color: #333; /* Texto escuro para contraste */
        }

        header {
            background-color: #4CAF50; /* Fundo verde para o cabeçalho */
            color: white; /* Texto branco no cabeçalho */
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .welcome-message, .call-to-action {
            background-color: #ffffff; /* Fundo branco para seções */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            padding: 20px;
            margin-bottom: 20px;
        }

        .welcome-message h2, .call-to-action h3 {
            color: #333; /* Texto escuro para títulos */
        }

        .call-to-action ul {
            list-style: none;
            padding: 0;
        }

        .call-to-action ul li {
            margin: 10px 0;
        }

        .call-to-action a {
            color: #4CAF50; /* Cor dos links */
            text-decoration: none;
        }

        .call-to-action a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #4CAF50; /* Fundo verde para o rodapé */
            color: white; /* Texto branco no rodapé */
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
 
    <main>
        <section class="welcome-message">
            <h2>Olá!</h2>
            <p>Estamos felizes em recebê-lo em nosso site. Aqui você encontrará uma variedade de recursos e informações para ajudar você a aproveitar ao máximo o que temos a oferecer.</p>
            <p>Explore nossas seções, descubra novidades e entre em contato conosco se tiver alguma dúvida.</p>
        </section>
        <section class="call-to-action">
            <h3>O que você gostaria de fazer?</h3>
            <ul>
                <li><a href="#explore">Explorar Recursos</a></li>
                <li><a href="#about">Saber Mais Sobre Nós</a></li>
                <li><a href="#contact">Entrar em Contato</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Nossa Empresa. Todos os direitos reservados.</p>
    </footer>



        

    @include('components.footer')
</body>
</html>