<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
    <?php
        /** CONSEGNA:
         *      
         *      Definire classe Computer:
         *          ATTRIBUTI:
         *          - codice univoco
         *          - modello
         *          - prezzo
         *          - marca
         * 
         *          METODI:
         *          - costruttore che accetta codice univoco e prezzo
         *          - proprieta' getter/setter per tutte le variabili d'istanza
         *          - printMe: che stampa se stesso (come quella vista a lezione)
         *          - toString: "marca modello: prezzo [codice univoco]"
         * 
         *          ECCEZIONI:
         *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
         *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
         *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
         * 
         *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
         *      il corretto funzionamento dell'algoritmo
         */

        class Computer {

            private $codiceUnivoco;
            private $modello;
            private $prezzo;
            private $marca;

            public function __construct($codiceUnivoco, $prezzo) {

                $this -> setCodiceUnivoco($codiceUnivoco);
                $this -> setPrezzo($prezzo);
            }

            public function getCodiceUnivoco() {
                return $this -> codiceUnivoco;
            }
            public function setCodiceUnivoco($codiceUnivoco) {

                if (!(is_numeric($codiceUnivoco) && strlen($codiceUnivoco) == 6)) {
                    throw new Exception ("Il codice deve contenere 6 cifre");
                }

                $this -> codiceUnivoco = $codiceUnivoco;
            }
            public function getPrezzo() {
                return $this -> prezzo;
            }
            public function setPrezzo($prezzo) {
                
                if (!is_int($prezzo) && $prezzo < 0 && $prezzo > 2000) {
                    throw new Exception ("Il prezzo deve essere una cifra compresa tra 0 e 2000");
                }

                $this -> prezzo = $prezzo;
            }
            public function getModello() {
                return $this -> modello;
            }
            public function setModello($modello) {

                if (strlen($modello) < 3 || strlen($modello) > 20) {
                    throw new Exception ("Il modello deve contenere almeno 3 caratteri e massimo 20");
                }

                $this -> modello = $modello;
            }
            public function getMarca() {
                return $this -> marca;
            }
            public function setMarca($marca) {

                if (strlen($marca) < 3 || strlen($marca) > 20) {
                    throw new Exception ("La marca deve contenere almeno 3 caratteri e massimo 20");
                }

                $this -> marca = $marca;
            }

            public function printMe() {

                echo $this;
            }

            public function __toString() {
                return $this -> getMarca() . "<br>" . $this -> getModello() . ": " . $this -> getPrezzo() . " [" . $this -> getCodiceUnivoco() . "]";
            }
        }

        try {
            $pc1 = new Computer("123456", 20);
            $pc1 -> setModello("Havoc");
            $pc1 -> setMarca("Asus");

            echo $pc1 . "<br>";
        } catch (Exception $e) {
            echo "Eccezione: " . $e -> getMessage();
        } 
        
    ?>
</body>
</html>