<?php
    $publish_date = get_the_date("Y/m/d l");//日付の表示
    $publish_time = get_the_time();
?>

<div class="date">
    <h5>
        <?php echo $publish_date;?>
        <span>
            <?php echo $publish_time?>
        </span>
    </h5>
</div>