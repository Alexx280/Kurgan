<!DOCTYPE HTML>
<html>

<head>
    <meta charset='UTF-8'>
    <title> Услуги самосвала </title>
    <link rel='stylesheet' type='text/css' href='Style.css'/>
    <script type="text/javascript" src="jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="fon">
    <div class="zagolovok">
        <h3 class="title">Предоставляем услуги самосвала</h3>
        <h3 class="title">Осуществляем доставку песка, земли, опила, дров.</h3>
        <h3 class="title">Осуществляем вывоз мусора и снега.</h3>
    </div>
    <div class="menu centr">
        <div class="button-menu not_a glav">Главная </div>
        <div class="button-menu not_a vozim">Что возим</div>
        <div class="button-menu not_a price">Стоимость услуг</div>
        <!--<div class="button-menu not_a">Отзывы</div>-->
        <div class="button-menu not_a disk">Получить скидку</div>
        <div class="button-menu tel">Мы работаем без выходных <br>с 7:00 до 20:00</div>
        <div class="button-menu tel">Наш телефон: <br>8-912-577-6337</div>
    </div>
    <div class="main" >
        Доставка осуществляется на самосвале ГАЗ-52<br>
        в городе Кургане и пригороде.
    </div>

    <script>
        $('.disk').click(function(){
           $('.discount').toggleClass('vision');
           $('body,html').animate({scrollTop: 0},800); return false;
        });
        $('.glav').click(function(){
           $('body,html').animate({scrollTop: 0},800); return false;
        });
        $('.vozim').click(function(){
               $('body,html').animate({scrollTop: 900},800); return false;
            });
        $('.price').click(function(){
               $('body,html').animate({scrollTop: 2500},1500); return false;
            });
        $('.button-close').click(function(){
            $('.discount').removeClass('vision');
            });
    </script>
    <!-- Gismeteo Informer (begin) -->
    <div id="GMI_180x150-3_ru" class="gm-info">
        <div style="position:relative;width:180px;height:150px;border:solid 1px;background:#F5F5F5;border-color:#EAEAEA #E4E4E4 #DDDDDD #E6E6E6;border-radius:4px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;">
            <a style="font:11px/13px Arial,Verdana,sans-serif;text-align:center;text-overflow:ellipsis;text-decoration:none;display:block;overflow:hidden;margin:2px 3px;color:#0678CD;" href="https://gismeteo.ru/weather-kurgan-4569/">Курган</a>
            <a style="font:9px/11px Tahoma,Arial,sans-serif;letter-spacing:1px;text-align:center;text-decoration:none;position:absolute;bottom:3px;left:0;width:100%;color:#333;" href="https://gismeteo.ru"><span style="color:#0099FF;">Gis</span>meteo</a>
        </div>
    </div>
    <!-- Reklama -->
    <div style="position: relative; top:170px; left: 100px">Наши друзья и партнёры</div>
    <div style="position: relative; top:200px; left: 50px; margin-top: -20px;">
        <a href="http://magnolia45.ru/">
        <img src="magnolia1.jpg" alt="Smiley face" height="108px" width="255px">
        </a>
    </div>

    <script type="text/javascript">
        (function() {
            var
                d = this.document,
                o = this.navigator.userAgent.match(/MSIE (6|7|8)/) ? true : false,
                s = d.createElement('script');

            s.src  = 'https://www.gismeteo.ru/informers/simple/install/';
            s.type = 'text/javascript';
            s[(o ? 'defer' : 'async')] = true;
            s[(o ? 'onreadystatechange' : 'onload')] = function() {
                try {new GmI({
                    slug : 'fdea254931e00a14bcbb0a3fd1a74b59',
                    type : '180x150-3',
                    city : '4569',
                    lang : 'ru'
                })} catch (e) {}
            }

            d.body.appendChild(s);
        })();
    </script>
    <!-- Gismeteo Informer (finish) -->
    <div class="chto_vozim">
        <p style="text-align: center; font-size: 24px ">Что возим</p>
        <div class="articles">
            <h4>Опилки</h4>
            <p>Применение древесных опилок в саду, огороде
            В книжках для огородников о древесных опилках дается скудная информация. Сказано лишь, что они подкисляют почву. Вот и опасаются дачники использовать опилки. А напрасно!
            На наших тяжелых суглинках они незаменимы. Расскажу о своем 10-летнем опыте применения этого ценного удобрения.
            Мы берем его с лесопильного предприятия, расположенного неподалеку от нашего товарищества. У опилок много полезных свойств.
            Древесные опилоки ценное удобрение. В нем много углерода, благодаря которому активно развивается микрофлора почвы - численность полезных бактерий увеличивается в 2,5 раза. По своим питательным свойствам опилки приближаются к верховому торфу, они богаты клетчаткой, содержат микроэлементы, лигнин, смолы, эфирные масла. Правда, применять их надо вместе с известкующими материалами.
            Высока осушающая способность опилок. Одна часть их может удерживать 4-5 частей воды. С помощью этого приема нетрудно значительно снизить ущерб от паводка, предотвратить затопление грядок. Мы по периметру участка прокопали канавы глубиной 40-50 см, вынутый грунт разбросали по участку и разровняли, а в канавы периодически закладываем опилки, посыпав их известью. Через 3-4 года из них образуется перегной, который мы распределяем по грядкам. Весной заполняем опилками любые сырые низинные места, чтобы можно было везде ходить и раньше начинать земельные работы.
            Против вредных насекомых опилки тоже "работают". Однажды выдался сезон, благоприятный для колорадского жука. Но после внесения свежих опилок в междурядья численность личинок стала уменьшаться на глазах. Свежие опилки выделяют смолистые вещества, отпугивающие вредителя. Но за лето приходится обновлять опилки в межах 2-3 раза. Через год меняем местами грядки и картофельные межи.
            Из опилок получается отличная мульча. Толстым слоем мульчируем с осени озимый чеснок и подзимние посевы. Весной их сгребаем, чтобы быстрее появились всходы.
            В жаркое и сухое лето свежие опилки благодаря светлой окраске хорошо отражают солнечные лучи, спасая почву от перегрева и чрезмерного испарения влаги. Мелкосемянные посевы мульчируем тонким слоем, да и опилки стараемся взять помельче.
            Мы прикрываем ими корни малины слоем 20 см. Сверху вносим порошковый мел, а затем поливаем раствором мочевины (200 г на 10 л воды), ведь микроорганизмы, развивающиеся в опилках, потребляют много азота. К осени опилки чернеют и слой их утончается, поэтому на зиму мы опять подсыпаем эту свежую древесную мульчу, одновременно внося 50 г нитрофоски на 1 м2. Ни перекопки, ни рыхления не нужно совсем.
            Благодаря опилкам малина у нас не болеет и растет на одном месте более 10 лет. Земляника тоже дает обильный урожай под опилками на одних и тех же грядках уже 13 лет. Опилки раскладываем на грядках дважды: весной и после срезки листьев. Каждый раз предварительно рассеиваем молотую яичную скорлупу и золу, а затем посыпаем землю свежими опилками. После сильных дождей подкармливаем землянику комплексными минеральными удобрениями (50 г/м2).
            Опилки - прекрасный рыхлящий материал, улучшающий структуру почвы и ее физические свойства. Они не содержат семян сорняков в отличие от навоза, а также медленно испаряют влагу. Даже если и пробиваются сорняки через толстый слой мульчи, то их легко выдернуть из рыхлой земли.
            Ежегодно мы вносим опилки в пленочные теплицы для разрыхления почвы. Предварительно увлажняем их коровяком (3 кг на 10 л воды). Этого раствора хватает для увлажнения 3 ведер опилок. Осенью рассыпаем известковый материал, а опилки заделываем в почву за 2 недели до посадки рассады огурцов и томатов.
            Свежие опилки используем как компонент в питательных смесях, добавляя 20% их от объема общего субстрата. Кладем опилки даже в торфяную питательную смесь "Малыш" и "Огородник". Такой почве не нужны рыхления и частые поливы. Обогащаем опилками компост. Тогда содержание органики в нем достигает 40%.
            Опилки укладываем в бурт, переслаивая растительными остатками, огородной землей, добавляем немного извести. Если опилки еловые, увеличиваем дозу извести до 500 г на ведро. Летом штабель поливаем водой и раствором комплексных минеральных удобрений.
            Чтобы ускорить созревание компоста, кладем и микробиологические препараты Флумб К или Флумб супер. Компост в этом случае бывает готов за сезон. Мы его даже не перелопачиваем. По качеству он не уступает навозу.
            </p>
        </div>
        <div class="articles">
            <h4>Навоз</h4>
            <p>Навоз является важнейшим органическим удобрением и одним из лучших  источников элементов питания для растений. Благодаря его важной роли для почвы, плодовых и ягодных культур его называют полным удобрением. Навоз улучшает качество почвы и  повышает урожай растений не только в год его приобретения, но также и в течение следующих нескольких лет. Он также оказывает на почву разностороннее действие - улучшает микробиологические свойства, структуру почвы, воздушный и водный режим.    Ученые пришли к выводу, что в 1 тонне навоза содержится примерно 1 кг фосфора, 5 кг азота и 4 кг калия, также есть множество других важнейших элементов содержащихся в довольно большом количестве: железа 180 г, натрия примерно 900 г. Еще навоз богат магнием и микроэлементами.
            КАКОЙ НАВОЗ БОЛЕЕ ПОЛЕЗЕН – СВЕЖИЙ, ПОЛУПЕРЕПРЕВШИЙ, ПЕРЕПРЕВШИЙ  ИЛИ ПЕРЕГНОЙ
            В разных стадиях разложения навоза его подразделяют на свежий, полуперепревший, перепревший и перегной.
            Свежий навоз
            Свежий навоз в большинстве случаев вреден т.к. в нем содержится незначительное количество минерального азота  (значительную часть азота поглощают микроорганизмы, которые в свежем навозе развиваются в избыточном количестве). Свежий навоз лучше не использовать он является источником распространения сорных растений (в нем содержится большое количество семян сорняков). Свежий навоз хорошо используют как биотопливо для обогрева парников. При добавлении в навоз торфа температура горения снижается, а продолжительность горения увеличивается.
            Отличительные свойства свежего навоза:
            Свежий, слаборазложившийся навоз. Цвет и прочность соломы не изменились или изменились незначительно. Вода, пропущенная через такой навоз, приобретает зеленоватый и красноватый цвет.
            Полуперепревший навоз
            В полуперепревшем навозе отдельные частички соломы и опилок практически неразличимы. Солома приобретает темно-коричневый цвет, теряет прочность, имеет легко разрывающуюся структуру. Вода, пропущенная через этот навоз, темного цвета.
            Перепревший навоз
            Перепревший навоз – самое лучшее удобрение для  плодовых и ягодных культур. Он содержит необходимые растениям питательные вещества: азот, фосфор, кальций, калий, магний и множество микроэлементов. В его состав входит приблизительно 75% воды, 0,5% азота, 0,4% калия, 0,3% фосфора, или, если перевести в килограммы, с 10 кг навоза в среднем 50 г азота, 40 – 50 г калия, 25 – 30 г фосфора.
            Свойства перепревшего навоза:
            Перепревший навоз представляет собой однородную черную мажущуюся массу. Солома разложилась так сильно, что обнаружить отдельные соломинки уже очень трудно.
            В этой стадии навоз теряет от 30 до 50 процентов первоначальной массы.
            Перегной
            Перегной — является одним из самых ценных удобрений, получаемое в результате полного разложения навоза. Примерно за 1-3 года навоз перерабатывается в перегной - сыпучую темную массу.
            Перегной представляет собой смесь различных минеральных и органических элементов. Его вносится  под все культуры из расчета  40 — 60кг/10 м2. Навоз в состояние перегноя теряет содержание азота и органического вещества в два-три раза.  В перегное  содержится  0,7—2% общего азота,  0,6 — 1,25 фосфора и 0,6 — 2,4%   калия. Наибольший  эффект получается во время добавления  укладки навоза на хранение фосфоритной муки  (2% от массы навоза)  или суперфосфата  (1%), а также хлористого калия (0,2 — 0,45%).
            Свойства перегноя:
            Перегной представляет собой рыхлую, землистую и однородную массу. В этой стадии навоз теряет до 75 процентов от первоначальной массы.
            СПОСОБЫ ХРАНЕНИЯ НАВОЗА
            Различают несколько видов хранения навоза - горячий и холодный.
            Горячий способ:
            При горячем способе навоз укладывается в штабеля слоями (50 – 70 см) без уплотнения. По мере того как разогревается навоз добавляют следующий слой и т.д., пока штабель не достигнет высоты от 2,5 до 3,0 м. Температура внутри штабеля достигает до 70о. С, в результате чего мочевина и другие азотсодержащие вещества навоза разлагаются с выделением углекислого газа и аммиака. В это время идет также метановое брожение, сопровождающееся распадом клетчатки, крахмала и углеводов до простых продуктов: углекислого газа и воды. Для уменьшения потерь органического вещества и азота штабель покрывается слоем почвы толщиной 10 – 20 см.
            Холодный способ:
            При холодном способе навоз складывают в навозохранилище или вывозят на площадку покрытую соломой или слоем торфа, укладывают навоз и хорошо уплотняют. Ширина штабеля составляет 4 метра, а высота 2 м. Сверху укладывают землей или торфом (примерно 20 см.). Хранение в уплотненном состоянии обеспечивает постоянную температуру не выше 30 – 40о С.  В результате максимально сохраняется азот и органические вещества. Особенно значительно снижаются потери из навоза, полученного с применением торфяной подстилки: при горячем способе хранения потери азота превышают 25%, а при холодном составляют всего около 1%.
            Если навоз вывозят ежедневно, то его надо сразу складывать в навозохранилище, уплотнять и для лучшего сохранения его удобрительных свойств перекладывать слоем (7—10 см) соломы, торфа или земли. При покрытии навоза этими материалами он сохраняет почти весь азот. Переслаивать навоз землей или торфом (соломой) надо через каждые 60—70 см. Не рекомендуют укладывать навоз в штабели высотой более 2,5 м, так как в этом случае нижние слои навоза получаются слишком плотными и разогреваются.
            </p>
        </div>
        <div class="articles">
            <h4>Песок</h4>
            <p>Песок различается по видам и бывает речным, карьерным, кварцевым и т.д. Я не стану углубляться в свойства каждого вида песка, так как для дачного дела используется обычно речной песок. В почвах, насыщенных речным песком, корешки наших зелёных питомцев чувствуют себя более чем вольготно, густо ветвятся и свободно разрастаются. В песчаниках хорошо укореняются черенки растений, а при пересадке их нежные корешки не повреждаются.
            Песок способствует сохранению влаги в почве и часто используется в роли мульчирующего материала, как ни странно это звучит. А всё потому, что в знойные летние денёчки даже под тонким слоем песка почва остаётся влажной, поэтому на песчаниках нет особой опасности иссушения корней растений в жару при нерегулярном поливе.
            Что посадить на песчаных почвах?
            На песчаных и супесчаных почвах  хорошо приживаются неприхотливые красивоцветущие растения: васильки, ирисы, маки, лабазники,  дроки и т.д. Прекрасно себя чувствуют в песчаных грунтах и представители семейства бобовых, на корешках которых имеется своя собственная бактериальная среда, вполне дружелюбно воспринимающая песок. Уважают песчаную почву и многие ягодные кустарники: смородина, жимолость, крыжовник, ежевика и т.д. У этих кустарников сильно разветвлённая корневая система, которая сама по себе служит отличным укреплением пористой песчаной почвы.
            Васильки на песчаных почвах
            Все виды хвойных деревьев и кустарников, многие виды плодово-ягодных деревьев (вишня, слива, яблоня и т.д.) отлично адаптируются на песчано-глинистых грунтах. Также на почвах с большим содержанием песка прекрасно растут альпийские растения: колокольчики, камнеломка, эдельвейс и прочие растения, имеющие глубокорастущую корневую систему. Очень любят песчаные почвы бахчевые культуры и виноград. Причём виноград, произрастающий на песчаных и супесчаных почвах, практически не страдает от заболевания филлоксерой (трудновыводимый вид тли).
            </p>
        </div>
    </div>
    <div class="nash_price">
        <p>Стоимость доставки грузов и услуг по вывозу зависит от района.</p>
        <p>Ориентировочная стоимость:</p>
        <br>
        <div>
            <ul>
                <li>Песок, 2 тонны - 1500 рублей</li>
                <li>Навоз, 3 тонны - 4500 рублей</li>
                <li>Опил, 7 кубов - 1300 рублей</li>
                <li>Срезка из сосны, 3,5 куба - 2200 рублей</li>
                <li>Вывоз мусора, 3,5 куба - 1200 рублей</li>
             </ul>
        </div>
        <h3 class="contact">Точную стоимость можно узнать по телефону: <br>8-912-577-6337</h3>
    </div>
    <div class="footer">
        <div>
            <script type="text/javascript" src="http://yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
            <script type="text/javascript" src="http://yastatic.net/share2/share.js" charset="utf-8"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp"></div>
        </div>
        <br>
        &copy; Сайт создал <a href="http://alexeybusygin.ru" style="text-decoration: none; color: #ffffff">Бусыгин Алексей <img src="pic/Contact-16.png"/></a>

    </div>
