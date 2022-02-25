<div class="container">
        <div class="card" style="margin-top: 20px;">
            <form action="" method="post">
            <div class="card-header">
                <h4>Carga de Juegos:</h4>
            </div>
            <div class="row" style="margin: 20px;">
                <div class="col col-4 form-group">
                    <label for="">Nombre:</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col col-4 form-group">
                    <label for="">Plataformas:</label>
                    <input type="text" name="plataformas[]" class="form-control">
                </div>
                <div class="col col-4 form-group">
                    <label for="">Genero:</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col col-8 form-group">
                    <label for="">Descripcion:</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="4"></textarea>
                </div>
                <div class="col col-4">
                    <label for="">Foto</label>
                    <div class="picture" style="padding:50px; border:1px solid black;"></div>
                </div>
            </form>
        </div>
    </div>
</div>