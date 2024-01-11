<?php

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "There are $days_remaining days and $hours_remaining hours left";



?>