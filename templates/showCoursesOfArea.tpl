<!-- Esta plantilla muestra todos los cursos de una area-->
{include 'head.tpl'}
{include 'nav.tpl'}
{$area = $arreglo[0]->area}

<div class= "container">
    <div class="row">
    {foreach $arreglo as $data}

        <div id="curso" class="col-12">
            <div class="card border-light">
                <div id="subtitulo"class="card-header text-white">{$area}</div>
                    <div class="card-body">
                        <h5 class="card-title">{$data->curso}<a class="btn btn-light" href="details/{$data->id_curso}">Detalles</a></h5>
                        <p class="card-text">Duracion: {$data->duracion} meses
                        {if $data->imagen}
                        <img src="./{$data->imagen}" class="float-right" width="200" height="100"/>
                        {/if}</p>
                        
                    </div>
            </div>
        </div>

    {/foreach}
    </div>
</div>