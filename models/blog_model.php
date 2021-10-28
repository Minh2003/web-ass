<?php
class blog_model
{
  public $id;
  public $title;
  public $content;
  public $image;
  public $date;

  public function __construct($id, $title, $content, $image, $date)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
    $this->image  = $image;
    $this->date = $date;
  }


  public static function getBlogAll()
  {
    $list = [];
    $db = Db::getInstance();
    $result = mysqli_query($db, 'SELECT * FROM blog');

    while ($row = mysqli_fetch_assoc($result)) {
      $list[] = new blog_model($row['id'], $row['title'], $row['content'], $row['image'], $row['date']);
    }

    return $list;
  }

  public static function getBlogDetail($id) {
    $list = [];
    $db = Db::getInstance();
    $result = mysqli_query($db, "SELECT * FROM blog where id = $id");

    while ($row = mysqli_fetch_assoc($result)) {
      $list[] = new blog_model($row['id'], $row['title'], $row['content'], $row['image'], $row['date']);
    }

    return $list[0];
  }

  public static function deleteBlog($blogId)
  {
    $db = Db::getInstance();
    mysqli_query($db, "delete from blog where id = $blogId");
    return true;
  }

  public static function createBlog($title, $content, $image, $date)
  {
    $db = Db::getInstance();
    $result = mysqli_query($db, "insert into blog(title, content, image) values ('$title','$content', '$image')");
    $id = mysqli_insert_id($db);

    return new blog_model($id, $title, $content, $image, $date);
  }

  public static function updateBlog($id, $title, $content, $image) {
    $db = Db::getInstance();
    $list = [];
    mysqli_query($db, "update blog set title = '$title', content = '$content', image = '$image' where id = '$id'");
    $result = mysqli_query($db, "SELECT * FROM blog where id = $id");

    while ($row = mysqli_fetch_assoc($result)) {
      $list[] = new blog_model($row['id'], $row['title'], $row['content'], $row['image'], $row['date']);
    }

    return $list[0];
  }
}
?>