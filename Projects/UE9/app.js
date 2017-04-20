console.log("Hallo!");

// Example 1

$("#my-div").click(function() {
  console.log("Div");
});

$("#my-icon").click(function() {
  console.log("Icon");
});

// Example 2

$("#text").hide();

$("#open").click(function() {
  $("#text").show(500);
});

$("#close").click(function() {
  $("#text").hide(500);
});

// Example 3

$("#add").click(function() {
  $("#my-table").append("<tr><td>foo</td><td>bar</td></tr>");
});

$("#delete").click(function() {
  $("#my-table tr:last-child").remove();
});
