<?php session_start();?>
<?php

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "main";
}
?>
<!DOCTYPE>
<HTML lang="ru">
<Head>


    <link rel="shortcut icon" href="/images/img/mgl.ico" type="image/x-icon">
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="filter.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dark.css">
    <link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
    <meta charset="utf-8">
    <title>MyGiro</title>
</Head>
<body>

    <div class="header">
        <div class="logo">
            <img src="images\img\logo.png" class="logo-img">

        </div>
        <h1 class="logo-title">«My-Giro»</h1>
        <div class="hor-menu">
            <ul>
                <li><p class="tele">+7 351 111 22 33</p>></li>
                <a href="http://ya.ru"><img src="images\img\call.png" class="cal"></a>

            </ul>
        </div>
        <div>
            <div class="wrapper">
                <div class="theme-button" id="theme-button">Сменить тему</div>
            </div>
            <main class="main">
                <article class="main_content">
                    <p><!-- lorem120 --></p>
                </article>
            </main>

            <script src="themes.js"></script>
        </div>
    </div>

    <div class="slides">

        <div> Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы. </div>

        <div> Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую. </div>

        <div> мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России. </div>

        <div> Гарантия действует в течении 3 лет! </div>

    </div>

<!электросамокат>

<h2 align="center">
    <article id="1"></article>Электросамокат</h2>
<div class="wrapper">

    <div class="content">

    <img src="images/img/elsam.png" class="logo-s">
    </div>
    <div>
    <p align="left" class="scuters">
    Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.
    </p>
    </div>
    </div>

    <!Гироскутер>
    <h2 align="center"id="#">Гироскутер</h2>
    <div class="wrapper">

    <div>
    <p align="left" class="scuters">
    Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.

    Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.

    Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону
    </p>
    </div>
    <div class="content">
    <img src="images/img/tov2.png" class="logo-s">
    </div>
    </div>



    <!Сигвей>
    <h2 align="center"id="#">Сигвей</h2>
    <div class="wrapper">
    <div class="content">
        <img src="images/img/segway.png" class="logo-s">
    </div>
    <div>
    <p align="left" class="scuters">

    Средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов.
    </div>
</div>

    <div align="center">
        <h1>Фильтр по таблице</h1>
        <div align="center" style="min-height: 500" class="container">
            <input type="radio" id="blue" name="color" />
            <label for="blue">Гироскутеры</label>
            <input type="radio" id="red" name="color"/>
            <label for="red">Сигвеи</label>
            <input type="radio" id="green" name="color"/>
            <label for="green">Электросамокаты</label>
            <input type="radio" id="reset" name="color"/>
            <label for="reset">Всё</label>

            <div class="tile red"><a href="#he">Hili E+</a></div>
            <div class="tile blue"><a href="#kke">KIWANO KO-X ES03</a></div>
            <div class="tile green"><a href="#ks">KUGOO S2 (Jilong)</a></div>
            <div class="tile red"><a href="#mmp">Minirobot Mini PRO 36V Белый</a></div>
            <div class="tile blue"><a href="#sb">Smart Balance 6.5" Ver. 1</a></div>
            <div class="tile red"><a href="#xnm">Xiaomi Ninebot Mini</a></div>
            <div class="tile green"><a href="#ypm">Yamato PES MINI</a></div>

        </div>
    </div>

    <div>



        <table align="center">
            <h1>Товары</h1>
            <tr>
                <th>Фото</th>
                <th>Название</th>
                <th>Цена</th>
                <th><a name="sb"></a>Вид</th>
            </tr>
            <tr>
                <td><a name="kke"></a><img src="images/img/tov1.jpg" width="250" height="250"></td>
                <td align="center" bgcolor="lightcyan">Smart Balance 6.5" Ver. 1</td>
                <td align="center" bgcolor="lightcyan">8990</td>
                <td align="center" bgcolor="lightcyan">Гироскутер</td>
            </tr>
            <tr>
                <td><a name="mmp"></a><img src="images/img/tovdva.jpg" width="250" height="250"></td>
                <td align="center" bgcolor="lightcyan">KIWANO KO-X ES03</td>
                <td align="center" bgcolor="lightcyan">18900</td>
                <td align="center" bgcolor="lightcyan">Гироскутер</td>
            </tr>
            <tr>
                <td><a name="xnm"></a><img src="images/img/tov3.jpg"  width="250" height="250"></td>
                <td align="center" bgcolor="lightgrey">Minirobot Mini PRO 36V Белый</td>
                <td align="center" bgcolor="lightgrey">15990</td>
                <td align="center" bgcolor="lightgrey">Сигвей</td>
            </tr>
            <tr>
                <td><a name="he"></a><img src="images/img/tov4.jpg" width="250" height="250"></td>
                <td align="center" bgcolor="lightgrey">Xiaomi Ninebot Mini</td>
                <td align="center" bgcolor="lightgrey">22900</td>
                <td align="center" bgcolor="lightgrey">Сигвей</td>
            </tr>
            <tr>
                <td><a name="ypm"></a><img src="images/img/tov5.jpg" width="250" height="250"></td>
                <td align="center" bgcolor="lightgrey">Hili E+</td>
                <td align="center" bgcolor="lightgrey">39900</td>
                <td align="center" bgcolor="lightgrey">Сигвей</td>
            </tr>
            <tr>
                <td><a name="ks"></a><img src="images/img/tov6.jpg" width="250" height="250"></td>
                <td align="center" bgcolor="lightcyan">Yamato PES MINI</td>
                <td align="center" bgcolor="lightcyan">15900</td>
                <td align="center" bgcolor="lightcyan">Электросамокат</td>
            </tr>
            <tr>
                <td><img src="images/img/tov7.jpg"  width="250" height="250"></td>
                <td align="center" bgcolor="lightcyan">KUGOO S2 (Jilong)</td>
                <td  align="center" bgcolor="lightcyan">14900</td>
                <td align="center" bgcolor="lightcyan">Электросамокат</td>
            </tr>
        </table>
