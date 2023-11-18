<?php
__load_assets__($__assets__, 'js');
?>
</body>
<footer>
    <!-- GLOBAL JS -->
    <script src="<?= base_url() ?>/assets/global/css/global.css"></script>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/assets/assets/node_modules/material-dashboard/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/assets/node_modules/material-dashboard/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/assets/node_modules/material-dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/assets/node_modules/material-dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
</footer>

</html>