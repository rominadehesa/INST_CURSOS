<!--Esta plantilla muestra los detalles de un curso seleccionado -->
{include 'head.tpl'}
{include 'nav.tpl'}
<div class= "container">
    <div class="row">
        <div class="col-md-12"> 

        <ul class="list-group">

        

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

        <div class="col-md-12">
            <form method="post" id="form-comentario">
                <input id="idcurso" type="hidden" value={$detalle->id_curso}>
                <input id="username" type="hidden" value={$iduser}>
                <input id="admin" type="hidden" value={$administer}>

                
                {if $session}
                    <span class="badge badge-dark">{$username}</span>  <input id="comentario" type="text" size="30" maxlength="30" placeholder="Deje su comentario">
                    <label>Puntaje</label>
                    <select id="puntuacion">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    
                    <input class="btn btn-link" type="submit" value="Comentar">
                   
                {else}
                <p>Para comentar, debe resgistrarse aqui - 
                <a href="login">Resgistrarme</a></p>
                {/if}
            </form>
        </div>
    </div>
</div>

<script src="js/main.js"></script>