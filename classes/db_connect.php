<?php

class Db_Connect {
    //put your code here
    protected function database_connection() {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_ecommerce33';
        $connection=mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$connection) {
            die('Connection Fail'.mysqli_error($connection));
        }
        return $connection;
    }
}
