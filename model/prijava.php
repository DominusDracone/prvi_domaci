<?php
class Prijava{
    public $id;   
    public $ime;   
    public $prezime;   
    public $godine;   
    public $pol;
    public $status;
    public $rodjendan;
    
    public function __construct($id=null, $ime=null, $prezime=null, $godine=null, $pol=null, $statu=null, $rodjendan=null)
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

    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM prijave";
        return $conn->query($query);
    }

    #funkcija getById

    public static function getById($id, mysqli $conn){
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

    public function deleteById(mysqli $conn)
    {
        $query = "DELETE FROM prijave WHERE id=$this->id";
        return $conn->query($query);
    }

    #update
    public function update($id, mysqli $conn)
    {
        $query = "UPDATE prijave set ime = $this->ime, prezime = $this->prezime, godine = $this->godine, pol = $this-$>pol, status = $this-$>status, rodjendan = $this-$>rodjendan WHERE id=$id";
        return $conn->query($query);
    }

    #insert add
    public static function add(Prijava $prijava, mysqli $conn)
    {
        $query = "INSERT INTO prijave(ime, prezime, godine, pol, status, rodjendan) VALUES('$ime->ime','$prezime->prezime','$godine->godine','$pol->pol','$status->status','$rodjendan->rodjendan')";
        return $conn->query($query);
    }
}

?>