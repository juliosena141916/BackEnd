<?php
 class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_donos){
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> ano = $ano;
        $this -> revisao = $revisao;
        $this -> N_donos = $N_donos;
    }
 }

 $carro1 = new Carro("Porsche", "911", 2020, false, 3);
 $carro2 = new Carro("Mitsubichi", "Lancer", 1945, true, 1);
 $carro3 = new Carro("Volkswagen", "Jetta", 2024, true, 5);
 $carro4 = new Carro("Toyata", "Hilux", 2015, false, 2);
 $carro5 = new Carro("Citroen", "C3", 2004, true, 1);
 $carro6 = new Carro("Peugout", "208", 2013, true, 4);
