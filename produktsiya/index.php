<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetTitle("Продукция");?>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"catalog", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "N",
		"INSTANT_RELOAD" => "N",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LINE",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => array(
		),
		"TOP_VIEW_MODE" => "SECTION",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"VARIABLE_ALIASES" => array(
			"ELEMENT_ID" => "ELEMENT_ID",
			"SECTION_ID" => "SECTION_ID",
		)
	),
	false
);?>
		

		<!-- NEWS -->
		<div class="news news_catalog">
			<div class="tab">
				<div class="tab__item tab__item_active">
				<h2>Новости</h2>
				</div>
				<button class="tab__button">
				<div class="tab__switch"></div>
				</button>
				<div class="tab__item">
				<h2>Акции и спецпредложения</h2>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-content__item tab-content__item_active">
				<ul class="news__list">
					<li class="news__item">
					<div class="new">
						<div class="new__image" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/new.jpg');">
						<div class="new__image-substrate"></div>
						</div>
						<div class="new__body">
						<span>12 мая 2019</span>
						<p>Приглашение на выставку "Нефть и газ. Химия-2019"</p>
						<a href="#">
							<svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect y="9" width="24" height="2" fill="#025BFF" />
							<path d="M14.5859 1.41421L16.0002 0L26.0001 10L23.2577 10L14.5859 1.41421Z" fill="#025BFF" />
							<path d="M14.5859 18.5858L16.0002 20L26.0001 10L23.2577 9.99997L14.5859 18.5858Z"
								fill="#025BFF" />
							</svg>
						</a>
						</div>
					</div>
					</li>
					<li class="news__item">
					<div class="new">
						<div class="new__image" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/new.jpg');">
						<div class="new__image-substrate"></div>
						</div>
						<div class="new__body">
						<span>12 мая 2019</span>
						<p>Приглашение на выставку "Нефть и газ. Химия-2019"</p>
						<a href="#">
							<svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect y="9" width="24" height="2" fill="#025BFF" />
							<path d="M14.5859 1.41421L16.0002 0L26.0001 10L23.2577 10L14.5859 1.41421Z" fill="#025BFF" />
							<path d="M14.5859 18.5858L16.0002 20L26.0001 10L23.2577 9.99997L14.5859 18.5858Z"
								fill="#025BFF" />
							</svg>
						</a>
						</div>
					</div>
					</li>
					<li class="news__item">
					<div class="new">
						<div class="new__image" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/new.jpg');">
						<div class="new__image-substrate"></div>
						</div>
						<div class="new__body">
						<span>12 мая 2019</span>
						<p>Приглашение на выставку "Нефть и газ. Химия-2019"</p>
						<a href="#">
							<svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect y="9" width="24" height="2" fill="#025BFF" />
							<path d="M14.5859 1.41421L16.0002 0L26.0001 10L23.2577 10L14.5859 1.41421Z" fill="#025BFF" />
							<path d="M14.5859 18.5858L16.0002 20L26.0001 10L23.2577 9.99997L14.5859 18.5858Z"
								fill="#025BFF" />
							</svg>
						</a>
						</div>
					</div>
					</li>
				</ul>
				</div>
				<a href="#" class="button button_rounded button_white news__button news__button_catalog">Все новости</a>
				<div class="tab-content__item">Список акций</div>
			</div>
		</div>
		<!-- END NEWS -->

		<!-- SOLUTIONS -->
