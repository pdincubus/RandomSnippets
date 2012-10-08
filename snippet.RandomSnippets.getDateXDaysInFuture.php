<?php
/*
* return a date based x days into the future.
* 'distance' is how many days from today. Defaults to one week.
* Call as follows: [[!getDateXDaysInFuture? &distance=`7`]]
* Above will produce similar to: 2012-10-08
* @author Phil Steer (pdincubus)
* @github https://github.com/pdincubus/RandomSnippets
*/

$distance = $modx->getOption('distance', $scriptProperties, '7');

$futureDate=Date('Y-m-d', strtotime("+". $distance ." days"));

return $futureDate;