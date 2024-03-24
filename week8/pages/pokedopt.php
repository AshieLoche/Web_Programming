<?php

    require '../config/db_connect.php';

    session_start();

    $_SESSION['page'] = 'Pokedopt';

    if (isset($_COOKIE['userID'])) {
        $_SESSION['userID'] = $_COOKIE['userID'];
    }

    if (!isset($_SESSION['userID'])) {
        header('Location: ../pages/guest.php');
        exit;
    }

    // Pokemon Table
    {

        // Select Pokemon Data
        $query = 
        "SELECT
            pokemon.id,
            pokemon.name,
            species.species,
            pokemon.description,
            pokemon.img,
            type1.type as type1,
            type2.type as type2,
            pokemon.adoption_time
        FROM
            pokedopt.pokemon as pokemon,
            pokedopt.species as species,
            pokedopt.type as type1,
            pokedopt.type as type2
        WHERE
            pokemon.species_id = species.id AND
            species.type1_id = type1.id AND
            species.type2_id = type2.id";

        // SQL Check
        if (!mysqli_query($conn, $query)) {
            die('Query error: ' . mysqli_error($conn));
        } else {
            // Make Query & Get Result
            $result = mysqli_query($conn, $query);

            // Fetch the Resulting Rows as an Array
            $pokemons = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // Free results From Memory
            mysqli_free_result($result);

        }

    }

    {
        
        $select_query = "SELECT * FROM likes WHERE user_id = {$_SESSION['userID']}";
        
        if (!mysqli_query($conn, $select_query)) {
            die('Query error: ' . mysqli_error($conn));
        } else {
            // Make Query & Get Result
            $result = mysqli_query($conn, $select_query);

            // Fetch the Resulting Rows as an Array
            $likes = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // Free results From Memory
            mysqli_free_result($result);

            mysqli_close($conn);
            
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
                    
                    <!-- Header Nav -->
                    <?php require '../components/headerNav.php' ?>
                    <!-- Header Nav -->

                    <!-- Main -->
                    <main id="main-content" class="bg-secondary">

                        <!-- Main Container -->
                        <div class="container-fluid">
                            
                            <!-- Main Row -->
                            <div class="row gap-5 p-4 py-sm-5 justify-content-center">

                                <?php foreach ($pokemons as $pokemon) { ?>

                                    <?php if (is_null($pokemon['adoption_time'])): ?>

                                        <!-- Pokémon Card -->
                                        <article class="card bg-dark text-light border-dark rounded-5 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-3 p-0 pokemon_card">
                                            
                                            <!-- Pokémon Card Image -->
                                            <img src="<?php echo $pokemon['img']; ?>" alt="<?php echo $pokemon['name']; ?>" class="card-img-top img rounded-top-5 border-bottom border-bottom">
                                            <!-- Pokémon Card Image -->

                                            <!-- Pokémon Card Body -->
                                            <section class="card-body pt-3 px-4 pb-5">
                                                
                                                <!-- Pokémon Card Header Container -->
                                                <div class="border-bottom pb-2 mb-3 container fluid">

                                                    <!-- Pokémon Card Header Row -->
                                                    <div class="row">

                                                        <!-- Pokémon Card Header -->
                                                        <a href="#" class="card-header display-3 col-10 col-lg-9 p-0 text-decoration-none border-0 pokemon_name">
                                                            <?php echo $pokemon['name']; ?>
                                                        </a>
                                                        <!-- Pokémon Card Header -->

                                                        <!-- Pokémon Card Heart Button Span -->
                                                        <span class="col-2 col-lg-3 d-flex justify-content-end align-items-center p-0">
                                                        
                                                            <form action="../components/likeProcess.php" method="POST">
                                                                
                                                                <input type="hidden" name="pokemonID" value="<?php echo $pokemon['id']; ?>">

                                                                <!-- Pokémon Card Heart Button -->

                                                                <button class="btn btn-outline-light border-0 p-0 px-2 heart" type="submit" name="heart" value="heart">
    
                                                                    <!-- Pokémon Card Heart Button Icon -->
                                                                    <i class="card-header p-0 bi 
                                                                    <?php 
                                                                        $likeList = [];
                                                                        foreach ($likes as $like) {
                                                                            if ($like['pokemon_id'] == $pokemon['id']) {
                                                                                array_push($likeList, $like['pokemon_id']);
                                                                                break;
                                                                            }
                                                                        }

                                                                        if (in_array($pokemon['id'], $likeList)) {
                                                                            echo 'bi-suit-heart-fill';
                                                                        } else {
                                                                            echo 'bi-suit-heart';
                                                                        }
                                                                    ?>
                                                                     display-3 border-0"></i>
                                                                    <!-- Pokémon Card Heart Button Icon -->
                                                                    
                                                                </button>
                                                                <!-- Pokémon Card HeartButton -->

                                                            </form>

                                                        </span>
                                                        <!-- Pokémon Card Heart Button Span -->

                                                    </div>
                                                    <!-- Pokémon Card Header Row -->

                                                </div>
                                                <!-- Pokémon Card Header Container -->
                                                
                                                <!-- Pokémon Card Title -->
                                                <section class="card-title display-4 fs-2">
                                                    <?php echo "<span class='species'>{$pokemon['species']}</span> - <span class='display-5 fs-4 types'>{$pokemon['type1']}/{$pokemon['type2']}</span>"; ?>
                                                </section>
                                                <!-- Pokémon Card Title -->
                                                
                                                <!-- Pokémon Card Description -->
                                                <section class="card-text display-5 fs-4 lh-sm">
                                                    <?php echo $pokemon['description']; ?>
                                                </section>
                                                <!-- Pokémon Card Description -->

                                            </section>
                                            <!-- Pokémon Card Body -->

                                        </article>
                                        <!-- Pokémon Card -->

                                    <?php endif ?>

                                <?php } ?>

                            </div>
                            <!-- Main Row -->

                        </div>
                        <!-- Main Container -->

                    </main>
                    <!-- Main -->

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