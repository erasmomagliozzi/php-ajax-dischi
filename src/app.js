const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){
  $.ajax({
    url: "http://localhost/php-ajax-dischi/partials/database.php",
    method: "GET",
    success: function (data, stato) {
     console.log(data);
    },
     error: function (richiesta, stato, errore) {
     alert("E' avvenuto un errore. " + errore);
    }
  }
);




});
