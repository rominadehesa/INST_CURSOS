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
            <p class="p-3 mb-2 bg-dark text-white"> Agrege una area </p>
            <form action="addarea" method="post">
                <label>Area</label>
                <input name="x" type="text">
                <button type="submit" class="btn btn-primary">Agregar</button>  
            </form>
        </div>

    
    
