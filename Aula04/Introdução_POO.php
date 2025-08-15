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
        $informacoes = "O Carro $modelo, ano $ano, já passou por revisão: $revisao, número de donos: $donos";
    }

    $dados_carro1 = exibirCarros($modelo_carro1, $marca_carro1, $ano_carro1, $revisao_carro1, $Ndonos_carro1);
    echo $dados_carro1;

?>