<?php
// Arquivo de notícias
$noticias = [
    [
        "titulo" => "O que é o EfyCard e como ele pode transformar sua saúde?", // 62 caracteres
        "resumo" => "Com o EfyCard, você aproveita descontos em consultas, exames, remédios e muito mais, com atendimento rápido e de alta qualidade.", // 160 caracteres
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo1.jpeg",
        "link" => "https://efycard.com.br/2025_2/o-que-e-efycard.php"
    ],
    [
        "titulo" => "Como se tornar parceiro e fazer parte do programa EfyCard hoje?", // 62 caracteres
        "resumo" => "Saiba como credenciar-se ao EfyCard. Um guia prático com passos claros, benefícios exclusivos e os requisitos para ingressar na rede.", // 160 caracteres
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo2.jpeg",
        "link" => "https://efycard.com.br/2025_2/como-credenciar.php"
    ],
    [
        "titulo" => "Os benefícios incríveis que o EfyCard traz para os pacientes na saúde", // 62 caracteres
        "resumo" => "Com o EfyCard, os pacientes economizam de verdade, com descontos especiais em serviços de saúde e qualidade superior em um só cartão.", // 160 caracteres
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo3.jpeg",
        "link" => "https://efycard.com.br/2025_2/noticia-beneficios.php"
    ]
];
?>




<div class="row noticias-container">
    <?php foreach ($noticias as $noticia): ?>
        <div class="col-md-4 col-sm-6 post-item noticia-card">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <div class="post-img">
                        <a href="<?= $noticia['link'] ?>" target="_blank">
                            <img src="<?= $noticia['imagem'] ?>" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="mdl-card__supporting-text">
                    <section class="post-title">
                        <h2>
                            <a href="<?= $noticia['link'] ?>"><?= $noticia['titulo'] ?></a>
                        </h2>
                    </section>
                    <div class="post-metadata">
                        <p>
                            <i class="fa fa-calendar"></i><a href="#"><?= $noticia['data'] ?></a>
                        </p>
                    </div>
                    <div class="post-summary">
                        <p><?= $noticia['resumo'] ?></p>
                    </div>
                </div>
                <div class="mdl-card__actions mdl-card--border clearfix">
                    <a href="<?= $noticia['link'] ?>" target="_blank" class="read-more mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent azul">Ler mais</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
