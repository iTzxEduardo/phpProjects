<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Footer Layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Garantir que o body ocupe toda a altura da tela */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Flex para esticar o conteúdo da página */
        #content {
            flex: 1;
        }

        /* Estilo do Footer */
        #main-footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
        }

        #main-footer h5 {
            font-weight: 600;
            margin-bottom: 20px;
        }

        #main-footer p {
            font-size: 14px;
        }

        #main-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        #main-footer a:hover {
            text-decoration: underline;
        }

        #main-footer ul {
            padding: 0;
            list-style: none;
        }

        #main-footer i {
            margin-right: 8px;
        }

        #main-footer .col-md-4 {
            margin-bottom: 20px;
        }

        #main-footer .text-center {
            font-size: 14px;
            color: #cccccc;
        }
    </style>
</head>
<body>
    <!-- Conteúdo principal -->
    <div id="content">
        <!-- Seu conteúdo aqui -->
    </div>

    <!-- Footer -->
    <footer id="main-footer" class="text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Nome da Empresa</h5>
                    <p>Gerenciamento de projetos eficiente e integrado para equipes modernas.</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="/sobre" class="text-white">Sobre Nós</a></li>
                        <li><a href="/contato" class="text-white">Contato</a></li>
                        <li><a href="/termos" class="text-white">Termos de Serviço</a></li>
                        <li><a href="/privacidade" class="text-white">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> Rua Exemplo, 123, Cidade</li>
                        <li><i class="fas fa-phone"></i> (11) 1234-5678</li>
                        <li><i class="fas fa-envelope"></i> contato@empresa.com</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2024 Nome da Empresa. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
