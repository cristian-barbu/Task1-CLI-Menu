<?php
$controllerFolder = "./controller";
$utilsFolder = "./utilities";

/* Include all utilities */
foreach (glob($utilsFolder.'/*.php') as $filename)
{
    include_once $filename;
}

/* Include all controllers */
foreach (glob($controllerFolder.'/*.php') as $filename)
{
    require_once $filename;
}