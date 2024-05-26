<!-- TCSS 445 : Spring 2024 -->
<!-- Script that is run in order to remove/add recipe from user 1's favorites -->
<!-- Chad Oehlschlaeger-Browne-->
<?php
require_once('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }

    // Get the recipe ID from the form submission
    $recipe_id = intval($_POST['favorite']);

    // Check if the recipe is already in user 1's favorites
    $check_sql = "SELECT * FROM favorites WHERE owner_id = 1 AND recipe_id = $recipe_id";
    $check_result = mysqli_query($connection, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // Recipe is already in favorites, so remove it
        $remove_sql = "DELETE FROM favorites WHERE owner_id = 1 AND recipe_id = $recipe_id";
        if (mysqli_query($connection, $remove_sql)) {
            echo "Recipe removed from favorites successfully.";
        } else {
            echo "Error removing recipe from favorites: " . mysqli_error($connection);
        }
    } else {
        // Recipe is not in favorites, so add it
        $add_sql = "INSERT INTO favorites (owner_id, recipe_id) VALUES (1, $recipe_id)";
        if (mysqli_query($connection, $add_sql)) {
            echo "Recipe added to favorites successfully.";
        } else {
            echo "Error adding recipe to favorites: " . mysqli_error($connection);
        }
    }

    // Close the database connection
    mysqli_close($connection);
    header("Location: recipe.php?recipe_id=$recipe_id");
} else {
    // If the form is not submitted via POST, redirect back to the recipe details page
    header("Location: recipe.php?recipe_id=$recipe_id");
    exit;
}
?>