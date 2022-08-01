@extends('frontend.main_master')
@section('content')
<main class="main">
    <section class="home" id="home">
      <div class="home__container container grid">
        <img src="{{ asset('frontend/assets/img/home.png') }}" alt="" class="home__img" />

        <div class="home__data">
          <h1 class="home__title">
            محصولات سالم <br />
            زندگی سالم
          </h1>
          <p class="home__description">
            تشخیص دقیق و راحت تر بیماری ها و درمان به موقع و دقیق محصولات از
            خطرات احتمالی دور باشید
          </p>
          <a href="#about" class="button button--flex">
            کاوش کنید <i class="ri-arrow-right-down-line button__icon"></i>
          </a>
        </div>

        <div class="home__social">
          <span class="home__social-follow">مارادنبال کنید</span>

          <div class="home__social-links">
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-instagram-line"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section container" id="about">
      <div class="about__container grid">
        <img src="{{ asset('frontend/assets/img/about.png')}}" alt="" class="about__img" />

        <div class="about__data">
          <h2 class="section__title about__title">
            ما واقعا کی هستیم و <br />
            چرا ما را انتخاب کنید
          </h2>

          <p class="about__description">
            ما بیش از ۴۰۰۰ بررسی بی طرفانه داریم و مشتریان ما هر بار به فرآیند
            کارخانه و خدمات تحویل ما اعتماد دارند.
          </p>

          <div class="about__details">
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              ما همیشه به موقع تحویل می دهیم
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              ما به شما راهنماهایی برای محافظت و مراقبت از گیاهانتان می دهیم
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              ما همیشه برای چک آپ قبل از فروش مراجعه می کنیم
            </p>
            <p class="about__details-description">
              <i class="ri-checkbox-fill about__details-icon"></i>
              ۱۰۰% تضمین بازگشت وجه
            </p>
          </div>

          <a href="#products" class="button--link button--flex">
            بریم ببینیم <i class="ri-arrow-right-down-line button__icon"></i>
          </a>
        </div>
      </div>
    </section>

    <!--==================== STEPS ====================-->
    <section class="steps section container">
      <div class="steps__bg">
        <h2 class="section__title-center steps__title">
          چگونه شروع کنید <br />
        </h2>

        <div class="steps__container grid">
          <div class="steps__card">
            <div class="steps__card-number">۰۱</div>
            <h3 class="steps__card-title">انتخاب گیاه</h3>
            <p class="steps__card-description">
              ما انواع مختلفی از گیاهان داریم که می توانید از بین آنها انتخاب
              کنید
            </p>
          </div>

          <div class="steps__card">
            <div class="steps__card-number">۰۲</div>
            <h3 class="steps__card-title">تشخیص بیماری</h3>
            <p class="steps__card-description">
              هنگامی که تشخیص شما تنظیم شد، به مرحله بعدی که حمل و نقل است می
              رویم
            </p>
          </div>

          <div class="steps__card">
            <div class="steps__card-number">۰۳</div>
            <h3 class="steps__card-title">سموم مورد نیاز را تحویل بگیرید</h3>
            <p class="steps__card-description">
              فرآیند تحویل ما آسان است، شما سموم مورد نظر را مستقیماً در مکان
              مشخص شده دریافت می کنید
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--==================== PRODUCTS ====================-->
    <section class="product section container" id="products">
      <h2 class="section__title-center">
        دنبال گیاه مورد نظر خود <br />
        بگردید
      </h2>

      <p class="product__description">
        اینجا تعدادی از میوه ها هست که انواع بیماری ها و... آنها گذاشته شده
        که با چند کلیک ساده به تشخیص درست بیماری پی میبرید
      </p>

      <div class="product__container grid">
        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px"><img src="{{ asset('frontend/assets/img/angor.png') }}" alt=""></div>
          {{-- <img src="assets/img/product1.png" alt="" class="product__img" /> --}}

          <h3 class="product__title">انگور</h3>
          <span class="product__price">۲۳ واریته</span>
          <a href="./subset.html">
            <button class="button--flex product__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </a>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127818;</div>
          <!-- <img src="assets/img/product2.png" alt="" class="product__img" /> -->

          <h3 class="product__title">پرتقال</h3>
          <span class="product__price">۱۲ واریته</span>
          <a href="./subset.html">
            <button class="button--flex product__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </a>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127819;</div>
          <!-- <img src="assets/img/product3.png" alt="" class="product__img" /> -->

          <h3 class="product__title">لیمو ترش</h3>
          <span class="product__price">۶ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127817;</div>
          <!-- <img src="assets/img/product4.png" alt="" class="product__img" /> -->

          <h3 class="product__title">هندوانه</h3>
          <span class="product__price">۹ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127816;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">طالبی</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129362;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">خیار</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129365;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">هویج</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129364;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">سیب زمینی</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129361;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">آواکادو</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129372;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">بادام زمینی</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129373;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">کیوی</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129382;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">کلم بروکلین</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#129381;</div>
          <!-- <img src="assets/img/product5.png" alt="" class="product__img" /> -->

          <h3 class="product__title">نارگیل</h3>
          <span class="product__price">۱۴ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127814;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">بادمجان</h3>
          <span class="product__price">۲۶ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127822;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">سیب سرخ</h3>
          <span class="product__price">۱۸ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127813;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">گوجه فرنگی</h3>
          <span class="product__price">۱۲ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127823;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">سیب سبز</h3>
          <span class="product__price">۱۹ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127824;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">گلابی</h3>
          <span class="product__price">۲۰ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127825;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">هلو</h3>
          <span class="product__price">۱۱ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>

        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127826;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">گیلاس</h3>
          <span class="product__price">۳۱ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>
        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127827;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">توت فرنگی</h3>
          <span class="product__price">۱۶ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>
        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127820;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">موز</h3>
          <span class="product__price">۲۳ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>
        <article class="product__card">
          <div class="product__circle"></div>
          <div class="product__img" style="font-size: 110px">&#127821;</div>
          <!-- <img src="assets/img/product6.png" alt="" class="product__img" /> -->

          <h3 class="product__title">آناناس</h3>
          <span class="product__price">۱۵ واریته</span>

          <button class="button--flex product__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </article>
      </div>
    </section>

    <!--==================== QUESTIONS ====================-->
    <section class="questions section" id="faqs">
      <h2 class="section__title-center questions__title container">
        چند سوال رایج که <br />
        اغلب پرسیده میشود
      </h2>

      <div class="questions__container container grid">
        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                My flowers are falling off or dying?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                What causes leaves to become pale?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                What causes brown crispy leaves?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>
        </div>

        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">How do i choose a plant?</h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">How do I change the pots?</h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <header class="questions__header">
              <i class="ri-add-line questions__icon"></i>
              <h3 class="questions__item-title">
                Why are gnats flying around my plant?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Plants are easy way to add color energy and transform your
                space but which planet is for you. Choosing the right plant.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== CONTACT ====================-->
    <section class="contact section container" id="contact">
      <div class="contact__container grid">
        <div class="contact__box">
          <h2 class="section__title">
            امروز با ما تماس بگیرید <br />
            از طریق هر یک از <br />
            اطلاعات
          </h2>

          <div class="contact__data">
            <div class="contact__information">
              <h3 class="contact__subtitle">
                برای پشتیبانی فوری با ما تماس بگیرید
              </h3>
              <span class="contact__description">
                <i class="ri-phone-line contact__icon"></i>
                +98 922 489 2061
              </span>
            </div>

            <div class="contact__information">
              <h3 class="contact__subtitle">یا ایمیل ارسال کنید</h3>
              <span class="contact__description">
                <i class="ri-mail-line contact__icon"></i>
                user@email.com
              </span>
            </div>
          </div>
        </div>

        <form action="" class="contact__form">
          <div class="contact__inputs">
            <div class="contact__content">
              <input type="text" placeholder=" " class="contact__input" />
              <label for="" class="contact__label">موضوع</label>
            </div>
            <div class="contact__content">
              <input type="email" placeholder=" " class="contact__input" />
              <label for="" class="contact__label">ایمیل</label>
            </div>

            <div class="contact__content contact__area">
              <textarea
                name="message"
                placeholder=" "
                class="contact__input"
              ></textarea>
              <label for="" class="contact__label">پیام</label>
            </div>
          </div>

          <button class="button button--flex">
            ارسال پیام
            <i class="ri-arrow-right-up-line button__icon"></i>
          </button>
        </form>
      </div>
    </section>
  </main>
@endsection