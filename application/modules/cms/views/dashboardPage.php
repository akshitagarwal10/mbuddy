
<?php
  $headerComponents = array(
                        'css' => array("common/bootstrap.min.css", "style.css")
                      );
  $this->load->view("common/header", $headerComponents);
 ?>


<h2><a href="javascript:void(0)" id='tagButton'><b>Create Tag</b></a></h2>

<div class="modal fade" id="tagModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#tag">Create Tag</a></li>
				</ul>

				<div class="tab-content">
					<div id="tag" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "tagForm", "name" => "tagForm","role"=>"form");
						echo form_open("Tag/success", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tagname">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="tagnameTag" name="tagnameTag" placeholder="Enter Tag Name">
								<div class="alert alert-danger" role="alert" id="tagNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createTagSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="javascript:void(0)" id='artistButton'><b>Add Artist</b></a></h2>

<div class="modal fade" id="artistModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#artist">Add Artist</a></li>
				</ul>

				<div class="tab-content">
					<div id="artist" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "artistForm", "name" => "artistForm","role"=>"form");
						echo form_open("Artist/success", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="artistname">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="artistnameArtist" name="artistnameArtist" placeholder="Enter Artist Name">
								<div class="alert alert-danger" role="alert" id="artistNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createArtistSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="javascript:void(0)" id='singerButton'><b>Add Singer</b></a></h2>

<div class="modal fade" id="singerModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#singer">Add Singer</a></li>
				</ul>

				<div class="tab-content">
					<div id="singer" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "singerForm", "name" => "singerForm","role"=>"form");
						echo form_open("Singer/success", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="singername">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="singernameSinger" name="singernameSinger" placeholder="Enter Singer Name">
								<div class="alert alert-danger" role="alert" id="singerNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createSingerSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="javascript:void(0)" id='writerButton'><b>Add Writer</b></a></h2>

<div class="modal fade" id="writerModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#writer">Add Writer</a></li>
				</ul>

				<div class="tab-content">
					<div id="writer" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "writerForm", "name" => "writerForm","role"=>"form");
						echo form_open("Writer/success", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="writername">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="writernameWriter" name="writernameWriter" placeholder="Enter Writer Name">
								<div class="alert alert-danger" role="alert" id="writerNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createWriterSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="javascript:void(0)" id='composerButton'><b>Add Composer</b></a></h2>

<div class="modal fade" id="composerModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#composer">Add Composer</a></li>
				</ul>

				<div class="tab-content">
					<div id="composer" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "composerForm", "name" => "composerForm","role"=>"form");
						echo form_open("Composer/success", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="composername">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="composernameComposer" name="composernameComposer" placeholder="Enter Composer Name">
								<div class="alert alert-danger" role="alert" id="composerNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createComposerSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="javascript:void(0)" id='producerButton'><b>Add Producer</b></a></h2>

<div class="modal fade" id="producerModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#producer">Add Producer</a></li>
				</ul>

				<div class="tab-content">
					<div id="producer" class="tab-pane fade in active">
						</br>
						<?php
						$attributes = array("class" => "form-horizontal", "id" => "producerForm", "name" => "producerForm","role"=>"form");
						echo form_open("producer/succesPs", $attributes);?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="producername">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="producernameProducer" name="producernameProducer" placeholder="Enter Producer Name">
								<div class="alert alert-danger" role="alert" id="producerNameError" hidden="true"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="createProducerSubmit" type="button" class="btn btn-success">Create</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<h2><a href="http://localhost/mbuddy/index.php/upload/post" id='uploadListingButton'><b>Upload Listing</b></a></h2>

<?php
  $footerComponents = array(
                        'js' => array(
                                  "common/jquery-3.1.1.min.js", 
                                  "cms/cms.js",
                                  "common/header.js", 
                                  "common/bootstrap.min.js", 
                                )
                      );
  $this->load->view("footer", $footerComponents);
 ?>