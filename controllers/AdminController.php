<?php
  namespace Controllers;

use blog_model;
use dish_model;

class AdminController {
    public function createDish() {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $image = $_POST['image'];

      $dish = dish_model::createDish($name, $description, $image);

      echo json_encode($dish);
    }

    public function deleteDish($param) {
      dish_model::deleteDish($param[1]);

      echo json_encode("Successfully!");
    }

    public function createBlog() {
      $title = $_POST['title'];
      $content = $_POST['content'];
      $image = $_POST['image'];
      $date = time();

      $blog = blog_model::createBlog($title, $content, $image, $date);

      echo json_encode($blog);
    }

    public function deleteBlog($param) {
      blog_model::deleteBlog($param[1]);

      echo json_encode("Successfully!");
    }

    public function updateBlog($param) {
      $id = $param[1];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $image = $_POST['image'];

      $blog = blog_model::updateBlog($id, $title, $content, $image);

      echo json_encode($blog);
    }

    public function deleteUser($user_id) {

    }

    public function deleteComment() {
      
    }
  }
