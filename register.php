<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/Favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Favicon//favicon-16x16.png">
    <link rel="manifest" href="img/Favicon//site.webmanifest">

    <title>GalleryMemo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style Css -->
    <link rel="stylesheet" href="css/style-login.css">
</head>

<body>
    <div class="wave">
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 590" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <style>
            .path-0 {
                animation: pathAnim-0 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-0 {
                0% {
                    d: path("M 0,600 L 0,225 C 89.66507177033495,226.0909090909091 179.3301435406699,227.1818181818182 281,216 C 382.6698564593301,204.8181818181818 496.3444976076554,181.3636363636364 599,212 C 701.6555023923446,242.6363636363636 793.2918660287082,327.3636363636363 890,378 C 986.7081339712918,428.6363636363637 1088.488038277512,445.18181818181824 1181,464 C 1273.511961722488,482.81818181818176 1356.755980861244,503.9090909090909 1440,525 L 1440,600 L 0,600 Z");
                }

                25% {
                    d: path("M 0,600 L 0,225 C 88.41148325358853,195.85167464114832 176.82296650717706,166.70334928229664 269,173 C 361.17703349282294,179.29665071770336 457.11961722488036,221.03827751196172 545,280 C 632.8803827751196,338.9617224880383 712.6985645933013,415.14354066985646 813,437 C 913.3014354066987,458.85645933014354 1034.086124401914,426.3875598086124 1142,432 C 1249.913875598086,437.6124401913876 1344.9569377990429,481.3062200956938 1440,525 L 1440,600 L 0,600 Z");
                }

                50% {
                    d: path("M 0,600 L 0,225 C 99.72248803827753,259.6507177033493 199.44497607655506,294.30143540669854 302,309 C 404.55502392344494,323.69856459330146 509.9425837320574,318.444976076555 606,316 C 702.0574162679426,313.555023923445 788.7846889952154,313.91866028708137 872,339 C 955.2153110047846,364.08133971291863 1034.9186602870814,413.88038277511964 1129,449 C 1223.0813397129186,484.11961722488036 1331.5406698564593,504.5598086124402 1440,525 L 1440,600 L 0,600 Z");
                }

                75% {
                    d: path("M 0,600 L 0,225 C 81.1866028708134,195.4306220095694 162.3732057416268,165.86124401913875 259,185 C 355.6267942583732,204.13875598086125 467.6937799043063,271.9856459330143 559,287 C 650.3062200956937,302.0143540669857 720.8516746411482,264.1961722488038 825,263 C 929.1483253588518,261.8038277511962 1066.8995215311006,297.22966507177034 1175,347 C 1283.1004784688994,396.77033492822966 1361.5502392344497,460.88516746411483 1440,525 L 1440,600 L 0,600 Z");
                }

                100% {
                    d: path("M 0,600 L 0,225 C 89.66507177033495,226.0909090909091 179.3301435406699,227.1818181818182 281,216 C 382.6698564593301,204.8181818181818 496.3444976076554,181.3636363636364 599,212 C 701.6555023923446,242.6363636363636 793.2918660287082,327.3636363636363 890,378 C 986.7081339712918,428.6363636363637 1088.488038277512,445.18181818181824 1181,464 C 1273.511961722488,482.81818181818176 1356.755980861244,503.9090909090909 1440,525 L 1440,600 L 0,600 Z");
                }
            }
            </style>
            <defs>
                <linearGradient id="gradient" x1="54%" y1="100%" x2="46%" y2="0%">
                    <stop offset="5%" stop-color="#496989"></stop>
                    <stop offset="95%" stop-color="#58a399"></stop>
                </linearGradient>
            </defs>
            <path
                d="M 0,600 L 0,225 C 89.66507177033495,226.0909090909091 179.3301435406699,227.1818181818182 281,216 C 382.6698564593301,204.8181818181818 496.3444976076554,181.3636363636364 599,212 C 701.6555023923446,242.6363636363636 793.2918660287082,327.3636363636363 890,378 C 986.7081339712918,428.6363636363637 1088.488038277512,445.18181818181824 1181,464 C 1273.511961722488,482.81818181818176 1356.755980861244,503.9090909090909 1440,525 L 1440,600 L 0,600 Z"
                stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1"
                class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 300)">
            </path>
        </svg>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height:100vh;">
            <div class="col-md-6 col-lg-4 page-register">
                <form class="form-signin">
                    <div class="text-center mb-4">
                        <img class="mb-4 logo" src="img/Logo/png/logo-color-resize.png" alt="" width="100" height="100">
                        <h1 class="h3 mb-3 font-weight-normal">GalleryMemo</h1>
                        <p><i>Preserving memories in pixels. Your digital time capsule for cherished moments. Organize,
                                reminisce, and relive your story with every snapshot. Seamlessly sync your memories
                                across devices</i></p>
                    </div>

                    <div class="form-label-group mb-3">
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" class="form-control mb-3" placeholder="Name" required
                            autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect02">Gender</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option value="2">Male</option>
                            <option value="3">Female</option>
                        </select>
                    </div>
                    <div class="form-label-group mb-3">
                        <label for="inputEmail">Email address</label>
                        <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address"
                            required>
                    </div>
                    <div class="form-label-group mb-3">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password"
                            required>
                    </div>
                    <div class="form-label-group mb-3">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" class="form-control mb-3"
                            placeholder="Confirm Password" required>
                    </div>
                    <div class="checkbox mb-3">
                        <a href="index.php" class="float-right"><i>I have account</i></a>
                        <br>
                    </div>

                    <button class="btn btn-lg btn-info btn-block" type="submit"><a href="dashboard/index.php"
                            class="text-white">Register</a></button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; Muhamamd Ilfan Asykuri</p>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>