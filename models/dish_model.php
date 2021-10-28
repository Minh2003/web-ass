<?php
class dish_model
{
  public $id;
  public $name;
  public $description;
  public $image;

  public function __construct($id, $name, $description, $image)
  {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->image  = $image;
  }


  public static function getDishAll()
  {
    $list = [];
    $db = Db::getInstance();
    $result = mysqli_query($db, 'SELECT * FROM dish');

    while ($row = mysqli_fetch_assoc($result)) {
      $list[] = new dish_model($row['id'], $row['name'], $row['description'], $row['image']);
    }

    return $list;
  }

  public static function deleteDish($dishId)
  {
    $db = Db::getInstance();
    mysqli_query($db, "delete from dish where id = $dishId");
    return true;
  }

  public static function createDish($name, $description, $image)
  {
    $db = Db::getInstance();
    $result = mysqli_query($db, "Insert into dish (name,description,image) Values ('$name','$description','$image')");
    $id = mysqli_insert_id($db);

    return new dish_model($id, $name, $description, $image);
  }
}
?>