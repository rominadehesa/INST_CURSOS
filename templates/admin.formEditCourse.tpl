{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Editar curso </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="renamecourse" method="post">
                <input type="hidden" name="idcurso" value="{$id}">
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
                <select name="idarea">
                    {foreach $arreglo as $area}
                    <option value="{$area->id_area}">{$area->area}</option>
                    {/foreach}
                </select> 
                <button type="submit" class="btn btn-primary">Agregar</button>  
            </form>
        </div>
</div>