<?php

require 'Grs/controller/Grs.php';

$grs = new Grs();
$grs->setModelsPath('Grs/model');
$grs->dispatch();