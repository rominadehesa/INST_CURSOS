"use strict" 
let app = new Vue({
    el: "#app-comments", //elemento con id de la section
    data: {
        comments: []
    },
}); 


showComments();

function showComments() {
    fetch('api/courses/:ID/comments')
        .then(response => response.json())
        .then(comentarios => {
           // asigno los comentarios que me devuelve la API
           app.comments = comentarios; 
        });
}


