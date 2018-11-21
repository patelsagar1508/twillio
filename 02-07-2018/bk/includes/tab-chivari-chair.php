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
    if($name == 'chair-most-reliable'){
             echo '<a href="wholesale-chiavari-chairs.php">';
    }else if($name == 'chair-colors'){
             echo '<a href="wood-chiavari-chairs.php">';
    }else if($name == 'maintenance'){
             echo '<a href="chiavari-chair-paint.php">';
    }else if($name == 'chair-carts'){
             echo '<a href="chiavari-chair-carts.php">';
    }else if($name == 'international-sales'){
             echo '<a href="chiavari-chairs-wholesale-china.php">';
    }else if($name == 'chair-covers'){
             echo '<a href="chiavari-chair-protective-covers.php">';
    }else if($name == 'barstool'){
             echo '<a href="chiavari-barstools-wholesale.php">';
    }else{
        echo "<a href=\"chivari-".$name.".php\">";    
    }
    
	
	$old_file_name = basename($img);
	$new_file_name = 'chiavari-'.$old_file_name;
	$img = str_replace($old_file_name, $new_file_name, $img);	
	
	$old_file_name2 = basename($img2);
	$new_file_name2 = 'chiavari-'.$old_file_name2;
	$img2 = str_replace($old_file_name2, $new_file_name2, $img2);
	
    echo "<img src=\"".$img."\" alt=\"".str_replace("-"," ",$name)."\" ";
    if ($name!=$page_name) {
        echo "onmouseover=\"this.src='".$img2."'\" onfocus=\"this.src='".$img2."'\" onmouseout=\"this.src='".$img."'\" onblur=\"this.src='".$img."'\"";
        }
    echo " />";
    echo "</a>";
    return 1;
}
?>
<?php
     if($page_name == "chair-carts"){
             $bread_crumbs="Chiavari Chair Carts";
         } 
     else if($page_name == "chair-covers"){
             $bread_crumbs="Chiavari Chair Covers";
         }
		 else if($page_name == "chair-carts"){
             $bread_crumbs="Chiavari Chair Carts";
         }
     else if($page_name == "international-sales"){
             //$bread_crumbs="Chiavari Chairs Direct Container";
             $bread_crumbs="Chiavari Chairs Wholesale China Direct";
         }
     else if($page_name == "barstool"){
             $bread_crumbs="Chiavari Barstools";
         }
     else if($page_name == "chair-colors"){
             //$bread_crumbs="Chair Colors";
             $bread_crumbs="Wood Chiavari Chairs";
         }
     else if($page_name == "chair-most-reliable"){
             //$bread_crumbs="Most Reliable Learn Why!";
             $bread_crumbs="Wholesale Chiavari Chairs";
         }
     else if($page_name == "maintenance"){
             $bread_crumbs="Chiavari Chair Paints";
         }
?>
<?php if($page_name == "chair-most-reliable"){ ?>
<h1 class="page_head">Wholesale Chiavari Chairs</h1>
<?php }
else if($page_name == "chair-colors"){  ?>
<h1 class="page_head">Wood Chiavari Chairs</h1>
<?php } 
else if($page_name == "chair-covers"){  ?>
<h1 class="page_head">Chiavari Chair Protective Covers</h1>
<?php } 
else if($page_name == "international-sales"){  ?>
<h1 class="page_head">Chiavari Chairs Wholesale China Direct</h1>
<?php }
else if($page_name == "chair-carts"){  ?>
<h1 class="page_head">Chiavari Chair Cart Dolly</h1>
<?php } 
else if($page_name == "maintenance"){  ?>
<h1 class="page_head">Chiavari Chair Touchup Paint</h1>
<?php } 
else if($page_name == "barstool"){  ?>
<h1 class="page_head">Chiavari Barstools Wholesale</h1>
<?php } 
else{ ?>
<h1 class="page_head">Chiavari Chairs</h1>
<?php } ?>
<div class="spacer_height10"></div>
    <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="wholesale-chiavari-chairs.php">Chiavari Chairs</a><span class="breadcrumbs-arrow"></span><?php echo $bread_crumbs ?></div>
<div class="spacer_height10"></div>
<div id="tabpage">
    <div id="tab_main">
        <ul>
            <li class="last"><? tab('chair-most-reliable')?></li> 
            <li><? tab('chair-colors')?></li> 
            <li><? tab('barstool')?></li> 
            <li><? tab('chair-covers')?></li> 
            <li><? tab('chair-carts')?></li> 
            <li><? tab('maintenance')?></li>
            <li><? tab('international-sales')?></li>  
        </ul>
    </div>
    <div id="tab_content"><?=$main_content?></div>
</div><!--end tabpage -->