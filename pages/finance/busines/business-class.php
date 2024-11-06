<?php 

    class Business{
        private $cash;
        private $quantity;
        private $productPrice;

        public function __construct($cash, $quantity, $productPrice){
            $this->cash = $cash;
            $this->quantity = $quantity;
            $this->productPrice = $productPrice;
        }

        public function payment(){
            $buyPrice = $this->quantity * $this->productPrice;
            $limit = 0.8 * $this->cash;

            if($buyPrice > $limit){
                $term = $buyPrice * 1.30;
                $portion = $buyPrice / 3;

                return[
                    "forma" => "a prazo",
                    "valor_total" => number_format($term, 2, ',', '.'),
                    "valor_parcela" => number_format($portion, 2, ',', '.')
                ];

            }else{
                $payAtSight = $buyPrice * 0.95;
                return[
                    "forma" => "à vista",
                    "valor_total" => number_format($payAtSight, 2, ',', '.')
                ];
            }

        }

    }
?>