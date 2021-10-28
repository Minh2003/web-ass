<?php
  namespace Controllers;

use reservation_model;

class ReservationController {
  public function reservation() {
    $date = time();
    $description = $_POST['description'];
    $NoP = $_POST['NoP'];

    $result = reservation_model::reservation($date, $description, $NoP);

    echo json_encode($result);
  }

}
?>