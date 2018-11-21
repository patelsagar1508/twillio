<?php
function tab($name) {
    global $page_name;
    global $bread_crumbs;    
    $img = '';
    $which = ($name==$page_name) ? 'white' : 'gray';
    $img = "images/tabs/".$name;
    $img2 = $img;
    if ($which == 'gray') { $img.="-gray"; $img2.="-white"; }
    if ($which == 'white') { $img.="-white"; $img2.="-gray"; }
    $img.=".png";
    $img2.=".png";
    echo "<a href=\"vision-".$name.".php\">";
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
     if($page_name == "rental-info")
         {
             $bread_crumbs="Rental Information";
         } 
     else if($page_name == "rental-inventory")
         {
             $bread_crumbs="Rental Inventory";
         }
     else if($page_name == "slip-cover-rental")
         {
             $bread_crumbs="Cushion Rentals";
         }
     else if($page_name == "charger-rentals")
         {
             $bread_crumbs="NEW! Charger Rentals";
         }
     else if($page_name == "event-table")
         {
             $bread_crumbs="NEW! Event Tables";
         }
?>
<h1 class="page_head">Vision Rentals</h1>
<div class="spacer_height10"></div>
<div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="vision-rental-info.php">Vision Rentals</a><span class="breadcrumbs-arrow"></span><?php echo $bread_crumbs ?></div>
<div class="spacer_height10"></div>
<div id="tabpage">
    <div id="tab_main">
        <ul>
            <li class="last"><? tab('rental-info')?></li> 
            <li><? tab('rental-inventory')?></li> 
            <li><? tab('slip-cover-rental')?></li> 
            <li><? tab('charger-rentals')?></li> 
            <li><? tab('event-table')?></li> 
        </ul>
    </div>
    <div id="tab_content"><?=$main_content?></div>
</div><!--end tabpage -->