{literal}
<section id="app-comments">


  <div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="mb-0">Comentarios</h4>
        <span>
          Puntuacion promedio: {{promedio}}
        </span>
    </div>
    
    <div class="card" class="col-md-12">
      <ul id= "list-comments"class="list-group list-group-flush">
        <li v-for= "comment in comments" class="list-group-item">
       <span class="badge badge-dark">Usuario {{comment.username}}</span> - "{{comment.comentario}}" - Puntaje: {{comment.puntuacion}}
        <button class="btn btn-link" v-if="isadmin == 1" v-on:click="borrar(comment.id_comentario)">Borrar</button>
        </li>
    </div>

    

  </div> 
</section>
{/literal}
