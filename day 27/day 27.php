<?php



class counter{
               public static $count = 0;
               public static function incremnet(){
                              self::$count++;
               }
               public static function showcount(){
                              echo self::$count;
               }


}

counter::incremnet();
counter::incremnet();
counter::incremnet();
counter::incremnet();
counter::showcount();



class config{
               public static $appname = "myapp";
               public static $version = "1.0.0";
               public static function getinfo(){
                              return self::$appname .'version' .self::$version;
               }
}

echo config::getinfo();
config::$version ='1.1.0';
echo config::getinfo();



class mathhelper{
               public static function add($a,$b){
                              return $a+$b ."<br>";
               }
               public static function multiple($a,$b){
                              return $a*$b;
               }
}

echo mathhelper::add(10,5);
echo mathhelper::multiple(10,5);



//self:: and static::

class base{
               public static function who(){
                              echo __CLASS__,"\n";
               }
               public static function test(){
                              self::who();
                              static::who();
               }
}

class child extends base{
               public static function who(){
                              echo __CLASS__."\n";
               }
}


child::test();





