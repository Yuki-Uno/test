<?php
//test2.php
namespace yuki;
class Test2{
  public static function index(){
    $a = 'a';
    error_log($a , 3, '/c/Users/yuki-uno/git/test/error.log');
  }
}