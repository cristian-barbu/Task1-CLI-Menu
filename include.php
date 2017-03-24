<?php
$controller_folder = "./controller";
$math_folder = "./utilities";

/* Include all controllers */
foreach (glob($controller_folder.'/*.php') as $filename)
{
    include_once $filename;
}


?>