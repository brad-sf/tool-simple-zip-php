<?php

//
//  VERY BASIC BEGININGS
//

$zipName = "backup-" . date('Y.m.d') . ".zip";
$zipDir = $_SERVER['DOCUMENT_ROOT']; // or set to your desired directory
$execOutput = array();

if(function_exists('exec'))
  echo "exec exists <br>";
else
  echo "exec exists not! <br>";

function exec_enabled() {
  $disabled = explode(',', ini_get('disable_functions'));
  return !in_array('exec', $disabled);
}

if( exec_enabled() )
  print 'exec is enabled <br>';
else
  print 'exec is disabled! <br>';
  

print "Zipping \"$zipDir\" as \"$zipName\"";
exec("zip -r $zipName $zipDir", $execOutput);

foreach ($execOutput as $output) {
    print $output;
}

print "<br> Done!";
