<?php
class model_sale extends Model{

    public  function getSeller(){
        $mysqli = self::getObj();
        $rows= $mysqli->query
        ("select * from seller");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]['name']=$row['name'];
            $str[$row['id']]['address']=$row['address'];
            $str[$row['id']]['phone']=$row['phone'];
            $str[$row['id']]['email']=$row['email'];
            $str[$row['id']]['sum']=$row['sum'];
            $str[$row['id']]['coment']=$row['coment'];
        }
        return $str;
    }
    public function getSale($id)
    {
        $mysqli = self::getObj();
        $rows= $mysqli->query
        ("select * from seller where id=$id");
        $row =$rows->fetch_assoc();
            $str['id']=$row['id'];
            $str['name']=$row['name'];
            $str['address']=$row['address'];
            $str['phone']=$row['phone'];
            $str['email']=$row['email'];
            $str['sum']=$row['sum'];
            $str['coment']=$row['coment'];

        $rows= $mysqli->query
        ("select s.id,s.quantity,s.price,g.title,s.id_seller,g.img_url from sale s
left join goods g on
s.id_goods=g.id
where s.id_seller=$id");
        while($row =$rows->fetch_assoc())
        {
            $strSale[$row['id']]['quantity']=$row['quantity'];
            $strSale[$row['id']]['title']=$row['title'];
            $strSale[$row['id']]['price']=$row['price'];
            $strSale[$row['id']]['img_url']=$row['img_url'];

        }
        return array('str'=>$str,'strSale'=>$strSale);
    }
    public function goods(){
        $mysqli = self::getObj();
        $rows= $mysqli->query
        ("select g.id, g.title,g.price,g.id_subcategory,
s.title as stitle,g.main
from goods g left join  subcategory s
on s.id=g.id_subcategory
");
        while($row =$rows->fetch_assoc())
        {
            $str[$row['id']]['title']=$row['title'];
            $str[$row['id']]['main']=$row['main'];
            $str[$row['id']]['stitle']=$row['stitle'];
            $str[$row['id']]['price']=$row['price'];
        }
        return $str;
    }
    public function deleteGoods($id)
    {
        $mysqli=self::getObj();
        $mysqli->query("delete from goods where id=$id");
    }



}