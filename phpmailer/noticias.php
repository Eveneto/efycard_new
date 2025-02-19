<?php
// Arquivo de notícias
$noticias = [
    [
        "titulo" => "O que é o EfyCard e como ele pode transformar sua experiência de saúde?",
        "resumo" => "Com ele, você pode usufruir de diversos benefícios, como descontos em consultas, exames, procedimentos e medicamentos, além de contar com um atendimento rápido e de qualidade.",
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo1.jpeg",
        "link" => "#"
    ],
    [
        "titulo" => "Como se Credenciar como Parceiro do EfyCard?",
        "resumo" => "Este artigo irá guiá-lo passo a passo sobre como se credenciar como parceiro do EfyCard, destacando os benefícios e os requisitos necessários para fazer parte desta rede inovadora.",
        // "autor" => "Mariana",
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo2.jpeg",
        "link" => "#"
    ],
    [
        "titulo" => "Os benefícios do EfyCard para pacientes: economia e qualidade em um só cartão",
        "resumo" => "Neste artigo, vamos explorar os diversos benefícios que o EfyCard oferece aos seus usuários, destacando como ele pode transformar a experiência de saúde dos pacientes.",
        // "autor" => "Carlos",
        "data" => date("d/m/Y"), // Data atual
        "imagem" => "img/blog-posts/artigo3.jpeg",
        "link" => "#"
    ]
];
?>


<div class="row">
    <?php foreach ($noticias as $noticia): ?>
        <div class="col-md-4 col-sm-6 post-item">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <div class="post-img">
                        <a href="<?= $noticia['link'] ?>">
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
                            <!-- <i class="fa fa-user"></i>Por <a href="#"><?= $noticia['autor'] ?></a> <span>|</span> -->
                            <i class="fa fa-calendar"></i><a href="#"><?= $noticia['data'] ?></a>
                        </p>
                    </div>
                    <div class="post-summary">
                        <p><?= $noticia['resumo'] ?></p>
                    </div>
                </div>
                <div class="mdl-card__actions mdl-card--border clearfix">
                    <a href="<?= $noticia['link'] ?>" class="read-more mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent azul">Ler mais</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>