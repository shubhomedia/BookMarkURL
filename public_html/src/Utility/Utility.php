<?php

/*
 *     MD.Owes Quruny Shubho
 *     http://shubho.info
 */

/**
 * Description of Utility
 *
 * @author Shubho
 */

namespace App\Utility;
session_start();

class Utility {

    public $message ="";
    static public function d($param = FALSE) {
        echo"<pre>";
        var_dump($param);
        echo"<pre>";
    }

    static public function dd($param = FALSE) {
        $this->d();
        die();
    }

    static public function redirecturl($url="../public_html/index.php"){
        header("Location:".$url);
    }
    
    static public function message($message = null){
        if(is_null($message)){ // please give me message
            $_message = self::getMessage();
            return $_message;
        }else{ //please set this message
            self::setMessage($message);
        }
    }
    
    static private function getMessage(){
        
        $_message =  $_SESSION['message'];
        $_SESSION['message'] = "";
        return $_message;
    }
    
    static private function setMessage($message){
        $_SESSION['message'] = $message;
    }
    
    
}
