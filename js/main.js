"use strict"

document.addEventListener('DOMContentLoaded', function () {
// definimos la app Vue
let app = new Vue({
    el:"#app-comments",
    el: "#buttons",
    data: {
        counter:0,
        comments:[
            
        ]
    }
});

loadComments();
let count= document.getElementById("btn-sumar");
if (count){
    count.addEventListener('click', e => app.counter++);
}

let count2= document.getElementById("btn-restar");
if (count2){
    count2.addEventListener('click', e => app.counter--);
}

function loadComments() {
    
    fetch('api/courses/29/comments')
        .then(response => response.json())
        .then(jasonComment => {
          
           app.comments = jasonComment; 
          
        });
}

});
