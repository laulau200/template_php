<?php

class Page
{
    var $page = "";
    var $theme = "html5up-massively";
    function __construct()
    {
        $fichier = $this->theme."/index.html";
        $this-page = readfile($fichier);

    }

    function __tostring()
    {

      return $this->page;  
    }


}