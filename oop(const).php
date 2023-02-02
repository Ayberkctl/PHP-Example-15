<?php
class File {
    const DIRECTORY= __DIR__;
    public function getDirectory(){
        //return self::DIRECTORY;
    }
}
class Folder extends File{
    public function getDirectory(){
        return parent::DIRECTORY;
    }
}
/*
$dir = new File;
echo $dir->getDirectory();
*/
//echo File::DIRECTORY;

$folder= new Folder;

echo $folder->getDirectory();

?>