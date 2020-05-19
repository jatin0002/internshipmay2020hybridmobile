$(document).ready(function () {
  var square;
  var cube;
  //square
  $("#square").click(function () {
    var n = parseInt($("#num").val());
    square = n * n;
    $("#result").val(square);
  });

  //Cube
  $("#cube").click(function () {
    var n = parseInt($("#num").val());
    cube = n * n * n;
    $("#result").val(cube);
  });
});
