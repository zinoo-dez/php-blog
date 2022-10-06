<?php
include "./partials/header.php";
include "./partials/navbar.php";
?>
<form action="register.php" class="w-50 m-auto my-5 shadow-lg p-4" method="post">
    <h1 class="text-center">Register Form</h1>
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" placeholder="username" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" placeholder="username" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" placeholder="email address" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Password</label>
        <input type="password" placeholder="********" name="pasword" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" name="register" class="btn btn-primary" value="Register">
    </div>
</form>
<?php
include "./partials/footer.php";
?>