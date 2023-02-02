<?php
/*
(class Test {
    public $a='a';
    public static $b='Static b';
    public static function staticTest(){
        
        return self::$b;
    }

}

$test=new Test;
echo Test::staticTest().PHP_EOL;
echo $test::$b;
*/

class File{
    public static $fileName;
    public static function Create($fileName,$text){
        self::$fileName= $fileName;
        $file= fopen($fileName,'w+');
        fwrite($file,$text);
        fclose($file);
    }

    public static function Read($fileName=NULL){
        if(!$fileName) $fileName= self::$fileName;
        return file_get_contents($fileName);
    }
}
File::Create('a.txt','ayberk');
echo File::Read();
?>