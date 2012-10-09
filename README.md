# RandomSnippets

MODX Revolution snippets I've needed for one thing or another.


## CurrentDate

Return a date based on whatever format you pass in, or in the following format if none specified:

Mon 2 April 2012

Uses PHP formats, not MODx date formats - see [http://php.net/manual/en/function.date.php](http://php.net/manual/en/function.date.php)

Call as follows:

```[[!CurrentDate? &format=`l, jS F Y`]]```

Above will produce similar to: Tuesday, 10th April 2012


## RandomNumber

Little snippet to generate random numbers up to a specified length, with optional formatting.

Formatting will stick commas in the right place.

Call as follows:

```[[!RandomNumber? &formatNumber=`1` &length=`5`]]```


## getParamFromQueryString

Looks through the query string for the page, returns the value for any specific key it finds. e.g - from the URL:

```http://www.test-site.com?index=yes&test=help&trevor=harold```

Using this on page:

```[[!getParamFromQueryString? &key=`test`]]```

Above will return 'help'


## getDateXDaysInFuture

Returns a date x days in the future.

Call as follows:

```[[!getDateXDaysInFuture? &distance=`7`]]```

Above will produce similar to: 2012-10-08


## round

Custom output modifier, uses PHP round() to round up or down the number input.

Call as follows: 

```[[*thingThatIsANumber:round]]```

This doesn't do any checking to see if you've actually put a number in or not.