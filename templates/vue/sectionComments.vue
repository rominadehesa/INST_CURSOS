{literal}
<section id="app-comments">

      
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0"> Comentarios</h4>
            <span>yula</span>
            
      </li> 
        </div>

  <div class="card" class="col-md-12">
  <ul id= "list-comments"class="list-group list-group-flush">
    <li v-for= "comment in comments" class="list-group-item">
    {{comment.comentario}}
    
    <div id="buttons">
    <button id="btn-sumar">=)</button>
    <span>{{counter}}</span>
    <button id="btn-restar">=(</button>
    </div>
    </li>
  </ul>
</div> 
</section>
{/literal}
