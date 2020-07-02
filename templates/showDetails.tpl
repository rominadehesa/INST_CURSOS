<!--Esta plantilla muestra los detalles de un curso seleccionado -->
{include 'head.tpl'}
{include 'nav.tpl'}
<div class= "container">
    <div class="row">
        <div class="col-md-12"> 

        <ul class="list-group">

        <input id="idcurso" type="hidden" value={$detalle->id_curso}>

        <li id="titulo" class="list-group-item text-white">
         {$detalle->curso}</li>
        
        <li class="list-group-item list-group-item-light text-dark">
        Area: {$detalle->area}</li>
        <li class="list-group-item list-group-item-light text-dark">
        {$detalle->descripcion}</li>
        <li class="list-group-item list-group-item-ligth">
        Duracion: {$detalle->duracion} meses</li>
        
        {if ($detalle->imagen)}
            <li class="list-group-item text-white"> <img src="./{$detalle->imagen}"/>
        {/if}
        </li>
        </div>
        
        <div class="col-md-12"> 
        {include 'vue/sectionComments.vue'}
        </div>
    </div>
</div>
<script src="js/main.js"></script>