<?php

require 'Grs/Grs.php';

$grs = new Grs();
$grs->setModelsPath('Grs/model');
$grs->dispatch();

