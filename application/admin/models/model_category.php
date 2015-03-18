<?php
class model_category extends Model{

    public function getCategory(){
        $mysqli = self::getObj();
        $rows= $mysqli->query("select * from category");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]=$row['title'];

        }
        return $str;
}
    public function createCategory($title)
    {
        $mysqli = self::getObj();
        $mysqli->query("insert into category(title) VALUES ('$title')");
    }
    public function deleteCategory($id)
    {
        $mysqli=self::getObj();
        $mysqli->query("delete from category where id=$id");
    }
    public function updateCategory($id)
    {
        $mysqli=self::getObj();
        $rows =$mysqli->query("select * from category where id=$id");
        $row =$rows->fetch_assoc();
        $str['title']=$row['title'];
        $str['id']=$row['id'];
        return $str;
    }
     public function saveCategory($id,$title){
         $mysqli=self::getObj();
         $mysqli->query("update category set title='$title' where id=$id");
     }


}