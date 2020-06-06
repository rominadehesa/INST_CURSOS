<!--Esta plantilla muestra los detalles de un curso seleccionado -->
{include 'head.tpl'}
{include 'nav.tpl'}
<div class= "container">
    <div class="row">
        <div class="col-12"> 

        <ul class="list-group">
        <li id="titulo" class="list-group-item text-white">
         {$detalle->curso}</li>
        <li class="list-group-item list-group-item-light text-dark">
        Area: {$detalle->area}</li>
        <li class="list-group-item list-group-item-light text-dark">
        {$detalle->descripcion}</li>
        <li class="list-group-item list-group-item-ligth">
        Duracion: {$detalle->duracion} meses</li>

        </div>
    </div>
</div>