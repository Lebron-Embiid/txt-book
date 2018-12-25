    <?php
    if($_GET['page'] || $_GET['page'] == 0){
        $str1="&page=".$_GET['page'];
        $uri=str_replace($str1,"",$_SERVER['REQUEST_URI']);
        $goto_file = 'http://'.$_SERVER['HTTP_HOST'].$uri.'&page='; 
    }else{
        $goto_file = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&page='; 
    }
    ?>
     <li class="prev"><a href="<?php echo $goto_file.($page - 1); ?>" title="上一页" >PREVIOUS</a></li>

    <?php
    $page_num = 4;
    $page_begin = $page - $page_num;
    $page_end = $page + $page_num;

    if ($page_begin < 1) $page_begin = 1;
    if ($page_end > $total) $page_end = $total;

    if ($page_end - $page_begin < $page_num * 2)
    {
        $page_begin = $page - ($page_num * 2);
        $page_end = $page + ($page_num * 2);
    }

    if ($page_begin < 1) $page_begin = 1;
    if ($page_end > $total) $page_end = $total;
    ?>
    <?php if ($page_begin > 1) { ?>
        <li><a href="<?php echo $goto_file.'1'; ?>">1</a></li>
        <li><a href="javasrcipt:;">...</a></li>
    <?php } ?>


    <?php 
    for ($page_i = $page_begin; $page_i <= $page_end; $page_i++)
    {
        ?>
        <li class="<?php if ($page_i == $page) echo 'active'; else echo ''; ?>"><a href="<?php echo $goto_file.$page_i; ?>"><?php echo $page_i; ?></a></li>
        <?php
    }
    ?>
    <?php if ($page_end < $total) { ?>
        <li><a href="javasrcipt:;">...</a></li>
        <li><a href="<?php echo $goto_file.$total; ?>"><?php echo $total; ?></a></li>
     <?php } ?>
    <li class="next"><a href="<?php echo $goto_file.($page + 1); ?>"  title="下一页">NEXT</a></li>
