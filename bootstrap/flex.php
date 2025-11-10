<?php
require_once "../шапка_подвал/head.php";
require_once "../шапка_подвал/header.php";
?>

<!-- Создаю общий контейнер под основной текст, навигационное меню и тестовое меню-->
    <div class="container-fluid">

        <!-- Создаю общий Flex контейнер -->
        <div class="d-flex flex-xxl-row flex-xl-row flex-column">

            <!--  ТЕСТОВОЕ МЕНЮ (желательно добавить везде, но нужно понять что туда лучше записывать!!!!!!!!! -->
            <div class="order-xxl-1 order-xl-1 col-xxl-2 col-xl-2 px-xxl-4 px-xl-4 px-3">
                <div class="sticky-top pt-4">
                    <h5 class="border-bottom pb-2">Flex заметки</h5>
                    <p>
Шпаргала по flex с наглядными примерами <a href="https://tpverstak.ru/flex-cheatsheet/"
                                                                   class="word_href">здесь</a>
                    </p>
                    <p>
Для повышения скорости написания кода <a href="https://habr.com/ru/articles/573032/"
                                                                 class="word_href">здесь</a>
                    </p>
                </div>
            </div>

            <!-- ПНЕЛЬ НАВИГАЦИИ -->
            <div class="order-xxl-3 order-xl-3 col-xxl-2 col-xl-3 px-xxl-2 px-xl-2 px-3 MenuDecoration">
                <div class="sticky-top pt-4">
                    <h5 class="border-bottom pb-2">Навигационное меню</h5>
                    <nav class="navbar-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#gibkoe">Гибкое поведение</a>
                                <ul class="navbar-nav ms-4"> <!-- Разобраться как сделать отступ без margin-start-->
                                    <li class="nav-item">
                                        <a href="#napravleniy">Направления</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#viravnivanie_content">Выравнивание
                                            содержимого</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#viravnivanie_item">Выравнивание элементов</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#viravnivanie_splosh">Сплошное выравнивание</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#zapoln">Заполнение</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#uvel-umen">Увеличение и уменьшение</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#auto-margin">Auto-margin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#viravnivanie-auto">С элементами выравнивания</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#obertka">Обертка</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#porydok">Порядок</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#viravnivanie_soderj">Выравнивание содержимого</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!--  ОСНОВНАЯ ЧАСТЬ (ТЕКСТ) -->
            <div class="order-xxl-2 order-xl-2 col-xxl-8 col-xl-7">

                <!--  блок "Включить гибкое поведение" -->
                <div class="container-fluid pt-4">
                    <h2 id="gibkoe">Включить гибкое поведение</h2>
                    <p>
                        Для того чтобы начать работу с <span class="word_text">flex</span>, нужно создать контейнер
                        <span class="word_text">flexbox</span>
                        и преобразовать прямые дочерние элементы в <span class="word_text">flex-элементы</span>,
                        используем <span class="word_text">d-flex</span> класс:
                    </p>

                    <!-- Пример флекс-бокса -->
                    <div class="border border-1">
                        <div class="d-flex p-2 m-3 bd-highlight">
                            Я - контейнер Flexbox!
                        </div>
                    </div>

                    <!--  ТЕКСТ пример флекс-бокса -->
                    <div class="FontWCod">
                        &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                class="class-bootstrap">d-flex p-2 m-3</span>"&gt;.col-1&lt/<span class="tag">div</span>&gt;
                    </div>

                    <!-- Пример инлайн-флекс-бокса -->
                    <div class="border border-1">
                        <div class="d-inline-flex p-2 m-3 bd-highlight">
                            Я - встроенный контейнер Flexbox!
                        </div>
                    </div>

                    <!--  текстовый пример инлайн-флекс-бокса -->
                    <div class="FontWCod">
                        &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                class="class-bootstrap">d-inline-flex p-2 m-3</span>"&gt;.col-1&lt/<span
                                class="tag">div</span>&gt;
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют адаптивные варианты для <span class="word_text">.d-flex</span> и
                            <span class="word_text">.d-inline-flex</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-sm-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-sm-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-md-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-md-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-lg-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-lg-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xl-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xl-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xxl-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xxl-inline-flex</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Направления" -->
                <div class="container-fluid">
                    <h2 id="napravleniy">Направления</h2>
                    <p>
                        Чтобы задать направление используем <span class="word_text">.flex-row</span>. Данный bootstrap
                        класс используется для горизонтального направления
                        (данное значение используется в браузере по умолчанию) или <span class="word_text">.flex-row-reverse</span>
                        для отображения горизонтального
                        направления с противоположной стороны.
                    </p>

                    <!-- Пример горизонтального направления -->
                    <div class="border border-1 p-3">
                        <div class="d-flex flex-row mb-3 bd-highlight">
                            <div class="p-2 bd-highlight">Флекс элемент 1</div>
                            <div class="p-2 bd-highlight">Флекс элемент 2</div>
                            <div class="p-2 bd-highlight">Флекс элемент 3</div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-2 bd-highlight">Флекс элемент 1</div>
                            <div class="p-2 bd-highlight">Флекс элемент 2</div>
                            <div class="p-2 bd-highlight">Флекс элемент 3</div>
                        </div>
                    </div>

                    <!-- Пример горизонтального направления ТЕКСТ -->
                    <div class="FontWCod">

                        <!-- 1 пример -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-row m-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 1&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 2&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 3&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>

                        <!-- 2 пример -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-row-reverse m-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 1&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 2&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 3&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>
                    <p>
                        Для того чтобы задать вертикальное направлением используем класс <span class="word_text">.flex-column</span>
                        или <span class="word_text">.flex-column-reverse</span>, чтобы вертикальное направление
                        начиналось с противоположной
                        стороны.
                    </p>

                    <!-- Пример вертикального направления -->
                    <div class="border border-1 p-3">
                        <div class="d-flex flex-column mb-3 bd-highlight">
                            <div class="p-2 bd-highlight">Флекс элемент 1</div>
                            <div class="p-2 bd-highlight">Флекс элемент 2</div>
                            <div class="p-2 bd-highlight">Флекс элемент 3</div>
                        </div>
                        <div class="d-flex flex-column-reverse bd-highlight">
                            <div class="p-2 bd-highlight">Флекс элемент 1</div>
                            <div class="p-2 bd-highlight">Флекс элемент 2</div>
                            <div class="p-2 bd-highlight">Флекс элемент 3</div>
                        </div>
                    </div>

                    <!-- Пример вертикального направления ТЕКСТ -->
                    <div class="FontWCod">

                        <!-- 1 пример -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-column m-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 1&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 2&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 3&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>

                        <!-- 2 пример -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-column-reverse m-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 1&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 2&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2</span>"&gt;Флекс элемент 3&lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.flex-direction</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-sm-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-sm-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-md-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-md-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-lg-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-lg-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xl-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xl-inline-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xxl-flex</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.d-xxl-inline-flex</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Выравнивание содержимого" -->
                <div class="container-fluid">
                    <h2 id="viravnivanie_content">Выравнивание содержимого</h2>
                    <p>
                        Используем утилиты <span class="word_text">.justify-content</span> или контейнерами флексбокса для
                        изменения выравнивания гибких элементов по главной оси (ось х по умолчанию, ось у - если
                        <span class="word_text">flex-direction: column</span>).
                        Выбирайте из <span class="word_text">start</span> (по умолчанию в браузере),
                        <span class="word_text">end</span>,
                        <span class="word_text">center</span>, <span class="word_text">between</span>,
                        <span class="word_text">around</span> или
                        <span class="word_text">evenly</span>.
                    </p>

                    <!-- Пример выравнивания содержимого -->
                    <div class="border border-1 p-3">
                        <div class="d-flex justify-content-start bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex justify-content-end bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex justify-content-center bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex justify-content-between bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex justify-content-around bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex justify-content-evenly bd-highlight">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                    </div>

                    <!-- Пример вертикального направления ТЕКСТ -->
                    <div class="FontWCod">
                        <ul class="navbar-nav">

                            <!-- justify-content-start -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-start</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- justify-content-end -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-end</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">

                                <!-- justify-content-center -->
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-center</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- justify-content-between -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-between</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- justify-content-around -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-around</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- justify-content-evenly -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex justify-content-evenly</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.justify-content</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-evenly</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-sm-evenly</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-md-evenly</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-lg-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-lg-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-lg-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-lg-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-lg-evenly</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xl-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xl-evenly</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xxl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xxl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xxl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xxl-between</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.justify-content-xxl-evenly</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Выравнивание элементов" -->
                <div class="container-fluid">
                    <h2 id="viravnivanie_item">Выравнивание элементов</h2>
                    <p>
                        Для выравнивания по перекрестной оси (ось Y стоит по умолчанию, ось Х - если
                        <span class="word_text">flex-direction: column</span>)
                        используем утилиту <span class="word_text">align-items</span>.
                        Выбирайте из <span class="word_text">start</span> (по умолчанию в браузере),
                        <span class="word_text">end</span>,
                        <span class="word_text">center</span>, <span class="word_text">baseline</span> или
                        <span class="word_text">stretch</span> (в браузере по умолчанию).
                    </p>
                    <p>
                        <b>Примечание:</b> эти классы не влияют на отдельные строки гибких элементов.
                    </p>

                    <!-- Пример выравнивания элементов -->
                    <div class="border border-1 p-3">
                        <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                        </div>
                        <div class="d-flex align-items-end bd-highlight mb-3" style="height: 90px">
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                        </div>
                        <div class="d-flex align-items-center bd-highlight mb-3" style="height: 90px">
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                        </div>
                        <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 90px">
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                        </div>
                        <div class="d-flex align-items-stretch bd-highlight" style="height: 90px">
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                            <div class="bd-highlight p-2">Флекс элемент</div>
                        </div>
                    </div>

                    <!-- Пример выравнивания элементов ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">

                            <!-- align-items-start -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-start</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- align-items-end -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-end</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">

                                <!-- align-items-center -->
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-center</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- d-flex align-items-baseline -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-baseline</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- d-flex align-items-stretch -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-stretch</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.align-items</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-sm-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-sm-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-sm-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-sm-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-sm-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-md-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-md-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-md-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-md-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-md-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-lg-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-lg-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-lg-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-lg-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-lg-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xl-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xl-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xxl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xxl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xxl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xxl-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-items-xxl-stretch</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Сплошное выравнивание" -->
                <div class="container-fluid">
                    <h2 id="viravnivanie_splosh">Сплошное выравнивание</h2>
                    <p>
                        Используйте утилиты <span class="word_text">align-self</span> в гибких элементах для
                        индивидуального изменения их выравнивания по перекрестной оси
                        (ось у по умолчанию, ось х – если <span class="word_text">flex-direction: column</span>).
                        Выбирайте из таких же параметров,
                        как у <span class="word_text">align-items</span>: <span class="word_text">start</span>, <span
                                class="word_text">end</span>,
                        <span class="word_text">center</span>, <span class="word_text">baseline</span> или <span
                                class="word_text">stretch</span> (умолчание браузера).
                    </p>

                    <!-- Пример "Сплошное выравнивание" -->
                    <div class="border border-1 p-3">
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="align-self-start p-2 bd-highlight">Align флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="align-self-end p-2 bd-highlight">Align флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="align-self-center p-2 bd-highlight">Align флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="align-self-baseline p-2 bd-highlight">Align флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                            <div class="align-self-stretch p-2 bd-highlight">Align флекс элемент</div>
                            <div class="p-2 bd-highlight">Флекс элемент</div>
                        </div>
                    </div>

                    <!-- Пример выравнивания элементов ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">

                            <!-- align-items-start -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">align-self-start p-2 bd-highlight</span>"&gt;Align флекс
                                элемент &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- align-items-end -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">align-self-end p-2 bd-highlight</span>"&gt;Align флекс
                                элемент &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">

                                <!-- align-items-center -->
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">align-self-center p-2 bd-highlight</span>"&gt;Align
                                флекс элемент &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- d-flex align-items-baseline -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">align-self-baseline p-2 bd-highlight</span>"&gt;Align
                                флекс элемент &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>

                            <!-- d-flex align-items-stretch -->
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">align-self-stretch p-2 bd-highlight</span>"&gt;Align
                                флекс элемент &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.align-self</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-sm-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-sm-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-sm-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-sm-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-sm-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-md-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-md-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-md-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-md-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-md-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-lg-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-lg-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-lg-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-lg-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-lg-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xl-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xl-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xxl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xxl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xxl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xxl-baseline</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-self-xxl-stretch</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Заполнение" -->
                <div class="container-fluid">
                    <h2 id="zapoln">Заполнение</h2>
                    <p>
                        Используем класс <span class="word_text">.flex-fill</span> во вложенных элементах для придания
                        им равно ширины,
                        равной их содержимому (или равную ширину, если их содержимое не превосходит их границы), занимая
                        все доступное горизонтальное пространство.
                    </p>

                    <!-- Пример "Заполнение" -->
                    <div class="border border-1 p-3">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight">Флекс элемент с большим кол-вом контента</div>
                            <div class="p-2 flex-fill bd-highlight">Флекс элемент</div>
                            <div class="p-2 flex-fill bd-highlight">Флекс элемент</div>
                        </div>
                    </div>

                    <!-- Пример "Заполнение" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 flex-fill bd-highlight</span>"&gt;Флекс элемент с
                                большим
                                кол-вом контента &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 flex-fill bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 flex-fill bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Для этого класса также есть адаптивные вариации <span class="word_text">.flex-fill</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-fill</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-fill</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-fill</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-fill</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-fill</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-fill</span>
                            </li>
                    </div>
                </div>

                <!--  блок "Увеличение и уменьшение" -->
                <div class="container-fluid">
                    <h2 id="uvel-umen">Увеличение и уменьшение</h2>
                    <p>
                        Используем класс <span class="word_text">.flex-shrink-*</span> для переключения возможности
                        гибких элементов уменьшаться,
                        если необходимо. В примере ниже 2-ой гибкий элемент класса <span class="word_text">.flex-shrink-1</span>
                        «принуждается» оборачивать свое содержимое новой строкой, «уменьшаясь» и оставляя больше места для предыдущего
                        гибкого элемента класса <span class="word_text">.w-100</span>.
                    </p>

                    <!-- Пример "Увеличение и уменьшение"-->
                    <div class="border border-1 p-3">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 w-100 bd-highlight">Flex item</div>
                            <!--  w-100 в этом примере означает wight - 100% -->
                            <div class="p-2 flex-shrink-1 bd-highlight">Flex item</div>
                        </div>
                    </div>

                    <!-- Пример "Увеличение и уменьшение" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 w-100 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 flex-shrink-1 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Для <span class="word_text">flex-grow</span> и <span class="word_text">flex-shrink</span>
                            также есть адаптивные вариации:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-{grow|shrink}-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-{grow|shrink}-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-{grow|shrink}-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-{grow|shrink}-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-{grow|shrink}-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-{grow|shrink}-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-{grow|shrink}-1</span>
                            </li>
                    </div>
                </div>

                <!--  блок "auto-margin" -->
                <div class="container-fluid">
                    <h2 id="auto-margin">auto-margin</h2>
                    <p>
                        Flexbox может делать довольно удивительные вещи, когда мы смешиваем выравнивание гибкости с
                        автоматическими полями.
                        Ниже приведены три примера управления гибкими элементами через автоматические поля:
                    </p>
                    <ul class="ms-2">
                        <li class="nav-item">
                            По умолчанию (без автоматического поля)
                        </li>
                        <li class="nav-item">
                            Перемещение двух элементов вправо (<span class="word_text">.me-auto</span>)
                        </li>
                        <li class="nav-item">
                            Перемещение двух элементов влево (<span class="word_text">.ms-auto</span>)
                        </li>
                    </ul>

                    <!-- Пример "auto-margin"-->
                    <div class="container border border-1 p-3">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="ms-auto p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>

                    <!-- Пример "auto-margin" ТЕКСТ-->
                    <div class="FontWCod">
                        <!-- Пример "mb-auto" ТЕКСТ-->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-start flex-column</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">mb-auto p-2 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>

                        <!-- Пример "mt-auto" ТЕКСТ-->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-items-start flex-column</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">mt-auto p-2 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "С элементами выравнивания" -->
                <div class="container-fluid">
                    <h2 id="viravnivanie-auto">С элементами выравнивания</h2>
                    <p>
                        Передвигайте по вертикали один из гибких элементов к верху или низу контейнера,
                        сочетая <span class="word_text">align-items</span>, <span class="word_text">flex-direction: column</span>
                        и <span class="word_text">margin-top: auto</span> или <span class="word_text">margin-bottom: auto</span>.
                    </p>
                    <!-- Пример "С элементами выравнивания"-->
                    <div class="border border-1 p-3">
                        <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                            <div class="mb-auto p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="mt-auto p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>

                    <!-- Пример "С элементами выравнивания" ТЕКСТ-->
                    <div class="FontWCod">

                        <span class="p-2" style="color: red"><h1>прижатие футера к нижней части экрана</h1></span>

                        <!-- Пример "me-auto" ТЕКСТ-->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">me-auto p-2 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>

                        <!-- Пример "ms-auto" ТЕКСТ-->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex bd-highlight mb-3</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">ms-auto p-2 bd-highlight</span>"&gt;Флекс элемент
                                        &lt/<span class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Обертка" -->
                <div class="container-fluid">
                    <h2 id="obertka">Обертка</h2>
                    <p>
                        При помощи bootstrap можно менять способ оборачивания гибких элементов в гибком контейнере.
                        Также их можно совсем
                        не оборачивать (по умолчанию в браузере) с классом <span class="word_text">.flex-nowrap</span>,
                        можем обернуть
                        их классом <span class="word_text">.flex-wrap</span> или реверсируем оборачивание с классом
<span class="word_text">.flex-wrap-reverse</span>
                    </p>

                    <!-- Пример "flex-nowrap" -->
                    <div>
                        <h5 class="text-center text-uppercase">flex-nowrap</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex flex-nowrap bd-highlight" style="width: 8em">
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "flex-nowrap" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "flex-wrap" -->
                    <div>
                        <h5 class="text-center text-uppercase">flex-wrap</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex flex-wrap bd-highlight">
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "flex-wrap" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-wrap bd-highlight</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                ...
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "flex-wrap-reverse" -->
                    <div>
                        <h5 class="text-center text-uppercase">flex-wrap-reverse</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex flex-wrap-reverse bd-highlight">
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                                <div class="bd-highlight p-2">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "flex-wrap-reverse" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-wrap-reverse bd-highlight</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                ...
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;Флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.flex-wrap</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-wrap-reverse</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-sm-wrap-reverse</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-md-wrap-reverse</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-lg-wrap-reverse</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xl-wrap-reverse</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-nowrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-wrap</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.flex-xxl-wrap-reverse</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Порядок" -->
                <div class="container-fluid">
                    <h2 id="porydok">Порядок</h2>
                    <p>
                        С помощью класса <span class="word_text">.order</span> можно легко изменять визуальный порядок
                        определенных
                        гибких элементов (с легкостью менять положение файлов так как вам удобно). Класс
                        <span class="word_text">.order</span> принимает любое целочисленное значение от 0 до 5.
                    </p>

                    <!-- Пример "Порядок" -->
                    <div class="border border-1 p-3">
                        <div class="d-flex flex-nowrap bd-highlight">
                            <div class="order-3 p-2 bd-highlight">1 флекс элемент</div>
                            <div class="order-2 p-2 bd-highlight">2 флекс элемент</div>
                            <div class="order-1 p-2 bd-highlight">3 флекс элемент</div>
                        </div>
                    </div>

                    <!-- Пример "Порядок" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">order-3 p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">order-2 p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">order-1 p-2 bd-highlight</span>"&gt;3 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.flex-wrap</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-5</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-5</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-5</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-5</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-5</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-0</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-1</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-2</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-3</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-4</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-5</span>
                            </li>
                        </ul>
                        <p>
                            Кроме того, существуют также адаптивные классы <span class="word_text">.order-first</span> и
                            <span class="word_text">.order-last</span>,
                            которые изменяют <span class="word_text">.order</span>, применяя значения <span
                                    class="word_text">.order: -1</span> и
                            <span class="word_text">.order: 6</span> соответственно.
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-last</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-sm-last</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-md-last</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-lg-last</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xl-last</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-first</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.order-xxl-last</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--  блок "Выравнивание содержимого" -->
                <div class="container-fluid">
                    <h2 id="viravnivanie_soderj">Выравнивание содержимого</h2>
                    <p>
                        Используя класс <span class="word_text">.align-content</span> в контейнерах флексбокса, чтобы
                        гибкие элементы выравнивались «вместе» по одной
                        перекрестной оси. Выбирать из <span class="word_text">start</span> (по умолчанию в браузере),
                        <span class="word_text">end</span>,
                        <span class="word_text">center</span>, <span class="word_text">between</span>, <span
                                class="word_text">around</span> или
                        <span class="word_text">stretch</span>.
                    </p>
                    <p>
                        <span class="fw-bold">Внимание!</span> Это свойство не действует на одиночных рядах или на
                        одиночных гибких элементах.
                    </p>

                    <!-- Пример "Выравнивание содержимого start"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-start</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-start flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого start" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-start flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "Выравнивание содержимого end"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-end</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-end flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого end" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-end flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "Выравнивание содержимого center"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-center</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-center flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого center" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-center flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "Выравнивание содержимого between"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-between</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-between flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого between" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-between flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "Выравнивание содержимого around"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-around</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-around flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого around" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-around flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Пример "Выравнивание содержимого stretch"-->
                    <div>
                        <h5 class="text-center text-uppercase">align-content-stretch</h5>
                        <div class="border border-1 p-3">
                            <div class="d-flex align-content-stretch flex-wrap bd-highlight" style="height: 200px">
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                                <div class="p-2 bd-highlight">Флекс элемент</div>
                            </div>
                        </div>
                    </div>

                    <!-- Пример "Выравнивание содержимого stretch" ТЕКСТ-->
                    <div class="FontWCod">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                &lt<span class="tag">div</span> <span class="word_class">class</span>="<span
                                        class="class-bootstrap">d-flex align-content-stretch flex-wrap</span>"&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;1 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item ms-2">
                                <span class="ms-2">...</span>
                            </li>
                            <li class="nav-item ms-2">
                                &lt;<span class="tag">div</span><span class="word_class"> class</span>="<span
                                        class="class-bootstrap">p-2 bd-highlight</span>"&gt;2 флекс элемент &lt/<span
                                        class="tag">div</span>&gt;
                            </li>
                            <li class="nav-item">
                                &lt/<span class="tag">div</span>&gt;
                            </li>
                        </ul>
                    </div>

                    <!-- Отзывчивые вариации ТЕКСТ -->
                    <div>
                        <p>
                            Также существуют отзывчивые вариации для <span class="word_text">.align-content</span>:
                        </p>
                        <ul class="ms-3">
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-sm-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-sm-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-sm-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-sm-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-sm-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-md-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-md-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-md-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-md-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-md-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-lg-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-lg-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-lg-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-lg-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-lg-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xl-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xl-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xl-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xl-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xl-stretch</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xll-start</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xll-end</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xll-center</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xll-around</span>
                            </li>
                            <li class="nav-item mb-1">
                                <span class="word_text">.align-content-xll-stretch</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Подключаем footer-->
    <?php
    require_once "../шапка_подвал/footer.php";
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

