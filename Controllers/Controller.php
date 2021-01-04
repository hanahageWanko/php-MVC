<?php
class Controller
{
  public static function CreateView($viewName) {
   require_once( __DIR__ . "/../Views/$viewName.php");
  }
}
