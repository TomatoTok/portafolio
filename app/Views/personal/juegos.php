<div class="container">
    <div class="row justify-content-center">
        <div class="col-8  text-align-center">
            <div class="info">
                <div id="aclaracion">
                    <h4>Informacion de listado:</h4>
                    <p>Este listado está conformado por juegos que complete, termine su modo historia o pase mas de 50hrs de juego.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container row games">
            <?php 
            foreach($games as $game){
                echo '<hr>';
                echo '<div class="row game">';//init row
                echo '<div class="col-3">';//init col 3
                echo '<div class="picture-container">';
                echo 'FOTO';
                echo '</div>';
                echo '</div>';//end col 3
                echo '<div class="col-9">';//init col 9
                echo '<label>Titulo: '.$game['name'].'</label>';
                echo '<textarea class="form-control" rows="8">'.$game['description'].'</textarea>';
                echo '</div>';//end col 9
            }
            ?>
    </div>
</div>
<style>
    .info {
        padding: 40px 0px;
    }
    #aclaracion {
        background-color: #E8E8E8;
        border-left: 5px solid gray;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
    }   

    .picture-container{
        margin-top:25px;
        height: 100%;
        border: 1px solid gray;
        width: auto;
    }
</style>