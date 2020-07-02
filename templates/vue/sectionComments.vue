{literal}
<section id="app-comments">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Comentarios</h4>
            <button class="btn btn-dark">Refresh!</button>
            <span><i class="fa fa-comment"></i> n° de comentarios con un icono</span>
        </div>


        <div class="card" class="col-md-12">
  <ul class="list-group list-group-flush">
    <a v-for= "comments in comment" class="list-group-item">
    {{comentarios.comentario}}
    </a>
  </ul>
</div>
</section>
{/literal}