<?php
/*
* Custom output modifier, uses PHP round() to round up or down the number input.
* Call as follows: [[*thingThatIsANumber:round]]
* This doesn't do any checking to see if you've actually put a number in or not.
* @author Phil Steer (pdincubus)
* @github https://github.com/pdincubus/RandomSnippets
*/

return $result = round($input, 0);
