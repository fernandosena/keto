<?php
require_once("class/autoload.php");

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')) {
  return 'Hello World';
} else {
  die('Forbidden');
}
