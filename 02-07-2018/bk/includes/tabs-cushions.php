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
	if($name == 'vinyl-cushions')
		{
			echo '<a href="vinyl-chiavari-cushions.php">';
		}else if($name == 'standard-cushions'){
                echo '<a href="chiavari-cushions-wholesale.php">';
        }else if($name == 'board-cushions'){
                echo '<a href="hard-board-chiavari-cushions.php">';
        }else if($name == 'board-cushions'){
                echo '<a href="hard-board-chiavari-cushions.php">';
        }else if($name == 'slip-covers'){
                echo '<a href="chiavari-cushion-slip-covers.php">';
        }else if($name == 'accessories'){
                echo '<a href="chiavari-cushion-covers.php">';
        }else if($name == 'custom'){
                echo '<a href="custom-chiavari-cushions.php">';
        }else {
		echo "<a href=\"cushions-".$name.".php\">";
	}
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
     if($page_name == "most-reliable")
         {
             $bread_crumbs="Most Reliable Cushions";
         } 
     else if($page_name == "standard-cushions")
         {
             $bread_crumbs="Commercial Chiavari Cushion Pads";
             //$bread_crumbs="Chiavari Cushions Wholesale";
             //$bread_crumbs="Chiavari Chair Cushions Wholesale";
         }
     else if($page_name == "board-cushions")
         {
             //$bread_crumbs="Chiavari Board Cushions";
             $bread_crumbs="Chiavari Chair Board Cushions ";
         }
		 else if($page_name == "board-cushions1")
         {
             //$bread_crumbs="Chiavari Board Cushions";
             $bread_crumbs="Chiavari Chair Board Cushions ";
         }
	 else if($page_name == "vinyl-cushions")
         {
             //$bread_crumbs="Vinyl Chiavari Chair Cushions";
             $bread_crumbs="Vinyl Cushions for Chiavari Chairs";
         }
     else if($page_name == "slip-covers")
         {
             $bread_crumbs="Chiavari Cushion Slip Covers";
         }
     else if($page_name == "accessories")
         {
             $bread_crumbs="Chiavari Chair Cushion Pads and Covers";
         }
     else if($page_name == "custom")
         {
             $bread_crumbs="Custom Chiavari Chair Cushions";
         }
     else if($page_name == "crawler")
         {
             $bread_crumbs="Chiavari Cushion Crawler";
         }
		 
?>
<?php
	if($page_name == 'vinyl-cushions')
		{
			?><h1 class="page_head">Vinyl Cushions for Chiavari Chairs</h1><?php
		}
		else if($page_name == "board-cushions")
         {
             ?><h1 class="page_head">Chiavari Chair Board Cushions</h1><?php
         }
		else if($page_name == "slip-covers")
         {
             ?><h1 class="page_head">Chiavari Cushion Slip Covers</h1><?php
         }
		 else if($page_name == "accessories")
         {
             ?><h1 class="page_head">Chiavari Cushion Pads + Covers</h1><?php
         }
		 else if($page_name == "standard-cushions")
         {
             ?><!-- <h1 class="page_head">Commercial Chiavari Cushion Pads</h1> -->
             <h1 class="page_head">Chiavari Cushions Wholesale</h1><?php
         }
		 else if($page_name == "crawler")
         {
             ?><h1 class="page_head">Chiavari Cushion Crawler</h1><?php
         }
		 else if($page_name == "barstool")
         {
             ?><h1 class="page_head">Chiavari Barstools Wholesale</h1><?php
         }
	else {
		?><h1 class="page_head">Custom Chiavari Chair Cushions</h1><?php
	}
?>
<div class="spacer_height10"></div>
<div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="chiavari-cushions-wholesale.php">Chiavari Cushions</a><span class="breadcrumbs-arrow"></span><?php echo $bread_crumbs ?></div>
<div class="spacer_height10"></div>
<div id="tabpage">
    <div id="tab_main">
        <ul>
            <li class="last"><? tab('standard-cushions')?></li>
            <li><? tab('board-cushions')?></li> 
            <li><? tab('vinyl-cushions')?></li>
            <li><? tab('slip-covers')?></li> 
            <li><? tab('accessories')?></li> 
            <li><? tab('custom')?></li>
            <li><? tab('crawler')?></li>
        </ul>
    </div>
    <div id="tab_content"><?=$main_content?></div>
</div><!--end tabpage -->