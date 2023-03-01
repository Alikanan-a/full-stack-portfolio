<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale = 0.86, maximum-scale=3.0, minimum-scale=0.86">
    <!--===============ICON ===============-->
    <link rel="shortcut icon" href="/assets/img/line-building-png_265381-removebg-preview.png" type="image/x-icon">

    <!-- link Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- link CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- name fo document -->
    <title>@auth() {{$user->pluck('name')->join('')}} @endauth @guest() {{$user->pluck('name')->join('')}} @endguest</title>

    <!-- edit css -->
    @vite(['resources/scss/admin/admin.scss', 'resources/js/app.js'])
</head>

<body class="purple">


<!--=============== HEADER PROFILE ===============-->
<header class="profile container">
    <!-- THEME Button -->
    <i class="ri-moon-line change-theme" id="theme-button"></i>
    <!--===============COLOR-buttons ===============-->
    <div class="color-container">
        <div class='menu'>
            <input class='toggle' id='menu' type='checkbox'>
            <label class='style' for='menu'>
                <i class="ri-paint-brush-line"></i>
            </label>
            <a class='tab' href="#" id="blue">
                <p></p>
            </a>
            <a class='tab' id="purple">
                <p></p>
            </a>
            <a class='tab' id="pink">
                <p></p>
            </a>
            <a class='tab' id="teal">
                <p></p>
            </a>
            <a class='tab' id="red">
                <P></P>
            </a>
            <a class='tab' id="orange">
                <P></P>
            </a>
            <a class='tab' id="brown">
                <P></P>
            </a>
            <a class='tab' id="gray">
                <P></P>
            </a>
        </div><!-- menu -->
    </div><!-- container -->
    <div class="profile__container grid">
        <div class="profile__data">
            <div class="profile__border">
                <div class="profile__perfile position-relative">
                    <img src="{{url('Upload/'.$user->pluck('user_image')->join(''))}}"
                         alt="{{$user->pluck('name')->join('')}}">
                </div>

                @auth()
                    <label for="user_image" class="edit-icon position-absolute">
                        <i class="ri-edit-line"></i>
                    </label>
                    <form id="profileImage" class="position-absolute"
                          action="{{route('admin.profile.image' , Auth::id())}}"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" accept="image/*" name="user_image" id="user_image">
                    </form>
                @endauth
            </div>
            <h2 class="profile__name">
                {{$user->pluck('name')->join('')}}
            </h2>
            <h3 class="profile__profession">
                {{$user->pluck('job')->join('')}}
            </h3>
            <ul class="profile__social">
                <!-- insert Instagram ID -->
                <a href="{{$user->pluck('instagram')->join('')}}" target="_blank" class="profile__social-links">
                    <i class="ri-instagram-line"></i>
                </a>
                <!-- insert linkedin -->
                <a href="{{$user->pluck('linkedin')->join('')}}" target="_blank" class="profile__social-links">
                    <i class="ri-linkedin-box-line"></i>
                </a>
                <!-- insert social media -->
                <a href="{{$user->pluck('whatsapp')->join('')}}" target="_blank" class="profile__social-links">
                    <i class="ri-whatsapp-line"></i>
                </a>

            </ul>
        </div>
        <div class="profile__info grid">
            <div class="profile__info-group">
                <h3 class="profile__info-number">+{{$user->pluck('years_of_work')->join('')}}</h3>
                <p class="profile__info-description">
                    years of <br> work
                </p>
            </div>
            <div class="profile__info-group">
                <h3 class="profile__info-number">+{{$user->pluck('project_done')->join('')}}</h3>
                <p class="profile__info-description">
                    completed <br> projects
                </p>
            </div>
            <div class="profile__info-group">
                <h3 class="profile__info-number">+{{$user->pluck('colab_with_company')->join('')}}</h3>
                <p class="profile__info-description">
                    colab with <br> company
                </p>
            </div>
        </div>
        <div class="profile__buttons">
            <!-- insert CV -->
            <a download href="/assets/pdf/Gianell-Cv.pdf" class="button">
                Download CV <i class="ri-download-line"></i>
            </a>
            <div class="profile__buttons-small">
                <!-- insert whatsApp number -->
                <a href="{{$user->pluck('telegram')->join('')}}" target="_blank"
                   class="button button__small button__gray">
                    <i class="ri-telegram-fill"></i>
                </a>
                <!-- insert  number -->
                <a href="tel:{{$user->pluck('phone')->join('')}}" class="button button__small button__gray">
                    <i class="ri-phone-line"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<!--=============== MAIN ===============-->
<main class="main">
    <section class="filters container">
        <!--=============== FILTERS TABS BUTTON ===============-->
        <ul class="filters__content">
            <button class="filter__button filter-tab-active" data-target="#project">
                projects
            </button>
            <button class="filter__button" data-target="#skills">
                Skills
            </button>
        </ul>
        <div class="filters__sections">
            <!--=============== PROJECTS ===============-->
            <div class="projects__content project-content grid filters__active" data-content id="project">
                @foreach($project as $item)
                    <article class="projects__card">
                        <img src="{{url('Upload/'.$item->image)}}">
                        <div class="projects__modal">
                            <div>
                                <span class="projects__subtitle">{{$item->description}}</span>
                                <h3 class="projects__title">{{$item->name}}</h3>
                                <a href="#" class="projects__button button button__small">
                                    <i class="ri-link"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!--=============== SKILLS ===============-->
            <div class="skills__content grid skill-content" data-content id="skills">
                <div class="skills__area">
                    <h3 class="skills__title">
                        architecture
                    </h3>
                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__level">
                                            basic
                                        </span>
                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__level">Advanced</span>

                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">JS</h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                        </div>
                        <div class="skills__group">
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">react</h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name"> bootstrap</h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name"> git </h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills__area">
                    <h3 class="skills__title">
                        Applications
                    </h3>
                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">Office</h3>
                                    <span class="skills__level">
                                            Intermediate
                                        </span>
                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">Corel</h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__level">Advanced</span>

                                </div>
                            </div>
                        </div>
                        <div class="skills__group">
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name">Auto Cad</h3>
                                    <span class="skills__level">Advanced</span>

                                </div>
                            </div>
                            <div class="skill__data">
                                <i class="ri-checkbox-circle-line"></i>
                                <div>
                                    <h3 class="skills__name"> Revit</h3>
                                    <span class="skills__level">Intermediate</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--=============== info-detail ===============-->
<div class="wrapper">
    <div class="circle"></div>
    <div class="cols colos0">
        <span class="topline">Hello</span>
        <h1>I'm a<br><samp class="multiText"></samp></h1>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, eius, quia omnis officiis ipsam
            repellat aspernatur culpa tempore distinctio impedit, adipisci voluptates dolorem reprehenderit ex
            excepturi unde vero animi neque.</P>
        <div class="btns">
            <button>hire me</button>
        </div>
    </div>

    <div class="cols colos1">
        <div class="imgbox">
            <img src="assets/img/IMG_20230211_225203_840-removebg-preview.png">
        </div>
    </div>
</div>
<!--=============== contact-form ===============-->
<div class=".contact-container">
    <div class="form-container">
        <div class="left-container">
            <div class="left-inner-container">
                <h2>Let's Chat</h2>
                <p>Whether you have a question, want to start a project or simply want to connect.</p>
                <br>
                <p>Feel free to send me a message in the contact form</p>
            </div>
        </div>
        <div class="right-container">
            <div class="right-inner-container">
                <form method="POST" action="{{route('admin.mail.store')}}">
                    @csrf
                    <h2 class="lg-view">Contact</h2>
                    <h2 class="sm-view">Let's Chat</h2>
                    <p>* Required</p>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <input name="name" type="text" placeholder="Name *"/>
                    <input name="email" type="email" placeholder="Email *"/>
                    <input name="company" type="text" placeholder="Company"/>
                    <input name="phone" type="phone" placeholder="Phone"/>
                    <textarea name="massage" rows="4" placeholder="Message"></textarea>
                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=============== log-in button ===============-->
<div id="log-a">
    <span>admin only</span>
    <a href="login.html">
        <button class="login-button">change</button>
    </a>
</div>
<!--=============== FOOTER ===============-->
<footer class="footer container">
        <span class="footer__copy">
            ALL RIGHTS TO ALIKANAN
        </span>

</footer>
<!-- =============== type.js =============== -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- =============== Jquery =============== -->
<script src="/assets/plugin/jquery/dist/jquery.min.js"></script>

<!--=============== SCROLLREVEAL ===============-->
<script src="/assets/js/scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="/assets/js/main.js"></script>
</body>

</html>
