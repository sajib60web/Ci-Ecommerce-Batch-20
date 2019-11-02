<ul class="breadcrumb">
	<li>
		Create Product
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
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Name</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead"  name="product_name"  data-provide="typeahead" data-items="4">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Category Name</label>
						<div class="controls">
							<select name="category_id">
								<option value="1">Active</option>
								<option value="0">UnActive</option>
							</select>
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea1">Product Short Description</label>
						<div class="controls">
							<textarea class="cleditor" id="textarea1" name="product_short_description"></textarea>
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Product Long Description</label>
						<div class="controls">
							<textarea class="cleditor" id="textarea2" name="product_long_description"></textarea>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Product Quality</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead"  name="product_quality"  data-provide="typeahead" data-items="4">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Price</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead"  name="product_price"  data-provide="typeahead" data-items="4">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Product Discount</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead"  name="product_discount"  data-provide="typeahead" data-items="4">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="fileInput">Product Image</label>
						<div class="controls">
							<input class="input-file uniform_on" id="fileInput" type="file" name="product_image">
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->
