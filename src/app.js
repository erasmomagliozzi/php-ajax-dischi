const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){
  $.ajax({
    url: "http://localhost/php-ajax-dischi/partials/database.php",
    method: "GET",
    success: function (data, stato) {
     var dischi = data;
     cd(dischi);
    },
     error: function (richiesta, stato, errore) {
     alert("E' avvenuto un errore. " + errore);
    }
  });
});

function cd(cd) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < cd.length; i++) {
    var cds = cd[i];
    console.log(cds);
  var context = {
     title: cds.titolo,
     artista: cds.artista,
     anno: cds.anno,
     img_path: cds.img_path };
  var html = template(context);
  $('.container_cd').append(html);
}
}
