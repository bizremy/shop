<?php
class View
{
    public $title="Кальяны";
    public $column="column.php";
    public $menu="menu.php";
    public $temlateView='application/views/template.php';
    
    public function generate($contentView,$data=null)
    {
        $menu=$this->menu;
        $column=$this->column;
        $title=  $this->title;
        require $this->temlateView;

    }
    public function slide($temlateView,$data=niull){
        require $temlateView;
    }

}


