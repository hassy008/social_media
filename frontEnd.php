<?php 
    $all_social=DB::table('social')   
            ->first();
?>


<div class="col-sm-6">
	<div class="social-icons pull-right">
	<ul class="nav navbar-nav">
		<li><a href="{{ $all_social->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<li><a href="{{ $all_social->twitter }}"><i class="fa fa-twitter" target="_blank"></i></a></li>
		<li><a href="{{ $all_social->linkedIn }}"><i class="fa fa-linkedin" target="_blank"></i></a></li>
		<li><a href="{{ $all_social->youtube }}"><i class="fa fa-youtube" target="_blank"></i></a></li>
		<li><a href="{{ $all_social->google_plus }}"><i class="fa fa-google-plus" target="_blank"></i></a></li>
	</ul>
	</div>
</div>
