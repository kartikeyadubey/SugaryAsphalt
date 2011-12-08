<?php foreach ($query->result() as $row):?>
<div style="border: 5px solid; margin: 20px;">
<center>
<p><?php echo $row->body;?></p>
<p><?php echo $row->author; ?></p>
<center>
</div>
<?php endforeach; ?>
<?php echo anchor('music', 'Back to main page'); ?>
<?php echo form_open('music/comment_insert'); ?>

<?php echo form_hidden('entry_id', $this->uri->segment(3));?>

<p>Body:<br><textarea name="body" rows=6 no-resize></textarea></p>
<p>Author:<br><input type="text" name="author" /></p>
<p><input type="Submit" value="Comment" /></p>
</form>