$("addcontent").hide();
$("h5").on("click", function (event)
{
    $(this).next().slideToggle(600);
    var height = $("body").height();
    $("body").animate({"scrollTop": height}, 600);
});
if(location.pathname.split("/")[location.pathname.split("/").length-2]=='view'){
console.log(location);
    var starsAll = 0;//Всего звезд
    var voteAll = 0;//Всего голосов
    var starWidth = 17;//ширина одной звезды
    var idArticle=location.pathname.split("/")[location.pathname.split("/").length-1];
    $.ajax({
        type:"post",
        dataType: 'json',
        url:location.origin + "/main/rating",
        data:{id:idArticle},
        async: false,
        success:function(data){
            starsAll=data.vote;
            voteAll=data.voters;
        }
    });
    var rating = (starsAll/voteAll); //Старый рейтинг
    rating = Math.round(rating*100)/100;
    if(isNaN(rating)){
        rating = 0;
    }
    var ratingResCss = rating*starWidth; //старый рейтинг в пикселях
    $(".ratDone").css("width", ratingResCss);
    $(".ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");


    var coords;
    var stars;	//кол-во звезд при наведении
    var ratingNew;	//Новое количество звезд
    var x=1;
if(isNaN($.cookie("rating"))) {
    $(".rating").mousemove(function (e) {
        var offset = $(".rating").offset();
        coords = e.clientX - offset.left; //текушая координата
        stars = Math.ceil(coords / starWidth);
        starsCss = stars * starWidth;
        $(".ratHover").css("width", starsCss).attr("title", stars + " из 10");
    });
    $(".rating").mouseout(function () {
        $(".ratHover").css("width", 0);
    });
    $(".rating").click(function () {
        var starsNew = parseInt(starsAll) + parseInt(stars); //новое количество звезд
        voteAll++;
        var ratingNew = starsNew / voteAll;
        ratingNew = Math.round(ratingNew * 100) / 100;
        var razn = Math.round((rating - ratingNew) * 200);//вычислям разницу между новым и старым рейтингом для анимации
        razn = Math.abs(razn);
        var total = Math.round(ratingNew * starWidth);

        $.ajax({
            type: "post",
            url: location.origin + "/main/setrating",
            data: {
                id: idArticle,
                vote: starsNew,
                voters: voteAll
            },
            async: false,
            success: function () {

                $.cookie("rating","1",{ expires: 31,path:location.pathname});
                    $(".ratHover").css("display", "none");
                    $(".ratDone").animate({width: total}, razn);
                    $(".ratBlocks").show();
                    $(".ratStat").html("Рейтинг: <strong>" + ratingNew + "</strong> Голосов: <strong>" + voteAll + "</strong>");
                }

        });
        return false;

    });
}
}
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

   /* if(!isNaN($.cookie("id_seller"))){
        $("#id_seller").html("<h2>Ваш номер заказа "+$.cookie("id_seller")+"</h2>" +
        " ждите звонка с вами свяжется наш менеджер");


    }*/
}

$('form[name=setCart]').submit(function(event) {
   $('.error').empty();
    var errorMsg="";
    if (title.length < 1) {
        errorMsg = "Нет товара<br>";
    }
    else {
        if ($('input[name=name]').val().length < 3) {
            errorMsg += "Поле имя должно содержаать минимум 3 сивола<br>";
        }
        if ($('input[name=phone]').val().length < 3) {
            errorMsg += "Поле телефон должно содержаать минимум 3 сивола<br>";
        }
        if ($('input[name=address]').val().length < 3) {
            errorMsg += "Поле адресс должно содержаать минимум 3 сивола<br>";
        }
    }
    if (errorMsg.length > 1) {
        $('form').before("<div class=error>"+errorMsg+"</div>");
        return false;
    }
     else {
        var formData = new FormData($(this)[0]);
        formData.append("id", id);
        formData.append("price", price);
        formData.append("quantity", count);
        formData.append("sum", sum);
        $.ajax({
            url: location.origin + "/main/setcart",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {

                $("#id_seller").html("<h2>Ваш номер заказа "+data+"</h2>" +
                " ждите звонка с вами свяжется наш менеджер");
                $.removeCookie("xid", {path: '/'});
                setTimeout($('#overlay').click(), 100);
            }



        });
        return false;


    }
});
var k=0;
$('#goodsView').click(function() {
    if (k == 0) {
    $(this).next().slideToggle(600);
    $.ajax({
        url: location.origin + "/admin/sale/add",

        success: function (html) {
            $("#results").append(html);
        }
    });
        k=1;
}
    if(k==1){
        $(this).next().slideToggle(600);

    }
});


