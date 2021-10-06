<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>

    <div class="container">
      <h1 class="inner__title">Отзывы</h1>
    </div>

    <div class="container reviews-slider-container">
      <div class="slider-reviews slider-reviews_wide">
        <div class="slider-reviews__slider swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide slider-reviews__item">
              <div class="slider-reviews__left">
                <span class="slider-reviews__count">01/<sup>5</sup></span>
                <span class="slider-reviews__category">Видеообзоры и отзывы</span>
                <span class="slider-reviews__title">Подкладные автомобильные весы УРАЛВЕС</span>
                <p class="slider-reviews__desc">Видеообзор подкладных весов, краткое описание видео...</p>
              </div>
              <div class="slider-reviews__right slider-reviews__right_img">
                <div class="slider-reviews__preview" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/reviews-img.jpg');"
                  data-popup="slider-reviews-popup" data-popup-img="./img/reviews-img.jpg"></div>
              </div>
            </div>
            <div class="swiper-slide slider-reviews__item">
              <div class="slider-reviews__left">
                <span class="slider-reviews__count">02/<sup>5</sup></span>
                <span class="slider-reviews__category">Видеообзоры и отзывы</span>
                <span class="slider-reviews__title">Подкладные автомобильные весы УРАЛВЕС</span>
                <p class="slider-reviews__desc">Видеообзор подкладных весов, краткое описание видео...</p>
              </div>
              <div class="slider-reviews__right slider-reviews__right_video">
                <div class="slider-reviews__preview" data-popup="slider-reviews-popup"
                  style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/reviews-preview.jpg');"
                  data-popup-video="https://www.youtube.com/embed/iMS4AxL8StI"></div>
              </div>
            </div>
          </div>
          <div class="slider-reviews__pagination"></div>
          <div class="slider-reviews__nav">
            <button class="slider-reviews__prev slider-reviews__button">
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.28625 15.0523C9.67965 15.4409 9.68159 16.0754 9.29058 16.4664C8.90125 16.8558 8.27002 16.8558 7.88069 16.4664L-0.000122821 8.5856L7.88069 0.704845C8.27002 0.315519 8.90125 0.315519 9.29057 0.704847C9.68159 1.09586 9.67965 1.73042 9.28624 2.11904L3.7523 7.5856L21 7.5856C21.5523 7.5856 22 8.03331 22 8.5856C22 9.13788 21.5523 9.5856 21 9.5856L3.7523 9.5856L9.28625 15.0523Z"
                  fill="#025BFF" />
              </svg>
            </button>
            <button class="slider-reviews__next slider-reviews__button">
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.28625 15.0523C9.67965 15.4409 9.68159 16.0754 9.29058 16.4664C8.90125 16.8558 8.27002 16.8558 7.88069 16.4664L-0.000122821 8.5856L7.88069 0.704845C8.27002 0.315519 8.90125 0.315519 9.29057 0.704847C9.68159 1.09586 9.67965 1.73042 9.28624 2.11904L3.7523 7.5856L21 7.5856C21.5523 7.5856 22 8.03331 22 8.5856C22 9.13788 21.5523 9.5856 21 9.5856L3.7523 9.5856L9.28625 15.0523Z"
                  fill="#025BFF" />
              </svg>
            </button>
          </div>
        </div>

        <div class="popup" id="slider-reviews-popup">
          <button class="popup__close"></button>
          <div class="popup__content">
          </div>
        </div>
      </div>
    </div>

    <section class="reviews-page">
      <div class="container">
        

        <ul class="reviews-page__list">
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
          <li class="reviews-page-item">
            <span class="reviews-page-item__title">ТОО "Фирма "Арасан"</span>
            <span class="reviews-page-item__post">Генеральный директор Ефремов А.А.</span>
            <div class="reviews-page-item__text">
              <p>Мы приобрели для взвешивания автотранспорта при выгрузке вагонов с солодом. Они удобны в обращении,
                мобильны в установке. Так как разгрузка солода производится периодически, то имеется возможность убрать
                их, чтобы через них не проезжал автомобильный транспорт, который не требует взвешивания.</p>
            </div>
          </li>
        </ul>

        <div class="bottom-list reviews-page__bottom-list">
					<ul class="inner-pagination">
						<li class="inner-pagination__item"><a href="" class="inner-pagination__link" href="#">1</a></li>
						<li class="inner-pagination__item"><a href="" class="inner-pagination__link active" href="#">2</a></li>
						<li class="inner-pagination__item"><a href="" class="inner-pagination__link" href="#">3</a></li>
						<li class="inner-pagination__item">...</li>
						<li class="inner-pagination__item"><a href="" class="inner-pagination__link" href="#">19</a></li>
						<li class="inner-pagination__item"><a href="" class="inner-pagination__link" href="#">20</a></li>
					</ul>

					<a href="#" class="bottom-list__button button button_blue button_transparent">Показать еще</a>
				</div>
      </div>
    </section>

    <!-- FORM -->
<div class="container">
  <form class="form" novalidate>
    <fieldset class="form__body">
      <h2 class="form__title">Задать вопрос или уточнить цену</h2>
      <div class="form__subtitle">
        <p>ЕСТЬ ВОПРОСЫ? мы можем перезвонить или написать вам. Мы разрабатываем оборудование с
          отличными от стандартного модельного ряда техническими характеристиками и функциональными
          возможностями.</p>
      </div>
      <div class="form__inputs">
        <div class="form__input">
          <input type="text" name="name" autocomplete="on" required>
          <label for="name">Введите ваше имя:</label>
          <div class="form__input-status"></div>
          <div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: Маруся</div>
        </div>
        <div class="form__input">
          <input type="tel" name="phone" autocomplete="on" required>
          <label for="phone">Телефон:</label>
          <div class="form__input-status"></div>
          <div class="message form__input-message">Это поле обязательно для заполнения, пример заполнения: +7 (922) 232-31-43</div>
        </div>
        <div class="form__input">
          <input type="email" name="email" autocomplete="on" required>
          <label for="email">E-mail</label>
          <div class="form__input-status"></div>
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
<!-- END FORM -->

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