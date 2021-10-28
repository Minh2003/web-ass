<?php
  namespace Controllers;

  use dish_model;
class MenuController {
  public function getDishAll() {
    $result = dish_model::getDishAll();

    echo json_encode($result);
  }
}
?>