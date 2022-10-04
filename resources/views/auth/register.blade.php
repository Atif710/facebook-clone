<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/signup-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 09:23:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Friendkit | Signup</title>
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

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHJPZP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="signup-wrapper">

        <!--Fake navigation-->
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img class="light-image" src="assets/img/logo/friendkit-bold.svg" width="112" height="28" alt="">
                <img class="dark-image" src="assets/img/logo/friendkit-white.svg" width="112" height="28" alt="">
            </a>
        </div>

        <div class="container">
            <!--Container-->
            <div class="login-container is-centered">
                <div class="columns is-vcentered">
                    <div class="column">

                        <h2 class="form-title has-text-centered">Hey there!</h2>
                        <h3 class="form-subtitle has-text-centered">Lets create your account.</h3>

                        <!--Form-->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="login-form">
                                <div class="form-panel">
                                    <div class="columns is-multiline">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label>User Name</label>
                                                <div class="control">
                                                    <x-input id="userName" class="input" type="text" name="userName" :value="old('name')" required autofocus />
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                          <div class="columns is-multiline">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label>Email</label>
                                                <div class="control">
                                                 <x-input id="email" class="input" type="email" name="email" :value="old('email')" required />
                                             </div>
                                             </div>
                                         </div>
                                     </div>
                                       <div class="columns is-multiline">
                                     <div class="column is-12">
                                        <div class="field">
                                            <label>Password</label>
                                            <div class="control">
                                             <x-input id="password" class="input"
                                             type="password"
                                             name="password"
                                             required autocomplete="new-password" />
                                         </div>
                                         </div>
                                           <div class="columns is-multiline">
                                         <div class="column is-12">
                                            <div class="field">
                                                <label>Confirm Password</label>
                                                <div class="control">
                                                    <x-input id="password_confirmation" class="input"
                                                  type="password"
                                                  name="password_confirmation" required />
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="column is-12">
                                        <div class="field is-flex">
                                            <div class="switch-block">
                                                <label class="f-switch">
                                                    <input type="checkbox" class="is-switch">
                                                    <i></i>
                                                </label>
                                                <div class="meta">
                                                    <p>Subscribe to Newsletter?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons mt-2">
                                <x-button class="button is-solid primary-button is-fullwidth raised">
                                    {{ __('Register') }}
                                </x-button>
                            </div>

                            <div class="account-link has-text-centered">
                                <a href="{{route('login')}}">Have an account? Sign In</a>
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


<!-- Mirrored from friendkit.cssninja.io/signup-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 09:23:35 GMT -->
</html>