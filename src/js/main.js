$(document).ready(function (){
  
  //handlebars
  var source = $("#handlebars-template").html();
  var template = Handlebars.compile(source);

  //referenze
  var albums = $("#albums");
  var inputSearch = $("#search");

  print(albums, template);

  //alla pressione del tasto invio nella search
  inputSearch.keyup(event=>{
    if(event.which === 13){
      print(albums, template, inputSearch, "filter");
    }
  })

 
});//fine doc ready


function print(albums, template,inputSearch,type) {
  
  var settings = {
    url: "partials/script/database.php",
    method: "GET",
  };
  
  $.ajax(settings)
  .done(dati => {

    dati.forEach(element => {
      context(element,template,albums);
    });
    
    if(type == "filter"){
      albums.html("");
      $(".noResult").text("Nessun Artista trovato");

      dati.forEach(element => {

        if(inputSearch.val().toLowerCase() === element.author.toLowerCase()){
          $(".noResult").text("");
          context(element,template,albums);
        }else if(inputSearch.val().toLowerCase() == ""){
          $(".noResult").text("");
          context(element,template,albums);
        }
        
      });//fine dati.foreach
    }//fine if filter
  })//fine .done
  .fail(error => {
    console.log("Si è verificato un errore " + error.status);
  })
}


function context(element,template,albums){
  var context = {
    poster: element.poster,
    title: element.title,
    author: element.author,
    year: element.year
  };
  albums.append(template(context));
}