<section class="solutions section_solutions">
  <div class="container solutions__container">
    <div class="solutions__top">
      <div class="solutions__title">
        Подберите решение для вашего бизнеса! 
      </div>
      <div class="solutions__desc">
        Здесь вы найдете материалы о том, как применяются наши весы в разных отраслей.
        Можете подобрать готовые комплекты для решения задач своего бизнеса.
        <b>17 лет опыта и практики</b>
      </div>
      <a href="" class="solutions__button button button_rounded">
        Все решения
      </a>
    </div>
    <div class="solutions__cards">
      <a href="" class="solutions__card">
        <div class="solutions__card-image" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/catalog/solutions_1.png)"></div>
        <span class="solutions__card-name">Мясная промышленность</span>
        <span class="solutions__card-dark"></span>
      </a>
      <a href="" class="solutions__card">
        <div class="solutions__card-image" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/catalog/solutions_2.png)"></div>
        <span class="solutions__card-name">Железнодорожные терминалы</span>
        <span class="solutions__card-dark"></span>
      </a>
      <a href="" class="solutions__card">
        <div class="solutions__card-image" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/catalog/solutions_3.png)"></div>
        <span class="solutions__card-name">Дорожный контроль</span>
        <span class="solutions__card-dark"></span>
      </a>
      <a href="" class="solutions__card">
        <div class="solutions__card-image" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/catalog/solutions_4.png)"></div>
        <span class="solutions__card-name">Сельское хозяйство</span>
        <span class="solutions__card-dark"></span>
      </a>
    </div>
  </div>
  <div class="solutions__back-text back-text container">
    <span class="solutions__bright-word">Опыт.</span> Репутация. Надежность
  </div>
  <span class="solutions__big-letter">
    О
  </span>
</section>
<!-- END SOLUTIONS -->

		<!-- OUR PRODUCTION -->
		<section class="our-production">
			<div class="our-production__container">
				<div class="our-production__content">
					<h2 class="our-production__title">Нашу продукцию используют</h2>
					<p class="our-production__desc">более 8000 компаний в России, Белоруссии, Казахстане, Узбекистане, Украине, а
						также Европе используют продукцию Вектор-ПМ</p>
					<div class="our-production-pagination"></div>
					<div class="our-production-nav">
						<button class="our-production-nav__prev our-production-nav__button">
							<svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M9.28625 15.0523C9.67965 15.4409 9.68159 16.0754 9.29058 16.4664C8.90125 16.8558 8.27002 16.8558 7.88069 16.4664L-0.000122821 8.5856L7.88069 0.704845C8.27002 0.315519 8.90125 0.315519 9.29057 0.704847C9.68159 1.09586 9.67965 1.73042 9.28624 2.11904L3.7523 7.5856L21 7.5856C21.5523 7.5856 22 8.03331 22 8.5856C22 9.13788 21.5523 9.5856 21 9.5856L3.7523 9.5856L9.28625 15.0523Z"
									fill="#025BFF" />
							</svg>
						</button>
						<button class="our-production-nav__next our-production-nav__button">
							<svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M9.28625 15.0523C9.67965 15.4409 9.68159 16.0754 9.29058 16.4664C8.90125 16.8558 8.27002 16.8558 7.88069 16.4664L-0.000122821 8.5856L7.88069 0.704845C8.27002 0.315519 8.90125 0.315519 9.29057 0.704847C9.68159 1.09586 9.67965 1.73042 9.28624 2.11904L3.7523 7.5856L21 7.5856C21.5523 7.5856 22 8.03331 22 8.5856C22 9.13788 21.5523 9.5856 21 9.5856L3.7523 9.5856L9.28625 15.0523Z"
									fill="#025BFF" />
							</svg>
						</button>
					</div>
				</div>
				<div class="our-production__slider swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
						<div class="swiper-slide our-production-item">
							<a href="" class="our-production-item__link">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/clients-1.png" alt="" class="our-production-item__img">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OUR PRODUCTION -->

		<!-- .video-block -->
		<section class="section video-block">
		<div class="video-block__preview">
			<div class="video-block__bg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/video-block-bg.png');"></div>
			<div class="video-block__info">
			<div class="video-block__mini-title">Посмотреть видео</div>
			<h4 class="video-block__title">
				сделано в Перми <b>«Вектор-ПМ»</b>
			</h4>
			</div>

			<div class="video-block__icon-wrap">
			<svg class="video-block__icon" width="80" height="101" viewBox="0 0 80 101" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L78.3809 50.4048L1 99.8095V1Z" stroke="white" stroke-opacity="0.35" stroke-width="2"
				stroke-linecap="round" stroke-linejoin="round" />
			</svg>
			</div>

			<div class="video-block__line"></div>
		</div>
		<div class="video-block__player youtube-video" data-video-id="M7lc1UVf-VE" id="player1"></div>
		</section>
		<!-- /.video-block -->

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