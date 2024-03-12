    <head>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Meta -->
        
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Bootstrap CDN -->
        
        <!-- Bootstrap Icon CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Bootstrap Icon CDN -->
        
        <!-- Website Header -->
        <link rel="icon" type="image/x-icon" href="../assets/img/icons/favicon.ico">
        <title>PokéDopt</title>
        <!-- Website Header -->
        
        <!-- External CSS -->
        <link rel="stylesheet" href="../styles/components.css">
        <!-- External CSS -->

    </head>

    <body class="bg-secondary">
        
        <!-- Page Container -->
        <div class="container-fluid">

            <!-- Page Row -->
            <div class="row">

                <!-- Primary Section -->
                <section class="primary col-md-10 order-md-2 p-0">

                    <!-- Header Nav -->
                    <nav class="navbar navbar-collapse navbar-dark bg-dark p-2 pt-4 border-bottom" id="header-nav">
                        
                        <!-- Header Nav Container -->
                        <div class="container-xxl p-0">
                            
                            <!-- Header Nav Row -->
                            <div class="row col-12 m-0">

                                <!-- Header Nav Action Buttons (Search, Filter) -->
                                <section class="col-6 col-md-4 order-2 order-md-1 d-flex justify-content-start align-items-center gap-2 gap-md-3 p-2 ps-md-3">
                                    
                                    <!-- Header Nav Search Button -->
                                    <button class="navbar-toggler btn btn-outline-light border-0 p-2" id="search-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-filter" aria-controls="search-filter" aria-expanded="false" aria-label="Toggle Search Bar">

                                        <!-- Header Nav Search Icon -->
                                        <i class="bi bi-search fs-2" id="search-icon"></i>
                                        <!-- Header Nav Search Icon -->

                                    </button>
                                    <!-- Header Nav Search Button -->

                                    <!-- Header Nav Filter Button -->
                                    <button class="navbar-toggler btn btn-outline-light border-0 p-2" disabled>

                                        <!-- Header Nav Filter Icon -->
                                        <i class="bi bi-funnel-fill fs-2"></i>
                                        <!-- Header Nav Filter Icon -->

                                    </button>
                                    <!-- Header Nav Filter Button -->
                                    
                                </section>
                                <!-- Header Nav Action Buttons (Search, Filter) -->

                                <!-- Header Nav Logo -->
                                <section class="col-md-4 order-1 order-md-2 d-flex justify-content-center align-items-center">

                                    <!-- Header Nav Logo Link -->
                                    <button onclick="location.href='../pages/pokedopt.php'" class="navbar-brand btn btn-outline-light border-0 m-0 p-2 d-flex gap-2" id="header-nav-logo-link">

                                        <!-- Header Nav Logo Icon -->
                                        <img src="../assets/img/icons/pokedopt.ico" alt="PokéDopt Icon" class="img" id="header-nav-logo-icon">
                                        <!-- Header Nav Logo Icon -->

                                        <!-- Header Nav Logo Title -->
                                        <span class="h1 fs-bold m-0 fs-2 lh-1">
                                            PokéDopt
                                        </span>
                                        <!-- Header Nav Logo Title -->
                                        
                                    </button>
                                    <!-- Header Nav Logo Link -->

                                </section>
                                <!-- Header Nav Logo -->
                                
                                <!-- Header Nav Action Buttons (Notif, PokéList, Sign In, Sign Up) -->
                                <section class="col-6 col-md-4 order-3 d-flex justify-content-end align-itmes-center gap-2 gap-md-3 p-2 pe-md-3" id="actionBtns">

                                    <!-- Header Nav Notif Button -->
                                    <button class="navbar-toggler btn btn-outline-light border-0 p-2" disabled>

                                        <!-- Header Notif Button Icon -->
                                        <i class="bi bi-bell-fill fs-2"></i>
                                        <!-- Header Notif Button Icon -->

                                    </button>
                                    <!-- Header Nav Notif Button -->

                                    <!-- Header Nav PokéList Button -->
                                    <button onclick="location.href='#'" class="navbar-toggler btn btn-outline-light p-2 d-none" id="pokelist_btn">

                                        <!-- Header Nav PokéList Title -->
                                        <span class="fw-bold fs-4" id="pokelist">
                                            PokéList
                                        </span>
                                        <!-- Header Nav PokéList Title -->

                                    </button>
                                    <!-- Header Nav PokéList Button -->

                                    <!-- Header Nav Sign In Button -->
                                    <button class="navbar-toggler btn btn-outline-light p-2 d-none d-xl-block" id="signIn_btn" data-bs-toggle="modal" data-bs-target="#sign_in_modal">

                                        <!-- Header Nav Sign In Title -->
                                        <span class="fw-bold fs-4">
                                            Sign In
                                        </span>
                                        <!-- Header Nav Sign In Title -->

                                    </button>
                                    <!-- Header Nav Sign In Button -->

                                    <!-- Header Nav Sign Up Button -->
                                    <button class="navbar-toggler btn btn-outline-light p-2" id="signUp_btn" data-bs-toggle="modal" data-bs-target="#sign_up_modal" autofocus>

                                        <!-- Header Nav Sign Up Title -->
                                        <span class="fw-bold fs-4">
                                            Sign Up
                                        </span>
                                        <!-- Header Nav Sign Up Title -->

                                    </button>
                                    <!-- Header Nav Sign Up Button -->

                                </section>
                                <!-- Header Nav Action Buttons (Notif, PokéList, Sign In, Sign Up) -->

                                <!-- Header Nav Search Bar & Filters -->
                                <section class="collapse navbar-collapse col-12 order-4 mt-3 my-md-2" id="search-filter">

                                    <!-- Neader Nav Search Bar Input Group -->
                                    <section class="input-group">

                                        <!-- Header Nav Search Bar -->
                                        <input type="text" class="form-control nav-itm bg-transparent text-light fs-4" name="search-bar" placeholder="Search..." aria-label="Search Bar" aria-describedby="search-button">
                                        <!-- Header Nav Search Bar -->

                                        <!-- Header Nav Search Button -->
                                        <button class="btn btn-outline-light" id="search-button" type="button" disabled>

                                            <!-- Header Nav Search Button Icon -->
                                            <i class="bi bi-search fs-4"></i>
                                            <!-- Header Nav Search Button Icon -->

                                        </button>
                                        <!-- Header Nav Search Button -->

                                    </section>
                                    <!-- Neader Nav Search Bar Input Group -->

                                </section>
                                <!-- Header Nav Search Bar & Filters -->

                            </div>
                            <!-- Header Nav Row -->

                        </div>
                        <!-- Header Nav Container -->

                    </nav>
                    <!-- Header Nav -->       

<script>
    if (<?php echo !isset($_SESSION['userID']) ? 'true' : 'false' ?>) {
        document.getElementById("pokelist_btn").classList.add('d-none');
        document.getElementById("signIn_btn").classList.add('d-xl-block');
        document.getElementById("signUp_btn").classList.remove('d-none');
    } else {
        document.getElementById("pokelist_btn").classList.remove('d-none');
        document.getElementById("signIn_btn").classList.remove('d-xl-block');
        document.getElementById("signUp_btn").classList.add('d-none');
    }
</script>  