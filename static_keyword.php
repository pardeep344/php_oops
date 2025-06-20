<?php


class vichel{
    public static $name="pardeep";
    public static $age=20;
    public static function details(){
        echo self::$name."is".self::$age."years old";
    }
}
echo vichel::$name;
echo"<br>";
vichel::details();


?>