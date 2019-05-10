<?php
namespace Controller;

use Database\Connection;
use Model\ModelShow;
use View\HomeView;

/**
*
*/
class Controller
{
/*
|--------------------------------------------------------------------------
| Home site
|--------------------------------------------------------------------------
*/
  public function shop()
  {
    $connection = (new Connection)->createConnection();
    $data       = (new ModelShow)->list();

    return (new HomeView($data));
  }



}
