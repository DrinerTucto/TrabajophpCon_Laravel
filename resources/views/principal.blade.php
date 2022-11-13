
<style>
    body{
        margin: 0px;
        padding: 0px;
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
        background-attachment: fixed;
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
    .nave{
        position: absolute;
        display: flex;
        margin-left: 84%;
    }
    .menu{
        text-decoration:none;
        font-size: 20px;
        margin: 20px;
        color: #ffffff;

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
    .nave {
        display: flex;
        justify-content: space-between;
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
    .principal{
        border-radius: 25px;
        background: rgba(216, 212, 212, 0.5);
        margin: 50px;
        display: flex;
        width: 80%;
        height: 260px;
        margin: 0 auto;
        border: 3px solid black;
        justify-content: space-between;

    }
    p{
        text-align: center;
        justify-items: center;
        justify-content: center;
        color: black;
    }
    h2{
        margin-left:10% ;
        text-align: center
    }
    .car{
        width:220px ;
        height: 220px;
        margin-top:20px;
margin-right: -120px;
        border-radius: 50%;
    }
    .derecha{
    }
    .derecha1{
        margin-top:100px

    }
    .p{
        margin-left: 20px;
        width: 700px;
    }


</style>
<div class="nave">
    <a class="menu" href="">Login</a>
    <a class="menu" href="">Registrar</a>

</div>
<div class="a">
    <img class="mundo" src="https://cdn-icons-png.flaticon.com/512/984/984284.png" alt="">
         <h4 class="driner">ViajaConDriner</h4>
</div>


<div class="contenedor">
    <h1 class="titulo">Lugares turisticos que debes conocer</h1>
    <div class="flecha">
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

    <div class="principal">
        <div class="p">
<h2>
    Lago Titicaca
</h2>
<div>
    <p>Desde tiempos inmemorables, esta enorme porción de agua tuvo un impacto místico en la sociedad puneña, ya que el Lago Titicaca es protagonista de dos de las leyendas más proliferadas en esta región sureña peruana. ¿Qué es lo que se comenta sobre este lago? Pues, que aquí se dio origen al mundo. Nada menos. Y también, que emergieron desde las profundidades del Lago Titicaca los dos fundadores del imperio incaico.

    </p>
</div>
</div>
    <div>
        <img class="car" src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2021/05/03/000771292W.jpg">
    </div>
        <div class="derecha">
          <div class= "derecha1">  <img src="https://cdn-icons-png.flaticon.com/512/4574/4574548.png ">
        </div>
    </div>
    </div>
    <br>    <br>    <br>

    <div class="principal">
        <div class="p">
            <h2>
                Cuzco            </h2>
            <div>
                <p>Si se está buscando un lugar que contenga lo más valioso del país a nivel histórico y cultural, el mejor sitio de todos es Cuzco, el cual conserva muchas de las características con las que contaba el país en la época del Imperio Inca en el plano arquitectónico. Hay muchas obras de tipo civil y religioso que dejan ver todas y cada una de las riquezas del periodo colonial.
                </p>
            </div>
        </div>
        <div>
            <img class="car" src="https://redhistoria.com/wp-content/uploads/2014/04/centro-de-cuzco.jpg">
        </div>
        <div class="derecha">
            <div class= "derecha1">  <img src="https://cdn-icons-png.flaticon.com/512/4574/4574548.png ">
            </div>
        </div>
    </div>
    <br>    <br>    <br>


    <div class="principal">
        <div class="p">
            <h2>
                Vinicunca, la montaña de 7 colores

            </h2>
            <div>
                <p>Uno de los rasgos más comunes que comparten las montañas entre sí es que su color predominante siempre será el verde, pero no es eso lo que ocurre con la Montaña Vinicunca. Resulta ser que esta obra de arte de la naturaleza tiene, por lo menos, 7 tonos distintos y resalta entre todas las demás que puedan existir en el Perú y el resto del mundo.
                </p>
            </div>
        </div>
        <div>
            <img class="car" src="https://tse1.mm.bing.net/th?id=OIP.MN0RAvd_vdsv0YwBAUl1KAHaEo&pid=Api&P=0">
        </div>
        <div class="derecha">
            <div class= "derecha1">  <img src=https://cdn-icons-png.flaticon.com/512/4574/4574548.png ">">
            </div>
        </div>
    </div>
</section>

