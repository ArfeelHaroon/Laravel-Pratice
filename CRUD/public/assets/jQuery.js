// $(".edit_btn").on("click", function () {
//     var id = $(this).attr("data-id").valueOf();
//     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
//     // console.log(id);
//     $("#Modal").modal("show");
//     $.ajax({
//         type: "get",
//         dataType: "json",
//         url: "'/employees'.'id'.'/edit'",
//         // data: { csrf: CSRF_TOKEN, id: id },
//         success: function (data) {
//             console.log(data);
//             $("input[name='name']").val(data);
//         },
//     });
// });
function deleteEmployee(id) {
    if (confirm("Are you sure you want to delete")) {
        document.getElementById("employee-delete-" + id).submit();
    }
}
