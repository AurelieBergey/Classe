<?php

class Crepe {
    
    public $farine;                     // entier qui correspond a la quantité de farine en gramme
    public $lait;                       // entier qui correspond a la quantité de lait en litre
    public $oeuf;                       // entier qui correspond au nombre d'oeuf
    public $bière;                      // entier qui correspond a la quantité de bière en cuillere a soupe
    public $sucreVanille;               // entier qui correspond a la quantité de sachet
    public $sucre;                      // entier qui correspond a la quantité de sucre en gramme
    public $rhum;                       // entier qui correspond a la quantité de rhum en cuillére a soupe
    public $beurre;                     // entier qui correspond a la quantité de beurre en gramme
    public $topping;                    // tableau qui correspond au supplement a ajouter sur la crépe


    public function __construct( $farine, $lait,$oeuf, $bière, $sucreVanille, $sucre, $rhum, $beurre ){
        $this->farine =$farine;
        $this->lait =$lait;
        $this->oeuf =$oeuf;
        $this->bière =$bière;
        $this->sucreVanille =$sucreVanille;
        $this->sucre =$sucre;
        $this->rhum =$rhum;
        $this->beurre =$beurre;
        $this->topping = $topping;
    }

    function Afficher_recette (){

        echo ("Pour faire une pate à crèpe il te faut:\n"); 
        echo  ("-".$this->farine." gramme de farine\n " )  ;
        echo  "-".$this->lait." litre de lait \n" ;
        echo  "-".$this->oeuf." oeufs\n" ;
        echo  "-".$this->bière." litres de bière\n" ;
        echo  "-".$this->sucreVanille." sachet de sucre vanillé\n ";
        echo  "-".$this->sucre." gramme de sucre\n" ;
        echo  "-".$this->rhum." litres de rhum\n";
        echo  "-".$this->beurre." grammes de beurre\n";
        echo  "-".$this->topping."\n";
    }
    
    public function getRhum(){
    return $this->rhum;
    }
}

