{literal}
<section id="app-comments">


  <div class="card">

    <div class="card-header d-flex justify-content-between align-items-center" >
      <h5 class="mb-0">{{comments.length}} <img src="https://img.icons8.com/metro/26/000000/topic.png"/></h5>
        <span>
          <h5>{{promedio}} <img src="https://img.icons8.com/color/26/000000/filled-star.png"/></h5>
        </span>
    </div>
    
    <div class="card" class="col-md-12">
      <ul id= "list-comments"class="list-group list-group-flush">
        <li v-for= "comment in comments" class="list-group-item">
       <span class="badge badge-dark">{{comment.username}}</span> - "{{comment.comentario}}" - Puntaje: {{comment.puntuacion}}
        <button class="btn btn-link" v-if="isadmin == 1" v-on:click="borrar(comment.id_comentario)">Borrar</button>
        </li>
    </div>

  </div> 
</section>
{/literal}
