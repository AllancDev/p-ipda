<?php

    /**
     *  Class Model.php
     *  Classe Responsavel por manipular dados.
     * 
     *  @author Allan Cristian  
     */


     class Model {
         protected $db;

         public function __construct() {
             global $db;
             $this -> db = $db;
         }
     }