</div>

    <!-- блок слайдера -->
    <div class="carousel-wrapper">
        <span id="item-1"></span>
        <span id="item-2"></span>
        <span id="item-3"></span>
        <!-- 1й элемент слайдера -->
        <div align="center" class="carousel-item item-1">
            <p class="po">Иванов Иван Иванович – квалифицированный специалист сервисного центра My Gyro.</p>
            <a class="arrow arrow-prev" href="#item-3"></a>
            <a class="arrow arrow-next" href="#item-2"></a>
        </div>
        <!-- 2й элемент слайдера -->
        <div align="center" class="carousel-item item-2">
            <p>Пупкин Василий Васильевич – старший консультант My Gyro.</p>
            <a class="arrow arrow-prev" href="#item-1"></a>
            <a class="arrow arrow-next" href="#item-3"></a>
        </div>
        <!-- 3й элемент слайдера -->
        <div align="center" class="carousel-item item-3">
            <p>Захаров Андрей Борисович – менеджер-консультант My Gyro.</p>
            <a class="arrow arrow-prev" href="#item-2"></a>
            <a class="arrow arrow-next" href="#item-1"></a>
        </div>
    </div>
    <p align="center" class="er"><b>Бренды, предоставленные в магазине:</b></p>
<div align="center" class="brand">

    <img src="images/img/brand/br1.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br2.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br3.png" width="210px" height="210px" class="logo-b">
    <img src="images/img/brand/br4.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br5.png" width="210px" height="210px" class="logo-b">
    <img src="images/img/brand/br6.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br7.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br8.png" width="210px" height="210px"  class="logo-b">
    <img src="images/img/brand/br9.png" width="210px" height="210px" class="logo-b">
    <img src="images/img/brand/br10.png" width="210px" height="210px"  class="logo-b">

</div>

<div class="polinf">
    <p align="center">Чтобы работать в наших магазинах <b>нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней</b>. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который <b>разбирается в каждом товаре и сможет по-настоящему помочь покупателю</b>, а не “впихнуть” ему, что-нибудь подороже.</p>
    <img src="images/img/personal.jpg" class="pers">
</div>
<div>
    <h1>Полезная информация!</h1>
    <ul align="justify" class="ullip">
        <li><p>Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.</p></li>
        <li><p>Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</p></li>
    </ul>
    <form action="action_page.php">
        <div class="containerr">
            <h2>Подпишитесь на нашу рассылку</h2>
        </div>

        <div class="containerr" style="background-color:white">
            <input type="text" placeholder="Имя" name="name" required>
            <input type="text" placeholder="Адрес электронной почты" name="mail" required>
        </div>

        <div class="containerr">
            <input type="submit" value="Подписаться">
        </div>
    </form>
</div>
    <div align="center">
    <a href="" class="animated-button">Вверх</a>
    </div>

</body>
</HTML>
