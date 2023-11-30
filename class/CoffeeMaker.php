<?php
namespace class;

Class CoffeeMaker 
{

    public int $indicatormaxwatter = 10;
    public int $capacitywatter = 5;
    public int $quatitycoffee = 4;

        public function Allumer () 
        {

            return 'elle peut preparé de café';

        }

        public function Eteinte()
        {

            return 'elle ne pas preparé de café';

        }

        public function PreparationCafe( int $capacitywatter , int $quatitycoffee) 
        {
        
                $cafe = $capacitywatter + $quatitycoffee;

                    if(( $cafe= $capacitywatter <= $this->capacitywatter && $quatitycoffee <= $this->quatitycoffee)) 
                {

                    return 'on mettre ' . $capacitywatter . ' litres eau et '. $quatitycoffee . 'gramme quantité de café pour préparé eau de café';

                }else {
                    
                    return 'impossible de préparé le café parce que le'. $capacitywatter . ' litres est depasse capacité d\'eau normale et' . $quatitycoffee .' gramme est depasse le quantité de café normale';
                }

        }
        public function lastcapacitywatter( int $capacitywatter) 
        {

                if ($lastwatter = $this->capacitywatter -= $capacitywatter) {

                     return 'il reste ' .$lastwatter. ' litres capacité d\'eau dans le reservoir';

                 } 
        
        }

        public function lastquatitycoffee( int $quatitycoffee) 
        {
                if($lastcoffee = $this->quatitycoffee -= $quatitycoffee) {

                    return 'il reste ' .$lastcoffee. ' gramme quatité  de cafe dans le recervoir';

                }

        }

        public function WatterIndicator( int $capacitywatter) 
        {
                 if ($this->indicatormaxwatter -= $capacitywatter) {

                    return 'elle reste' . $this->indicatormaxwatter . ' litres d\'eau dans le indication';

                }

        }

        public function ReservoirMax( int $capacitywatter, int $quatitycoffee) 
        {

                if($this->indicatormaxwatter >= $quatitycoffee += $capacitywatter) {

                    return 'le on prépare le cafe si quatité ajouter est inferieur' . $this->indicatormaxwatter;

                }else {

                    echo 'le machine a café est detruit parceque le capacité entré est supeurieur au valeur maximale de' .$this->indicatormaxwatter;
                }
            
        }

}

