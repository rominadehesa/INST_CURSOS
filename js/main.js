"use strict"; 

//instalo el Vue
let app = new Vue({
    el:"#app-comments",
    data: { 
        
        comments:[]
    }
});

let idCurso= document.querySelector("#idcurso").value;
let username= document.querySelector("#username").value;

loadComments(idCurso);

function loadComments(idCurso) {
    
    fetch('api/courses/'+idCurso+'/comments')
    .then(response => response.json())
    .then(comentarios => {
        
        app.comments = comentarios;
        
    });
}
