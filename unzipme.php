<?php

// file_put_contents("backup.zip", file_get_contents("http://example.com.au/backup-2014.04.14.zip"));
// exec("wget http://example.com.au/backup-2014.04.14.zip");

$result = array();
exec("unzip backup-2014.04.14.zip", $result, $returnval);
print_r($result);
print_r($returnval);


print 'execed';
