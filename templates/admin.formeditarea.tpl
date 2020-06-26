{include 'head.tpl'}
{include 'admin.nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Edite una area</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="renamearea" method="POST">
                <div>
                <label>Renombrar area: </label>
                <input name="x" type="text" value="{$arreglo->area}">
                </div>
                <input type="hidden" name="id" value="{$arreglo->id_area}">
                <div>
                <button type="submit" class="btn btn-primary">Editar</button>
                <a href="administer" class="btn btn-primary">Cancelar</a> 
                </div>
                {if $error}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                    {/if}
            </form>
        </div>
    </div>