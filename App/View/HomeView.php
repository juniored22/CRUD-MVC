<?php
namespace View;
/**
*
*/
class HomeView
{
  function __construct($data='')
  {
    ?>



    <div class="cards" >
      <?php
        // print_r($data);
         foreach ($data as $key) {
          echo $key['name_user'];
        }
     ?>
     </div>

    <?php

  }
}
?>
