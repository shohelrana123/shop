<?php
require_once 'db_connect.php';

class Application extends Db_Connect {
    //put your code here
    protected $link;
    public function __construct() {
        $this->link = $this->database_connection();
    }
    public function select_all_published_category_info() {
        $sql="SELECT * FROM tbl_category WHERE publication_status = 1";
        if(mysqli_query($this->link , $sql)) {
             $query_result = mysqli_query($this->link , $sql);
             return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->link ));
        }
    }
    public function select_all_published_manufacturer_info() {
        $sql = "SELECT * FROM tbl_manufacturer WHERE publication_status = 1";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }
    public function select_published_new_product_info() {
        $sql = "SELECT product_id, product_name, product_price, product_image FROM tbl_product WHERE publication_status = 1 ORDER BY product_id DESC LIMIT 0,10";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }
    public function select_published_product_by_category_id($category_id) {
        $sql = "SELECT product_id, product_name, product_price, product_image FROM tbl_product WHERE publication_status = 1 AND category_id = '$category_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }
}
