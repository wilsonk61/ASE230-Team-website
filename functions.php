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
<?php 
function displayWorkExperience($experience) {
?>
<article class="resume-timeline-item position-relative pb-5">
	<div class="resume-timeline-item-header mb-2">
		<div class="d-flex flex-column flex-md-row">
			<h3 class="resume-position-title font-weight-bold mb-1"><?= $experience['position'] ?></h3>
			<div class="resume-company-name ms-auto"><?= $experience['company'] ?></div>
		</div><!--//row-->
		<div class="resume-position-time"><?= $experience['time'] ?></div>
	</div><!--//resume-timeline-item-header-->
	<div class="resume-timeline-item-desc">
		<p><?= $experience['description'] ?></p>
		<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
		<ul>
			<?php foreach ($experience['achievements'] as $achievement): ?>
			<li><?= $achievement ?></li>
			<?php endforeach; ?>
		</ul>
		<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
		<ul class="list-inline">
			<?php foreach ($experience['technologies'] as $tech): ?>
			<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $tech ?></span></li>
			<?php endforeach; ?>
		</ul>
	</div><!--//resume-timeline-item-desc-->
</article><!--//resume-timeline-item-->
<?php } ?>