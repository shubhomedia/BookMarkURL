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
    static public function redirectbook($url="/atomic_project_by_shubho/views/SEIP106508/book/index.php"){
        header("Location:".$url);
    }
    static public function redirectdate($url="/atomic_project_by_shubho/views/SEIP106508/date/index.php"){
        header("Location:".$url);
    }
    static public function redirectorg($url="/atomic_project_by_shubho/views/SEIP106508/organizations/index.php"){
        header("Location:".$url);
    }
    static public function redirectmail($url="/atomic_project_by_shubho/views/SEIP106508/email/index.php"){
        header("Location:".$url);
    }
    static public function redirecteducation($url="/atomic_project_by_shubho/views/SEIP106508/education/index.php"){
        header("Location:".$url);
    }
    static public function redirecteterms($url="/atomic_project_by_shubho/views/SEIP106508/agrement/index.php"){
        header("Location:".$url);
    }
    static public function redirecthobby($url="/atomic_project_by_shubho/views/SEIP106508/hobby/index.php"){
        header("Location:".$url);
    }
    static public function redirectcity($url="/atomic_project_by_shubho/views/SEIP106508/city/index.php"){
        header("Location:".$url);
    }
    static public function redirectbookmark($url="/atomic_project_by_shubho/views/SEIP106508/url/index.php"){
        header("Location:".$url);
    }
    static public function redirectprofilepic($url="/atomic_project_by_shubho/views/SEIP106508/picture/index.php"){
        header("Location:".$url);
    }
    static public function redirecturl($url="/atomic_project_by_shubho/views/SEIP106508/url/index.php"){
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
