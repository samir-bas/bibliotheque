<?php

require_once "connect_db.php";
require_once "Entity/customer.php";

class CustomerModel extends Database 
{
    public function getCustomers()
    {
        $requete = "select * from customer";
        $result = $this->connect()->query($requete);
        $result = $result->fetchall(PDO::FETCH_CLASS, "customer");
        return $result;
    }
}

?>