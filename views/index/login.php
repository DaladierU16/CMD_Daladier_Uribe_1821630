<style>
 input{
    border: 1px solid black;
    padding: 10px;
    width: 300px;
    border-radius: 20px;
    margin-bottom: 20px;
    cursor:pointer;
    }
.grow:hover
{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
}

.growe:hover
{
-webkit-transform: scale(1.0);
background:#47BBFC;
-ms-transform: scale(1.0);
transform: scale(1.0);
}


</style>
<section class="container">
    <h1>Login</h1>
    <?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
    <form action="?controller=security&method=login" method="POST">
        <section class="form-group">
            <label for="email">Email</label><br><br>
            <input type="email" name="email" id="email" required class="form-control">
        </section>
        <section class="form-group">
            <label for="password">Password</label><br><br>
            <input type="password" name="password" id="password" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>