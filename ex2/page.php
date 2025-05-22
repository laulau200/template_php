<?php

class Page
{
    var $page = "";
    var $theme = (html5up-massively);
    function __construct()
    {
        $fichier = $this->theme."/index.html";
        $this->page = readfile($fichier);        
    }

    function __toString(): string
    {
        return $this->page;        
    }
}