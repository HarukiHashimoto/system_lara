$(function() {
    // データベースから教材リストを取得
    $.ajax({
        type: "GET",
        url: "read",
    }).done(function(lm_list) {
        var lm_list = JSON.parse(lm_list);
        var target = document.getElementById('lm_title');
        for (var i = 0; i < lm_list.length; i++) {
            target.innerHTML += "<div class='ui card centered'><div class='content'><div class='header'>"+lm_list[i].title+"</div></div><div class='extra content'><button type='submit' class='ui button basic lm_btn' value="+lm_list[i].material_id+">READ</button></div></div><br />";
       }

       $('.lm_btn').hover(function() {
           var lm_id = event.srcElement.value;
           console.log(lm_id);
           var form = document.forms.mainForm;
           form.setAttribute("action","main/"+lm_id);
       });

    //    $('.lm_btn').on('click', function() {
    //        var lm_id = event.srcElement.value;
    //        console.log(lm_id);
    //    });

   }).fail(function(jqXHR, textStatus, errorThrown) {
       $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
       $("#textStatus").html("textStatus : " + textStatus);
       $("#errorThrown").html("errorThrown : " + errorThrown);
    });


    return false;


});
