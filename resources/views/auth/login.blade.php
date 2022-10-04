<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 09:16:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Friendkit | Login</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
            '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KQHJPZP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/core.css">
</head>

<body class="is-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHJPZP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="login-wrapper">

        <!-- Main Wrapper -->
        <div class="login-wrapper columns is-gapless">
            <!--Left Side (Desktop Only)-->
            <div class="column is-6 is-hidden-mobile hero-banner">
                <div class="hero is-fullheight is-login">
                    <div class="hero-body">
                        <div class="container">
                            <div class="left-caption">
                                <h2>Join an Exciting Social Experience.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Side-->
            <div class="column is-6">
                <div class="hero form-hero is-fullheight">
                    <!--Logo-->
                    <div class="logo-wrap">
                        <div class="wrap-inner">
                            <img src="assets/img/logo/friendkit-white.svg" alt="">
                        </div>
                    </div>
                    <!--Login Form-->
                    <div class="hero-body">
                        <div class="form-wrapper">
                            <!--Avatar-->
                            <div class="avatar">
                                <div class="badge">
                                    <i data-feather="check"></i>
                                </div>
                                <img src="https://placehold.it/128x128" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            </div>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="login-form">
                                    <div class="field">
                                        <div class="control">
                                            <x-input id="email" class="input email-input" type="email" name="email" :value="old('email')" required autofocus />
                                            <div class="input-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <x-input id="password" class="input password-input"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                                            <div class="input-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                         <x-button class="button is-solid primary-button raised is-rounded is-fullwidth">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>
                                </div>
                            </div>

                            <div class="section forgot-password">
                            <div class="has-text-centered">
                               <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Concatenated js plugins and jQuery -->
<script src="assets/js/app.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="assets/data/tipuedrop_content.js"></script>

<!-- Core js -->
<script src="assets/js/global.js"></script>

<!-- Navigation options js -->
<script src="assets/js/navbar-v1.js"></script>
<script src="assets/js/navbar-v2.js"></script>
<script src="assets/js/navbar-mobile.js"></script>
<script src="assets/js/navbar-options.js"></script>
<script src="assets/js/sidebar-v1.js"></script>

<!-- Core instance js -->
<script src="assets/js/main.js"></script>
<script src="assets/js/chat.js"></script>
<script src="assets/js/touch.js"></script>
<script src="assets/js/tour.js"></script>

<!-- Components js -->
<script src="assets/js/explorer.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/modal-uploader.js"></script>
<script src="assets/js/popovers-users.js"></script>
<script src="assets/js/popovers-pages.js"></script>
<script src="assets/js/lightbox.js"></script>

<!-- Landing page js -->

<!-- Signup page js -->

<!-- Feed pages js -->

<!-- profile js -->

<!-- stories js -->

<!-- friends js -->

<!-- questions js -->

<!-- video js -->

<!-- events js -->

<!-- news js -->

<!-- shop js -->

<!-- inbox js -->

<!-- settings js -->

<!-- map page js -->

<!-- elements page js -->
</body>


<!-- Mirrored from friendkit.cssninja.io/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 09:16:37 GMT -->
</html>
