<!DOCTYPE html>
<html>
<head>
	<title>Lesson Upload</title>
	<?php include '../includes/styles_js_importer.php'; ?>
	<style type="text/css">
		.btn{
			margin-right:0.5rem;
		}
		.nav a{
			padding-left:  0.8rem;
			padding-right: 0.8rem;
		}
		.hide{
			display: none;
		}
	</style>
</head>
<body class="bg-primary p-4">
	<div class="container shadow-sm p-3 mb-5 bg-white rounded">
		<h1 class="text-center text-primary">UPLOAD LESSON</h1>
		<p class="text-center text-success">Lessons could be uploaded videos , pictures , text and Youtube links.</p>
		<?php
         if (isset($_GET['Error'])) {
         	$Error = $_GET['Error'];
         	?>
               <h4 class="text-center text-danger"><?php echo $Error; ?></h4>
         	<?php
         }
         if (isset($_GET['succes'])) {
         	$succes = $_GET['succes'];
         	?>
               <h4 class="text-center text-success"><?php echo $succes; ?></h4>
         	<?php
         }
		?>
		<div class="row">
			<div class="col-sm-12 p-4">

           <!-- creating ul for tabs -->
         


				<form class="md-form"  action="parent_includes/lesson_upload.inc.php" method="POST" enctype="multipart/form-data">
					
					<h5 class="">Choose Lesson Upload Format</h5>
					<div class="row">
						   <input class="hide" type="text" name="type" id="type" value="IMAGE">
						   <input class="hide" type="text" name="status"  value="UNVIEWED">
						<div class="col-md-12">
									
				            <input class="active btn btn-primary" type="button" onclick="tabs(0);change('IMAGE');"  value="IMAGE">
			       	    	<input class="btn btn-primary" type="button" onclick="tabs(1);change('VIDEO');" value="VIDEO">
			       	    	<input class="btn btn-primary" type="button" onclick="tabs(2);change('TEXT');" value="TEXT">
			       	    	<input class="btn btn-primary" type="button" onclick="tabs(3);change('YOUTUBE');" value="YOUTUBE">    
						</div>
						
					</div><br>
					<div class="row ">
                    
					<div class="col-sm-6 p-4 tab">
					  	<div class="custom-file">
						<label for="image" class="custom-file-label">image Files..</label>
						<input type="file" name="image_file[]" id="image_file" class="custom-file-input" multiple="">
						<small id="video_info" class="form-text text-muted"> choose image files here</small>
						</div>
					</div><br>
					<div class="col-sm-6 p-4 tab">
			            <div class="custom-file">
					    <label class="custom-file-label" for="video_file">video files...</label>
			        	<input type="file" name="video_file[]" id="video_file"  class="custom-file-input"  multiple="">
			        	<small id="video_info" class="form-text text-muted"> choose video files here</small>
			            </div>
					</div>

					<div class="col-sm-12 tab">
					  <div class="form-group">
						<label for="text">Text Format</label>
						<textarea class="form-control" id="text" rows="3" placeholder="Enter Text Here..." name="text"></textarea>
						<small id="text_info" class="form-text text-muted"> write text here</small>
					  </div>
					</div>
					<!--  -->
					<div class="col-sm-12 tab">
					  <div class="form-group">
						<label for="link">Youtube videos</label>
						<input type="text" name="Youtube_link" class="form-control" id="link" placeholder="Enter link">
						<small id="link_info" class="form-text text-muted"> Paste Youtube link here</small>
					  </div>
					</div>
					<div class="col-sm-12 ">
					<div class="form-grop">
						<label for="question_description">Lesson Instructions</label>
						<textarea class="form-control" id="question_description" rows="3" placeholder="Enter Instructions Here..." name="description"></textarea>
						<small id="Instructions_info" class="form-text text-muted">Enter Question Instructions Here</small>
					</div></div><br>
					</div>
					<div class="row">
						<div class="col-sm-12 p-4 ">
							<button type="submit" class="btn btn-primary btn-block" name="submit">Upload Question</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
<!-- <script type="text/javascript" src="jquery-3.4.1.js"></script> -->
<!-- <script type="text/javascript" src="question_upload.js"></script> -->
    <script type="text/javascript">

    // Add the following code if you want the name of the file appear on select

	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});


    // tabs..................

	$(' .row .col-md-12 input').click(function() {
	     $(this).addClass("active").siblings().removeClass("active");
	})

	const tabBtn = document.querySelectorAll(' .col-md-12 input .btn');
	const tab = document.querySelectorAll('.tab');

	function tabs(panelIndex) {
		tab.forEach(function(node) {
			node.style.display = 'none';
		});
		tab[panelIndex].style.display = 'block';
	}
	tabs(0);

// value change
	 function change(count){
    document.getElementById("type").value=count;
    }
    </script>
</body>
</html>