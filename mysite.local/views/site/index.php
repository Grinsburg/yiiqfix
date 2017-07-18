<?php

/* @var $this yii\web\View */

$this->title = 'QFix';

?>

    <header class="hdr1"> 
      <div class="slidershow-container">			
			<div class="mySlides fade">
			 <img src="img/1.jpg" style="width:100%">
             <div class="text">
             <button class="mybtn">Зарегистрироваться</button>
            </div>
			</div>
			<div class="mySlides fade">
				<img src="img/2.jpg" style="width:100%">
				<div class="text">
                    <p></p>
				    <button class="mybtn">Рассчитать стоимость</button>
				</div>
			</div>
			<div class="mySlides fade">
				<img src="img/3.jpg" style="width:100%">
				<div class="text">11111</div>
			</div>
			<a onclick="plusSlides(-1)" class="prev">&#10094</a>
			<a onclick="plusSlides(1)" class="next">&#10095</a>
      </div>
      <div style="text-align:center;">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
      </div>   
    </header>
    <section class="infosctn border_top">
        <div class="infodiv">
            <div class="infodiv-1">
                <div class="item item-pos margin__left">
                    <a href="">
                        <div class="link-item">
                            <img src="img/setting%20(2).svg" alt="">
                        </div>
                        <p class="item-text">Калькулятор работ</p>
                    </a>
                </div>
                <div class="item item-pos">
                    <a href="">
                        <div class="link-item">
                            <img src="img/section.svg" alt="">
                        </div>
                        <p class="item-text">Как это работает?</p>
                    </a>
                </div>
                <div class="item item-pos">
                    <a href="">
                        <div class="link-item">
                            <img src="img/setting.svg" alt="">
                        </div>
                        <p class="item-text">Сформировать заявку</p>
                    </a>
                </div>
                <div class="item item-pos">
                    <a href="">
                        <div class="link-item">
                            <img  src="img/section.svg" alt="">
                        </div>
                        <p class="item-text">О нас</p>
                    </a>
                </div>
            </div>
            <div class="infodiv-2">
                <input class="doc" type="button" name="button" value="Сформировать заявку" method="post">
            </div>
        </div>
        
    </section>
    <section class="sctn1 border_top" id="search_sto">
      <div class="txtdiv">
        <h4 class="texth4_2">Выберите интересующий Вас автосервис:</h4>
      </div>      
      <div class="divselect">
          <select class="selectmenu" name="">
          <option value="0">Выберите город</option>
          <optgroup label="Брестская область">
          <option value="1"></option>
          </optgroup>
          <optgroup label="Витебская область">
          <option value="2"></option>
          </optgroup>
          <optgroup label="Гомельская область">
          <option value="3"></option>
          </optgroup>
          <optgroup label="Гродненская область">
          <option value="4"></option>
          </optgroup>
          <optgroup label="Минская область">
          <option value="5"></option>
          </optgroup>
          <optgroup label="Могилевская область">
          <option value="6"></option>
          </optgroup>
        </select>
        <input type="submit" class="sendbtn" name="" value="Найти">
        </div>
      <form>
         <input type="search" placeholder="Найти" >
      </form>
    </section>
    <section class="sctn2 border_top">
        <div class="txtdiv text_p">
            <p class="text_p_1">Лучшие автосервисы города</p>
        </div>
        <div class="div_city"></div>
        <div class="div_city"></div>
        <div class="div_city"></div>
        <div class="div_city"></div>
        <div class="div_city"></div>
    </section>
    <section class="sctn3 border_top">
      <div class="fullitem">
           <div class="p_div">
                <p class="texth4_2">Выберите интересующую вас услугу</p>
           </div>
           <div class="li_div">
            <ul>
            <li class="item1"><a href="">
                    <p class="p_item1">Диагностика</p>
                </a> </li>
            <a href=""><li class="item1">
                    <p class="p_item1">Дополнительное оборудование</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Защитные пленки</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Кузовные работы</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Масло. Жидкость. Фильтры</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Мойка. Химчистка</p>
                </li></a>
            <a href="">
            <li class="item1">
                   
                    <p class="p_item1">Подвеска</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Сложный агрегатный ремонт</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Стекла. Фары</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Техническое обслуживание</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Тормозная система</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Трансмиссия</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Уход</p>
                </li></a>
            <a href=""><li class="item1">
                    <p class="p_item1">Шиномонтаж</p>
                </li></a>
            <a href="">
                    <li class="item1">
                   <p class="p_item1">Электрика</p>
                </li></a>
                <a class="p_item1" href="">
                    <li class="item1">
                    <p class="p_item1">Консультация</p>
                </li></a>
        </ul>
       </div>
      </div>
    </section>
    <section class="sctn4 border_top">
        <div class="sale_div">
            <div class="txtdiv">
               <p class="texth4_4">Акции и скидки</p>
            </div>
            <div class="sale_form"></div>
            <div class="sale_form"></div>
            <div class="sale_form"></div>
            <div class="round1"></div>  
        </div>
    </section>
    <section class="sctn5 border_top">
        <div>
            <div>
                <p class="texth4_4">Отзывы</p>
            </div>
            <div class="review_div">
                <div class="review margin__left"></div>
                <div class="review"></div>
                <div class="review"></div>
                <div class="review"></div>
                <div class="review"></div>
            </div>
        </div>
    </section>
    <footer class="ftr1">
        <div class="info1">
            <p>QFix - это безопасный способ.......</p>
        </div>
        <div class="info2">
           
            <ul>
               <p>О нас</p>
                <li class="about">111</li>
                <li class="about">111</li>
                <li class="about">111</li>
            </ul>
        </div>
        <div class="info3"></div>
    </footer>
    <script src="js/headhesive.min.js"></script>
    <script src="js/js.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
        $(document).ready(function(){
            NProgress.start();
            NProgress.set(0.5);     
            setTimeout(function() {
                NProgress.done();
            }, 2000)
        });
        $(window).load(function() {
            NProgress.done()
        });
    </script>
    
    <script src="remodal/remodal.min.js"></script>
    <script src="jquery/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <div class="remodal" data-remodal-id="modal">
      <button data-remodal-action="close" class="remodal-close"></button>
      <h1>Войти</h1>    
        <div class="divlog">
            <div class="logdiv">
                <input class="inputmodal" type="text" name="textfield" placeholder="Логин или E-mail">
            </div>
            <div class="passdiv">
                <input class="inputmodal" type="password" name="textfield" placeholder="Пароль">            
            </div>
            <a class="reload_pass" href="">Восстановить пароль</a> 
        </div>       
      <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
      <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
    </div>
    
    <script>
    var options = {...};
    $('[data-remodal-id=modal]').remodal(options);
    </script>
    
    <script>
    var options = {...};
    $('[data-remodal-id=register]').remodal(options);
    </script>
      <div class="remodal" data-remodal-id="register">
      <button data-remodal-action="" class="remodal-close"></button>          
      <a href="autoregister.html">
      <button data-remodal-action="" class="remodal-regauto" >Регистрация автосервиса</button>
      </a>
      <a href="userregister.html">
      <button data-remodal-action="" class="remodal-reguser">Регистрация пользователя</button>
      </a>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script> 
              
    <script type="text/javascript" >а
        $(document).ready(function() {
 
$('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 2000);
        return false; 
});
    
});
    </script>
