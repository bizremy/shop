<?php
class model_subcategory extends Model{

    public  function getSubCategory(){
        $mysqli = self::getObj();
        $rows= $mysqli->query("select s.id,s.title,c.title as ctitle from subcategory s
left join category c on
s.id_category=c.id");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]['title']=$row['title'];
            $str[$row['id']]['ctitle']=$row['ctitle'];
        }
        require_once 'model_category.php';
        $category = new model_category();
        $rule=$category->getCategory();
        return array('str'=>$str,'rule'=>$rule);
    }
    public function createSubCategory($id_category,$title)
    {
        $mysqli = self::getObj();
        $mysqli->query("insert into subcategory(title,id_category) VALUES ('$title',$id_category)");
    }
    public function deleteSubCategory($id)
    {
        $mysqli=self::getObj();
        $mysqli->query("delete from subcategory where id=$id");
    }
    public function updateSubCategory($id)
    {
        $mysqli=self::getObj();
        $rows =$mysqli->query("select s.id,s.title,c.title as ctitle from subcategory s
left join category c on
s.id_category=c.id where s.id=$id");
        $row =$rows->fetch_assoc();
        $str['title']=$row['title'];
        $str['ctitle']=$row['ctitle'];
        $str['id']=$row['id'];
        require_once 'model_category.php';
        $category = new model_category();
        $str['rule']=$category->getCategory();
        return $str;
    }
    public function saveSubCategory($id,$title,$id_category){
        $mysqli=self::getObj();
        $mysqli->query("update subcategory set title='$title',id_categoty=$id_category where id=$id");
    }


}