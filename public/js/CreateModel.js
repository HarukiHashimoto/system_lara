var $script     = $('#createModel');
var lmId       = JSON.parse($script.attr('data-lmId'));
var lrId       = JSON.parse($script.attr('data-lrId'));

// データベースからノードとリンクを取得
$.ajax({
    type: "GET",
    url: "/system_lara/public/get/nodenlist/"+lrId+"/"+lmId+"",
}).done(function(model) {
    var model = JSON.parse(model);
console.log(model.node_list);
console.log(model.link_list);
// console.log(model.link_list[1].factor1);
    // create an array with nodes
    var nodes = new vis.DataSet([
    ]);

    for (var i = 0; i < model.node_list.length; i++) {
        var id = model.node_list[i].node_id;
        var label = model.node_list[i].node_name;
        nodes.add([
            {id: id, label: label}
        ]);
    }
    console.log(nodes);


    // create an array with edges
    var edges = new vis.DataSet([
    ]);

 console.log(model.link_list[1].factor1);
    for (var i = 0; i < model.link_list.length; i++) {
        var from = model.link_list[i].factor1;
        var to = model.link_list[i].factor2;
        if (model.link_list[i].effect == 1) {
            color = {color:'blue'};
        } else {
            color = {color:'red'};
        }
        edges.add([
            {from: from, to: to, color: color}
        ]);
    }
    //
    // var group2 = edges.get({
    //     fields: ['id'],
    //     filter: function (item) {
    //         return (item.group == 2);
    //     }
    // });

    // edges.update([
    //     {group2, color:{color:'red'}}
    // ]);
    //

    // create a network
    var container = document.getElementById('mymodel');

    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
        nodes: {color: '#e7e7e7'},
        edges: {arrows: 'to'},
    };

    // initialize your network!
    var network = new vis.Network(container, data, options);



}).fail(function(jqXHR, textStatus, errorThrown) {
   $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
   $("#textStatus").html("textStatus : " + textStatus);
   $("#errorThrown").html("errorThrown : " + errorThrown);
});
