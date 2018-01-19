<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'home')                                      { include "pages/home.php"; }
  if ($page == 'setting')                                   { include "pages/setting.php"; }

} elseif (isset($_GET['action'])) {
  $action = $_GET['action'];



} else {

  include "pages/home.php";

}
?>