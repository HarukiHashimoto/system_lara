var $script     = $('#createModel');
var lmId       = JSON.parse($script.attr('data-lmId'));
var lrId       = JSON.parse($script.attr('data-lrId'));
function getUniqueStr(myStrong){
 var strong = 1000;
 if (myStrong) strong = myStrong;
 return new Date().getTime().toString(16)  + Math.floor(strong*Math.random()).toString(16)
}

// データベースからノードとリンクを取得
$.ajax({
    type: "GET",
    url: "/system_lara/public/get/nodenlist/"+lrId+"/"+lmId+"",
}).done(function(model) {
    var model = JSON.parse(model);

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

    // create an array with edges
    var edges = new vis.DataSet([
    ]);

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
        manipulation: {
          addNode: function (data, callback) {
            // filling in the popup DOM elements
            document.getElementById('node-operation').innerHTML = "Add Node";
            editNode(data, callback);
          },
          editNode: function (data, callback) {
            // filling in the popup DOM elements
            document.getElementById('node-operation').innerHTML = "Edit Node";
            editNode(data, callback);
          },
          addEdge: function (data, callback) {
            if (data.from == data.to) {
              var r = confirm("Do you want to connect the node to itself?");
              if (r != true) {
                callback(null);
                return;
              }
            }
            document.getElementById('edge-operation').innerHTML = "Add Edge";
            editEdgeWithoutDrag(data, callback);
          },
          editEdge: {
            editWithoutDrag: function(data, callback) {
              document.getElementById('edge-operation').innerHTML = "Edit Edge";
              editEdgeWithoutDrag(data,callback);
            }
          }
        }
    };

    // initialize your network!
    var network = new vis.Network(container, data, options);

    function editNode(data, callback) {
      document.getElementById('node-label').value = data.label;
      document.getElementById('node-saveButton').onclick = saveNodeData.bind(this, data, callback);
      document.getElementById('node-cancelButton').onclick = clearNodePopUp.bind();
      document.getElementById('node-popUp').style.display = 'block';
    }

    function clearNodePopUp() {
      document.getElementById('node-saveButton').onclick = null;
      document.getElementById('node-cancelButton').onclick = null;
      document.getElementById('node-popUp').style.display = 'none';
    }

    function cancelNodeEdit(callback) {
      clearNodePopUp();
      callback(null);
    }

    function saveNodeData(data, callback) {
      data.label = document.getElementById('node-label').value;
      clearNodePopUp();
      callback(data);
    }

    function editEdgeWithoutDrag(data, callback) {
      // filling in the popup DOM elements
      var label = document.getElementsByName('pon');
      for (var i = 0; i < label.length; i++) {
          if (label[i].checked) {
              if(label[i].value == 1) {
                  data.color = {color:'blue'};
              } else {
                  data.color = {color:'red'};
              }
          }
      }
      document.getElementById('edge-saveButton').onclick = saveEdgeData.bind(this, data, callback);
      document.getElementById('edge-cancelButton').onclick = cancelEdgeEdit.bind(this,callback);
      document.getElementById('edge-popUp').style.display = 'block';
    }

    function clearEdgePopUp() {
      document.getElementById('edge-saveButton').onclick = null;
      document.getElementById('edge-cancelButton').onclick = null;
      document.getElementById('edge-popUp').style.display = 'none';
    }

    function cancelEdgeEdit(callback) {
      clearEdgePopUp();
      callback(null);
    }

    function saveEdgeData(data, callback) {
      if (typeof data.to === 'object')
        data.to = data.to.id
      if (typeof data.from === 'object')
        data.from = data.from.id
      var label = document.getElementsByName('pon');
      for (var i = 0; i < label.length; i++) {
          if (label[i].checked) {
              if(label[i].value == 1) {
                  data.color = {color:'blue'};
              } else {
                  data.color = {color:'red'};
              }

          }
      }

      clearEdgePopUp();
      callback(data);
    }

    $('#genq_btn').on('click', genQnode);

    function genQnode() {
        console.log(nodes);
        var question = document.getElementsByName('question');
        for (var i = 0; i < question.length; i++) {
            if (question[i].checked) {
                label = question[i].value;
                id = getUniqueStr();
            }
        }
        nodes.add([
            {id: id, label: label, color: 'rgb(245, 167, 255)'}
        ]);
    }


    $('body').on('load', function init() {
      setDefaultLocale();
      draw();
    });


}).fail(function(jqXHR, textStatus, errorThrown) {
   $("#XMLHttpRequest").html("XMLHttpRequest : " + jqXHR.status);
   $("#textStatus").html("textStatus : " + textStatus);
   $("#errorThrown").html("errorThrown : " + errorThrown);
});
