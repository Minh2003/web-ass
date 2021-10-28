<?php
  namespace Controllers;
  use blog_model;

class BlogController {
  public function getBlogAll() {
    $result = blog_model::getBlogAll();

    echo json_encode($result);
  }

  public function getBlogDetail($param) {
    $result = blog_model::getBlogDetail($param[1]);

    echo json_encode($result);
  }
}
?>