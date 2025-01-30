<?php

//$breadcrumb = array('bk1' => '', 'bk1_url' => '', 'bk2' => 'Users', 'bk2_url' => 'users.php');

?>
<header id="topbar">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-active">
                <a href="<?php echo $breadcrumb['bk2_url']; ?>"><?php echo $breadcrumb['bk2']; ?></a>
            </li>
            <li class="crumb-icon">
                <a href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li class="crumb-link">
                <a href="index.php">Home</a>
            </li>
            <?php if($breadcrumb['bk1'] != "") { ?>
            <li class="crumb-link">
                <a href="<?php echo $breadcrumb['bk1_url']; ?>"><?php echo $breadcrumb['bk1']; ?></a>
            </li>
            <?php } ?>
            <li class="crumb-trail"><?php echo $breadcrumb['bk2']; ?></li>
        </ol>
    </div>
</header>