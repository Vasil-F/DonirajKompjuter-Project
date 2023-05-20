let showFilters = document.querySelector("#showFilters");
let filterContainer = document.querySelector("#filterContainer");

showFilters.addEventListener("click", function () {
  filterContainer.classList.toggle("hidden");
  if (showFilters.innerHTML === "Filters") {
    showFilters.innerHTML = "Hide filters";
  } else {
    showFilters.innerHTML = "Filters";
  }
});

$("#filterContainer input[type='checkbox']").on("change", function () {
  var selectedCategories = [];
  $("#filterContainer input[type='checkbox']:checked").each(function () {
    selectedCategories.push($(this).val());
  });
  if (selectedCategories.length > 0) {
    $(".row").hide();
    $.each(selectedCategories, function (index, status) {
      $(".row[data-status='" + status + "']").show();
      $(".row[data-archived='" + status + "']").show();
    });
  } else {
    $(".row").show();
  }
});