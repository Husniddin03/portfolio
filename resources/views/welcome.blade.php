<x-user>
    <div class="cover-v1 jarallax" style="background-image: url('images/cover_bg_2.jpg');" id="home-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-7 mx-auto text-center">
                    <h1 class="heading gsap-reveal-hero">Husniddin</h1>
                    <h2 class="subheading gsap-reveal-hero">Men Full Stack web va Telegram bot
                        yaratuvchi dasturchima</h2>
                </div>

            </div>
        </div>


        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
            <span class="mouse">
                <span class="scroll"></span>
            </span>
            <span class="mouse-label">Scroll</span>
        </a>

    </div>
    <!-- END .cover-v1 -->


    <div class="unslate_co--section" id="portfolio-section">
        <div class="container">


            <div class="relative">
                <div class="loader-portfolio-wrap">
                    <div class="loader-portfolio"></div>
                </div>
            </div>
            <div id="portfolio-single-holder"></div>

            <div class="portfolio-wrapper">

                <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
                    <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>
                </div>
            </div>



            <div id="posts" class="row gutter-isotope-item">
                @foreach ($files as $file)
                    @if ($file->type == 'image')
                        <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                            <a href="{{ asset('storage/' . $file->url) }}"
                                class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery"
                                data-caption="{{ $file->title }}">
                                <div class="overlay">
                                    <span class="wrap-icon icon-photo2"></span>
                                    <div class="portfolio-item-content">
                                        <h3>{{ $file->title }}</h3>
                                        <p>{{ $file->content }}</p>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/' . $file->url) }}" class="lazyload  img-fluid"
                                    alt="Images" />
                            </a>

                        </div>
                    @elseif($file->type == 'video')
                        <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                            <a href="{{ asset('storage/' . $file->url) }} "
                                class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery"
                                data-caption="{{ $file->title }}">
                                <div class="overlay">
                                    <span class="wrap-icon icon-play_circle_filled"></span>
                                    <div class="portfolio-item-content">
                                        <h3>{{ $file->title }}</h3>
                                        <p>{{ $file->content }}</p>
                                    </div>
                                </div>
                                <img src="images/work_8_md.jpg" class="lazyload  img-fluid" alt="Images" />
                            </a>
                        </div>
                    @else
                        @php
                            $segments = explode('/', $file->url);
                            $lastSegment = end($segments);
                            $videoId = explode('?', $lastSegment)[0];
                        @endphp

                        <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                            <a href="{{ $file->url }}" class="portfolio-item isotope-item gsap-reveal-img"
                                data-fancybox="gallery" data-caption="{{ $file->title }}">
                                <div class="overlay">
                                    <span class="wrap-icon icon-play_circle_filled"></span>
                                    <div class="portfolio-item-content">
                                        <h3>{{ $file->title }}</h3><br>
                                        <p>{{ $file->content }}</p>
                                    </div>
                                </div>

                                <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg"
                                    class="lazyload img-fluid" alt="Video Thumbnail" />
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>


    </div>


    <div class="unslate_co--section">
        <div class="container">
            <div class="owl-carousel logo-slider">
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo-google.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo-puma.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo-paypal.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo-adobe.png" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="unslate_co--section" id="about-section">
        <div class="container">

            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Men haqimda</span></h2>
                <span class="gsap-reveal">
                    <img src="images/divider.png" alt="divider" width="76">
                </span>
            </div>


            <div class="row mt-5 justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <figure class="dotted-bg gsap-reveal-img ">
                        <img src="images/about_me_pic2.jpg" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-4 pr-lg-5">
                    <h3 class="mb-4 heading-h3">
                        <span class="gsap-reveal">Umumiy va qisqacha men haqimda</span>
                    </h3>

                    <p class="lead gsap-reveal">
                        Men IT sohasiga katta qiziqish bilan yondashaman va har doim o‘rganish,
                        o‘sish hamda yangiliklar yaratishga intilaman. Texnologiyalar yordamida
                        hayotni yanada qulay va foydali qilish — mening asosiy maqsadim.
                    </p>

                    <p class="mb-4 gsap-reveal">
                        Dasturlash sohasida bir necha yillik tajribaga egaman. Asosan
                        <strong>PHP, Laravel, MySQL, HTML, CSS</strong> va
                        <strong>JavaScript</strong> bilan ishlayman. Shuningdek,
                        zamonaviy, tezkor va foydalanuvchiga qulay veb-ilovalar va telegram botlar ishlab chiqishga
                        ixtisoslashganman.
                    </p>

                    <p class="mb-4 gsap-reveal">
                        Men uchun har bir loyiha — bu yangi imkoniyat, yangi g‘oya va ijodiy yondashuvni
                        namoyon etish imkonidir. Agar sizga ishonchli va ijodkor dasturchi kerak bo‘lsa,
                        birgalikda ajoyib natijalarga erishishimiz mumkin.
                    </p>

                    <p class="gsap-reveal">
                        <a href="https://docs.google.com/document/d/153zJtWASPU034z5K3lLcyytxeV_crKpBp5JE3HKv0qM/edit?usp=sharing"
                            target="_blank" class="btn btn-outline-pill btn-custom-light">
                            Mening CV’mni ko‘rish
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="unslate_co--section" id="services-section">
        <div class="container">

            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider">
                    <span class="gsap-reveal">Mening xizmatlarim</span>
                </h2>
                <span class="gsap-reveal">
                    <img src="images/divider.png" alt="divider" width="76">
                </span>
            </div>

            <div class="row gutter-v3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/001-options.svg" alt="Image" width="45">
                        </div>
                        <h3>Raqamli <br> Strategiya</h3>
                        <p>Biznesingizni onlayn rivojlantirish uchun samarali strategiyalar ishlab chiqaman —
                            maqsadli auditoriyangizni aniqlash, brendni mustahkamlash va marketing yo‘nalishlarini
                            belgilayman.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/002-chat.svg" alt="Icon" width="45">
                        </div>
                        <h3>Veb <br> Dizayn</h3>
                        <p>Foydalanuvchi uchun qulay, zamonaviy va estetik jihatdan jozibador sayt dizaynlarini
                            yarataman. Har bir loyiha — noyob yondashuv bilan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/003-contact-book.svg" alt="Image" class="img-fluid"
                                width="45">
                        </div>
                        <h3>Foydalanuvchi <br> Tajribasi</h3>
                        <p>Har bir sayt yoki ilova foydalanuvchi uchun qulay bo‘lishi kerak — shu sababli UX (User
                            Experience)
                            dizaynini chuqur tahlil asosida yarataman.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/004-percentage.svg" alt="Image" width="45">
                        </div>
                        <h3>Veb <br> Dasturlash</h3>
                        <p>PHP, Laravel, MySQL, HTML, CSS va JavaScript texnologiyalari yordamida tezkor, xavfsiz
                            va funksional veb-ilovalar ishlab chiqaman.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/006-goal.svg" alt="Image" width="45">
                        </div>
                        <h3>WordPress <br> Yechimlar</h3>
                        <p>WordPress asosida saytlar yaratish, sozlash va optimallashtirish bo‘yicha professional
                            xizmatlar — blog, korporativ yoki e-commerce loyihalar uchun.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                        <div class="wrap-icon mb-3">
                            <img src="images/svg/005-line-chart.svg" alt="Image" width="45">
                        </div>
                        <h3>Mobil <br> Ilovalar</h3>
                        <p>Android va iOS platformalari uchun oddiydan murakkabgacha bo‘lgan mobil ilovalar
                            ishlab chiqaman — foydalanuvchi qulayligi va tezlik ustuvor.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="unslate_co--section section-counter" id="skills-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Mening mahoratlarim</span></h2>
                <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
            </div>


            <div class="row pt-5">
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="98">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">PHP</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="90">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">HTML/CSS</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="95">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">Laravel</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="95">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">SQL</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3 mt-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="70">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">Python</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3 mt-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-v1 text-center">
                        <span class="number-wrap">
                            <span class="number number-counter" data-number="50">0</span>
                            <span class="append-text">%</span>
                        </span>
                        <span class="counter-label">C++</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END .counter -->

    <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Iqtiboslar</span>
                </h2>
                <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
            </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
            @foreach ($quotes->reverse() as $quote)
                <div>
                    <div class="testimonial-v1">
                        <div class="testimonial-inner-bg">
                            <span class="quote">&ldquo;</span>
                            <blockquote>
                                {{ $quote->quote }}
                            </blockquote>
                        </div>

                        <div class="testimonial-author-info">
                            <img style="height: 90px" src="{{ asset('storage/' . $quote->img) }}" alt="Image">
                            <h3>{{ $quote->name }}</h3>
                            <span class="d-block position">{{ $quote->job }}</span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- END testimonial -->

    <div class="unslate_co--section" id="journal-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Mening postlarim</span></h2>
                <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
            </div>


            <div class="row gutter-v4 align-items-stretch">
                @foreach ($posts as $post)
                    <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('post', $post->title) }}" class="grid-item blog-item w-100 h-100">
                            <div class="overlay">
                                <div class="portfolio-item-content">
                                    <h3>{{ $post->title }}</h3>
                                    <p class="post-meta">{{ $post->created_at->diffForHumans() }} <span
                                            class="small">&bullet;</span> {{ $post->views }} marta o'qilgan
                                    </p>
                                </div>
                            </div>
                            @php
                                $hasMedia = false;
                            @endphp

                            @foreach ($post->contents as $content)
                                @if (!$hasMedia)
                                    @foreach ($content->mediaFiles as $media)
                                        @php $hasMedia = true; @endphp

                                        @if ($media->type == 'image')
                                            <img src="{{ asset('storage/' . $media->url) }}" class="lazyload"
                                                alt="Image" />
                                            @break

                                        @elseif ($media->type == 'url')
                                            @php
                                                $segments = explode('/', $media->url);
                                                $lastSegment = end($segments);
                                                $videoId = explode('?', $lastSegment)[0];
                                            @endphp
                                            <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg"
                                                alt="Video Thumbnail" />
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if (!$hasMedia)
                                <img src="{{ asset('images/defaultepost.png') }}" class="lazyload"
                                    alt="Default Image" />
                            @endif

                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- END blog posts -->


    <div class="unslate_co--section" id="contact-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Taklif va savollar uchun</span>
                </h2>
                <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
            </div>


            <div class="row justify-content-between">

                <div class="col-md-6">
                    <form method="post" action="{{ route('message') }}" class="form-outline-style-v1"
                        id="">
                        @csrf
                        <div class="form-group row mb-0">

                            <div class="col-lg-12 form-group gsap-reveal">
                                <label for="message">Xabaringizni yozing...</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row gsap-reveal">
                            <div class="col-md-12 d-flex align-items-center">
                                <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3"
                                    value="Send Message">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning" class="mt-4"></div>
                    <div id="form-message-success">
                        Xabaringiz yuborildi!
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="contact-info-v1">
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Email</span>
                            <a href="#" class="contact-info-val">husniddin13124041@gmail.com</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Telefon</span>
                            <a href="#" class="contact-info-val">+998 77 025 26 77</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Manzil</span>
                            <address class="contact-info-val">Beruniy k. <br> Samarqand sh, Samarqand v.
                            </address>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div> <!-- END .unslate_co-site-inner -->


</x-user>
