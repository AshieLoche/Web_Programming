<!-- Main Content -->
<main class="d-flex flex-column justify-content-start align-items-center">
    <div class="container-fluid p-0">
        <div class="background-blur">
            <img src="assets/img/banner.jpg" alt="banner" class="img banner d-none d-md-block">
        </div>
        <div class="background-darken"></div>
        <div class="container-xxl p-0 banner">
            <img src="assets/img/banner.jpg" alt="banner" class="img banner d-none d-md-block">
        </div>
    </div>
    <div class="container-xxl p-4 pt-5 content">
        <p class="guest display-5 text-white fs-2 text-center fw-bold mb-4">
            <span class="border-bottom">
                Finding the best Poké Partner has never been easier!
            </span>
        </p>
        <p class="guest display-5 text-white fs-3 text-center my-4">
            With <strong>PokéDopt</strong>, starting your Pokémon journey just requires a couple of clicks, and soon you’ll have a forever companion! Not only that, for people who just want a normal life and share their moments with their Poké Pals, then use the built-in social media platform to tell the world about the joys between you and your Pokémon.
        </p>
        <div class="col-12 d-inline-flex justify-content-center align-items-center gap-5 mt-5" id="actionButtons">

                <!-- Header Navbar PokéList Button -->
                <button class="btn btn-outline-light p-3" data-bs-toggle="modal" data-bs-target="#sign-in-modal">
                    <!-- Header Navbar PokéList Button Title -->
                    <span class="fw-bold fs-1" id="sign-in">
                        Sign In
                    </span>
                    <!-- Header Navbar PokéList Button Title -->
                </button>
                <!-- Header Navbar PokéList Button -->
                <!-- Header Navbar PokéList Button -->
                <button class="btn btn-outline-light p-3" autofocus>
                    <!-- Header Navbar PokéList Button Title -->
                    <span class="fw-bold fs-1" id="sign-up">
                        Sign Up
                    </span>
                    <!-- Header Navbar PokéList Button Title -->
                </button>
                <!-- Header Navbar PokéList Button -->
    </div>
</main>

<style>
    .main {
        background-color: rgba(54,58,62,255);
    }
    .main .guest {
        height: initial;
        overflow: visible;
    }
    .main .container-fluid {
        position: relative;
        overflow: hidden;
    }
    .content {
        background-color: #5e6267;
        min-height: 55vh !important;
    }

    .main .background-blur {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-image: url('assets/img/banner.jpg');
        background-size: cover;
        background-position: center;
        filter: blur(5px);
        -webkit-filter: blur(5px);
    }

    .main .background-darken {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    div.banner, img.banner {
        width: 100%;
        min-height: 35vh !important;
        max-height: 35vh !important;
        background-image: url('assets/img/banner.jpg');
        background-size: cover;
        background-position: center;
        filter: blur(0);
        position: relative;
        z-index: 2;
    }

    @media screen and (min-width: 768px) {
        .content {
            min-height: 65vh !important;
        }
        img.banner {
            max-height: 35vh !important;
        }
    }
</style>
<!-- Main Content -->