</div>



        <!--<div id="calc" class="centr">
            <h4> Расчёт доставки</h4>
            <form method="post" action="#" style="color: #080808">
                <p class="vybor">Вам нужно привезти:</p>
                <select style="color: #080808">
                    <option value="">Вибирите из списка</option>
                    <option>Навоз</option>
                    <option>Песок</option>
                    <option>Опил</option>
                    <option>Дрова сосновые</option>
                    <option>Срезка / горбыль</option>
                </select>
                <br>
                <p class="vybor">Выбирите район места доставки или расстояние от города:</p>
                <p class="vybor"> расстояние от города:</p>
                <select style="color: #080808; width: 150px">
                    <option value="">Район</option>
                    <option>Оз. Бездонное</option>
                    <option>Орловское водохр.</option>
                    <option>Оз. Хохловатики</option>
                    <option>Оз. Горелое</option>
                    <option>Оз. Левашёво</option>
                    <option>Оз. Чёрное</option>
                    <option>Оз. </option>
                    <option>Рябково</option>
                    <option>Восточный район</option>
                    <option>Малое Чаусово</option>
                    <option>Большое Чаусово</option>
                    <option>Вороновка</option>
                </select>
                <br>
                <select style="color: #080808; width: 150px"">
                    <option value="">Расстояние</option>
                    <option>5км</option>
                    <option>10км</option>
                    <option>15км</option>
                    <option>20км</option>
                    <option>25км</option>
                    <option>30км</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Расчитать"/>
            </form>
            <p style="color: #080808"> Стоимость вашего заказа примерно составит:</p>
            <p style="color: #080808">Для более точной информации позвоните нам.</p>
        </div>-->

</div> <!-- div .fon-->

<div class="discount">
    <div>Для получения скидки 10% назовите код: "1980"</div>

</div>

<script>
    $(document).ready(function(){
        $(function () {
            $(window).scroll(function())
        })
    });
</script>
</body>

</html>


