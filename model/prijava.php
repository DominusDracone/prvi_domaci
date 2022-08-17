<?php
class Prijava{
    public $id;   
    public $ime;   
    public $prezime;   
    public $godine;   
    public $pol;
    public $status;
    public $rodjendan;
    
    public function __construct($id=null, $ime=null, $prezime=null, $godine=null, $pol=null, $statu=null, $rodjendan=null, $imeSlike=null)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godine = $pol;
        $this->pol = $status;
        $this->status = $godine;
        $this->rodjendan = $rodjendan;
    }

    #funkcija prikazi sve getAll

    public static function getAllPrijava(mysqli $conn)
    {
        $query = "SELECT * FROM prijave";
        return $conn->query($query);
    }

    

    #funkcija getById

    public static function getByIdPrijava($id, mysqli $conn){
        $query = "SELECT * FROM prijave WHERE id=$id";

        $myObj = array();
        if($msqlObj = $conn->query($query)){
            while($red = $msqlObj->fetch_array(1)){
                $myObj[]= $red;
            }
        }

        return $myObj;

    }

    

    #deleteById

    public function deleteByIdPrijava(mysqli $conn)
    {
        $query = "DELETE FROM prijave WHERE id=$this->id";
        return $conn->query($query);
    }
   

    #update
    

    #insert add
    public static function addPrijava(Prijava $prijava, mysqli $conn)
    {
        $query = "INSERT INTO prijave(ime, prezime, godine, pol, status, rodjendan) VALUES('$ime->ime','$prezime->prezime','$godine->godine','$pol->pol','$status->status','$rodjendan->rodjendan')";
        return $conn->query($query);
    }
    
}

class PrijavaS{
    public $id;
    public $imeSlike;

    public function __construct($id, $imeSlike){
        $this ->id = $id;
        $this ->imeSlike = $imeSlike;
    }

    public static function getAllSlike(mysqli $conn)
    {
        $query = "SELECT * FROM slike";
        return $conn->query($query);
    }

    public static function getByIdSlike($id, mysqli $conn){
        $query = "SELECT * FROM slike WHERE id=$id";

        $myObj = array();
        if($msqlObj = $conn->query($query)){
            while($red = $msqlObj->fetch_array(1)){
                $myObj[]= $red;
            }
        }

        return $myObj;

    }
    public function updatePrijava($id, mysqli $conn)
    {
        $query = "UPDATE prijave set ime = $this->ime, prezime = $this->prezime, godine = $this->godine, pol = $this-$>pol, status = $this-$>status, rodjendan = $this-$>rodjendan WHERE id=$id";
        return $conn->query($query);
    }
    public function updateSlike($id, mysqli $conn)
    {
        $query = "UPDATE slike set imeSlike = $this->imeSlike";
        return $conn->query($query);
    }

    public function deleteByIdSlike(mysqli $conn)
    {
        $query = "DELETE FROM slike WHERE id=$this->id";
        return $conn->query($query);
    }
    
    public static function addSlike(Prijava $prijava, mysqli $conn)
    {
        $query = "INSERT INTO slike(imeSlike) VALUES('$imeSlike->imeSlike')";
        return $conn->query($query);
    }
}

?>