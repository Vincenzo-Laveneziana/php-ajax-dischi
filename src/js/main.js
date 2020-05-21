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
      filterArtists(albums, template,inputSearch);
     
    }
  })

 
});




function print(albums, template) {
  var settings = {
    url: "partials/script/database.php",
    method: "GET",
  };

  $.ajax(settings)
  .done(dati => {

    dati.forEach(element => {
      
      var context = {
        poster: element.poster,
        title: element.title,
        author: element.author,
        year: element.year
      };

      albums.append(template(context));
    });
  })
  .fail(error => {
    console.log("Si è verificato un errore " + error.status);
  })
}

function filterArtists(albums, template,inputSearch){


  albums.html("");

  
  var settings = {
    url: "partials/script/database.php",
    method: "GET",
  };

  $.ajax(settings)
  .done(dati => {

    $(".noResult").text("Nessun Artista trovato");

    dati.forEach(element => {
      if(inputSearch.val().toLowerCase() === element.author.toLowerCase()){
        
        $(".noResult").text("");
        var context = {
          poster: element.poster,
          title: element.title,
          author: element.author,
          year: element.year
        };
        albums.append(template(context)); 
      } 
    });
  })
  .fail(error => {
    console.log("Si è verificato un errore " + error.status);
  })
  
  
  
}
