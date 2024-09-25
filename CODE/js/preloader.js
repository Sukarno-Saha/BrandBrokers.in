
$(window).on("load", function () {
  console.log("Loader is active"); // Log when loader starts

  // Simulate a delay of 2 seconds for testing
  setTimeout(function () {
    $(".loader_bg").fadeOut(function () {
      console.log("Loader is hidden"); // Log when loader fades out
    });
  }); // Adjust this delay to see the loader
});
