<?php
function displayMemberCard($member, $index) { 
?>
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $member["image"]; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $member["name"]; ?></h1>
							    <div class="title mb-3"><?php echo $member["role"]; ?></div>
								<a href="detail.php?id=<?= $index ?> " class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
<?php } ?>