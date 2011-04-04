<?php

/** TXT/XHTML view
 *
 * This file implements a TXT/XHTML view layer for whatever data comes from
 * the controller inside the $data variable.
 */

if (is_scalar($data)) {
    echo $data;
} else {
    echo serialize($data);
}