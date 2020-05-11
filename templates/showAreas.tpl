<ul class="list-group">
        <li class="list-group-item list-group-item-info border border-dark">{$areas}</li>

   <form method="get" action="cursosporarea">
         <ul class="list-group">  
        {foreach $arreglo as $area}
        
        <li class="list-group-item"> {$area->area}
        <a class="btn btn-primary" href="cursosporarea/{$area->id_area}" role="button">{$btn}</a>
        </li>
        
            
            
            
        {/foreach}

   </ul>