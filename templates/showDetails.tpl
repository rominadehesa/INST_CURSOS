<!--Esta plantilla muestra los detalles de un curso seleccionado -->
{include 'head.tpl'}
<div class= "container">
    <div class="row">
        <div class="col-12"> 

        <ul class="list-group">
        <li class="list-group-item bg-dark text-white">
        Curso: {$detalle->curso}</li>
        <li class="list-group-item list-group-item-light text-dark">
        Area: {$detalle->area}</li>
        <li class="list-group-item list-group-item-light text-dark">
        {$detalle->descripcion}</li>
        <li class="list-group-item list-group-item-ligth">
        Duracion: {$detalle->duracion} meses</li>

        </div>
    </div>
</div>