<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        /** CONSEGNA:
         * 
         *      Definire classe User:
         *          ATTRIBUTI (private):
         *          - username 
         *          - password
         *          - age
         *          
         *          METODI:
         *          - costruttore che accetta username e password
         *          - proprieta' getter/setter
         *          - printMe: che stampa se stesso
         *          - toString: "username: age [password]"
         * 
         *          ECCEZIONI:
         *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
         *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
         *          - scatenare eccezione se age non e' un numero
         * 
         *          NOTE:
         *          - per testare il singolo carattere di una stringa
         * 
         *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
         *      try-catch e eventualmente informare l'utente del problema
         * 
         */

        class User {

            private $username;
            private $password;
            private $age;

            public function __construct($username, $password) {

                $this -> setUsername($username);
                $this -> setPassword($password);
            }

            public function getUsername() {
                return $this -> username;
            }
            public function setUsername($username) {

                if (strlen($username) < 3 || strlen($username) > 16) {
                    throw new Exception ("Lo username vuole almeno 3 caratteri e massimo 16");
                }

                $this -> username = $username;
            }
            public function getPassword() {
                return $this -> password;
            }
            public function setPassword($password) {

                if (ctype_alnum($password)) {

                    throw new Exception ("La password deve contenere almeno un carattere alphanumerico");
                }

                $this -> password = $password;
            }
            public function getAge() {
                return $this -> age;
            }
            public function setAge($age) {

                if (!is_numeric($age)) {
                    throw new Exception ("L'età deve essere un numero");
                }

                $this -> age = $age;
            }

            public function printMe() {

                echo $this;
            }

            public function __toString() {

                return "username: " . $this -> getUsername() . "<br>" . "age: " . $this -> getAge() . " " . "[" . $this -> getPassword() . "]";
            }

        }

        try {
            $u1 = new User("Gigio99", "12,ds456");
            $u1 -> setAge(22);

            echo $u1 . "<br>";
            
        } catch (Exception $e) {
            echo "Eccezione: " . $e -> getMessage();
        } finally {
            echo "<br>" . "Fine esercizio";
        }
        
    ?>
</body>
</html>