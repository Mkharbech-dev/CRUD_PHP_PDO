<?php
require_once("database.php");
class User{
    private $id;
    private $firstname;
    private $lastname;
    private $address;
    protected $dbCnx;

    public function __construct($id= 0, $firstname= '', $lastname= '', $address=''){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->dbCnx = new PDO('mysql:host=localhost; dbname=registration; charset=utf8;', 'root', '');
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
// Fonction qui insére un utilisateur dans la bdd.
    public function insertData(){
        try{
            $statement=$this->dbCnx->prepare("INSERT INTO users (firstname,lastname,address) VALUES(?,?,?)");
            $statement->execute([$this->firstname,$this->lastname,$this->address]);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
// Fonction qui affiche la liste des utilisateurs
    public function fetchAll(){
        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm->execute();
            return $stm->fetchAll();
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

// Fonction qui filtre un seul utilisateur

    public function fetchOne(){
        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users where id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

// Fonction qui modifie un utilisateur

    public function update(){
        try{
            $stm = $this->dbCnx->prepare("UPDATE users SET firstname=?, lastname=?, address=? WHERE id=?");
            $stm->execute([$this->firstname,$this->lastname,$this->address, $this->id]);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

// Fonction qui supprime un utilisateur

    public function delete(){
        try{
            $stm = $this->dbCnx->prepare("DELETE FROM users  WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}

?>