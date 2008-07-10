<?php

###
# This is the path to your installation of SemanticEditTime as
# seen from the web. Change it if required ($wgScriptPath is the
# path to the base directory of your wiki). No final slash.
##
$setScriptPath = $wgScriptPath . '/extensions/SemanticEditTime';
##

###
# This is the path to your installation of SemanticEditTime as
# seen on your local filesystem. Used against some PHP file path
# issues.
##
$setIP = $IP . '/extensions/SemanticEditTime';
##

#Informations
$wgExtensionCredits['parserhook'][] = array(
       'name' => 'SemanticEditTime',
       'author' =>'Steren Giannini', 
       'url' => 'http://www.creativecommons.org', 
       'description' => 'TODO'
       );

?>
