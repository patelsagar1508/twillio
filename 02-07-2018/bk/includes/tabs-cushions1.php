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
		}else if($name == 'board-cushions'){
            echo '<a href="hard-board-chiavari-cushions.php">';
        }else if($name == 'custom'){
            echo '<a href="custom-chiavari-cushions.php">';
        }else if($name == 'standard-cushions'){
            echo '<a href="chiavari-cushions-wholesale.php">';
        }else if($name == 'slip-covers'){
            echo '<a href="chiavari-cushion-slip-covers.php">';
        }else if($name == 'accessories'){
            echo '<a href="chiavari-cushion-covers.php">';
        }
	else {
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
             $bread_crumbs="Chiavari Classic Cushions";
         }
		  else if($page_name == "nouveau")
         {
             $bread_crumbs="Nouveau Gold Chiavari Cushions";
         }
		 else if($page_name == "nouveau1")
         {
             $bread_crumbs="Ivory Chiavari Cushions Ties";
         }
		 else if($page_name == "nouveau2")
         {
             $bread_crumbs="Ivory Chiavari Cushions Velcro";
         }
		 else if($page_name == "nouveau3")
         {
             $bread_crumbs="White Chiavari Cushions Ties";
         }
		 else if($page_name == "nouveau4")
         {
             $bread_crumbs="White Chiavari Cushions Velcro";
         }
		 else if($page_name == "nouveau5")
         {
             $bread_crumbs="Black Chiavari Cushions Ties";
         }
		 else if($page_name == "nouveau6")
         {
             $bread_crumbs="Black Chiavari Cushions Velcro";
         }
		  else if($page_name == "nouveau7")
         {
             $bread_crumbs="Brown Chiavari Cushions Ties";
         }
		  else if($page_name == "nouveau8")
         {
             $bread_crumbs="Brown Chiavari Cushions Velcro";
         }
		 else if($page_name == "nouveau9")
         {
             $bread_crumbs="Tan Chiavari Cushions";
         }
		 else if($page_name == "nouveau10")
         {
             $bread_crumbs="Taupe Chiavari Cushions";
         }else if($page_name == "nouveau11")
         {
             $bread_crumbs="Hunter Green Chiavari Cushions";
         }else if($page_name == "nouveau12")
         {
             $bread_crumbs="Navy Blue Chiavari Cushions";
         } 
		 else if($page_name == "nouveau13")
         {
             $bread_crumbs="Steel Grey Chiavari Cushions";
         }
		else if($page_name == "nouveau14")
         {
             $bread_crumbs="Navy with White Piping Chiavari Cushions";
         }
else if($page_name == "nouveau15")
         {
             $bread_crumbs="Parisian Gold Chiavari Cushions";
         }
else if($page_name == "nouveau16")
         {
             $bread_crumbs="Parisian Silver Chiavari Cushions";
         }
else if($page_name == "nouveau17")
         {
             $bread_crumbs="Damask Chiavari Cushions";
         }
else if($page_name == "nouveau18")
         {
             $bread_crumbs="Off White Vinyl Chiavari Cushions";
         }
else if($page_name == "nouveau181")
         {
             $bread_crumbs="Sahara Vinyl Chiavari Chair Cushions";
         }
		 else if($page_name == "nouveau182")
         {
             $bread_crumbs="Sahara Vinyl Hard Board Chiavari Chair Cushions";
         }
else if($page_name == "nouveau19")
         {
             $bread_crumbs="Black Vinyl Chiavari Board Cushions";
         }
		else if($page_name == "nouveau20")
         {
             $bread_crumbs="Off White Vinyl Chiavari Board Cushions";
         }		 
     else if($page_name == "board-cushions")
         {
             $bread_crumbs="Chiavari Board Cushions";
         }
	 else if($page_name == "vinyl-cushions")
         {
             $bread_crumbs="Vinyl Cushions";
         }
     else if($page_name == "slip-covers")
         {
             $bread_crumbs="Cushion Slip Covers";
         }
     else if($page_name == "accessories")
         {
             $bread_crumbs="Cushion Accessories";
         }
     else if($page_name == "custom")
         {
             $bread_crumbs="Custom Cushions";
         }
     else if($page_name == "crawler")
         {
             $bread_crumbs="Cushion Crawler";
         }
?>
<?php
	if($page_name == 'vinyl-cushions')
		{
			?><h1 class="page_head">Vinyl Cushions for Chiavari Chairs</h1><?php
		}
		else if($page_name == "nouveau18")
         {
             
         }
		 else if($page_name == "nouveau20")
         {
             
         }
	else {
		?>
		<h1 class="page_head">Chiavari Chair Cushions</h1><?php
	}
?>
<div class="spacer_height10"></div>
<div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="chiavari-cushions-wholesale.php">Chiavari Cushions</a><span class="breadcrumbs-arrow"></span>
<?php if($page_name != "nouveau20")
         { ?>
<a href="https://www.chiavarichairs.com/chiavari-cushions-wholesale.php">Chiavari Classic Cushions</a>
		 <?php } else { ?>
		<a href="https://www.chiavarichairs.com/chiavari-cushions-wholesale.php">Chiavari Vinyl Cushions</a>
		 <?php } ?>
		 <span class="breadcrumbs-arrow"></span><?php echo $bread_crumbs ?></div>
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