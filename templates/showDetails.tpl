<!--Esta plantilla muestra los detalles de un curso seleccionado -->
<div class= "container">
    <div class="row">
        <div class="col-12"> 

        <ul class="list-group">
        <li class="list-group-item bg-dark text-white">
        {$a}{$detalle->curso}</li>
        <li class="list-group-item list-group-item-light">
        {$b}{$detalle->area}</li>
        <li class="list-group-item list-group-item-light">
        {$detalle->descripcion}</li>
        <li class="list-group-item list-group-item-ligth">
        {$detalle->duracion}{$c}</li>

        </div>
    </div>
</div>