<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>

    <div class="container">
      <h1 class="inner__title">Услуги</h1>
    </div>

    <section class="services">
      <div class="container">
        <ul class="services-list">
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-1.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-2.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-3.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-4.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-5.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-6.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-7.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-8.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-9.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-10.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-11.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
          <li class="services-list__card">
            <a href="" class="card-white ">
  <div class="card-white__img-wrap">
      <img src="<?=SITE_TEMPLATE_PATH?>/img/services/service-12.svg" alt="" class="card-white__img">
  </div>
  <span class="card-white__title">Изготовление, производство и продажа продукции</span>
</a>
          </li>
        </ul>
      </div>
      <div class="certificates-page__back-text back-text">
        <span class="back-text__big-letter">
          О
        </span>
        Опыт. Репутация. Надежность.
      </div>
    </section>

    <section class="form__container form__container_gray">
	<div class="container">
		<form class="form" novalidate="">
			<fieldset class="form__body">
				<h2 class="form__title">Есть вопросы? Мы вам перезвоним!</h2>
				<div class="form__subtitle">
					<p>ЕСТЬ ВОПРОСЫ? мы можем перезвонить или написать вам. Мы разрабатываем оборудование с
						отличными от стандартного модельного ряда техническими характеристиками и функциональными
						возможностями.</p>
				</div>
				<div class="form__inputs">
					<div class="form__input form__input_required">
						<input class="form__field" type="text" name="name" autocomplete="on" required="">
						<label for="name">Введите ваше имя:</label>
						<div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: Маруся</div>
					</div>
					<div class="form__input form__input_required">
						<input class="form__field" type="text" name="phone" autocomplete="on" required="" maxlength="18">
						<label for="phone">Телефон:</label>
						<div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: +7 (922) 232-31-43</div>
					</div>
					<div class="form__input">
						<input class="form__field" type="email" name="email" autocomplete="on" required="">
						<label for="email">E-mail</label>
					<div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: ivan_ivanov@ex.ru</div>
					</div>
					<div class="form__input">
						<button class="button form__button" type="submit">Отправить</button>
					</div>
				</div>
				<div class="form__link">
					<span>Нажимая на кнопку «Отправить», я даю согласие </span>
					<a href="#">на обработку персональных данных</a>
				</div>
			</fieldset>
		</form>
	</div>
</section>

    <!-- SUBSCRIBE -->
<div class="subscribe footer__subscribe">
  <div class="subscribe__container container">
    <div class="subscribe__col subscribe__col_footer">
      <div class="subscribe__title">
        Подпишитесь на нашу рассылку
      </div>
      <div class="subscribe__subtitle">
        узнавайте первыми об акциях и спецпредложениях
      </div>
    </div>
    <div class="subscribe__col subscribe__col_footer">
      <form action="" class="form form_subscribe subscribe__form" novalidate>
        <div class="form__input form__input_subscribe form__input_big form__input_dark">
          <input type="text" name="email" autocomplete="on" required>
          <label for="e-mail">Введите ваш e-mail:</label>
          <div class="form__input-status"></div>
          <div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: ivan_ivanov@ex.ru</div>
        </div>
        <div class="form__input form__input_subscribe subscribe__submit">
          <button class="subscribe__submit-button button" type="submit">Подписаться</button>
        </div>
      </form>
      <div class="subscribe__personal">
        <span class="subscribe__personal-text">Нажимая на кнопку «Подписаться», я даю согласие</span>
        <a href="" class="subscribe__personal-link">на обработку персональных данных</a>
      </div>
    </div>
  </div>
</div>
<!-- END SUBSCRIBE -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>