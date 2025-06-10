<section class="welcome">
    <div class="overlay"></div>
    <h1 >Transformando bebidas em <br> experiências incríveis.</h1>
   <div class="clear"></div>
</section><!--welcome-->

<section id="home" class="home">
    <div class="container sumir" style="display: flex; flex-wrap: wrap;">
        <div class="text-home">
            <h2>Bem-vindo à Vargas Drinks!</h2>
            <p>Sou Alexandre Vargas, proprietário e criador da Vargas Drinks, uma equipe de open bar especializada em atender festas e eventos com excelência e dedicação. Nossa missão é trazer alegria e diversão para você e sua família, garantindo que seus convidados sejam tratados com o melhor atendimento possível.</p>
            <span>Com a Vargas Drinks, você pode contar com:</span>
            <br><br>
            <ul>
                <li><i class="fa-solid fa-check"></i> Atendimento personalizado e dedicado.</li>
                <li><i class="fa-solid fa-check"></i> Excelência em qualidade e apresentação.</li>
                <li><i class="fa-solid fa-check"></i> Diversão e alegria garantidas para seus convidados.</li>
            </ul>
            <p>Deixe que a Vargas Drinks cuide do seu evento e faça com que seja inesquecível!</p>
            <a href="<?php echo INCLUDE_PATH; ?><?= (isset($_GET['url']) ? '?url=home#contato' : '#contato') ?>">Contate-nos</a> <span>para saber mais e reserve sua data!</span>

            <div style="color:white;" id="btn-galeria" class="btn">Ver Galeria</div>
        </div><!--text-home-->

        <div class="img-home">
            <img src="<?php echo INCLUDE_PATH; ?>images/home-foto.png"/>
        </div><!--img-home-->
    </div><!--container-->
</section><!--home-->

<div id="galeria" class="galeria">
    <div class="galeria-wraper">
        <div id="fechar-galeria" class="btn-galeria">
            <i class="fa-solid fa-x"></i>
        </div>

        <div class="container">
            <div style="height: 600px;" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i <= 13; $i++): ?>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/galeria<?php echo ($i == 0 ? '' : $i); ?>.jpg');" class="swiper-slide"></div>
                    <?php endfor; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="clear"></div>
    </div><!--galeria-wraper-->
</div><!--galeria-->

<section id="drinks-e-servicos" class="drinks">
    <h2>Sabor, Qualidade e Experiência!</h2>

    <div class="container sumir">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                    $drinks = [
                        ['slider.jpg', 'Conquista', 'Refrescante, elegante e leve. Um brinde que encanta e celebra cada momento.'],
                        ['slider1.jpg', 'Soda Italiana', 'Refrescante, elegante e marcante. Um brinde às conquistas com sabor e leveza.'],
                        ['slider5.jpg', 'Pina Colada', 'Tropical, cremosa e irresistível. Frescor e leveza em cada gole.'],
                        ['slider4.jpg', 'Caipirinha', 'Autêntica e vibrante. Une doçura, cítrico e intensidade em cada gole.'],
                        ['slider3.jpg', 'Dry Martini', 'Clássico e sofisticado. Elegância líquida em um gole seco.'],
                        ['slider11.jpg', 'Moscou Mule', 'Refrescante e marcante. Mistura gengibre, vodca e limão com muita personalidade.'],
                    ];
                foreach($drinks as $drink): ?>
                <div class="swiper-slide">
                    <div class="center-drink">
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/<?php echo $drink[0]; ?>');" class="img"></div><!--img-->
                        <div class="desc-drink">
                            <p><?php echo $drink[1]; ?></p>
                            <p><?php echo $drink[2]; ?></p>
                        </div><!--desc-drink-->
                    </div><!--center-drink-->
                </div><!--swiper-slide-->
                <?php endforeach; ?>
            </div><!--swiper-wrapper-->
            <div class="swiper-pagination"></div>
        </div><!--swiper-->
    </div><!--container-->
</section><!--drinks-->

