<?php require 'includes/topnav.php';
if ($_SESSION['user_type'] === "normal" ) {
    redirect("user.php");
}
?>

<main class="wrapper">
    <!-- Right side navigation -->
    <?php require 'includes/sidenav.php'?>
    <!--  End of Right side navigation -->

    <div class="content container-fluid">
        <!-- Admin DashBoad -->
       <p>sent</p>
    </div>
</main>







<script src="js/lib/jquery-3.2.1.min.js"> </script>
<script src="js/lib/popper.min.js">
</script>
<script src="js/lib/bootstrap.min.js"> </script>
<script src="js/lib/admin.js"> </script> <!-- Side Navigation Scripts -->
<script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        document.querySelector('.content').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');

        })
        document.querySelector('.navbar-nav').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');

        })



    </script>





    </body>

    </html>