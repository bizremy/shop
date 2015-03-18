<?php
class model_main extends Model {
    public function getData($id){
        $mysqli =self::getObj();
        if(!empty($id)){

            $condition="where id_category=$id";
            $rows=$mysqli->query("select title from category where id=$id");
            $row=$rows->fetch_assoc();
            $title=$row['title'];
        }
        else{
            $title='Главная';
            $condition="";
        }

        $rows= $mysqli->query("select g.id,g.title,g.main,g.price,g.id_subcategory,
g.img_url,s.title as title_subcategory,  s.id_category
from goods g left   join subcategory s
on g.id_subcategory = s.id $condition");
        while($row=$rows->fetch_assoc()){
            $str[$row['id']]['title']=$row['title'];
            $str[$row['id']]['main']=$row['main'];
            $str[$row['id']]['price']=$row['price'];
            $str[$row['id']]['img_url']=$row['img_url'];
            $str[$row['id']]['description']=$row['description'];
            $str[$row['id']]['title_subcategory']=$row['title_subcategory'];
            $str[$row['id']]['id_category']=$row['id_category'];
        }
        $rows=$mysqli->query("select * from subcategory $condition");
        while($row=$rows->fetch_assoc()){
            $column[$row['id']]=$row['title'];
        }

        return array('str'=>$str,'title'=>$title,'column'=>$column);

    }

    public function getSubcategory($id){
        $mysqli =self::getObj();
        if(!empty($id)){

            $condition="where id_subcategory=$id";
            $rows=$mysqli->query("select title from subcategory where id=$id");
            $row=$rows->fetch_assoc();
            $title=$row['title'];
        }
        else{
            $title='Главная';
            $condition="";
        }

        $rows= $mysqli->query("select g.id,g.title,g.price,g.id_subcategory,
g.img_url,s.title as title_subcategory,  s.id_category,g.main
from goods g left   join subcategory s
on g.id_subcategory = s.id $condition");
        while($row=$rows->fetch_assoc()){
            $str[$row['id']]['title']=$row['title'];
            $str[$row['id']]['main']=$row['main'];
            $str[$row['id']]['price']=$row['price'];
            $str[$row['id']]['img_url']=$row['img_url'];
            $str[$row['id']]['description']=$row['description'];
            $str[$row['id']]['title_subcategory']=$row['title_subcategory'];
            $str[$row['id']]['id_category']=$row['id_category'];

        }
        $rows=$mysqli->query("select * from subcategory
 where id_category=(select id_category from subcategory where id=$id)");
        while($row=$rows->fetch_assoc()){
            $column[$row['id']]=$row['title'];
        }


        return array('str'=>$str,'title'=>$title,'column'=>$column);

    }
    public function getView($id){
        $mysqli = self::getObj();
        $rows= $mysqli->query("select * from goods where id=$id");
        $row=$rows->fetch_assoc();
        $str['title']=$row['title'];
        $str['main']=$row['main'];
        $str['price']=$row['price'];
        $str['img_url']=$row['img_url'];
        $str['description']=$row['description'];
        $title=$row['title'];
        return array('str'=>$str,'title'=>$title);
    }


        public function menu()
    {
        $mysqli = self::getObj();
        $rows= $mysqli->query("select * from category");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]=$row['title'];
        }
              return $str;
    }

}
