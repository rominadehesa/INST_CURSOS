{include 'head.tpl'}
{include 'nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Editar curso </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <form action="renamecourse" method="post" enctype="multipart/form-data">
            
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
                <div>
                <label>Area:</label>
                <select name="idarea">
                    {foreach $arreglo as $area}
                    <option value="{$area->id_area}">{$area->area}</option>
                    {/foreach}
                </select>
                <div>
                
                {if $curso->imagen}
                   <img src="./{$curso->imagen}" width="304" height="236"/> 
                   <a href="deleteimg/{$curso->id_curso}" class="btn btn-primary">Eliminar imagen</a>
                {/if}
                
               
                <label> Cargar imagen: </label>
                <input type="file" name="input_name" id="imageToUpload">
                </div>
                
                <div>
                <button type="submit" class="btn btn-primary">Agregar</button> 
                <a href="administer" class="btn btn-primary">Cancelar</a></div>
                {if $error}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                    {/if}
            </form>
        </div>
</div>