<?php

/**
 * Description of book_title
 *
 * @author Owes Shubho
 */

namespace App\Url;

use App\Utility\Utility;

class Bookmark {

    public $id = "";
    public $title = "";
    public $url = "";
//    public $created     ="";
//    public $modified    ="";
//    public $created_by  ="";
//    public $modified_by ="";
    public $deleted_at = "";

//    public function __construct($model = false){
//        
//    }

    public function index() {
        $bookmark = array();
        $conn = mysql_connect("localhost", "root", "") or die("Database Cannot Connected");
        $link = mysql_select_db("bookmarkurl") or die("Database Cannot Connected");
        $query = "SELECT * FROM `url` WHERE deleted_at IS NULL";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $bookmark[] = $row;
        }
        return $bookmark;
    }

//    public function create(){
//        return "create - I am create form";
//    }
    public function store() {
        $conn = mysql_connect("localhost", "root", "") or die("Database Cannot Connected");
        $link = mysql_select_db("bookmarkurl") or die("Database Cannot Connected");
        $query = "INSERT INTO `bookmarkurl`.`url` ( `title`,`url`) VALUES ( '" . $this->title . "','" . $this->url . "' )";
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Bookmark added successfully.");
        } else {
            Utility::message("There is an error while saving data. Please try again later.");
        }

        Utility::redirecturl();
    }

    public function show($id = false) {
        $conn = mysql_connect("localhost", "root", "") or die("Cannot connect database.");
        $lnk = mysql_select_db("bookmarkurl") or die("Cannot select database.");

        $query = "SELECT * FROM `url` WHERE id =" . $id;
        $result = mysql_query($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

//    public function edit(){
//        return "edit - I am editing form";
//    }
    public function update() {
        $conn = mysql_connect("localhost", "root", "") or die("Database Cannot Connected");
        $link = mysql_select_db("bookmarkurl") or die("Database Cannot Connected");
        $query = "UPDATE `bookmarkurl`.`url` SET `title` = '" . $this->title . "', `url` = '" . $this->url . "' WHERE `url`.`id` = " . $this->id;
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Bookmark Edited successfully.");
        } else {
            Utility::message("There is an error while saving data. Please try again later.");
        }

        Utility::redirecturl();
    }

    public function delete($id = null) {

        if (is_null($id)) {
            Utility::message('No id avaiable. Sorry !');
            return Utility::redirecturl();
        }

        $conn = mysql_connect("localhost", "root", "") or die("Cannot connect database.");
        $lnk = mysql_select_db("bookmarkurl") or die("Cannot select database.");

        $query = "DELETE FROM `bookmarkurl`.`url` WHERE `url`.`id` = " . $id;
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Bookmark deleted successfully.");
        } else {
            Utility::message(" Cannot delete.");
        }

        Utility::redirecturl();
    }
    public function trash($id = null){
       
        if(is_null($id)){
            Utility::message('No id avaiable. Sorry !');
            return Utility::redirecturl();
        }
        $this->id = $id;
        $this->deleted_at =  time();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("bookmarkurl") or die("Cannot select database.");
        $query = "UPDATE `bookmarkurl`.`url` SET `deleted_at` = '".$this->deleted_at."' WHERE `url`.`id` = ".$this->id;
        
        $result = mysql_query($query);
               
        if($result){
            Utility::message("Trash successfully.");
        }else{
            Utility::message("Cannot Trash.");
        }
        
        Utility::redirecturl();
    }
    
    public function trashed() {
        $data = array();
        $conn = mysql_connect("localhost", "root", "") or die("Database Cannot Connected");
        $link = mysql_select_db("bookmarkurl") or die("Database Cannot Connected");
        $query = "SELECT * FROM `url` WHERE deleted_at IS NOT NULL";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
    public function recover($id = null){
       
        if(is_null($id)){
            Utility::message('No id avaiable. Sorry !');
            return Utility::redirecturl();
        }
        $this->id = $id;
        $this->deleted_at =  time();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("bookmarkurl") or die("Cannot select database.");
        $query = "UPDATE `bookmarkurl`.`url` SET `deleted_at` = NULL WHERE `url`.`id` = ".$this->id;
        
        $result = mysql_query($query);
               
        if($result){
            Utility::message("Recovered successfully.");
        }else{
            Utility::message("Cannot Recover.");
        }
        
        Utility::redirecturl();
    }

}
