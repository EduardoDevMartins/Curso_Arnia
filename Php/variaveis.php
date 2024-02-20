<?php


//variaveis

$tec = ['React', 'PHP', 'Java', 'Python', '.Next', 'CSS', 'HTML', 'Ruby', 'GO', 'MySQL', 'MariaDB'];
$vag = ['Remota', 'Presencial', 'Hibrida'];
$trab = ['CLT', 'PJ'];
$dimensao = ['Pequena', 'Media', 'Grande'];
$exp = ['Junior', 'Pleno', 'Sênior'];

//array com descrição de vagas

$jobs = array();
    for ($i = 0; $i < 4; $i++) {
        $jobs[] = new JOBS ("Desenvolvedor de Sistemas Pleno", "Empresa: iZap Softworks", "InfoJobs 04 ago", "PHP", "Phyton", "React", "Faixa salarial: R$ 4.000,00", "Localização: Belo Horizonte", "Tipo de vaga: Home office", "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...");
    }

