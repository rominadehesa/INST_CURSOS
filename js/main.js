"use strict";

let admin = document.getElementById("admin").value;
//instalo el Vue
let app = new Vue({
    el:"#app-comments",
    data: { 
        promedio:0,
        isadmin: admin,
        comments:[]
    },
    methods: {
        borrar: function (id) {
            deleteComment(id);
        }
    }
});

loadComments(); //al cargar la pagina se muestran todos los comentarios

function loadComments() {
    let id= document.querySelector("#idcurso").value; //recuperamos el id del curso
    fetch('api/courses/'+id+'/comments')
    .then(response => response.json())
    .then(comentarios => {
        app.comments = comentarios; //arreglo de comentarios
        let suma=0;
        let contador=0;
        for (let comentario of comentarios){

            let score= parseInt(comentario.puntuacion);
            suma+=score;
            contador++; 
        }
        let promedio=(suma/contador).toFixed(2);
        app.promedio=promedio;

    })
    .catch(error =>console.log(error));
}

document.querySelector("#form-comentario")
.addEventListener('submit', addComment); //envia el formulario que tiene ese id

//funcion para postearun comentario
function addComment(){
    event.preventDefault(); 
    
    let idCurso= document.querySelector("#idcurso").value;
    
    //recuperamos los valores del formulario
    let comentario = document.getElementById("comentario").value; 
    let puntaje = document.getElementById("puntuacion").value;
    let user =  document.getElementById("username").value;
    let idcurso = idCurso;

    //creamos el objeto
    let info = {
        "comentario": comentario,
        "puntuacion": puntaje,
        "id_usuario_fk": user,
        "id_curso_fk": idcurso
    }
    console.log(info); 

    fetch('api/courses/'+idCurso+'/comment', { 
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(info)
    })
    .then(response => {
        console.log(response);
    })
    .then(function() {
        document.getElementById("comentario").value = " "; 
        loadComments();
    })
    .catch(error =>console.log(error));
}


function deleteComment(id) {
    fetch('api/comments/'+id, { 
        method: 'DELETE',
        headers: {'Content-Type':'application/json'}
    })
    .then(response => {
        console.log(response);
    })
    .then(function() {
        loadComments();
    })
    .catch(error =>console.log(error));
}