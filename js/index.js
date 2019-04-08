$(document).ready(()=>{
    verificaStatus()
    defineData()

})

const verificaStatus = ()=>{
    $.ajax({
        url : 'https://cors-anywhere.herokuapp.com/https://academico.iff.edu.br/',
        method : 'GET',
    }).fail(function(jqXHR, textStatus, errorThrown){
        $("#status").text("offline")
        $("#emoji-status").addClass("em em--1")
    })
    .done(function(data, textStatus, jqXHR){
        console.log(jqXHR.status)
        $("#status").text("online")
        $("#emoji-status").addClass("em em---1")
    })
}

const defineData = ()=>{
    let data = new Date()
    $("#data").text(`${data.getDate()}/${data.getMonth()+1}/${data.getFullYear()}`)
}