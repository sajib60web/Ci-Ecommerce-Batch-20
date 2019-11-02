<ul class="breadcrumb">
	<li>
		Create Category
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
			<form action="<?php echo base_url();?>store-category" method="post" class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Category Name</label>
						<div class="controls">
							<input class="input-xlarge focused" name="category_name" type="text" value="<?php echo set_value('category_name'); ?>">
							<span class="error_text_massage"><?php echo form_error('category_name'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Category Description</label>
						<div class="controls">
							<textarea class="input-xlarge focused" rows="4" name="category_description"></textarea>
							<span class="error_text_massage"><?php echo form_error('category_description'); ?></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Category Status</label>
						<div class="controls">
							<select name="category_status">
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
