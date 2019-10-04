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
<center><form action="?controller=user&method=update" method="POST">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <label for="name"style="color: white;">Name:</label>
    <input type="text" name="name" id="name" class="growe" required value="<?= $user->name ?>">
    <br><br>
    <label for="email"style="color: white;">Email:</label>
    <input type="email"class="growe" name="email" id="email" required value="<?= $user->email ?>"><br><br>
    <br>
    <button class="btn btn-outline-success my-2 my-sm-0 grow" type="submit">Edit</button><br><br>
    
</form></center>
</div>