// Radio Filter
$(document).ready(function () {
    $('input[name="kategori"]').change(function () {
        if ($("#formal").is(":checked")) {
            $("#jenis-kain-formal").removeClass("d-none");
            $("#jenis-kain-kebaya").addClass("d-none");
            $("#jenis-kain-baju-muslim").addClass("d-none");
            $("#jenis-kain-celana").addClass("d-none");
        } else if ($("#kebaya").is(":checked")) {
            $("#jenis-kain-formal").addClass("d-none");
            $("#jenis-kain-kebaya").removeClass("d-none");
            $("#jenis-kain-baju-muslim").addClass("d-none");
            $("#jenis-kain-celana").addClass("d-none");
        } else if ($("#baju-muslim").is(":checked")) {
            $("#jenis-kain-formal").addClass("d-none");
            $("#jenis-kain-kebaya").addClass("d-none");
            $("#jenis-kain-baju-muslim").removeClass("d-none");
            $("#jenis-kain-celana").addClass("d-none");
        } else if ($("#celana").is(":checked")) {
            $("#jenis-kain-formal").addClass("d-none");
            $("#jenis-kain-kebaya").addClass("d-none");
            $("#jenis-kain-baju-muslim").addClass("d-none");
            $("#jenis-kain-celana").removeClass("d-none");
        } else {
            $(
                "#jenis-kain-formal",
                "#jenis-kain-kebaya",
                "#jenis-kain-baju-muslim",
                "#jenis-kain-celana"
            ).addClass("d-none");
        }
    });
});
