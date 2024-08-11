<div class="page-header">
<h1>Hotspot<br><small>Users</small></h1>
<hr>
<p>
<form class="form-horizontal" name="frmtambah" method="post" action="<?php echo $form_action; ?>">
	<div class="form-group">
		<label class="col-md-2 control-label"  for="server">Server</label>
		<div class="col-md-4">
			<select name="server" id="server" class="form-control">								
				<option value="all" <?php if (isset($default['server']) && ($default['server'] == 'all' || $default['server'] == '')) { echo "selected"; } ?>>All</option>
				<option value="hotspot1" <?php if (isset($default['server']) && $default['server'] == 'hotspot1') { echo "selected"; } ?>>hotspot1</option>
			</select>
			<?php echo form_error('server', '<label class="control-label" for="server">', '</label>'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label"  for="txtname">Name</label>
		<div class="col-md-4">
			<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php if (isset($default['name'])) { echo $default['name']; } ?>">
			<?php echo form_error('name', '<label class="control-label" for="name">', '</label>'); ?>	
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label"  for="password">Password</label>
		<div class="col-md-4">
			<input class="form-control" type="text" name="password" id="password" placeholder="Password" value="<?php if (isset($default['password'])) { echo $default['password']; } ?>">
			<?php echo form_error('password', '<label class="control-label" for="password">', '</label>'); ?>	
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label"  for="mac_address">MAC Address</label>
		<div class="col-md-4">
			<input class="form-control" type="text" name="mac_address" id="mac_address" placeholder="MAC Address" value="<?php if (isset($default['mac_address'])) { echo $default['mac_address']; } ?>">
		</div>
	</div>
			
	<div class="form-group">
		<label class="col-md-2 control-label"  for="profile">Profile</label>
		<div class="col-md-4">
			<select name="profile" id="profile" class="form-control">								
				<option value="default" <?php if (isset($default['profile']) && $default['profile'] == 'default') { echo "selected"; } ?>>Default</option>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label"  for="comment">Comment</label>
		<div class="col-md-4">
			<input class="form-control" type="text" name="comment" id="comment" placeholder="Comment" value="<?php if (isset($default['comment'])) { echo $default['comment']; } ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label" for="disabled">Disabled</label>
		<div class="col-md-3">			
			<label class="radio-inline"><input id="disabled" name="disabled" type="radio" value="yes" <?php if (isset($default['disabled']) && $default['disabled'] == 'yes') { echo "checked"; } ?>>Yes </label><label class="radio-inline"><input id="disabled" name="disabled" type="radio" value="no" <?php if (isset($default['disabled']) && $default['disabled'] == 'no') { echo "checked"; } ?>>No</label>
			</label>	
			<?php echo form_error('disabled', '<label class="control-label" for="disabled">', '</label>'); ?>			
		</div>
	</div>	
	
	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<button class="btn btn-primary" type="submit" name="btnsimpan">Simpan</button>
			<a class="btn btn-default" href="<?php echo base_url().'hotspot'; ?>">Batal</a>
		</div>
	</div>
</form>
</p>
</div>