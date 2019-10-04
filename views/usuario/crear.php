<style>
        input{
        border: 1px solid black;
        padding: 10px;
        border-radius: 20px;
        margin-bottom: 20px;
        cursor:pointer;
        }

        input:focus {
        border:3px solid #000;
        background-color:#F0F8FF;
        margin-right:10px;
        }

        input:active {
        border:3px solid #000;
        background-color:#F0F8FF;
        margin-right:10px;
        }

        .grow:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        }

        .growe:hover{
        -webkit-transform: scale(1.0);
        background:#47BBFC;
        -ms-transform: scale(1.0);
        transform: scale(1.0);
        }

}
</style>
<div style="background: #06792C; color: white;"><br>
<center><a href="#"><img class="card-img-top grow" width="100" height="100" src="imagenes/registro.png" alt=""></a><br><br></center>
<center><form action="?controller=usuario&method=store" method="POST" enctype="multipart/form-data" >
    <label for="title"style="color: white;">Title:</label><br><br>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description" style="color: white;">Description:</label><br><br>
    <input type="text" name="description" id="description" required>
    <br>
    <label for="file" style="color: white;">Imagen:</label><br><br>
    <input type="file" name="file" id="file" required>
    <br>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button><br><br>
</form></center>
</div>