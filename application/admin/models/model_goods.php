<?php
class model_goods extends Model{

    public  function getGoods($id){
        if(!empty($id)){
            $condition="where  s.id_category=$id";
        }

        $mysqli = self::getObj();
        $rows= $mysqli->query
        ("select g.id, g.title,g.description,g.price,g.id_subcategory,
s.title as stitle,g.main
from goods g left join  subcategory s
on s.id=g.id_subcategory
$condition");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]['title']=$row['title'];
            $str[$row['id']]['main']=$row['main'];
            $str[$row['id']]['stitle']=$row['stitle'];
            $str[$row['id']]['description']=$row['description'];
            $str[$row['id']]['price']=$row['price'];
        }
        require_once 'model_category.php';
        $category = new model_category();
        $menu=$category->getCategory();
        if(!empty($id)){
            $conditionRule="where  c.id=$id";
        }
        $rows= $mysqli->query("select s.id,s.title,c.id as ctitle from subcategory s
left join category c on
s.id_category=c.id $conditionRule");
        if(!empty($rows)) {
            while ($row = $rows->fetch_assoc()) {
                $rule[$row['id']] = $row['title'];
            }
        }
        return array('str'=>$str,'menu'=>$menu,'rule'=>$rule);
    }
    public function createGoods($title,$main,$description,$price,$id_subcategory,$img_url)
    {
        $mysqli = self::getObj();
        $mysqli->query("insert into
 goods(title,main,description,price,id_subcategory,img_url)
  VALUES ('$title','$main','$description',$price,$id_subcategory,'$img_url')");
    }
    public function deleteGoods($id)
    {
        $mysqli=self::getObj();
        $mysqli->query("delete from goods where id=$id");
    }
    public function updateGoods($id)
    {
        $mysqli=self::getObj();
        $rows =$mysqli->query("select id,title,main,id_subcategory,price,description,img_url from goods where id=$id");
        $row =$rows->fetch_assoc();
        $str['id']=$row['id'];
        $str['title']=$row['title'];
        $str['main']=$row['main'];
        $str['price']=$row['price'];
        $str['img_url']=$row['img_url'];
        $str['description']=$row['description'];
        $str['rule']=$this->rule($row['id_subcategory']);

        return $str;
    }
    public function saveGoods($id,$title,$main,$description,$price,$id_subcategory){
        $mysqli=self::getObj();
        $mysqli->query("update goods set title='$title',main='$main',description='$description',price=$price,
 id_subcategory=$id_subcategory where id=$id");
    }
public function rule($id){
    if(!empty($id)){
        $conditionRule="where  s.id=$id";
    }
    $mysqli=self::getObj();
    $rows= $mysqli->query("select s.id,s.title,c.title as ctitle from subcategory s
left join category c on
s.id_category=c.id $conditionRule");
    if(!empty($rows)) {
        while ($row = $rows->fetch_assoc()) {
            $rule[$row['id']] = $row['title'];
        }
    }
return $rule;
}
    public function oneGoods($id){
        $mysqli= self::getObj();
        $rows=$mysqli->query("select *from goods where id=$id");
        $row= $rows->fetch_assoc();
        return $row;
    }
    public function addGoods($id_goods,$quantity,$info){
        $date= date("Y-m-d H:i");
        $mysqli=self::getObj();
        $mysqli->query("insert into orders(id_goods,quantity,info,ord_date)
VALUES($id_goods,$quantity,'$info','$date')");
    }


}