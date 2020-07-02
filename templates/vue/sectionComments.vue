{literal}

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