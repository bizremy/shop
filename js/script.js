$("addcontent").hide();
$("h5").on("click", function (event)
{
    $(this).next().slideToggle(600);
    var height = $("body").height();
    $("body").animate({"scrollTop": height}, 600);
});

$('form[name=tov]').submit(function ()
{
    $('.error').empty();
    var flag = true;
    if ($('input[name=t]').val() === '')
    {
        $('form').before("<div class ='error'>Поле название должно быть заполнено</div>");
        flag = false;
    }
    if ($('input[name=d]').val() === '')
    {
        $('form').before("<div class ='error'>Поле подробно должно быть заполнено</div>");
        flag = false;
    }

    if ($('input[name=p]').val() > 0 && $('input[name=p]').val() < 80000)
    {

    }
    else
    {
        $('form').before("<div class ='error'>Неправильное знаxение цены</div>");
        flag = false;
    }
    if (flag === false)
        return false;

});

$('form[name=str]').submit(function ()
{
    $('.error').empty();
    if (getCookie('flag') == 1)
    {
        if ($('input[name=quant]').val() > 0 && $('input[name=quant]').val() < 1000 && $('input[name=quant]').val() % 1 == 0)
        {

        }
        else
        {
            $('form').before("<div class ='error'>Введены некоректные данные</div>");
            return false;
        }
    }


    if (getCookie('flag') == 2)
    {

        var b = [];
        var c = [];
        var a = $('.rule').text().split(',');

        for (var i = 0; i < a.length; i++)
        {
            b[i] = a[i].split(':');
            c[b[i][0]] = b[i][1];
        }
        var input = $('input[name=quant]').val();
        var max = c[$('select').val()]*1;




        if (input > 0 && input < 10000 && input % 1 == 0)
        {
            if (input>max)
            {
                $('form').before("<div class ='error'>На складе нет заданого количества, доступно: "+max+" шт</div>");
                return false;
            }
        }

        else
        {
            $('form').before("<div class ='error'>Введены некоректные данные</div>");
            return false;
        }



    }

});

$('form[name=transact]').submit(function()
{

  // var str=$(this).serialize();
 $.ajax({
     url: " http://storage/transact/save",
     type:"POST",

     data:{
     cust:document.getElementById("cust").value,
     empl:document.getElementById("empl").value,
     trans:document.getElementById("trans").value
     },
     success:function(html)
     {
        $("statusbox").html(html);
     }
 }
 );

   return false;

});
$('form[name=createCategory]').submit(function()
{
    if($('input[name=title]').val()==="")
    return false;
    else {

        $.ajax(
            {
                type: "POST",
                url:   location.origin + "/admin/category/create",

                data:{
                    title:document.createCategory.title.value
                },
                complete:function(data)
                {
                    $('form').before("<div class ='error'>поле добавлено data</div>");
                }
            }
        )
    }
});
$('form[name=createSubCategory]').submit(function()
{
    if($('input[name=title]').val()==="")
        return false;
    else {

        $.ajax(
            {
                type: "POST",
                url:   location.origin + "/admin/subcategory/create",

                data:{
                    id_category:document.createSubCategory.id_category.value,
                    title:document.createSubCategory.title.value
                },
                complete:function(data)
                {
                    $('form').before("<div class ='error'>поле добавлено data</div>");
                }
            }
        )
    }

});



