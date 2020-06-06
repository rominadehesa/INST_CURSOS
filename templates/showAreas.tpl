<!-- Esta plantilla muestra todas las areas-->
{include 'head.tpl'}
{include 'nav.tpl'}
<div class= "container">
     <div class="row">
          <div class="col-12">                
               <ul class="list-group">
                    <li id="titulo" class="list-group-item  text-white">Areas</li>
               <!-- Lista de areas-->
               <ul class="list-group">  
                    {foreach $arreglo as $area}
                                   <li class="list-group-item"> {$area->area}
                                        <a class="btn btn-light text-dark float-right" href="cuoursesbyarea/{$area->id_area}" 
                                        role="button"> Ver cursos </a>
                                   </li>
                    {/foreach}
               </ul>
          </div>
     </div>
</div>