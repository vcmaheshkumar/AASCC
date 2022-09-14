function Export() {
    var conf = confirm("Do you want to Export as CSV file");
    if (conf == true) {
        window.open("inc/export.php", '_blank')
    }
}