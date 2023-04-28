<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1 class="navbar-item">
                <a class="subtitle is-bold">Traversy Media</a>
            </h1>
            <!-- <a class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a> -->
        </div>
        <div class="navbar-menu is-active">
            <div class="navbar-start">
                <a href="index.php" class="navbar-item">Home</a>
                <a href="feedback.php" class="navbar-item">Reviews</a>
                <a href="about_us.php" class="navbar-item">About us</a>
            </div>
        </div>

    </nav>
    <article>
        <header class="header has-text-centered mt-6">
            <img src="" alt="logo" class="image" />
            <h1 class="title is-underlined">Feedback</h1>
            <span class="subtitle is-capitalized">leave feedback for Traversy Media</span>
        </header>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form m-6 p-5">
            <div class="field">
                <label for="name" class="label mt-4">Name</label>
                <p class="control">
                    <input type="text" class="input is-small" name="name">
                </p>
                <label for="email" class="label mt-4">Email</label>
                <p class="control">
                    <input type="text" class="input is-small" name="email">
                </p>
                <label for="feedback" class="label mt-4">Feedback</label>
                <p class="control">
                    <textarea name="feedback" class="textarea is-small"></textarea>
                </p>
            </div>
            <button class="button is-dark is-fullwidth">Send</button>
        </form>
    </article>
</body>
<footer class="footer">
    <p class="content has-text-centered">Copyright @ 2022</p>
</footer>

</html>