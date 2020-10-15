<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'ActionSA') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>
    <div class="auth-layout-wrap" style="background-color: #05B615;
    background-image: linear-gradient(180deg, #05B615 0%, #1B7D40 100%);
">
        <div class="auth-content">
            <div class="card o-hidden">
                   <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                               <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 83.7826" class="block h-15 w-auto"><title>logo</title><path d="M84.2826,43.7571A41.8913,41.8913,0,1,1,42.3913,1.8658,41.8913,41.8913,0,0,1,84.2826,43.7571" transform="translate(-0.5 -1.8658)" style="fill: rgb(255, 255, 255);"></path><path d="M38.8691,55.6008a116.0313,116.0313,0,0,1,3.7581-13.3274c-8.9767,6.4417-18.4357,15.1607-25.4015,21.9957a32.4482,32.4482,0,0,0,18.8,11.3292,139.2328,139.2328,0,0,1,2.8436-19.9976" transform="translate(-0.5 -1.8658)"></path><path d="M25.208,30.3331A130.2423,130.2423,0,0,1,58.402,15.508,32.4747,32.4747,0,0,0,9.9857,41.77,115.07,115.07,0,0,1,25.208,30.3331" transform="translate(-0.5 -1.8658)" style="fill: rgb(224, 60, 49);"></path><path d="M68.3694,24.2824a91.7944,91.7944,0,0,0-6.5688,25.7829,121.4554,121.4554,0,0,0-.5036,20.0871,32.471,32.471,0,0,0,7.0724-45.87" transform="translate(-0.5 -1.8658)" style="fill: rgb(0, 71, 187);"></path><path d="M12.4744,63.0743C39.4614,36.22,51.438,32.1482,51.438,32.1482c-8.0241,15.9425-10.77,33.2855-11.4369,47.1372q1.1855.0784,2.39.0793A35.47,35.47,0,0,0,57.5205,76c-1.274-14.1123-1.4943-36.8813,9.239-58.2067,0,0-33.7831,5.8114-59.4116,32.3115a35.399,35.399,0,0,0,5.1265,12.97" transform="translate(-0.5 -1.8658)" style="fill: rgb(5, 182, 22);"></path><path d="M68.3694,24.2824a32.7075,32.7075,0,0,0-3.0408-3.4975C56.7909,39.59,56.326,59.1431,57.2521,72.6279a32.4294,32.4294,0,0,0,4.0449-2.4756,121.4554,121.4554,0,0,1,.5036-20.0871,91.7944,91.7944,0,0,1,6.5688-25.7829" transform="translate(-0.5 -1.8658)" style="fill: rgb(255, 255, 255);"></path><path d="M62.9489,18.632a32.5254,32.5254,0,0,0-4.547-3.1238,130.2307,130.2307,0,0,0-33.194,14.8251A115.0612,115.0612,0,0,0,9.9859,41.77q-.0592.9864-.06,1.9873a32.8329,32.8329,0,0,0,.1961,3.5893C30.0468,28.2706,53.8341,20.8907,62.9489,18.632" transform="translate(-0.5 -1.8658)" style="fill: rgb(255, 255, 255);"></path><path d="M36.0255,75.5985a32.4929,32.4929,0,0,0,4.16.55c.9188-13.2791,3.8232-29.2395,11.2525-44,0,0-11.2983,3.842-36.6736,28.6668a32.5438,32.5438,0,0,0,2.4611,3.4546c6.9655-6.8353,16.425-15.5537,25.4015-21.9957a115.9992,115.9992,0,0,0-3.7576,13.3274,139.1907,139.1907,0,0,0-2.8439,19.9976" transform="translate(-0.5 -1.8658)" style="fill: rgb(255, 184, 28);"></path><path d="M209.837,60.02c-5.486,0-5.912-11.0666-5.912-14.4584,0-4.347.5761-14.4579,5.912-14.4579S215.75,41.215,215.75,45.562c0,3.3918-.4266,14.4584-5.9126,14.4584m0-37.72a13.8887,13.8887,0,0,0-11.01,5.3334c-3.28,4.09-4.9435,10.122-4.9435,17.9278S195.5465,59.4,198.8269,63.49a14.03,14.03,0,0,0,22.02,0c3.28-4.09,4.9426-10.1217,4.9426-17.9278s-1.6628-13.8378-4.9426-17.9278a13.8892,13.8892,0,0,0-11.01-5.3334m38.7376,21.0218a33.4591,33.4591,0,0,0,.2527,4.3075L238.7616,23.0075h-8.9881V68.1164h9.4522l-.0006-20.7382-.06-1.8472-.2527-2.743,10.2431,25.3284h8.8715V23.0075h-9.4522Zm-94.43-11.3932H161.04v36.187h9.4522V31.9294h6.955V23.0075H154.1451Zm26.3021,36.187h9.4522V23.0072h-9.4522Zm-73.8547-15.83L108.66,39.2987l1.0342-7.3659h.1287l1.0987,7.3659,2.4551,12.9878Zm-1.5505-32.8887L93.7343,68.1164h9.5633l1.7444-8.2057h9.7568l1.8092,8.2057h10.2732L115.1864,19.3977Zm41.0126,3.0789a18.0962,18.0962,0,0,0-14.386,7.1636,25.4068,25.4068,0,0,0-5.2217,15.5088,26.4124,26.4124,0,0,0,5.1606,16.1335,18.1848,18.1848,0,0,0,14.86,7.3057,10.881,10.881,0,0,0,4.1935-.7909l.208-.0855V58.72l-.4357.1376a11.0645,11.0645,0,0,1-3.2588.6326c-7.84,0-10.6858-8.6112-10.6858-14.3991,0-6.7273,3.3225-13.5152,10.7447-13.5152a12.4261,12.4261,0,0,1,3.2159.46l.42.1106V23.4019l-.2211-.08a13.3886,13.3886,0,0,0-4.5931-.8455m154.1566,29.81,2.0678-12.9878,1.0339-7.3659h.1293l1.0981,7.3659,2.4554,12.9878Zm8.5939-32.8887H298.6606L287.3532,68.1164h9.5627l1.7447-8.2057h9.7562l1.81,8.2057H320.5ZM271.7143,32.0621a4.4634,4.4634,0,0,1,4.846-4.7815,10.9991,10.9991,0,0,1,6.9783,3.1017V21.0133a16.4955,16.4955,0,0,0-8.5294-2.3912c-8.27,0-12.7283,6.6554-12.7283,14.3448,0,7.1073,3.4239,10.7256,8.9807,14.4735,2.714,1.9379,5.6863,3.36,5.6863,7.1073a5.2273,5.2273,0,0,1-5.557,5.2982,12.3872,12.3872,0,0,1-7.3014-2.5844v9.1756A14.9548,14.9548,0,0,0,272.36,68.892c9.0463,0,14.0214-6.5259,14.0214-15.1843,0-13.1807-14.667-13.6334-14.667-21.6456" transform="translate(-0.5 -1.8658)" style="fill: rgb(5, 182, 22);"></path></svg>
                            </div>
                            <h1 class="mb-3 text-18">Forgot Password</h1>
                            <form action="">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control form-control-rounded" type="email">
                                </div>
                                <button class="btn btn-primary btn-block btn-rounded mt-3">Reset Password</button>

                            </form>
                            <div class="mt-3 text-center">
                                <a class="text-muted" href="signin.html"><u>Sign in</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center " style="background-size: cover;background-image: linear-gradient(rgba(0,0,0,.85),rgba(0,0,0,.85) ), url({{asset('assets/images/photo-long-5.jpg')}}">
                        <div class="pr-3 auth-right">
                            <a class="btn btn-primary btn-email btn-block btn-icon-text btn-rounded" href="signup.html">
                                <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                            </a>
                            <a class="btn  btn-google btn-block btn-icon-text btn-rounded">
                                <i class="i-Google-Plus"></i> Sign in with Google
                            </a>
                            <a class="btn  btn-facebook btn-block btn-icon-text btn-rounded">
                                <i class="i-Facebook-2"></i> Sign in with Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
            <!-- footer -->
            <div class="app-footer">
                <small class="text-center app-footer__cite "> Powered by
                    <a href="https://www.thrivebs.co.za/" target="_blank">Thrive Business Solutions </a>
                </small>
            </div>
        <!-- end:footer -->
    </div>

    <script src="{{asset('assets/js/common-bundle-script.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
