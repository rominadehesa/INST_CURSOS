<!--Esta plantilla muestra todos los cursos-->
<div class= "container">
    <div class="row">
        <div class="col-12">
        </div>
    </div>

    <div class="row">

        {foreach $cursos as $data}

        <div class="col-6">
                <div class="card border-light mb-3">
                    <div class="card-header bg-dark text-white">{$data->area}</div>
                        <div class="card-body">
                        <h5 class="card-title">{$data->curso}</h5>
                        <p class="card-text">{$data->duracion}{$text}</p>
                        
                        <a class="btn btn-outline-dark" href="detalles/{$data->id_curso}">{$btn}</a>
                        
                        </div>
                </div>
        </div>

        {/foreach}
    </div>
</div>