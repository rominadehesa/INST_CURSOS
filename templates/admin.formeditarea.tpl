{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Edite una area</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="renamearea" method="POST">
                <label>Renombrar area: </label>
                <input name="x" type="text">
                </div>
                <input type="hidden" name="id" value="{$id}">

                <button type="submit" class="btn btn-primary">Editar</button>  
            </form>
        </div>
    </div>