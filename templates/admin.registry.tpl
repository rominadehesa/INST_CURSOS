{include 'head.tpl'}
{include 'nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-center bg-danger text-white">Registrarse aqui!</p>
            <form  action="newuser" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                {if $error}
                    <div class="alert alert-danger">
                        {$error}
                    </div>
                {/if}

                <button type="submit" class="btn btn-dark">Ok</button>
            </form> 
        </div>
    </div>
</div>