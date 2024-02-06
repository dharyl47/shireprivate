<?php

$name=trim($_REQUEST['name']);

$url=strtolower(str_replace(' ', '-',str_replace('&', 'and', str_replace('/', '-',str_replace("'", '-',str_replace(",", '',

str_replace('"', '',str_replace('(', '',str_replace(')', '',(str_replace(':', '',(str_replace('.', '',(str_replace('!', '',(str_replace('+', '',(str_replace('*', '',($name))))))))))))))))))));

echo strtolower(str_replace('--', '-',$url));

?>