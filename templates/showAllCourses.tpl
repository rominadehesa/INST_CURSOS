<!--Esta plantilla muestra todos los cursos-->
{include 'head.tpl'}
{include 'nav.tpl'}
<div class= "container">
    <div class="row">
        <div class="col-12">
        </div>
    </div>

    <div class="row">

        {foreach $cursos as $data}

        <div class="col-4">
                <div class="card border-light mb-3">
                    <div id="cursos" class="card-header text-white">{$data->area}</div>
                        <div class="card-body">
                        <h5 class="card-title">{$data->curso}</h5>
                        <p class="card-text">Duracion: {$data->duracion} meses</p>
                        
                        <a class="btn btn-light" href="details/{$data->id_curso}">Detalles</a>
                        
                        </div>
                </div>
        </div>

        {/foreach}
    </div>
</div>