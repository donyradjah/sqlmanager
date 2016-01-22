<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 1/22/16
     * Time: 8:16 PM
     */

    namespace Connector;


    class Pdo
    {
        public function exec($query){
            try{
            $db = new PDO( "mysql:host=localhost", 'user', 'pass' );
            $query = $db->query($query);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $exec = $query->fetch();
            return $exec;
            }
            catch (PDOException $pe) {
                die("Could not execute query");
            }
        }
    }