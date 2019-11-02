<ul class="breadcrumb">
	<li>
		Register Admin
	</li>
</ul>
<div class="row">
	<?php
	if (isset($success_massage)){ ?>
		<div class="alert alert-success" style="margin-left: 30px;">
			<?php echo $success_massage ?>
		</div>
	<?php } ?>
</div>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon plus"></i><span class="break"></span>Form</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url();?>admin-register-info-save" method="post" class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="focusedInput">User Name</label>
						<div class="controls">
							<input class="input-xlarge focused" name="user_name" type="text" value="<?php echo set_value('user_name'); ?>">
							<span class="error_text_massage"><?php echo form_error('user_name'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">User E-mail</label>
						<div class="controls">
							<input class="input-xlarge focused" name="user_email" type="email" value="<?php echo set_value('user_email'); ?>">
							<span class="error_text_massage"><?php echo form_error('user_email'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">User Password</label>
						<div class="controls">
							<input class="input-xlarge focused" name="user_password" type="password">
							<span class="error_text_massage"><?php echo form_error('user_password'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Confirm Password</label>
						<div class="controls">
							<input class="input-xlarge focused" name="confirm_password" type="password">
							<span class="error_text_massage"><?php echo form_error('confirm_password'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">User Role</label>
						<div class="controls">
							<select name="user_role">
								<option value="1">Admin</option>
								<option value="2">User</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">User Status</label>
						<div class="controls">
							<select name="user_status">
								<option value="1">Active</option>
								<option value="0">UnActive</option>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->
