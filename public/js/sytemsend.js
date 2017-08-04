$(function() {
    // データベースから教材リストを取得
    $.ajax({
        type: "GET",
        url: "/system_lara/public/read",
    }).done(function(lm_list) {
        var lm_list = JSON.parse(lm_list);
        var target = document.getElementById('lm_title');
        for (var i = 0; i < lm_list.length; i++) {
            target.innerHTML += "<div class='ui card centered'><div class='content'><div class='header'>"+lm_list[i].title+"</div></div><div class='extra content'><a href='main/"+lm_list[i].material_id+"' class='ui button'>READ</a></div></div><br />";
       }
   }).fail(function(jqXHR, textStatus, errorThrown) {
       $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
       $("#textStatus").html("textStatus : " + textStatus);
       $("#errorThrown").html("errorThrown : " + errorThrown);
    });


    return false;


});
