<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo INCLUDE_PATH; ?>">
    <meta property="og:title" content="Vargas Drinks - Coquetelaria para Eventos">
    <meta property="og:description" content="Drinks que encantam seu evento. Coquetelaria de alto padrão para festas e eventos com a Vargas Drinks.">
    <meta property="og:image" content="<?php echo INCLUDE_PATH; ?>images/og-image.png">
    <meta property="og:site_name" content="Vargas Drinks">
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo INCLUDE_PATH; ?>">
    <meta name="twitter:title" content="Vargas Drinks - Coquetelaria para Eventos">
    <meta name="twitter:description" content="Drinks que encantam seu evento. Coquetelaria de alto padrão para festas e eventos com a Vargas Drinks.">
    <meta name="twitter:image" content="<?php echo INCLUDE_PATH; ?>images/og-image.png">
    <!-- Meta SEO Básico -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Vargas Drinks | Bar, Barman e Buffet para Eventos em Petrópolis e RJ</title>
    <meta name="description" content="Barman e bar para eventos em Petrópolis. Drinks autorais, coquetelaria artesanal e estrutura completa para casamentos, festas e eventos corporativos.">
    <meta name="author" content="Vargas Drinks">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Vargas Drinks, barman para eventos, bar para festas, coquetelaria para eventos, drinks artesanais, bartender para casamento, serviço de bar, coquetelaria personalizada, drinks para festas, bar para casamento, bar para eventos corporativos, barman profissional, estrutura de bar para eventos">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH; ?>favicon-96x96.png" sizes="96x96"/>
    <!-- Fonts e CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modak&family=Montserrat:wght@100..900&family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet"/>
</head>

<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#home' : '#home') ?>">
                <img src="<?php echo INCLUDE_PATH; ?>images/logo.png" alt="Logo Vargas Drinks"/>
            </a>
        </div><!--logo-->

        <!-- Menu Desktop -->
        <nav class="desktop">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#home' : '#home') ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#drinks-e-servicos' : '#drinks-e-servicos') ?>">Drinks & Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#contato' : '#contato') ?>">Reserve seu Evento</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#social' : '#social') ?>">Redes Sociais</a></li>
            </ul>
        </nav><!--desktop-->

        <!-- Menu Mobile -->
        <nav id="mobile" class="mobile">
            <div id="btn-menu" class="menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#home' : '#home') ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#drinks-e-servicos' : '#drinks-e-servicos') ?>">Drinks & Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#contato' : '#contato') ?>">Reserve seu Evento</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) && $_GET['url'] !== 'home' ? '?url=home#social' : '#social') ?>">Redes Sociais</a></li>
            </ul>
        </nav><!--mobile-->

        <div class="clear"></div>
    </div><!--container-->
</header><!--header-->

    <!-- Conteúdo dinâmico -->
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if (file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        } else {
            include('pages/404.php');
        }
    ?>

<a 
    href="https://wa.me/5524993356375?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20de%20bartender%20e%20coquetelaria%20da%20Vargas%20Drinks%20com%20Alexandre%20Vargas.%20Poderia%20me%20passar%20informa%C3%A7%C3%B5es%20e%20valores%3F%20Obrigado(a)!" 
    target="_blank" 
    class="whatsapp-float"
    title="Fale conosco no WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

    <footer>
        <p>&copy; <?= date('Y'); ?> Vargas Drinks</p>
        <p>Desenvolvido por <a target="_blank" href="https://devpedrohenrique25.github.io/Portifolio/">Pedro Henrique</a></p>
    </footer><!--footer-->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/8ad3173d23.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slide.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/menuMobile.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/galeria.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scroll.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/form.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scrollanimation.js"></script>
</body>
</html>