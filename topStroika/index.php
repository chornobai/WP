<?php 
get_header(); ?>

<main>
    <h1 class="visually-hidden">Строительные работы</h1>
    <section class="intro">
      <h2>Заказать строительные работы</h2>
      <a href="tel:380961900456" class="intro-link">Позвонить</a>
    </section>
    <section class="about">

      <h2 class="visually-hidden">О нас</h2>
      <div class="container">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-1.webp 1x">
                <img src="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-1.jpg" alt="Рабочие компании Твой Ремонт" width="340" height="212">
              </picture>
            </div>
            <div class="swiper-slide">

              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-2.webp 1x">
                <img src="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-2.jpg" alt="Рабочие компании Твой Ремонт" width="340" height="212">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-3.webp 1x">
                <img src="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-3.jpg" alt="Рабочие компании Твой Ремонт" width="340" height="212">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-4.webp 1x">
                <img src="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-4.jpg" alt="Рабочие компании Твой Ремонт" width="340" height="212">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-5.webp 1x">
                <img src="<?php echo get_template_directory_uri() ?> /assets/img/content/slide-5.jpg" alt="Рабочие компании Твой Ремонт" width="340" height="212">
              </picture>
            </div>

          </div>

          <!-- If we need navigation buttons -->
          <div class="slider-button swiper-button-prev"></div>
          <div class="slider-button swiper-button-next"></div>

        </div>
      </div>
    </section>
    <section id="service" class="service service--nojs">

      <h2>Наши услуги</h2>
      <div class="container">
        <div class="service-wrapper">
          <section class="service-block">
            <h3>Бытовые услуги</h3>
            <ul class="service-list">
              <li class="service-list__item">Установка замков</li>
              <li class="service-list__item">Установка бытовой техники</li>
              <li class="service-list__item">Установка сантехники</li>
            </ul>
          </section>
          <section class="service-block service--active">
            <h3>Благоустройство территории</h3>
            <ul class="service-list">
              <li class="service-list__item">Ландшафтный дизайн</li>
              <li class="service-list__item">Озеленение, газоны</li>
              <li class="service-list__item">Дренажные работы</li>
              <li class="service-list__item">Искусственные водоемы, фонтаны</li>
              <li class="service-list__item">Автополив</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Окна и двери</h3>
            <ul class="service-list">
              <li class="service-list__item">Установка окон</li>
              <li class="service-list__item">Установка межкомнатных и входных дверей</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Снос и демонтаж</h3>
            <ul class="service-list">
              <li class="service-list__item">Демонтаж сантехники</li>
              <li class="service-list__item">Демонтаж напольных покрытий</li>
              <li class="service-list__item">Демонтаж окон и дверей</li>
              <li class="service-list__item">Демонтаж настенных покрытий</li>
              <li class="service-list__item">Демонтаж металлоконструкции</li>
              <li class="service-list__item">Снос стен и перегородок</li>
              <li class="service-list__item">Снос построек</li>
              <li class="service-list__item">Проемы и штробы</li>
            </ul>
          </section>

          <section class="service-block">
            <h3>Установка забора</h3>
            <ul class="service-list">
              <li class="service-list__item">Забор из камня</li>
              <li class="service-list__item">Забор из дерева</li>
              <li class="service-list__item">Забор из кирпича</li>
              <li class="service-list__item">Забор из сетки</li>
              <li class="service-list__item">Забор из профнастила</li>
              <li class="service-list__item">Забор из бетона</li>
              <li class="service-list__item">Фундамент под забор</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Комплексные работы</h3>
            <ul class="service-list">
              <li class="service-list__item">Сварочные работы</li>
              <li class="service-list__item">Ремонт квартиры, комнаты</li>
              <li class="service-list__item">Строительство дома</li>
              <li class="service-list__item">Ремонт балкона</li>
              <li class="service-list__item">Ремонт ванны, туалета</li>
              <li class="service-list__item">Кладка печей и каминов</li>
              <li class="service-list__item">Ремонт офиса</li>
              <li class="service-list__item">Строительство каркасного дома</li>
              <li class="service-list__item">Ремонт кухни</li>
              <li class="service-list__item">Строительство бассейна</li>
              <li class="service-list__item">Строительство гаража</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Общестроительные и монтажные работы</h3>
            <ul class="service-list">
              <li class="service-list__item">Фундамент</li>
              <li class="service-list__item">Фасадные работы</li>
              <li class="service-list__item">Земляные работы</li>
              <li class="service-list__item">Гидроизоляция и звукоизоляция, теплоизоляция, изоляционные работы</li>
              <li class="service-list__item">Бетонные работы</li>
              <li class="service-list__item">Кровельные работы</li>
              <li class="service-list__item">Септики и выгребные ямы</li>
              <li class="service-list__item">Кладочные работы</li>
              <li class="service-list__item">Тротуарная плитка</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Инженерные системы и коммуникации</h3>
            <ul class="service-list">
              <li class="service-list__item">Электромонтажные работы</li>
              <li class="service-list__item">Системы отопления</li>
              <li class="service-list__item">Водоснабжение и очистка воды</li>
              <li class="service-list__item">Пожарные сигнализации</li>
              <li class="service-list__item">Сантехнические работы</li>
              <li class="service-list__item">Климатическое оборудование</li>
              <li class="service-list__item">Теплый пол</li>
              <li class="service-list__item">Газификация</li>
              <li class="service-list__item">Умный дом</li>
            </ul>
          </section>
          <section class="service-block">
            <h3>Отделочные работы</h3>
            <ul class="service-list">
              <li class="service-list__item">Плиточные работы</li>
              <li class="service-list__item">Штукатурные, малярные работы</li>
              <li class="service-list__item">Поклейка обоев</li>
              <li class="service-list__item">Напольные покрытия, промышленные полы, черновые работы</li>
              <li class="service-list__item">Монтаж вагонки</li>
              <li class="service-list__item">Стеновые панели</li>
              <li class="service-list__item">Роспись стен</li>
              <li class="service-list__item">Монтаж гипсокартона</li>
              <li class="service-list__item">Потолки</li>
              <li class="service-list__item">Работы с камнем, мрамором, гранитом</li>
            </ul>
          </section>
        </div>
      </div>
    </section>
  </main>

  <?php 
get_footer(); ?>