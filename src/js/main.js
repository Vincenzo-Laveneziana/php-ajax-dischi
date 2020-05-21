$(document).ready(function (){
  
  //handlebars
  var source = $("#handlebars-template").html();
  var template = Handlebars.compile(source);

  //referenze
  var albums = $("#albums");

  print(albums, template);
});


function print(albums, template) {
    console.log("chiama api");
    
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
