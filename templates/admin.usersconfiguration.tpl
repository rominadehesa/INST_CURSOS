{include 'head.tpl'}
{include 'nav.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Usuarios Administradores
            <a class="btn btn-dark float-right" href="administer" role="button">Volver</a></p>
        </div>
        <div class="col-12">
            {foreach $usersadmin as $user}
                        <li class="list-group-item">
                        <p>{$user->username}
                        <a class="btn btn-light text-danger float-right" href="deleteuser/{$user->id_usuario}" role="button">Eliminar</a>
                        <a class="btn btn-light text-danger float-right" href="offpermission/{$user->id_usuario}" role="button">Off administrador</a>
                        </p>
                        </li>
            {/foreach}
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Usuarios Logueados</p>
        </div>
        <div class="col-12">
            {foreach $users as $user}
                        <li class="list-group-item">
                        <p>{$user->username}
                        <a class="btn btn-light text-danger float-right" href="deleteuser/{$user->id_usuario}" role="button">Eliminar</a>
                        <a class="btn btn-light text-success float-right" href="onpermission/{$user->id_usuario}" role="button">On administrador</a>
                        </p>
                        </li>
            {/foreach}
        </div>
    </div>
</div>