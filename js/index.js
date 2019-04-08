$(document).ready(()=>{
    verificaStatus()
    defineData()

})

const verificaStatus = ()=>{
    $.ajax({
        url : 'https://cors-anywhere.herokuapp.com/https://academico.iff.edu.br/',
        method : 'GET',
    }).fail(function(jqXHR, textStatus, errorThrown){
        $
    })
    .done(function(data, textStatus, jqXHR){
        console.log(jqXHR.status)
        
    })
}

const defineData = ()=>{
    let data = new Date()
    $("#data").text(`${data.getDate()}/${data.getMonth()+1}/${data.getFullYear()}`)
}