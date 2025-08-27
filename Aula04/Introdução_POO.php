<?php

    $modelo_carro1 = "versa";
    $marca_carro1 = "nissan";
    $ano_carro1 = 2020;
    $revisao_carro1 = true;
    $Ndonos_carro1 = 2;

    $modelo_carro2 = "M5";
    $marca_carro2 = "BMW";
    $ano_carro2 = 2018;
    $revisao_carro2 = false;
    $Ndonos_carro2 = 2;

    $modelo_carro3 = "911";
    $marca_carro3 = "porsche";
    $ano_carro3 = 2026;
    $revisao_carro3 = false;
    $Ndonos_carro3 = 1;

    $modelo_carro4 = "dolphin";
    $marca_carro4 = "BYD";
    $ano_carro4 = 2023;
    $revisao_carro4 = false;
    $Ndonos_carro4 = 1;


    // function passouRevisao ($revisaoF) {
    //     $revisaoF = false;
    //     return $revisaoF;
    // }

    // $revisao_carro1 = passouRevisao($revisao_carro1);


    // function novoDono ($donos){
    //     return $donos + 1;
    // }

    // $Ndonos_carro1 = novoDono($Ndonos_carro1);

    function exibirCarros($modelo, $marca, $ano, $revisao, $donos){

    if ($revisao == false) {
        $revisao = "Não";
    } else {
        $revisao = "Sim";
    }

        return "O Carro $marca $modelo, ano $ano, já passou por revisão: $revisao, número de donos: $donos\n";
    }

    $dados_carro1 = exibirCarros($modelo_carro1, $marca_carro1, $ano_carro1, $revisao_carro1, $Ndonos_carro1);
    $dados_carro2 = exibirCarros($modelo_carro2, $marca_carro2, $ano_carro2, $revisao_carro2, $Ndonos_carro2);
    $dados_carro3 = exibirCarros($modelo_carro3, $marca_carro3, $ano_carro3, $revisao_carro3, $Ndonos_carro3);
    $dados_carro4 = exibirCarros($modelo_carro4, $marca_carro4, $ano_carro4, $revisao_carro4, $Ndonos_carro4);

    echo $dados_carro1;
    echo $dados_carro2;
    echo $dados_carro3;
    echo $dados_carro4;

    
    function ehSeminovo($anoG){

        $anoG = 2025 - $anoG;
        if ($anoG <= 3){
            return "Seu carro é novo\n";
        }else{
            return "Seu carro é velho\n";
        }
    }

    $Seminovo1 = ehSeminovo($ano_carro1);
    $Seminovo2 = ehSeminovo($ano_carro2);
    $Seminovo3 = ehSeminovo($ano_carro3);
    $Seminovo4 = ehSeminovo($ano_carro4);

    echo $Seminovo1;
    echo $Seminovo2;
    echo $Seminovo3;
    echo $Seminovo4;


    function precisaRevisao($anoR, $revisaoR){
        if ($revisaoR == false and $anoR < 2022){
            return "Precisa de Revisão\n";
        }else{
            return "Revisão em Dia\n";
        }
    }

    $revisar1 = precisaRevisao($ano_carro1, $revisao_carro1);
    $revisar2 = precisaRevisao($ano_carro2, $revisao_carro2);
    $revisar3 = precisaRevisao($ano_carro3, $revisao_carro3);
    $revisar4 = precisaRevisao($ano_carro4, $revisao_carro4);


    echo $revisar1;
    echo $revisar2;
    echo $revisar3;
    echo $revisar4;








