<?php
$_GET['test'] = 2.5;
echo filter_has_var(INPUT_GET, 'test') ? 'Yes' : 'No';
?>