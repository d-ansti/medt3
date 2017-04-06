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
