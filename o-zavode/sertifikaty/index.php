<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сертификаты");
?>


    <div class="container">
      <h1 class="inner__title">Сертификаты</h1>
    </div>

    <section class="certificates-page">
      <div class="tabs swiper-container certificates-page__tabs">
				<div class="swiper-wrapper tabs__wrapper">
					<div class="swiper-slide tabs-item tabs-item_active" data-tab-group="certificates" data-tab="1">
						<span class="tabs-item__name">Описание</span>
					</div>
					<div class="swiper-slide tabs-item" data-tab-group="certificates" data-tab="2">
						<span class="tabs-item__name">Технические характеристики</span>
					</div>
					<div class="swiper-slide tabs-item" data-tab-group="certificates" data-tab="3">
						<span class="tabs-item__name">Документация, ПО и сертификаты</span>
					</div>
				</div>
				<div class="tabs-nav">
					<button class="tabs-nav__arrow tabs-nav__prev">
						<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.6712 2.12161C12.2978 1.72794 12.3059 1.10843 12.6896 0.724748C13.0871 0.327272 13.7338 0.334889 14.1218 0.741615L22.0001 9L14.1218 17.2584C13.7338 17.6651 13.0871 17.6727 12.6896 17.2753C12.3059 16.8916 12.2978 16.2721 12.6712 15.8784L18.2477 10H1C0.447715 10 0 9.55229 0 9C0 8.44771 0.447716 8 1 8H18.2477L12.6712 2.12161Z"
								fill="#025BFF" />
						</svg>
					</button>
					<button class="tabs-nav__arrow tabs-nav__next">
						<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.6712 2.12161C12.2978 1.72794 12.3059 1.10843 12.6896 0.724748C13.0871 0.327272 13.7338 0.334889 14.1218 0.741615L22.0001 9L14.1218 17.2584C13.7338 17.6651 13.0871 17.6727 12.6896 17.2753C12.3059 16.8916 12.2978 16.2721 12.6712 15.8784L18.2477 10H1C0.447715 10 0 9.55229 0 9C0 8.44771 0.447716 8 1 8H18.2477L12.6712 2.12161Z"
								fill="#025BFF" />
						</svg>
					</button>
				</div>
      </div>
      
      <div class="container">
        <div class="tabs__content tabs__content_active" data-tab-group="certificates" data-tab="1">
          <ul class="certificates-page__list">
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
          </ul>
        </div>
        <div class="tabs__content" data-tab-group="certificates" data-tab="2">
          <ul class="certificates-page__list">
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
          </ul>
        </div>
        <div class="tabs__content" data-tab-group="certificates" data-tab="3">
          <ul class="certificates-page__list">
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
              <li class="certificates-page-item">
                <div class="certificates-page-item__img-wrap" data-popup="popup-certificates" data-popup-img="./img/card/doc-1.jpg">
                  <img class="certificates-page-item__img" src="<?=SITE_TEMPLATE_PATH?>/img/card/doc-1.jpg" alt="">
                </div>
              </li>
            
          </ul>
        </div>
      </div>
      <div class="certificates-page__back-text back-text">
        <span class="back-text__big-letter">
          О
        </span>
        Опыт. Репутация. Надежность.
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