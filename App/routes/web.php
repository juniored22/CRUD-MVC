<?php
$router = [
  '/'      => 'shop',
];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(!array_key_exists($uri, $router))
{
  header("location:/error-404");
  throw new Exception("Rota  {$uri} não exite");
}
return $router[$uri];
?>
