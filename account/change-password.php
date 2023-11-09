<?php
$email = $_GET['email']
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/import.css">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Old Days - Redefinir Minha Senha</title>
</head>
<body>
    <div class="announcement">
        <strong>Dia 11 vem ai...</strong>
        <strong id="countdown"></strong>
        <strong>Mais uma promoção pra conta!</strong>
    </div>
    
    <header>
        <div class="header-bar" id="header-content">
            <ul>
                <form class="header-form" id="header-search">
                    <input type="text" name="search" placeholder="Pesquisar..." class="search-bar">
                </form>
            </ul>

            <ul>
                <a href="/index.php" class="header-link" id="header-home">
                    <img src="/assets/img/logo.png" alt="Logo" class="logo">
                </a>
            </ul>

            <ul>
                <a href="login.html" class="header-link" id="header-account">
                    <i class="bi bi-person-fill"></i>
                    <a href="login.html">
                        <h6 class="header-account-text">Entrar</h6>
                    </a>

                    <a href="account/logout.php">
                        <h6 class="header-account-text">Sair</h6>
                    </a>
                </a>
            </ul>
        </div>
    </header>

    <br>

    <nav>
        <div class="nav-bar" id="nav-content">
            <ul>
                <a href="/products.php?console=*&page=1" id="nav-products" class="nav-link"> <strong>Produtos</strong> </a>
            </ul>

            <p>•</p>

            <ul>
                <a href="/news.html" id="nav-news" class="nav-link"> <strong>Novidades</strong> </a>
            </ul>

            <p>•</p>

            <ul>
                <a href="/about-us.html" id="nav-about" class="nav-link"> <strong>Sobre Nós</strong> </a>
            </ul>
        </div>
    </nav>

    <h1 class="info-title">Mudar minha Senha</h1>

    <p class="info-login-description">Vamos lá, basta digitar a sua nova senha e confirmá-la.</p>

    <div id="warning">
        <p id="number" class="invalid"><b>1</b> número;</p>
        <p id="length" class="invalid"><b>8</b> caracteres;</p>
        <p id="letter" class="invalid"><b>1</b> letra <b>minúscula</b>;</p>
        <p id="capital" class="invalid"><b>1</b> letra <b>maiúscula</b>;</p>
    </div>

    <div id="login-menu">
        <form action="trocarSenha.php" class="login-card" method="post">
            <div class="login-content">
                <div class="login-content-area">
                    <label for="password">NOVA SENHA</label>
                    <input type="password" name="password" id="password" autocomplete="new-password" placeholder="Digite sua nova senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                    <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>

                    <label for="confirm-password">CONFIRMAR NOVA SENHA</label>
                    <input type="password" name="confirm-password" id="confirm-password" autocomplete="current-password" placeholder="Confirme sua nova senha">

                    <i class="bi bi-eye-fill" id="btn-senha-confirm" onclick="mostrarSenhaConfirmada()"></i>

                    <?php
                        echo"<input type='email' name='email' value='$email' hidden='true'>";
                    ?>
                </div>
            </div>

            <div class="login-footer">
                <input type="submit" value="MUDAR MINHA SENHA" class="submit">
            </div>
        </form>
    </div>

    <main></main>
    <footer>
        <div id="footer-content">
            <div id="footer-contacts">
                <ul class="footer-list">
                    <li> <h3>Institucional</h3> </li>
                    <li> <a href="about-us.html" class="footer-link">Sobre a Empresa</a> </li>
                </ul>

                <div id="footer-social-media">
                    <a href="https://www.instagram.com/iferreira.joao_/" class="footer-link" id="instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.whatsapp.com/?lang=pt_BR" class="footer-link" id="whatsapp">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                    <a href="https://discord.com/app" class="footer-link" id="discord">
                        <i class="bi bi-discord"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li> <h3>Dúvidas</h3> </li>

                <li> <a href="/help.html" class="footer-link">Ajuda</a> </li>

                <li> <a href="/privacy.html" class="footer-link">Privacidade</a> </li>

                <li> <a href="/exchange-warranty.html" class="footer-link">Trocas e Garantia</a> </li>

                <li> <a href="/payment-shipping.html" class="footer-link">Pagamento e Envio</a> </li>
            </ul>

            <ul class="footer-list">
                <li> <h3>Contato</h3> </li>

                <li> <a href="/assistance.html" class="footer-link">Atendimento</a> </li>

                <li> <a href="/doubts.html" class="footer-link">Dúvidas?</a> </li>

                <li> <a href="/contact-us.html" class="footer-link">Fale Conosco</a> </li>
            </ul>

            <div id="footer-subscribe">
                <h3>Receba novidades</h3>
                <p>Assine e receba novidades sempre em primeira mão da loja Old Days:</p>

                <div id="input-group">
                    <input type="email" id="email" placeholder="Digite seu e-mail">
                    <button> <i class="bi bi-envelope-fill"></i> </button>
                </div>
            </div>
        </div>

        <div id="footer-copyright">&#169 2023 all rights reserved</div>
    </footer>

    <button onclick="topFunction()" id="topBtn" title="Vá para o topo">Ir pro Topo</button>

    <script src="/assets/js/countdown.js"></script>
    <script src="/assets/js/show-password.js"></script>
    <script src="/assets/js/password-validation.js"></script>
    <script src="/assets/js/password-verification.js"></script>
    <script src="/assets/js/topBtn.js"></script>
</body>
</html>