$('.delete').click(function(e)
{
    if(location.pathname=="/main/cart"){
        $(this).parent().parent().remove();
        getElement();
    }
    else {
        var a = location.pathname.split("/")
        var loc = location.origin + "/" + a[1] + "/" + a[2];
        console.log($(this).parent().parent().remove());
        $.ajax(
            {
                type: "POST",
                url: loc + "/delete",

                data: {
                    id: e.target.textContent
                },
                complete: function () {
                    $(this).parent().parent().remove();

                }
            }
        )
    }
});
$(document).ready(function() { // вся магия после загрузки страницы
    $('a#go').click( function(event){ // ловим клик по ссылки с id="go"
        event.preventDefault(); // выключаем стандартную роль элемента
        $('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
            function(){ // после выполнения предъидущей анимации
                $('#modal_form')
                    .css('display', 'block') // убираем у модального окна display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
            });
    });
    /* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
    $('#modal_close, #overlay').click( function(){ // ловим клик по крестику или подложке
        $('#modal_form')
            .animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
            function(){ // после анимации
                $(this).css('display', 'none'); // делаем ему display: none;
                $('#overlay').fadeOut(400); // скрываем подложку
            }
        );
    });
});

var filesExt = ['jpg', 'gif', 'png']; // массив расширений
$('input[type=file]').change(function(){
    $('.error').empty();
    var parts = $(this).val().split('.');
    if((filesExt.join().search(parts[parts.length - 1]) != -1) &&  (this.files[0].size<1024*1024)){
        $('input[type=file]').after("<div class ='error'>Изображение добавлено</div>");
    } else {
        $('input[type=file]').after("<div class ='error'>Загрузите изображение, размером  до 1мб</div>");
    }
});
$('form[name=createGoods]').submit(function()
{
    if($('input[name=title]').val()==="" || $('input[name=price]').val()==="" )
       return false;
    else {

        var formData = new FormData($(this)[0]);
        formData.append("description",CKEDITOR.instances.editor1.getData())
        $.ajax({
            url: location.origin + "/admin/goods/create",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(){
                $('form[name=createGoods]').close();
            }
        });

    }
});

$('form[name=updateGoods]').submit(function()
{
    if($('input[name=title]').val()==="" || $('input[name=price]').val()==="" )
        return false;
    else {
        var formData = new FormData($(this)[0]);
        formData.append("description",CKEDITOR.instances.editor1.getData())
        $.ajax({
            url: location.origin + "/admin/goods/save",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(){
                document.location.href=location.origin + "/admin/goods";
            }
        });

    }
});

/*$('form[name=addGoods]').submit(function()
{

    if($('input[name=quanttiti]').val()==="")
        return false;
    else {
        var formData = new FormData($(this)[0]);
        $.ajax(
            {
                type: "POST",
                url:   location.origin + "/admin/goods/add",
                data: formData

            }
        )
    }
});*/

function cart(id){
   if(!($.cookie("xid"))){
       $.cookie("xid",id,{ path: '/'})
   }
    else{
      var xid=$.cookie("xid")+","+id;
       $.cookie("xid",xid,{ path: '/'})
   }
    $("#cartcount").html( $.cookie("xid").split(",").length);
}

$(document).ready(function() {
    $("#cartcount").html( $.cookie("xid").split(",").length);
});

var title = [];
var price = [];
var count = [];
var sum;
var totalsum;
var id = [];
function getElement() {
    var doc = document;
    sum=0
    var length = doc.getElementsByName('title').length;
    for (var i = 0; i < length; i++) {
        title[i] = doc.getElementsByName('title')[i].innerText;
        price[i] = doc.getElementsByName('price')[i].innerText;
        count[i] = doc.getElementsByName('count')[i].value;
        id[i] = doc.getElementsByName('id')[i].value;
        totalsum=count[i]*price[i];
       doc.getElementsByName('totalsum')[i].innerText=totalsum;
        sum=sum+totalsum;
    }
    $("#sum").html(sum);

}

if(location.pathname=="/main/cart"){
    getElement();

    $('#cart').change(function(e){
        getElement();
    });
}

$('form[name=setCart]').submit(function()
{

    var formData = new FormData($(this)[0]);
    formData.append("id",id);
    formData.append("price",price);
    formData.append("quantity",count);
    formData.append("sum",sum);
    $.ajax({
        url: location.origin + "/main/setcart",
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success:function(){
            $.removeCookie("xid", { path: '/' });
        }
    });



});



