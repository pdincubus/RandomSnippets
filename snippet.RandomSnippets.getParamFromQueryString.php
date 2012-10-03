<?php
/*
* Looks through the query string for the page,
* returns the value for any specific key it finds
* e.g - from the URL:
* http://www.test-site.com?index=yes&test=help&trevor=harold
* Using this on page:
* [[!getParamFromQueryString? &key=`test`]]
* will return 'help'
* @author Phil Steer (pdincubus)
* @github https://github.com/pdincubus/RandomSnippets
*/

//what is it we want the value of?
$wanted = $modx->getOption('key', $scriptProperties, '');

//loop through entire query string checking if key is wanted
foreach($_GET as $key => $value){
    if($key = $wanted){
    				//if yes, return value
        return $value;
    }
}