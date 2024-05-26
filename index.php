<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- add a reference to the external stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
        <title>Private Chef</title>
    </head>
    <body>
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
        <div class="container">
            <section id="overview">
                <h2 style = "padding-top: 20px;">Overview</h2>
            <p>Delicious but also come with detailed nutritional information, including calories,
            protein, fats, and carbohydrates. Whether you're looking for a quick weeknight
            dinner or an indulgent dessert, we've got you covered.</p>
        </section>
    <section id="team" class="team">
        <h2>Our Team</h2>
        <p>Meet the people behind Private Chef</p>
        <ul>
            <li><strong>Tammy</strong></li>
            <li><strong>Chad</strong> </li>
        </ul>
    </section>
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions, suggestions, or feedback, feel free to reach out to us:</p>
        <p>Email: <a href="mailto:tammyn1@uw.edu">tammyn1@uw.edu</a></p>
        <p>Email: <a href="mailto:tammyn1@uw.edu">chad1@uw.edu</a></p>
    </section>
</div>
</body>
<footer>
    <p style= "background-color: #C8A2C8;
               position: fixed;  /* Fix the footer to the bottom */
               bottom: 0;         /* Set the bottom position to 0 */
               width: 100%;        /* Make the footer full width */
               text-align: center;
               width: 100%;
               "> &copy; 2024 Private Chef. All rights reserved.</p>
</footer>
</html>
