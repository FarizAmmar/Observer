// Tombol Export
var a = false;
function btnExport() {
    a = !a;
    if (a) {
        document.getElementById("vExport").style.display = "block";
    } else {
        document.getElementById("vExport").style.display = "none";
    }
}

// Tombol Filter
var b = false;
function btnFilter() {
    b = !b;
    if (b) {
        document.getElementById("vFilter").style.display = "block";
    } else {
        document.getElementById("vFilter").style.display = "none";
    }
}

// Tombol Download
function download() {
    // Choose the element id which you want to export.
    const element = document.getElementById("pSlipGaji");
    element.style.width = "700px";
    element.style.height = "900px";
    const opt = {
        margin: 0.5,
        filename: "Slip Gaji.pdf",
        html2canvas: { scale: 1 },
        jsPDF: {
            unit: "in",
            format: "A4",
            orientation: "portrait",
            precision: "12",
        },
    };

    // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
    html2pdf().set(opt).from("pSlipGaji").save();
}

// Tombol Back
function back() {
    window.history.go(-1);
}