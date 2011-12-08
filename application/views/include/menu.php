<div>
<form method="POST" action="">
<table cellspacing= 10 style="width: 100%" id="menu_table">
<tr>
	<td><img src="<?php echo base_url().'/res/images/rock.png';?>" /></td>
	<td><img src="<?php echo base_url().'/res/images/funk.png';?>" /></td>
	<td><img src="<?php echo base_url().'/res/images/electro.png';?>" /></td>
	<td><img src="<?php echo base_url().'/res/images/dubstep.png';?>" /></td>
	<td><img src="<?php echo base_url().'/res/images/house.png';?>" /></td>
	<td><img src="<?php echo base_url().'/res/images/prog.png';?>" /></td>
</tr>
<tr>
<td colspan=2>
<p>Artist: &nbsp&nbsp&nbsp&nbsp&nbsp
<select name="artist">
<option value="null">-- Select Artist --</option>
<?php $result = $this->db->query("SELECT DISTINCT artist FROM entries");
foreach ($result->result() as $row)
	echo '<option value="'.$row->artist.'">'.$row->artist.'</option>';?>
</p>
</td>
<td colspan=2>
<p>Song: &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="song" />
</p>
</td>
<td colspan=2>
<input type="submit" value="Search" />
</td>
</tr>
</table>
</form>
</div>