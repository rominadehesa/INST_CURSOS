{literal}
<<<<<<< HEAD

<section id="app-comments">
    <div>
      <h1>Comentarios</h1>
    </div>
    <div>
      <ul>
        <a v-for="comment in comments" class="list-group-item list-group-item-action">
          
          <li>{{comment.comentario}}</li>
        </a>
      </ul>
    </div>

    </div>
</section>

{/literal}
=======
<section id="app-comments">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0"> {{cantidad de comentarios}} Comentarios</h4>
            <span>{{nombre del ususario}}</span>
            
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
>>>>>>> b4774dac009b9509d94c1e432ac2c278d19568f7
