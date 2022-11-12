
<style>
    body{
        margin: 0px;
        padding: 0px;;
    }
    .contenedor{
        background-image:url("https://wallpaperaccess.com/full/652483.jpg");
        background-position: center center;
        background-size: 100%;
        height: 100%;
        margin: 0px;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mundo{
        margin-left:25px;
        height: 50px;
        width: 50px;
    }
    .a{
        position: absolute;
        display: flex;
    }
    h4{
        font-size: 20px;
        margin: 0 auto;
        justify-content: left;
    }
    .t{
        display: block;
        height: 60px;
        width: 60px;

    }
    .abajo{
        margin-left: 20px;
        width:70px;
        height: 70px;

    }
    .parrafo img{
        margin-right: 20px;
        float: left;
    }
    .titulo{
        color: aliceblue;
        text-align: center;
        justify-items: center;
    }
    p{
        font-size: 20px;
    }
    .parrafo1{
        float: right;
    }
    .cartas{
        background-color: azure;
    }
    .contenedor1{
        width: 90%;
        min-height:100vh;
        max-width: 1200px;
        margin:0 auto;
        overflow: hidden;
    }
    .cartas{
        background-color: rgb(249, 249, 249);
        padding: 40px 0 ;
    }
    .cartas__contenedor1{
        display: grid;
        grid-template-columns: 50px 1fr 50px;
        align-items: center;
        gap:1em;
    }
    .cartas__body{
        grid-column: 2/3;
        grid-row: 1/2;
        opacity: 0;
        pointer-events: none;
        display: grid;
        grid-template-columns: 1fr max-content;
        align-items: center;
    }
    .cartas__body--especial{
        opacity: 1;
        pointer-events: unset;
    }
    .cartas__texto{
        max-width: 600px;
    }
    .cartas__imagen{
        width: 230px;
        height: 230px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto;
    }
    img{
        width: 50px;
        height: 50px;
    }
</style>
<div class="a">
    <img class="mundo" src="https://cdn-icons-png.flaticon.com/512/984/984284.png" alt="">
    <h4 class="driner">ViajaConDriner</h4>
</div>





<div class="contenedor">
    <h1 class="titulo">Lugares turisticos que debes conocer</h1>
    <div class="a">
        <img class="abajo1" src="https://cdn-icons-png.flaticon.com/512/4151/4151471.png "> </a>
    </div>
</div>
<section class="cartas">

    <div class="cartas__contenedor1 contenedor1">
        <img src="https://cdn-icons-png.flaticon.com/512/4151/4151692.png " alt="" id="num2">

        <section class="cartas__body cartas__body--especial" data-id="1">

            <div class="cartas__texto">
                <h2 class="parra">Machu Picchu
                </h2>
                <p class="cartas__reviw">
                    Pocos lugares hay en el Perú que despiertan tanto interés como el espectáculo que representa Machu Picchu para todo el que tenga la fortuna de ir alguna vez en la vida a esta belleza de sitio.
                </p>
            </div>
            <img src="http://3.bp.blogspot.com/-FXY-Crs-esE/Us4pp8XYxLI/AAAAAAAABMc/reE3fx_I7SY/s1600/Machu-Picchu.jpg" alt="" class="cartas__imagen">
            </figure>

        </section>
        <section class="cartas__body" data-id="1">

            <div class="cartas__texto">
                <h2 class="parra">El Lago Titicaca
                </h2>
                <p class="cartas__reviw">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corrupti ullam alias. Nihil eligendi esse, voluptatibus explicabo vel tempora, earum numquam debitis placeat aperiam fugit labore, fugiat facere eaque ullam.
                </p>
            </div>
            <figure class="cartas__picture">
                <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2021/05/03/000771292W.jpg" alt="" class="cartas__imagen">
            </figure>
        </section>
        <section class="cartas__body" data-id="2">

            <div class="cartas__texto">
                <h2 class="parra">Cuzco
                </h2>
                <p class="cartas__reviw">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corrupti ullam alias. Nihil eligendi esse, voluptatibus explicabo vel tempora, earum numquam debitis placeat aperiam fugit labore, fugiat facere eaque ullam.
                </p>
            </div>
            <figure class="cartas__picture">
                <img src="http://www.tresorsdumonde.fr/wp-content/uploads/2015/06/Cuzco1.jpg" alt="" class="cartas__imagen">
            </figure>
        </section>
        <section class="cartas__body" data-id="3">

            <div class="cartas__texto">
                <h2 class="parra">Vinicunca, la montaña de 7 colores
                </h2>
                <p class="cartas__reviw">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corrupti ullam alias. Nihil eligendi esse, voluptatibus explicabo vel tempora, earum numquam debitis placeat aperiam fugit labore, fugiat facere eaque ullam.
                </p>
            </div>
            <figure class="cartas__picture">
                <img src="http://blog.redbus.pe/wp-content/uploads/2018/03/Vinicunca-portada.jpg" alt="" class="cartas__imagen">
            </figure>
        </section><img src="https://cdn-icons-png.flaticon.com/512/4574/4574548.png " alt="" id="num2">

    </div>
</section>
