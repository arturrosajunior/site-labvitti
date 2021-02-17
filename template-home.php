<?php
/*Template Name: Home*/
$full_path = get_template_directory_uri();
while (have_posts()) : the_post();
    $_content_about = apply_filters('the_content', get_the_content());
    $_lista_atuacao = get_field('lista_atuacao');
    $_lista_convenio = get_field('lista_convenio');

endwhile;

get_header();
echo get_slide();

if (is_array($_lista_atuacao)) {
    $i=1;
    foreach ($_lista_atuacao as $key => $value) {
        $_color_span = ($i%2==1) ? 'azul' : 'roxo';
            
        $_atuacoes .=' <div class="col-md-4"><span class="'.$_color_span.'">'.$value['atuacao'].'</span></div>';
        $_atuacoes .= ($i%3==0) ? '</div><div class="row">' : '';
        $i++;
    }    
}

if (is_array($_lista_convenio)) {
    $i=1;
    foreach ($_lista_convenio as $key => $value) {
            
        $_convenios .=' <li><span class="'.$_color_span.'">'.$value['convenio'].'</span></li>';
        $i++;
    }    
}


?>
<div class="p-5"></div>

<div id="o-laboratorio"></div>
<section class="lab">
    <div class="container">
        <h2 class="title">O LABORATÓRIO</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="box-content-center-w-padding">
                    <p class="text-light">O Labvitti Laboratório nasceu com o propósito de
                        contribuir com a saúde e bem-estar da população de Sāo José dos Campos e região. De lá pra cá
                        nunca
                        ttecnologias modernas e investindo em uma forma
                        especial de atender a cada cliente.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="humanizar">
    <div class="box-content-center-w-padding">
        <h4 class="text-light text-center">HUMANIZAR A SAÚDE COM EXCELÊNCIA <br>
            TÉCNICA E GESTÃO EM ANÁLISES CLÍNICAS.</h4>
    </div>
</section>

<div id="areas-de-atuacao"></div>
<section class="atuacao ">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>ÁRES DE<span>ATUAÇÃO</span></h2>
                <p class="p-4">Oferecemos soluções completas em <br>
                    todas as áreas de análises clínicas.
                </p>
            </div>
            <div class="col-md-7 lista">
                <div class="row">
                    <?=$_atuacoes?>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="exames"></div>
<section class="exame ">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>QUAL EXAME<br>VOCÊ VAI REALIZAR?</h2>
                <p class="text-light">Aqui, você encontra todos os exames que realizamos de A a Z. <br>Basta digitar o
                    nome no campo abaixo ou clicar na letra inicial.</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Busque aqui" aria-label="Busque aqui"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <div class="btn btn-default" type="button">buscar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="infraestrutura"></div>

<section class="infraestrutura">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>INFRAESTRUTURA</h2>
                <p class="text-light">Estamos localizados na região central de Sāo José dos Campos, possuímos uma
                    estrutura de quase xxxxxm2 de área construída que conta com estacionamento gratuito, conforto,
                    comodidade e segurança.</p>
            </div>
            <div class="col-md-4">
                <h3>+DE 10MIL <span>EXAMES MENSAIS</span></h3>
                <h3>+DE 3MIL <span>PACIENTES POR MÊS</span></h3>
            </div>
        </div>
    </div>
</section>

<section class="car">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>O LABORATÓRIO LABVITTI<br>
                    VAI ONDE VOCÊ ESTIVER
                </h2>
                <p>Coleta em domicílio com agilidade e comodidade.</p>
                <a href="https://wa.me/5512996389108" class="btn btn-primary" target="_blank"> <span>Agenda já</span>
                    (12) 99638-9108</a>
            </div>
        </div>
    </div>
</section>

<div id="tecnologia"></div>

<section class="tec">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h2>TECNOLOGIA</h2>
                <p class="text-light">Para atingir a confiabilidade máxima nos seus diagnósticos,
                    o Laboratório Labvitti <strong>conta com equipamentos modernos e
                        de alta tecnologia</strong> que garante alta disponibilidade e
                    performance dos serviços, permitindo o acesso seguro aos
                    dados de forma ágil e simples.
                </p>
            </div>
        </div>
    </div>
</section>

<div id="relacionamento"></div>

<section class="relacionamento">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>RELACIONAMENTO<br>
                    COM O CLIENTE</h2>
                <p class="text-light">O <strong>Labvitti</strong> investe em estratégias para transformar cada contato
                    com nossos clientes em uma experiência positiva e humanizada com um atendimento personalizado e
                    eficiente.
                </p>
            </div>
            <div class="col-md-5"></div>

        </div>
    </div>
</section>

<div id="equipe"></div>

<section class="equipe">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <h2>EQUIPE</h2>
                <p class="text-light">
                    Nosso capital humano é a nossa maior riqueza.<br>
                    <br>
                    A excelência é prioridade aqui no <strong>Laboratório Labvitti.</strong><br>
                    <br>
                    Por isso, investimos em profissionais qualificados
                    com experiência na área da saúde através de diversos
                    treinamentos, atualizações e capacitações.
                </p>
            </div>
        </div>
    </div>
</section>

<div id="qualidade"></div>

<section class="qualidade">
    <div class="container">
        <h2>QUALIDADE</h2>
        <p>O <strong>Labvitti</strong> é um laboratório de referência que vem conquistando o mercado por meio de
            rigorosos controles de qualidade interno e externo e assegurando todas as etapas do processo.
            Para manter sua excelência e garantir confiabilidade de seus resultados, possui uma gestão de qualidade e
            selos de certificação
        </p>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="<?=$full_path?>/assets/img/qualidade-logo-1.png" class="img-fluid mx-auto d-block"
                    alt="Qualidade">
            </div>

            <div class="col-md-2">
                <img src="<?=$full_path?>/assets/img/qualidade-logo-3.png" class="img-fluid mx-auto d-block"
                    alt="Qualidade">
            </div>
            <div class="col-md-3">
                <img src="<?=$full_path?>/assets/img/qualidade-logo-2.png" class="img-fluid mx-auto d-block"
                    alt="Qualidade">
            </div>
            <div class="col-md-3">
                <img src="<?=$full_path?>/assets/img/qualidade-logo-4.png" class="img-fluid mx-auto d-block"
                    alt="Qualidade">
            </div>
        </div>
    </div>
</section>


<div id="convenios"></div>

<section class="convenio">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>CONVÊNIOS</h2>
                <p class="text-light">O <strong>Laboratório Labvitti</strong> oferece os melhores serviços para a sua
                    empresa, inclusive
                    coletando na própria empresa.
                    Confira alguns serviços prestados para esse fim:
                </p>
                <ul><?=$_convenios?></ul>
                <p class="text-light">Possuímos também convênio com planos de saúde, <br>
                    médicos, nutricionistas, clínicas e hospitais.</p>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>