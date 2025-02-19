<?php
// Array com feedbacks e informações de saúde
$feedbacks = [
    [
        'nome' => 'Saúde Preventiva',
        'cargo' => 'Importância dos Check-ups Regulares',
        'mensagem' => 'Manter a saúde em dia vai muito além de tratar doenças quando elas surgem. A prevenção é a chave para uma vida longa e saudável, e os check-ups regulares desempenham um papel crucial nesse processo. Mas por que exatamente essas visitas ao médico são tão importantes?',
        'imagem' => 'img/feedbacks/saude-prevencao.jpg',
        'itens' => [
            'Prevenir as doenças',
            'Detectar problemas precocemente',
            'Monitoramento contínuo da saúde',
            'Redução de custos com saúde'
        ]
    ],
];
?>

<div class="feedback-items">
    <div class="row">
        <?php foreach ($feedbacks as $feedback) : ?>
            <div class="col-md-9 feedback-item <?php echo ($feedback['imagem'] == 'img/feedbacks/saude-prevencao.jpg') ? 'content-right' : 'content-left'; ?>">
                <!-- Feedback Item Start -->
                <div class="row">
                    <?php if (isset($feedback['imagem'])) : ?>
                        <div class="col-md-3 col-sm-2 col-xs-3 feedback-img">
                            <img src="<?php echo $feedback['imagem']; ?>" alt="" class="img-responsive img-circle" />
                        </div>
                    <?php endif; ?>
                    <div class="col-md-9 col-sm-10 col-xs-9 feedback-content">
                        <div class="mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__supporting-text">
                                <p>
                                    <?php echo $feedback['mensagem']; ?>
                                    <cite><?php echo $feedback['nome']; ?>, <?php echo $feedback['cargo']; ?></cite>
                                </p>
                                <ul>
                                    <?php foreach ($feedback['itens'] as $item) : ?>
                                        <li><?php echo $item; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feedback Item End -->
            </div>
        <?php endforeach; ?>
    </div>
</div>
