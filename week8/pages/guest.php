<?php

    

?>

<!DOCTYPE html>
<html lang="en">
                    
                    <!-- Header Nav -->
                    <?php require '../components/headerNav.php' ?>
                    <!-- Header Nav -->

                    <!-- Main Content -->
                    <main>

                        <!-- Banner Section -->
                        <section class="banner-section">
                            
                            <!-- Banner -->
                            <img src="../assets/img/others/banner.jpg" alt="bg banner" class="img banner d-block container-xxl p-0">
                            <!-- Banner -->
                            
                            <!-- Banner Background -->
                            <img src="../assets/img/others/banner.jpg" alt="bg banner" class="img bg-banner d-none d-md-block">
                            <!-- Banner Background -->
                            
                        </section>
                        <!-- Banner Section -->
                        
                        <!-- Content Section -->
                        <section class="container-xxl text-white text-center p-3 p-sm-4 content-section">

                            <!-- Tagline -->
                            <p class="display-5 fw-bold mb-4 tagline">
                                <span class="border-bottom border-3 p-1">
                                    Finding the best Poké Partner has never been easier!
                                </span>
                            </p>
                            <!-- Tagline -->

                            <!-- Description -->
                            <p class="display-5 my-5 description">
                                With <strong>PokéDopt</strong>, starting your Pokémon journey just requires a couple of clicks, and soon you’ll have a forever companion! Not only that, for people who just want a normal life and share their moments with their Poké Pals, then use the built-in social media platform to tell the world about the joys between you and your Pokémon.
                            </p>
                            <!-- Description -->

                            <!-- Guest Sign Buttons -->
                            <section class="d-flex justify-content-center align-items-center gap-3 gap-md-5 signButtons">

                                <!-- Guest Sign In Button -->
                                <button class="btn btn-outline-light p-1 p-sm-2 p-lg-3 d-flex align-items-center" data-bs-toggle="modal"  data-bs-target="#sign-in-modal">

                                    <!-- Guest Sign In Button Title -->
                                    <span class="fw-bold" id="sign-in">
                                        Sign In
                                    </span>
                                    <!-- Guest Sign In Button Title -->

                                </button>
                                <!-- Guest Sign In Button -->

                                <!-- Guest Sign Up Button -->
                                <button class="btn btn-outline-light p-1 p-sm-2 p-lg-3 d-flex align-items-center" data-bs-toggle="modal"  data-bs-target="#sign-up-modal">

                                    <!-- Guest Sign Up Button Title -->
                                    <span class="fw-bold" id="sign-up">
                                        Sign Up
                                    </span>
                                    <!-- Guest Sign Up Button Title -->

                                </button>
                                <!-- Guest Sign Up Button -->

                            </section>
                        </section>
                        <!-- Content Section -->

                    </main>
                    <!-- Main Content -->

                    <!-- Footer -->
                    <?php require '../components/footer.php' ?>
                    <!-- Footer -->

                </section>
                <!-- Primary Section -->
                
                <!-- Side Nav -->
                <?php require '../components/sideNav.php' ?>
                <!-- Side Nav -->
                
                <!-- Sign In Modal -->
                <?php require '../components/signIn.php' ?>
                <!-- Sign In Modal -->

                <!-- Sign Up Modal -->
                <?php require '../components/signUp.php' ?>
                <!-- Sign Up Modal -->

            
</html>

<style>
    main {
        background-color: rgba(54,58,62,255);
    }
    .banner {
        width: 100%;
        height: 40vh;
        position: relative;
        z-index: 2;
    }
    .bg-banner {
        width: 100%;
        height: 40vh;
        margin-top: -40vh;
        filter: brightness(50%) blur(5px);
        position: relative;
        z-index: 1;
    }
    .content-section {
        background-color: #5e6267;
        height: 50vh;
    }
        .tagline {
            font-size: 1.25rem;
            line-height: 2.25rem;
        }
        .description {
            font-size: 1.125rem;
        }
        .signButtons span {
            font-size: 1.5rem;
        }
    /* Small Breakpoint */
    @media screen and (min-width: 576px) {
        .tagline {
            font-size: 1.5rem;
            line-height: 2.5rem;
        }
        .description {
            font-size: 1.25rem;
        }
        .signButtons span {
            font-size: 1.75rem;
        }
    }
    /* Small Breakpoint */
    /* Medium Breakpoint */
    @media screen and (min-width: 768px) {
        .tagline {
            font-size: 2rem;
            line-height: 3rem;
        }
        .description {
            font-size: 1.75rem;
        }
        .signButtons span {
            font-size: 2.25rem;
        }
    }
    /* Medium Breakpoint */
    /* Large Breakpoint */
    @media screen and (min-width: 1200px) {
        .tagline {
            font-size: 2.25rem;
        }
        .description {
            font-size: 2rem;
        }
        .signButtons span {
            font-size: 2.5rem;
        }
    }
    /* Large Breakpoint */
</style>