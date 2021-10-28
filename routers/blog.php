<?php
  $router->get('/blogs', 'BlogController@getBlogAll');
  $router->get('/blog/{id}', 'BlogController@getBlogDetail');
?>