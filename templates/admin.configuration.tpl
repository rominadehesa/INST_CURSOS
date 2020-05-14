{include 'admin.head.tpl'}
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="p-3 mb-2 bg-dark text-white">Configuracion General </p>
        </div>
        <div class="col-12">

            <p class="p-3 mb-2 bg-dark text-white">
            Administar Areas 
            <a class="btn btn-light" href="formaddarea" role="button">Agregar area</a>
            </p>

            {foreach $arrayareas as $area}
                    <li class="list-group-item">
                        {$area->area}
                        <a class="btn btn-light" href="eliminararea/{$area->id_area}" role="button">Borrar</a>
                        <a class="btn btn-light" href="editararea/{$area->id_area}" role="button">Editar</a>
                    </li>
            {/foreach}
        
        </div>

        <div class="col-12">

            <p class="p-3 mb-2 bg-dark text-white">Administrar Cursos
            <a class="btn btn-light" href="agregarcurso" role="button">Agregar curso</a>
            </p>
            {foreach $arraycursos as $curso}
                    <li class="list-group-item">
                        {$curso->curso}
                        <a class="btn btn-light" href="eliminarcurso/{$curso->id_curso}">Borrar</a>
                        <a class="btn btn-light" href="editarcurso/{$curso->id_curso}">Editar</a>
                    </li>
            {/foreach}
        </div>

    </div>
</div>