$('.item').on('dragstart', onDragStart);
$('.droparea').on('dragover', onDragOver);
$('.droparea').on('drop', onDrop);

function onDragStart(e) {
  e.originalEvent.dataTransfer.setData('text', this.id);
}

function onDragOver(e) {
  e.preventDefault();
}

function onDrop(e) {
  e.preventDefault();
  var text = e.originalEvent.dataTransfer.getData('text');
  this.textContent = text;
}
