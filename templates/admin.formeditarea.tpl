{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Edite una area</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="renamearea" method="post">
                <div>
                <label>Elija la area que quiere editar</label>
                <select name="idarea">
                    {foreach $array as $area}
                    <option value="{$area->id_area}">{$area->area}</option>
                    {/foreach}
                </select>
                </div>
                <div>
                <label>Renombrar area: </label>
                <input name="area" type="text">
                </div>

                <button type="submit" class="btn btn-primary">Editar</button>  
            </form>
        </div>
    </div>