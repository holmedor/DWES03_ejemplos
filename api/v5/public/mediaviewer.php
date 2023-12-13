<?php

$json=file_get_contents('./media.json',true);
//echo gettype($json);
$json_object=json_decode($json);//deserializa el fichero a objeto json
//echo gettype($json_object);
//echo print_r($json_object);
echo print_r($json);
?>