<style>
  .input{
    background: #fd2401;
    opacity: 0.5;
    box-shadow: 0px 0px 5px #101010, inset 0 0px 5px 2px black;
    padding: 5px;
    border-radius: 4px;
    color: #d2c7c7;
    font-weight: bold;
    float: left;
    margin-top:  -2px;
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
background:#F1E108;
-ms-transform: scale(1.0);
transform: scale(1.0);
}

</style>
<div style="background: #06792C; color: white;"><br>
<center><a href="#"><img class="card-img-top grow" width="100" height="100" src="imagenes/edit.png" alt=""></a><br><br></center>
<center><form action="?controller=publication&method=update" method="POST">
    <input type="hidden" name="id" value="<?= $publication->id ?>">
    <label for="title" style="color: white;">Title</label>
    <input type="text" name="title" id="title" required value="  <?= $publication->title ?>"><br>
    <br>
    <label for="description"style="color: white;">Description:</label>
    <input type="text" name="description" id="description" required value="<?= $publication->description ?>"><br>
    <br>
    <label for="imagen"style="color: white;">Imagen:</label>
    <input type="text" name="imagen" id="imagen" required value="<?= $publication->imagen ?>"><br>
    <br>
    <button class="btn btn-outline-success my-2 my-sm-0 grow" type="submit">Register</button><br><br>
</form></center>

</div>