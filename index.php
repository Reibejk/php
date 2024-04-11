<h1>Hello from a Web Page</h1>
<p>
<?php
echo "<pre>";
echo "Hi there"."\n";
$x = 6 * 7;
echo "The answer is " .$x. " what was the question\n\n";
$stuff = array("name" => "Tom", "course" => "new123");
foreach($stuff as $k => $v) {
  echo "Key=" ,$k, " Val=" ,$v, "\n";
}
$newStuff = array("Tom", "new456");
for($i=0; $i < count($newStuff); $i++) {
  echo "I=" ,$i, " Val=" ,$newStuff[$i], "\n";
}

$product = array(
  'paper' => array(
    'copier' => "Copier",
    'inhect' => "Inject Printer",
    'laser' => "Laser Printer"
  ),
  'pens' => array(
    'ball' => "Ball Point",
    'hilite' => "Highlighters",
    'marker' => "Markers"
  )
);
echo $product["pens"]["marker"]."\n\n";
$name = $stuff['name'] ?? 'not found';
$addr = $stuff['addr'] ?? 'not found';
$numb = isset($stuff['course']) ? $stuff['course'] : 'not found';

echo("Name=$name\n");
echo("Addr=$addr\n");
echo "Numb=$numb\n";

$za = array();
$za["name"] = "Tom";
$za["age"] = "33";
$za["hair"] = "brown";
$za["eyes"] = "Brown";

print "Count: " . count($za) . "\n";
if (is_array($za)) {
  echo '$za Is an array' . "\n";
} else {
  echo '$za Is not an array' . "\n";
}
echo "\n";
print_r($za);
ksort($za);
print_r($za);
asort($za);
print_r($za);
echo isset($stuff['section']);

$inp = "This is a sentence with seven words";
$temp = explode(' ', $inp);
print_r($temp);
var_dump($temp);
echo strrev($inp)."\n";
echo str_repeat($inp."\n", 2)."\n";
echo strtoupper($inp)."\n";
echo strlen($inp)."\n";

function howdy($lang='es') {
  if($lang == 'es') return "Hola";
  if($lang == 'fr') return "Bonjour";
  return "Hello";
}

print howdy() . " Glen\n";
print howdy('fr') . " Sally\n\n";

function double($alias) {
  $alias = $alias * 2;
  return $alias;
}
$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";

function triple(&$realthing) {
  $realthing = $realthing * 3;
}
$val = 10;
triple($val);
echo "Triple = $val\n";

echo "</pre>";
?>
</p>
<p>Another paragraph</p>
