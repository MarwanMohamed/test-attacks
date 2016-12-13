<?php
$exploits = array();
$exploits[] = "*(|(objectclass=*))";
$exploits[] = "*)(uid=*))(|(uid=*";
$exploits[] = "*))));";

return $exploits;