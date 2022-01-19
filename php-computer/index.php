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
                return $this -> codiceUnivoco = $codiceUnivoco;
            }
            public function getPrezzo() {
                return $this -> prezzo;
            }
            public function setPrezzo($prezzo) {
                return $this -> prezzo = $prezzo;
            }
            public function getModello() {
                return $this -> modello;
            }
            public function setModello($modello) {
                return $this -> modello = $modello;
            }
            public function getMarca() {
                return $this -> marca;
            }
            public function setMarca($marca) {
                return $this -> marca = $marca;
            }
        }
    ?>
</body>
</html>