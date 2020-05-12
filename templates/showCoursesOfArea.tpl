<!-- Esta plantilla muestra todos los cursos de una area-->
{include 'head.tpl'}
{$area = $arreglo[0]->area}

<div class= "container">
    <div class="row">
    {foreach $arreglo as $data}

        <div class="col-12">
            <div class="card border-light">
                <div class="card-header bg-dark text-white">{$area}</div>
                    <div class="card-body">
                        <h5 class="card-title">{$data->curso}</h5>
                        <p class="card-text">Duracion: {$data->duracion} meses</p>
                        <a class="btn btn-outline-dark" href="detalles/{$data->id_curso}">Detalles</a>
                        
                    </div>
            </div>
        </div>

    {/foreach}
    </div>
</div>