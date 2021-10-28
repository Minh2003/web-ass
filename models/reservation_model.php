<?php
  class reservation_model {
    public $id;
    public $date;
    public $description;
    public $NoP;

  public function __construct($id, $date, $description, $NoP) {
    $this->id = $id;
    $this->date = $date;
    $this->description = $description;
    $this->NoP = $NoP;
  }

  public static function reservation($date, $description, $NoP) {
    $db = Db::getInstance();
    $result = mysqli_query($db, "insert into reservation (description, NoP) values ('$description', '$NoP')");

    $id = mysqli_insert_id($db);

    return new reservation_model($id, $date, $description, $NoP);
  }
}
?>