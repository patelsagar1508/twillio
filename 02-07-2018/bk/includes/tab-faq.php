<?php
function tab($name) {
    global $page_name;
    global $bread_crumbs;    
    $img = '';
    $which = ($name==$page_name) ? 'white' : 'gray';
    $img = "images/tabs/".$name;
    $img2 = $img;
    if ($which == 'gray') { $img.="-button2"; $img2.="-button1"; }
    if ($which == 'white') { $img.="-button1"; $img2.="-button2"; }
    $img.=".png";
    $img2.=".png";
    echo "<a href=\"faq-".$name.".php\">";
	
	$old_file_name = basename($img);
	$new_file_name = 'chiavari-'.$old_file_name;
	$img = str_replace($old_file_name, $new_file_name, $img);	
	
	$old_file_name2 = basename($img2);
	$new_file_name2 = 'chiavari-'.$old_file_name2;
	$img2 = str_replace($old_file_name2, $new_file_name2, $img2);
	
    echo "<img src=\"".$img."\" alt=\"".str_replace("-"," ",$name)."\" ";
    if ($name!=$page_name) {
        echo "onmouseover=\"this.src='".$img2."'\"  onmouseout=\"this.src='".$img."'\"";
    }
    echo " />";
    echo "</a>";
    return 1;
}
?>
<?php
     if($page_name == "chair")
         {
             $bread_crumbs="Chiavari Chairs FAQ's";
         } 
     else if($page_name == "cushion")
         {
             $bread_crumbs="Chiavari Cushions FAQ's";
         }
?>
<h1 class="page_head">Frequently Asked Questions</h1>
<div class="spacer_height10"></div>
<div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="faq-chair.php">About</a><span class="breadcrumbs-arrow"></span><?php echo $bread_crumbs ?></div>
<div class="spacer_height10"></div>
<div id="tabpage">
    <div id="tab_main">
        <ul>
            <li class="last"><? tab('chair')?></li> 
            <li><? tab('cushion')?></li> 
        </ul>
    </div>
    <div id="tab_content"><?=$main_content?></div>
</div><!--end tabpage -->