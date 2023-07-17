$(".create_btn").on("click", function () {
    $("#Modal").modal("show");
});
$(".edit_btn").on("click", function () {
    var id = $(this).attr("data-id");
    $.ajax({
        type: "get",
        url: "/customers//edit",
        data: { id: id },
    });
});
