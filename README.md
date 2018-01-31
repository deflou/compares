# compares
Compares package for DeFlou

# using

````
use deflou\components\compares\CompareDefault;
use deflou\components\compares\CompareVersion;

$compare = new CompareDefault(5, 6, CompareDefault::EQUAL);
echo $compare->compare(); // false

$compare = new CompareVersion('1.5', '1.6', CompareDefault::LOWER);
echo $compare->compare(); // true
````