<?php
// array com as informações dos serviços
// Definindo o array $services com todos os serviços da categoria 'exames'
$services = [
    ['category' => 'exames', 'image' => 'img/icones/ressonancia.png', 'title' => 'Ressonância Magnética de Alto Campo', 'alt' => 'Ressonância Magnética'],
    ['category' => 'exames', 'image' => 'img/icones/tomografia.png', 'title' => 'Tomografia Computadorizada Multislice', 'alt' => 'Tomografia Computadorizada'],
    ['category' => 'exames', 'image' => 'img/icones/ultrassonografia.png', 'title' => 'Ultrassonografia de Alta Resolução', 'alt' => 'Ultrassom'],
    ['category' => 'exames', 'image' => 'img/icones/radiologia.png', 'title' => 'Radiologia Intervencionista Punções e Drenagens', 'alt' => 'Radiologia Intervencionista'],
    ['category' => 'exames', 'image' => 'img/icones/puncoes3.png', 'title' => 'Punções Guiadas por Ultrassonografia de Mama, Tireoide e Próstata', 'alt' => 'Punções'],
    ['category' => 'exames', 'image' => 'img/icones/radiologia_digital.png', 'title' => 'Radiologia Digital', 'alt' => 'Radiologia Digital'],
    ['category' => 'exames', 'image' => 'img/icones/mamografia.png', 'title' => 'Mamografia Digital', 'alt' => 'Mamografia Digital'],
    ['category' => 'exames', 'image' => 'img/icones/densiometria.png', 'title' => 'Densitometria Óssea', 'alt' => 'Densitometria Óssea'],
    ['category' => 'exames', 'image' => 'img/icones/laboratorio.png', 'title' => 'Laboratório de Análises', 'alt' => 'Laboratório de Análises'],
    ['category' => 'exames', 'image' => 'img/icones/histerossalpingografia.png', 'title' => 'Histerossalpingografia', 'alt' => 'Histerossalpingografia'],
    ['category' => 'exames', 'image' => 'img/icones/ultrassonografia.png', 'title' => 'Ultrassonografia com Doppler Colorido e 3D/4D', 'alt' => 'Ultrassonografia'],
    ['category' => 'exames', 'image' => 'img/icones/espirometria.png', 'title' => 'Espirometria', 'alt' => 'Espirometria'],
    ['category' => 'exames', 'image' => 'img/icones/tomografiaodontologica.png', 'title' => 'Tomografia Odontológica', 'alt' => 'Tomografia Odontológica'],
    ['category' => 'exames', 'image' => 'img/icones/radiologia_odontologica.png', 'title' => 'Radiologia Odontológica', 'alt' => 'Radiologia Odontológica'],
    ['category' => 'exames', 'image' => 'img/icones/documentacaoodontologica.png', 'title' => 'Documentação Odontológica', 'alt' => 'Documentação Odontológica'],
    ['category' => 'exames', 'image' => 'img/icones/colposcopia.png', 'title' => 'Colposcopia', 'alt' => 'Colposcopia'],
    ['category' => 'exames', 'image' => 'img/icones/citologiaginecologica.png', 'title' => 'Citologia Ginecológica', 'alt' => 'Citologia Ginecológica'],
    ['category' => 'exames', 'image' => 'img/icones/neurologia.png', 'title' => 'Neurointervenção', 'alt' => 'Neurointervenção'],
    ['category' => 'exames', 'image' => 'img/icones/teste-ergometrico2.png', 'title' => 'Teste Ergométrico', 'alt' => 'Teste Ergométrico'],
    ['category' => 'exames', 'image' => 'img/icones/teste-do-olhinho.png', 'title' => 'Teste do Olhinho', 'alt' => 'Teste do Olhinho'],
    ['category' => 'exames', 'image' => 'img/icones/raio-x.png', 'title' => 'Raio-X', 'alt' => 'Raio-X'],
    ['category' => 'exames', 'image' => 'img/icones/polissonografia.png', 'title' => 'Polissonografia', 'alt' => 'Polissonografia'],
    ['category' => 'exames', 'image' => 'img/icones/mrpa.png', 'title' => 'Monitorização Residencial da Pressão Arterial (MRPA)', 'alt' => 'MRPA'],
    ['category' => 'exames', 'image' => 'img/icones/Mapa-24-horas.png', 'title' => 'Monitorização Ambulatorial da Pressão Arterial (MAPA) - 24 Horas', 'alt' => 'MAPA 24 Horas'],
    ['category' => 'exames', 'image' => 'img/icones/holter-24-horas.png', 'title' => 'Holter (Eletrocardiograma) - 24 Horas', 'alt' => 'Holter 24 Horas'],
    ['category' => 'exames', 'image' => 'img/icones/fundo-de-olho.png', 'title' => 'Exame de Fundo de Olho', 'alt' => 'Fundo de Olho'],
    ['category' => 'exames', 'image' => 'img/icones/endoscopia.png', 'title' => 'Endoscopia', 'alt' => 'Endoscopia'],
    ['category' => 'exames', 'image' => 'img/icones/ecocardiograma-com-doppler.png', 'title' => 'Ecocardiograma com Doppler', 'alt' => 'Ecocardiograma com Doppler'],
    ['category' => 'exames', 'image' => 'img/icones/colonoscopia.png', 'title' => 'Colonoscopia', 'alt' => 'Colonoscopia'],
    ['category' => 'exames', 'image' => 'img/icones/biopsias.png', 'title' => 'Biópsias', 'alt' => 'Biópsias'],
    ['category' => 'especialidades', 'image' => 'img/icones/pneumologista2.png', 'title' => 'Pneumologia', 'alt' => 'Pneumologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/ginecologista2.png', 'title' => 'Ginecologia', 'alt' => 'Ginecologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/ortopedia2.png', 'title' => 'Ortopedia', 'alt' => 'Ortopedia'],
    ['category' => 'especialidades', 'image' => 'img/icones/nutricionista1.png', 'title' => 'Nutrição', 'alt' => 'Nutrição'],
    ['category' => 'especialidades', 'image' => 'img/icones/psicologo1.png', 'title' => 'Psicologia', 'alt' => 'Psicologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/urologista.png', 'title' => 'Urologista', 'alt' => 'Urologista'],
    ['category' => 'especialidades', 'image' => 'img/icones/cirurgiao.png', 'title' => 'Cirurgião Geral', 'alt' => 'Cirurgia Geral'],
    ['category' => 'especialidades', 'image' => 'img/icones/radiografia.png', 'title' => 'Radiologia Intervencionista', 'alt' => 'Radiologia Intervencionista'],
    ['category' => 'especialidades', 'image' => 'img/icones/cardiologia2.png', 'title' => 'Cardiologia', 'alt' => 'Cardiologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/psiquiatra.png', 'title' => 'Psiquiatria', 'alt' => 'Psiquiatria'],
    ['category' => 'especialidades', 'image' => 'img/icones/clinico-geral.png', 'title' => 'Clínico Geral', 'alt' => 'Clínico Geral'],
    ['category' => 'especialidades', 'image' => 'img/icones/dermatologista.png', 'title' => 'Dermatologia', 'alt' => 'Dermatologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/endocrinologista.png', 'title' => 'Endocrinologia', 'alt' => 'Endocrinologista'],
    ['category' => 'especialidades', 'image' => 'img/icones/gastroenterologista.png', 'title' => 'Gastroenterologia', 'alt' => 'Gastroenterologista'],
    ['category' => 'especialidades', 'image' => 'img/icones/oftalmologista.png', 'title' => 'Oftalmologia', 'alt' => 'Oftalmologista'],
    ['category' => 'especialidades', 'image' => 'img/icones/reumatologista.png', 'title' => 'Reumatologia', 'alt' => 'Reumatologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/neurologista.png', 'title' => 'Neurologia', 'alt' => 'Neurologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/psicanalise.png', 'title' => 'Psicanálise', 'alt' => 'Psicanálise'],
    ['category' => 'especialidades', 'image' => 'img/icones/pediatria.png', 'title' => 'Pediatria', 'alt' => 'Pediatria'],
    ['category' => 'especialidades', 'image' => 'img/icones/fisioterapia.png', 'title' => 'Fisioterapia', 'alt' => 'Fisioterapia'],
    ['category' => 'especialidades', 'image' => 'img/icones/fonoaudiologia.png', 'title' => 'Fonoaudiologia', 'alt' => 'Fonoaudiologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/musicoterapia.png', 'title' => 'Musicoterapia', 'alt' => 'Musicoterapia'],
    ['category' => 'especialidades', 'image' => 'img/icones/terapia-ocupacional.png', 'title' => 'Terapia Ocupacional', 'alt' => 'Terapia Ocupacional'],
    ['category' => 'especialidades', 'image' => 'img/icones/psicomotricidade.png', 'title' => 'Psicomotricidade', 'alt' => 'Psicomotricidade'],
    ['category' => 'especialidades', 'image' => 'img/icones/psicopedagogia.png', 'title' => 'Psicopedagogia', 'alt' => 'Psicopedagogia'],
    ['category' => 'especialidades', 'image' => 'img/icones/neuropsicopedagoga.png', 'title' => 'Neuropsicopedagogia', 'alt' => 'Neuropsicopedagoga'],
    ['category' => 'especialidades', 'image' => 'img/icones/cirurgião-bucomaxilo-facial.png', 'title' => 'Cirurgião Bucomaxilo Facial', 'alt' => 'Cirurgião Bucomaxilo Facial'],
    ['category' => 'especialidades', 'image' => 'img/icones/endocrinologista-pediatrico.png', 'title' => 'Endocrinologista Pediátrico', 'alt' => 'Endocrinologista Pediátrico'],
    ['category' => 'especialidades', 'image' => 'img/icones/neuropediatra.png', 'title' => 'Neuropediatra', 'alt' => 'Neuropediatra'],
    ['category' => 'especialidades', 'image' => 'img/icones/vascular.png', 'title' => 'Vascular', 'alt' => 'Vascular'],
    ['category' => 'especialidades', 'image' => 'img/icones/nutrologia.png', 'title' => 'Nutrologia', 'alt' => 'Nutrologia'],
    ['category' => 'especialidades', 'image' => 'img/icones/medica-da-familia.png', 'title' => 'Médica da Família', 'alt' => 'Médica da Família'],
    ['category' => 'especialidades', 'image' => 'img/icones/geriatra.png', 'title' => 'Geriatra', 'alt' => 'Geriatra'],
    ['category' => 'especialidades', 'image' => 'img/icones/otorrinolaringologista.png', 'title' => 'Otorrinolaringologia', 'alt' => 'Otorrinolaringologia'],
    ['category' => 'medicina', 'image' => 'img/icones/acupuntura.png', 'title' => 'Acupuntura', 'alt' => 'Acupuntura'],
    ['category' => 'medicina', 'image' => 'img/icones/aromaterapia.png', 'title' => 'Aromaterapia', 'alt' => 'Aromaterapia'],
    ['category' => 'medicina', 'image' => 'img/icones/terapia-floral.png', 'title' => 'Terapia Floral', 'alt' => 'Terapia Floral'],
    ['category' => 'medicina', 'image' => 'img/icones/ventosaterapia.png', 'title' => 'Ventosaterapia', 'alt' => 'Ventosaterapia'],
    ['category' => 'medicina', 'image' => 'img/icones/ozonioterapia.png', 'title' => 'Ozonioterapia', 'alt' => 'Ozonioterapia'],
    ['category' => 'medicina', 'image' => 'img/icones/fitoterapia.png', 'title' => 'Fitoterapia', 'alt' => 'Fitoterapia'],
    ['category' => 'medicina', 'image' => 'img/icones/detox-ionico.png', 'title' => 'Detox Iônico', 'alt' => 'Detox Iônico'],
    ['category' => 'medicina', 'image' => 'img/icones/manta-termica.png', 'title' => 'Manta Térmica', 'alt' => 'Manta Térmica'],
    ['category' => 'medicina', 'image' => 'img/icones/drenagem-linfatica-com-manta-termica-e-maquina.png', 'title' => 'Drenagem Linfática com Manta Térmica e Máquina', 'alt' => 'Drenagem Linfática com Manta Térmica e Máquina'],
    ['category' => 'medicina', 'image' => 'img/icones/auriculoterapia.png', 'title' => 'Auriculoterapia', 'alt' => 'Auriculoterapia'],
    ['category' => 'medicina', 'image' => 'img/icones/drenagem-linfatica-manual.png', 'title' => 'Drenagem Linfática Manual', 'alt' => 'Drenagem Linfática Manual'],
    ['category' => 'medicina', 'image' => 'img/icones/liberacao-miofascial.png', 'title' => 'Liberação Miofascial', 'alt' => 'Liberação Miofascial'],
    ['category' => 'medicina', 'image' => 'img/icones/massagem-relaxante-pedras-quentes.png', 'title' => 'Massagem Relaxante com Pedras Quentes', 'alt' => 'Massagem Relaxante com Pedras Quentes'],
    ['category' => 'medicina', 'image' => 'img/icones/massagem-relaxante.png', 'title' => 'Massagem Relaxante', 'alt' => 'Massagem Relaxante']
];

?>

<div id="portfolio">
    <div class="container">
        <!-- Section Title Start -->
        <h2 class="section-title text-center mb-5">Rede de <span class="azul">Serviços</span></h2>
        <!-- Section Title End -->

        <!-- Menu de Filtro Start -->
        <div class="portfolio-filter-menu mdl-shadow--2dp clearfix mb-5">
            <ul class="pull-left">
                <li data-filter="*" class="active">Todos</li>
                <li data-filter="exames">Exames</li>
                <li data-filter="especialidades">Especialidades</li>
                <li data-filter="medicina">Medicina Complementar/Estética</li>
            </ul>
            <!-- <a href="portfolio.html"
               class="view-all-btn btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right">
                view all
            </a> -->
        </div>
        <!-- Menu de Filtro End -->

        <!-- Portfolio Items Start -->
        <div class="row portfolio-items">
            <?php foreach ($services as $service): ?>
                <div class="col-md-3 service-item text-center mb-4 <?php echo $service['category']; ?>">
                    <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['alt']; ?>" class="service-icon">
                    <p class="service-title"><?php echo $service['title']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Portfolio Items End -->
    </div>
</div>