<section class="servicos">
    <h2>Seu evento, Nosso bar, Sua melhor história!</h2>
    <div style="display: flex; gap:30%;" class="container sumir">
        <div class="left-serv">
            <p>Nossa coquetelaria é pensada para transformar cada brinde em um momento especial. Trabalhamos com uma carta de drinks autorais, releituras de clássicos e opções não alcoólicas, sempre preparados com ingredientes frescos, infusões artesanais e combinações surpreendentes.</p>
            <div class="container-img">
                <img src="<?php echo INCLUDE_PATH; ?>images/servicos-img.jpg"/>
            </div><!--container-img-->
        </div><!--left-serv-->

        <div class="right-serv">
            <span>Nossos serviços incluem:</span>
            <ul>
                <li><i class="fa-solid fa-check-double"></i> Bar completo para eventos: estrutura, decoração e todos os insumos.</li>
                <li><i class="fa-solid fa-check-double"></i> Criação de carta personalizada: alinhada ao seu estilo, tema ou ocasião.</li>
                <li><i class="fa-solid fa-check-double"></i> Equipe especializada: bartenders experientes, atendimento ágil e descontraído.</li>
                <li><i class="fa-solid fa-check-double"></i> Drinks autorais e clássicos: preparados na hora, com muita técnica e estética.</li>
                <li><i class="fa-solid fa-check-double"></i> Opções sem álcool e mocktails: para que todos possam brindar.</li>
            </ul>
        </div><!--right-serv-->
    </div><!--container-->
</section><!--servicos-->

<section id="contato" class="contato">
    <h2>Vamos Preparar Seu Evento?</h2>
    <p class="pcontato">Quer transformar seu evento em uma experiência inesquecível?...</p>
    <div class="container sumir">
        <form method="post" id="form-contato">
            <?php
            $campos = [
                ['nome', 'Nome (*)', 'text'],
                ['email', 'E-mail (*)', 'email'],
                ['telefone-celular', 'Telefone Celular (*)', 'text', 'ex:(DDD) Número'],
                ['telefone', 'Telefone (*)', 'text', 'ex:(DDD) Número'],
                ['cidade', 'Cidade (*)', 'text'],
                ['estado', 'Estado (*)', 'text'],
            ];
            foreach($campos as $campo):
            ?>
            <div class="single-form">
                <p><?php echo $campo[1]; ?></p>
                <input required type="<?php echo $campo[2]; ?>" name="<?php echo $campo[0]; ?>" <?php echo isset($campo[3]) ? 'placeholder="'.$campo[3].'"' : ''; ?>/>
            </div><!--single-form-->
            <?php endforeach; ?>

            <div class="single-form">
                <p>Vamos Planejar Juntos? Me Conta Como Vai Ser Esse Brinde! (*)</p>
                <textarea required name="mensagem"></textarea>
                <input id="btn-enviar" class="btn" type="submit" name="acao" value="ENVIAR"/>
                 <div id="sucesso" class="form-sucesso">Formulário enviado com sucesso</div>
                <input type="hidden" name="acao" value="enviar"/>
            </div><!--single-form-->

            <div class="clear"></div>
            <input type="text" name="website" style="display:none">
        </form>
    </div><!--container-->
</section><!--contato-->

<section id="social" class="socials sumir">
    <h2>Quer Drink Diferente? Então Segue A Gente!</h2>
    <section class="container sumir">
        <div class="imgs-social">
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/social-foto.jpg');" class="single-img"></div>
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/social-foto1.jpg');" class="single-img"></div>
            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/social-foto2.jpg');" class="single-img"></div>
        </div><!--imgs-social-->

        <div class="clear"></div>

        <div class="container-btn">
            <div style="width: 60px;;" class="btn">
                <a target="_blank" href="https://www.instagram.com/vargas_drinks?igsh=ajRjamkyZXFrYzB6"><i class="fa-brands fa-instagram"></i></a>
            </div><!--btn-->
            <div style="width:auto;" class="btn">
                <a target="_blank" href="https://www.facebook.com/share/19MGKU5rk6/"><i class="fa-brands fa-facebook"></i></a>    
            </div><!--btn-->
        </div><!--container-btn-->
    </section><!--container-->
</section><!--socials-->