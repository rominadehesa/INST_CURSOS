{include 'head.tpl'}
{include 'nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Agrege una area </p>
        </div>
    </div>
    <div class="row">
        
        <div class="col">
            <form action="addarea" method="post">
                
                    <label>Area</label>
                    <input name="x" type="text">
                
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

    
    
