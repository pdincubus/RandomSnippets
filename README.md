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