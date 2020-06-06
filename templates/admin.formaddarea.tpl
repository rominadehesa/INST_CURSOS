{include 'head.tpl'}
{include 'admin.nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white"> Agrege una area </p>
            <form action="addarea" method="post">
                <div>
                    <label>Area</label>
                    <input name="x" type="text">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <a href="administer" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>

    
    
