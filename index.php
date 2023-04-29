<?php
include 'inc/header.php'
?>

<?php
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!empty($name || $email || $review)) {
        //add form data to database
        $sql_string = "INSERT INTO feedback( name, email, message) VALUES('$name', '$email', '$review')";
        if (mysqli_query($connect, $sql_string)) {
            $alert = '<p style="color: green";>table successfully created</p>';
            header('Location: reviews.php');
        } else {
            $alert = '<p style="color: green";>table not created</p>';
        }
    } else {
        $alert = '<p style="text-align: center; color: red;" >please include at least username or email to upload a feedback.</p>';
    }
}
?>

<div class="container has-text-centered">
    <h1 class="title is-underlined mt-6">Feedback</h1>
    <p class="subtitle mt-1"><sub>please leave your feedback, so we can serve you better</sub></p>
    <p><img src="img/logo.png" alt="logo" width="200px" height="200px" /></p>
</div>
</header>
<?php echo $alert ?? null ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form ml-6 mr-6 p-5">
    <div class="field">
        <label for="name" class="label mt-4">Name</label>
        <p class="control">
            <input type="text" class="input is-small" name="name" placeholder="enter name">

        </p>
        <label for="email" class="label mt-4">Email</label>
        <p class="control">
            <input type="text" class="input is-small" name="email" placeholder="enter email address">
            <sub class="is-small style='color: red' ">please enter a valid email address</sub>
        </p>
        <label for="feedback" class="label mt-4">Feedback</label>
        <p class="control">
            <textarea name="review" class="textarea is-small" placeholder="comment your review here..."></textarea>
        </p>
    </div>
    <button type="submit" class="button is-dark is-fullwidth" name="submit">Send</button>
</form>
<?php include "inc/footer.php";