<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<form action="?controller=user&method=delete" method="POST">
    <label for="id">Id</label>
    <input type="text" name="id" id="id" required">
    <br>
    <input type="submit" value="Delete">
</form>