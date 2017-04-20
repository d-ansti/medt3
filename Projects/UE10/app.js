$(document).ready(function() {

// delete-icon

  $(".delete-icon").click(function() {
    console.log("Löschen?");

    if(confirm("Wollen Sie das Projekt wirklich löschen?")) {
      console.log("Löschen true: " + this.id); // "this" ist das <span>-Element, da an dieses das click-Event gebunden wurde
    }
    else {
      console.log("Löschen false");
    }
  });

// change-icon

  $(".change-icon").click(function() {
    console.log("change");
  });

}); // end document.ready
