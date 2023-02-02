<?php
abstract class Plugin{
   abstract public function setTitle($title);
   abstract public function setContent($content);
   public function show(){
    echo'<div class="plugin"> 
        <h1>'.$this->title.'</h1>'.
        '<p>'.$this->content.'</p>
        </div>';
   }
}


class Lastcomment extends Plugin{
    public function setTitle($title){
        $this->title=$title;
    }
    public function setContent($content){
        $this->content=$content;
    }
    
}
class SocialMedia extends Plugin{
    public function setTitle($title){
        $this->title=$title;
    }
    public function setContent($content){
        $this->content=$content;
    }
}
class Test extends Plugin{
    public function setTitle($title){
        $this->title=$title;
    }
    public function setContent($content){
        $this->content=$content;
    }
}
$lastcomments= new Lastcomment;
$lastcomments->setTitle('last comments');
$lastcomments->setContent('last comments will be shown here');

$socialMedia= new SocialMedia;
$socialMedia->setTitle('Social media');
$socialMedia->setContent('Social media links will be shown here');

$test= new Test;
$test->setTitle('test');
$test->setContent('<a href="https://ayberkcatal.com/">Ayberkcatal.com</a?');

$socialMedia->show();
$lastcomments->show();
$test->show();
?>
