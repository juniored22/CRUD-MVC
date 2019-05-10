<?php
namespace Model;
use Database\Schema;
/**
 *
 */
class ModelShow
{
  function list()
  {
    return (new Schema)->query('SELECT * FROM user_ead;');
  }
}
 ?>
