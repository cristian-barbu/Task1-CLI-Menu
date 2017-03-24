<?php
$controllerFolder = "./controller";
$utilsFolder = "./utilities";

require_once $utilsFolder.'/io_utils.php';
/* Include all controllers */
foreach (glob($controllerFolder.'/*.php') as $filename)
{
    include_once $filename;
}