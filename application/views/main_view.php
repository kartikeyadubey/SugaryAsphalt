
<center>
<table style="width: 90%;">
<tr>
<!-- Space for left hand side sidebar add td tag -->
<td>
<?php 
$i = 0;
foreach ($query->result() as $row):
$i++;
?>
<div id="main_display">
<div id="main_left_top">
<div id="main_right_top">
<div id="main_left_bottom">
<div id="main_right_bottom">
<center>
<table id="main_display_table" cellspacing=10>
<tr>
<td rowspan=2>
<iframe width="356" height="200" src="<?php echo $row->link; ?>" frameborder="0"></iframe>
</td>
<td>
<h3><?php echo anchor('music/comments/'.$row->id, $row->title);?></h3>
</td>
</tr>
<tr>
<td>
Artist: <?php echo $row->artist; ?>
</td>
</tr>
</table>
</center>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; 
if($i == 0){?>
	<img src="<?php echo base_url().'/res/images/404.jpg';?>" />
<?php } ?>
</ol>
</td>

<td style="background: white;">
<iframe src="http://www.facebook.com/plugins/like.php?href=YOUR_URL"
        scrolling="no" frameborder="0"
        style="border:none; width:200px; height:80px"></iframe>
<br>
ad space ad space ad space ad space <br><br>
ad space ad space ad space ad space <br><br>
</td>
</tr>
<tr>
<td colspan=3>
<center>
<p id="paging">
<?php 
if($page_num>1)
	echo '<a href="'.base_url().'index.php/music/index/'.($page_num-1).'"><img src="'.base_url().'/res/images/prev.png'.'" /></a>';
else
	echo '<img src="'.base_url().'/res/images/non_prev.png'.'" />';
	
	
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
if($i != 0)
	echo '<a href="'.base_url().'index.php/music/index/'.($page_num+1).'"><img src="'.base_url().'/res/images/next.png'.'" /></a>';
else
	echo '<img src="'.base_url().'/res/images/non_next.png'.'" />';

?>
</p>
</center>
</td>
</tr>
</table>

</center>
