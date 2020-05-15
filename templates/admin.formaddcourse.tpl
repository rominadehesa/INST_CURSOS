{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Agrege una area </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="agregarcurso" method="post">
                <div>
                <label>Nombre del curso: </label>
                <input name="curso" type="text">
                </div>

                <div>
                <label>Descripcion</label>
                <input name="descripcion" type="text">
                </div>
                <div>
                <label>Duracion (meses):</label>
                <input name="duracion" type="number">
                </div>
                <div>
                <label>Area:</label>
                <input name="id_area" type="number">
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>  
            </form>
        </div>
    </div>
    