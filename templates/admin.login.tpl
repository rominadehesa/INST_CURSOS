{include 'head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">Administrador</a>
                <a class="btn btn-dark" href="home">Volver</a>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
        <p class="text-center bg-danger text-white">Debe loguearse</p>
        <form method="POST" action="verify">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

             {if $error}
        <div class="alert alert-danger">
            {$error}
        </div>
        {/if}
        <button type="submit" class="btn btn-dark">Ingresar</button>
        </form> 
        </div>
    </div>
</div>