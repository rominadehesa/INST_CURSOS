{include 'head.tpl'}
{include 'nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Agrege un curso </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="addcourse" method="post" enctype="multipart/form-data">
                <div>
                <label>Nombre del curso: </label>
                <input name="curso" type="text" >
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
                <select name="id_area">
                    {foreach $areas as $area}
                    <option value="{$area->id_area}">{$area->area}</option>
                    {/foreach}
                </select>   
                </div>
                <div>
                    <label>Imagen: </label>
                    <input type="file" name="input_name" id="imageToUpload">
                 </div>

                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="administer" class="btn btn-primary">Cancelar</a>  
                
                {if $error}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                    {/if}
            </form>
        </div>
    </div>
    