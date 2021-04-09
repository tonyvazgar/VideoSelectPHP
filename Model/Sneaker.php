<?php
    class Sneaker{
        public function getColorway($id_modelo){
            $db = new Db();
            $sql_statement = "SELECT * 
                              FROM Sneakers
                              WHERE id_modelo='$id_modelo'";
            $account = $db->query($sql_statement)->fetchAll();
            $db->close();
            return $account;
        }
        public function getPriceColorWay($id_sneaker){
            $db = new Db();
            $sql_statement = "SELECT * 
                              FROM prices
                              WHERE id_sneaker='$id_sneaker'";
            $account = $db->query($sql_statement)->fetchAll();
            $db->close();
            return $account;
        }
    }
?>