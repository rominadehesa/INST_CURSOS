{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">IDC Administrador</a>
                <a class="btn btn-outline-dark" href="logout">Logout</a>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Editar curso </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="renamecourse" method="post">
                <input type="hidden" name="idcurso" value="{$curso->id_curso}">
                <div>
                <label>Nombre del curso: </label>
                <input name="curso" value="{$curso->curso}" type="text">
                </div>

                <div>
                <label>Descripcion</label>
                <input name="descripcion" value="{$curso->descripcion}" type="text">
                </div>
                <div>
                <label>Duracion (meses):</label>
                <input name="duracion" value="{$curso->duracion}" type="number">
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