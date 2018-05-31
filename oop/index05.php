<?php

interface Template{
    function setHeader();
    function setFooter();

}

interface Template_N{

    function setContent();
    function setMenu();

}

class TemplateA implements Template,Template_N{
    function setHeader(){
        echo 13131;
    }
    function setFooter(){
        echo 13131;
    }
}

$a = new TemplateA;
?>