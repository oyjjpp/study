<?php
namespace str;

class ReplaceStr 
{
    public function testStrtr(){
        echo strtr("baab", "ab", "012"),"\n";

        $trans = array("ab" => "01");
        echo strtr("baab", $trans);
    }
}

$rs = new ReplaceStr();
$rs-> testStrtr();
