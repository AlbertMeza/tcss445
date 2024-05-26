<?php require_once('config.php'); ?>
<!-- Name: Tammy Nguyen -->
<!-- TCSS 445 : Autumn 2020 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Private Chef</title>
        <!-- add a reference to the external stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    </head>
    <body>
        <!-- START -- Add HTML code for the top menu section (navigation bar) -->
        <header style = "background-color: #C8A2C8;">
            <div style="align-items: center;">
                <h1 style="text-align: center;padding-top: 20px;">Private Chef</h1>
                <p style="text-align: center; padding-bottom: 20px;">Your go-to place for delicious recipes with detailed nutritional information</p>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" style="color: white;">Home</a>
                            <span class="visually-hidden"></span>
                    </li>
                <li class="nav-item active">
                    <a href="nutritionalFacts.php" class="nav-link" style="color: white;">Nutritional Facts</a>
                </li>
                <li class="nav-item">
                    <a href="search.php" class="nav-link" style="color: white;">Search</a>
                </li>

                </ul>
            </div>
        </div>


    </nav>
        <footer>
            <p style= "background-color: #C8A2C8;
                       position: fixed;  /* Fix the footer to the bottom */
                       bottom: 0;         /* Set the bottom position to 0 */
                       width: 100%;        /* Make the footer full width */
                       text-align: center;
                       width: 100%;
                       "> &copy; 2024 Private Chef. All rights reserved.</p>
        </footer>

<!-- END -- Add HTML code for the top menu section (navigation bar) -->
<div class="jumbotron">
    <p class="lead">Select a Recipe <p>
    <hr class="my-4">
    <form method="GET" action="favorites.php">
        <select name="emp" onchange='this.form.submit()'>
            <option selected>Select a Recipe: </option>
            <?php
            $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
            if ( mysqli_connect_errno() )
            {
                die( mysqli_connect_error() );
            }
            $sql = "SELECT recipe_name FROM recipe";
            if ($result = mysqli_query($connection, $sql))
                {
            // loop through the data
            while($row = mysqli_fetch_assoc($result))
             {
                // Fetch the dropdown menu option that lists all the department names
                echo '<option value="' . $row['recipe_name'] . '">';
                echo $row['recipe_name'];
                echo "</option>";
            }
                // release the memory used by the result set
    mysqli_free_result($result);
}
            ?>
        </select>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET")
        {
            if (isset($_GET['emp']) )
            {
        ?>
        <p>&nbsp;</p>
        <table class="table table-hover">
            <thead>
                <tr class="table-success">
                    <th scope="col">Recipe Name</th>
                    <th scope="col">Calories</th>
                    <th scope="col">Fats</th>
                    <th scope="col">Protiens</th>
                    <th scope="col">Carbs</th>
                </tr>
            </thead>
            <?php
                if ( mysqli_connect_errno() )
                {
                    die( mysqli_connect_error() );
                }
                // Gets all the employee and supervisor information including
                $sql =
                    "SELECT r.recipe_name,n.nutrition_calories,n.nutrition_fats,n.nutrition_protein,n.nutrition_carbs
                    FROM recipe r
                    JOIN  nutrition n ON r.recipe_id = n.recipe_id
                    WHERE r.recipe_name = '{$_GET['emp']}'";


                if ($result = mysqli_query($connection, $sql))
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
            <tr>
                <td><?php echo $row['recipe_name'] ?></td>
                <td><?php echo $row['nutrition_calories'] ?></td>
                <td><?php echo $row['nutrition_fats'] ?></td>
                <td><?php echo $row['nutrition_protein'] ?></td>
                <td><?php echo $row['nutrition_carbs'] ?></td>

            </tr>
            <?php
                    }
                    // release the memory used by the result set
                    mysqli_free_result($result);
                }
            } // end if (isset)
        } // end if ($_SERVER)
            ?>
        </table>
    </form>

</div>

</body>
</html>