<script>
    $(document).ready(function () {
        $("#TableList ").DataTable();
    });

    function windowUser() {
        var a = window.innerWidth;
        if (a < 992) {
            var show = document.getElementById("user-profil");
            show.style.display = "none";
        }
    }
    windowUser();
</script>
