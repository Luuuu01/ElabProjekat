<?php
    class Prijava {
        public $id,$predmet,$katedra,$sala,$datum;
    
        public function __construct($id, $predmet, $katedra, $sala, $datum) {
            $this->id = $id;
            $this->predmet = $predmet;
            $this->katedra = $katedra;
            $this->sala = $sala;
            $this->datum = $datum;
        }

        public function __destruct(){
            $id = 0;
            $predmet = null;
            $katedra = null;
            $sala = null;
            $datum = null;
        }

        public static function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM prijave");

    // OVAKO SE UZIMAJU OBJEKTI VALJDA PA MOZES PREKO FOREACH! DA IH POZIVAS GDE HOCES BEZ UPOTREBE FETCH()
    // $results = $conn->query($sql);
    //     if ($results) {
    //         $prijave = array();

    //         while ($red = $results->fetch_assoc()) {
    //             // Mozda moze preko fetch_object('Prijava') bez ove donje linije
    //             $prijava = new Prijava($red['id'], $red['predmet'], $red['katedra'], $red['sala'], $red['datum']);
    //             $prijave[] = $prijava;
    //         }
    //         return $prijave;
    //     }
    //   else {
    //         return null; 
    //     }
    }  

        public static function getById($id){
            global $conn;
            return $conn->query("SELECT * FROM prijave WHERE id = $id");
        }

        public static function deleteById($id){
            global $conn;
            return $conn->query("DELETE FROM prijave WHERE id = $id");
        }

        public static function add(Prijava $prijava){
            global $conn;
            $sql = "INSERT INTO prijave (id, predmet, katedra, sala, datum) VALUES ($prijava->id, '$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";
            return $conn->query($sql);
        }

        public static function update(Prijava $prijava) {
            global $conn;
            $sql = "UPDATE prijave SET predmet = '$prijava->predmet', katedra = '$prijava->katedra', sala = '$prijava->sala', datum = '$prijava->datum' WHERE id = $prijava->id";        
            return $conn->query($sql);
        }
        




    }
?>