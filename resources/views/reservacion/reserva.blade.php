<style>
   *{
       box-sizing: border-box;

   }
    body{
        background: black;
        color: white;
        padding: 0 1.5em;
    }
    .container{
        max-width: 1170px;
        margin-left: auto;
        margin-right: auto;
        padding: 1.5em;
    }
    logo{
        text-align: center;
        font-size: 3em;
    }
    .container-cont{
        box-shadow:  0 0 20px 0 rgba(255,255,255, .3);

    }
    .container-cont > *{
        padding: 1em;
    }
    .container-from{
        background: #222222;

    }
    .container-from form {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .container-from form .blok{
        grid-column:1 / 3;

    }
    .container-from form p{
        margin: 0;
        padding: 1em;
    }
   .container-from form button,
   .container-from form input,
   .container-from form text{
            width: 100%;
            padding: .7em;
            border: none;
            background:none;
            outline: 0;
       color: white;
       border-bottom: 2px solid red;

        }


    .container-from form button{
        background:red ;
        border:0;
        color: white;

    }
    .container-info h4,
    .container-info li,
    .container-info p{
        text-align: center;
        margin: 0 0 1rem 0;
    }
    .container-info ui{
        list-style: none;
        padding: 0;
    }
    .container-from ui li{
        padding: .3em;
    }
    span{
        color: #e86363;
    }
    /*responce*/
   @media (min-width:700px) {
       body {
           padding: 0 4rem;
       }
       .container-cont{
           display: grid;
           grid-template-columns: 2fr 1fr;
       }
       .container-cont>*{
           padding: 2em;

       }
       .container-info h4,
       .container-info li,
       .container-info p{
           padding:1em;
           text-align: center;


       }
   }



</style>



    <div class="container" >
        <h1 class="logo">Inicia Sesion <span>Aqui</span> </h1>


        <div class="container-cont">
            <div class="container-from">
                <h3>REGISTRARSE AQUI</h3>
                <form action="{{ url('/reservacion') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <p>
                    <label for="Nombre"> Nombre</label>
                    <input type="text" name="Nombre" id="Nombre">
                </p>
                    <p>
                        <label for="Apellidos"> Apellidos</label>
                        <input type="text" name="Apellidos" id="Apellido">
                    </p>
                    <p>
                        <label for="Dni"> Dni</label>
                        <input type="text" name="Dni" id="Dni">
                    </p>
                    <p>
                        <label for="Numero"> Numero</label>
                        <input type="text" name="Numero" id="Numero">
                    </p>
                    <p>
                        <label for="Correo"> Correo</label>
                        <input type="text" name="Correo" id="Correo">
                    </p>
                    <p class="blok">
                        <label for="Foto"> Foto</label>
                        <input type="file" name= "Foto" id= "Foto">
                    </p>
                    <p>
                        <button type="submit" value="enviar">
enviar
                        </button>
                    </p>

                </form>
            </div>
            <div class="container-info">
                <h4>Contactame Aqui </h4>
                <li>git </li>
                <li>938862069</li>
                <li>1304745@senati.pe </li>

                <ui>
<p>
   Mi nombre es Driner Tucto Nieto estare atento a tus consultas Gracias
</p>

                </ui>

            </div>
        </div>

    </div>
