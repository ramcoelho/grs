<?php

require 'Grs/Grs.php';

$grs = new Nexy\Grs();
$grs->setModelsPath(__DIR__ . '/model');
$grs->dispatch();

