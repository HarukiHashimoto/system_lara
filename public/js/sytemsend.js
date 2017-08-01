$(function() {
    $.ajax({
        type: "GET",
        url: "systemsend",
        data: {'action': "action"},
    }).done(function(lm_list) {
        var lm_list = JSON.parse(lm_list);
    //    alert(lm_list.length);
       var target = document.getElementById('lm_title');
       for (var i = 0; i < lm_list.length; i++) {
           target.innerHTML += "<div class='ui card centered'><div class='content'><div class='header'>"+lm_list[i].title+"</div></div><div class='extra content'><div class='ui basic green button'>読む</div></div></div><br />";
       }
   }).fail(function(jqXHR, textStatus, errorThrown) {
      $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
      $("#textStatus").html("textStatus : " + textStatus);
      $("#errorThrown").html("errorThrown : " + errorThrown);
    });
    return false;
});
