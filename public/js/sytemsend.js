$(function() {
    $('#fetch').click(function() {
        $.ajax({
            type: "POST",
            url: "systemsend",
            data: {'action': "action"},
        }).done(function(lm_title) {
            var lm_title = JSON.parse(lm_title);
           alert(lm_title);
           var target = document.getElementById('lm_title');
           for (var i = 0; i < lm_title.length; i++) {
               target.innerHTML += "<p class='centered'><button class='ui sub button' type='submit' name="+lm_title[i]+">"+lm_title[i]+"</button></p><br />";
           }
       }).fail(function(jqXHR, textStatus, errorThrown) {
          $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
          $("#textStatus").html("textStatus : " + textStatus);
          $("#errorThrown").html("errorThrown : " + errorThrown);
      });
    });
    return false;
});
