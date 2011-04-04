<?php

/** XML view
 *
 * This file implements a XML view layer for whatever data comes from
 * the controller inside the $data variable.
 */

require 'Grs/view/helpers/ToXml.php';
if (is_scalar($data)) {
    $data = array('response' => $data);
}
echo ToXml::toXml($data);