<?php
/*
* return a date based on whatever format you pass in, or in the following format if none specified:
* Mon 2 April 2012
* Uses PHP formats, not MODx date formats - see http://php.net/manual/en/function.date.php
* Call as follows: [[!CurrentDate? &format=`l, jS F Y`]]
* Above will produce similar to: Tuesday, 10th April 2012
* @author Phil Steer
* @version 0.1
*/

$dateString = $modx->getOption('format', $scriptProperties, 'D j F Y');
return date($dateString);