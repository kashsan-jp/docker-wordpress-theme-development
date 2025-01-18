<?php 
    add_action( "wp_body_open", function(){
        ?>
            <script>
                alert("OK")
            </script>
        <?php
    })
?>