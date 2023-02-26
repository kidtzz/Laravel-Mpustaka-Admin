<script>
    $(document).ready(function () {
        $("#TableList ").DataTable({
            responsive: true,
        });
        new $.fn.dataTable.FixedHeader(table);
    });

    function windowUser() {
        var a = window.innerWidth;
        if (a < 992) {
            var show = document.getElementById("user-profil");
            show.style.display = "none";
        }
    }
    windowUser();

    $("#summernote").summernote({
        placeholder: "Deskripsi",
        tabsize: 2,
        height: 300,
    });
</script>
