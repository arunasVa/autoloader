<?php
include __DIR__.'/PackageLoader.php';

$loader = new PackageLoader\PackageLoader();
$loader->load(__DIR__."/vendor/project");

/*testuoja autoloader*/
new CompanyName\PackageName\PersonPackage();
new CompanyName\PackageName\Person();
new SayHello\Hello();
new NoNameSpace();
echo "Autoloader works".PHP_EOL;

new Magic\Methods\Magic();

$a = new Magic\Methods\MoreMagic();
$a->b = 10;
$app = $a->Jonas;
$a->getNames("Jonas","Marius","Gediminas");
Magic\Methods\MoreMagic::XY("1","epic","test");

isset($a->Me);
unset($a->You);

$class = new Magic\Methods\MagicString("This is __toString, Hello");
echo $class;



