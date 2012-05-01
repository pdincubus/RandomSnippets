<?php
/*
* Little snippet to generate random numbers up to a specified length, with optional formatting.
* Call as follows: [[!RandomNumber? &formatNumber=`1` &length=`5`]]
* @author Phil Steer (pdincubus)
* @github https://github.com/pdincubus/RandomSnippets
*/

$stringLength = $modx->getOption('length', $scriptProperties, 5);
$numberFormat = $modx->getOption('formatNumber', $scriptProperties, 0);
$randomNumber = NULL;

for ($i=0; $i < $stringLength; $i++)
{
	$randomNumber .= (mt_rand()%9);
}

if($numberFormat==1)
{
	return number_format($randomNumber);
}else{
	return $randomNumber;
}