<?php
/*
* @author Phil Steer (pdincubus)
* @github https://github.com/pdincubus/RandomSnippets
*
*
* Random snippet: Output filter to split keywords and format ready for &where=``
* This was written specifically to take the value from a text input in a form,
* explode each word into and array and then format it nicely for getResources
* There's probably an easier way to do this. Maybe.
* I had a snippet grabbing the value from the query string first.
*
* Use similarly to the following:
*
* [[!getKeywords:splitKeywords=`&andOr=AND&type=LIKE&beforeKeyword=%&afterKeyword=%&field=longtitle`]]
*
* Options (with default values)
*
* &andOr=OR
* &type=LIKE
* &beforeKeyword=%
* &afterKeyword=%
* &field=longtitle
*
*/


$keywords = str_replace(' ', ',', $input);
$keywords = explode(',', $keywords);
$size = sizeof($keywords);

$optionsXpld = @explode('&', $options);

$optionsArray = array();
foreach ($optionsXpld as $xpld) {
  $params = @explode('=', $xpld);
  array_walk($params, create_function('&$v', '$v = trim($v);'));
  if (isset($params[1])) {
    $optionsArray[$params[0]] = $params[1];
  } else {
    $optionsArray[$params[0]] = '';
  }
}

$andOr = isset($optionsArray['andOr']) ? $optionsArray['andOr'] . ':' : 'OR:';
$type = isset($optionsArray['type']) ? ':' . $optionsArray['type'] : ':LIKE';
$beforeKeyword = isset($optionsArray['beforeKeyword']) ? $optionsArray['beforeKeyword'] : '%';
$afterKeyword = isset($optionsArray['afterKeyword']) ? $optionsArray['afterKeyword'] : '%';
$field = isset($optionsArray['field']) ? $optionsArray['field'] : 'longtitle';
$output = '';


for( $i=0; $i < $size; $i++ ){
 if($i === 0) {
    $output .= '"'.$field.$type.'":"'.$beforeKeyword.$keywords[$i].$afterKeyword.'"';
  } else {
    $output .= ', "'.$andOr.$field.$type.'":"'.$beforeKeyword.$keywords[$i].$afterKeyword.'"';
  }

}

return '{'.$output.'}';
