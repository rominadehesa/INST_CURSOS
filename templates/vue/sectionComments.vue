{literal}
<section id="app-comments">


  <div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="mb-0">Comentarios</h4>
        <span>
          Puntuacion actual {{promedio}}
        </span>
    </div>
    
    <div class="card" class="col-md-12">
      <ul id= "list-comments"class="list-group list-group-flush">
        <li v-for= "comment in comments" class="list-group-item">
          {{comment.comentario}}
        </li>
    </div>

    <div class="card" class="col-md-12">
      <form id="form-comentario">
      <input id="comentario" type="text">
      <label>Puntaje</label>
      <select id="puntuacion">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <button id="btn-comentar">Comentar</button>
    </form>
    </div>

  </div> 
</section>
{/literal}
