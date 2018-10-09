<?php include("header.php"); ?>
<div class="container feed">
	<div class="row">
		<div class="col s12 m3 sidebar">
			<h3>Filter</h3>
			<h4>User type</h4>
				<form action="#">
					<p><label>
						<input type="checkbox"/>
						<span>Student</span>
					</label></p>
					<p><label>
						<input type="checkbox"/>
						<span>Alumni</span>
					</label></p>
					<p><label>
						<input type="checkbox"/>
						<span>Professor</span>
					</label></p>
					<p><label>
						<input type="checkbox"/>
						<span>Employer</span>
					</label></p>
			</form>
		</div>
		<div class="col s12 m9">

				<?php 
					if ($_SESSION['isLoggedIn'] == true) {
						// Variable for finding if this is the profile of currently logged on user
					?>
					<div class="card">
						<div class="card-content full-width">
							<div class="card-content-inner">
								<h4>Add Post</h4>
								<form enctype="multipart/form-data"  action='php/add-post.php' method='POST' class='contact-form' id='add-post'>
									<div class="input-field col s12">
										<input id='file' type='file' name='photo' class="file-path validate">
									</div>
									<div class='input-field col s12'>
										<textarea id="comment" name="comment" class="materialize-textarea" required></textarea>
			          		<label for="comment">Comment</label>
									</div>
									<input type='submit' name='add-post' class='btn btn-primary right' value='Submit'>
								</form>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					
				<?php	} 

			include("php/get-posts.php"); ?>
			<!--<div class="row">
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col s3"><a class="active" href="#general">General</a></li>
						<li class="tab col s3"><a href="#connections">Connections</a></li>
						<li class="tab col s3"><a href="#jobs">Jobs</a></li>
						<li class="tab col s3"><a href="#talent">Talent</a></li>
					</ul>
				</div>
				
				<div id="general" class="col s12">
					<div class="row">
						<h3>Post Option 1: Part Width Img</h3>
						<div class="col s12">
							<div class="card">
								<div class="card-content part-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/300/200">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 1 - Part Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content part-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/300/200">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 1 - Part Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content part-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/300/200">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 1 - Part Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content part-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/300/200">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 1 - Part Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content part-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/300/200">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 1 - Part Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="connections" class="col s12">
					<h3>Post Option 2: Full Width Img</h3>
					<div class="row">
						<div class="col s12">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 2 - Full Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 2 - Full Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 2 - Full Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 2 - Full Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 2 - Full Width Img</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="jobs" class="col s12">
					<h3>Post Option 3: Half Width Card</h3>
					<div class="row">
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card">
								<div class="card-content full-width">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>Meta Information</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="card-content-inner">
										<span class="card-title">Post Option 3 - Half Width Card</span>
										<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<form action='' method='POST'>
										<div class="input-field">
											<i class="material-icons prefix">account_circle</i>
											<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
											<label for="comment">Leave Comment</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="talent" class="col s12">
					<h3>Option 4: Only Image</h3>
					<div class="row">
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="card img-only">
								<div class="card-content">
									<div class="card-content-img">
										<img src="https://picsum.photos/700/400">
									</div>
									<div class="clear"></div>
								</div>
								<div class="card-action">
									<ul class="collection">
										<li class="collection-item avatar">
											<i class="material-icons circle">person</i>
											<span class="title">Name</span>
											<p>5 Likes, 9 Comments</p>
											<a href="#!" class="secondary-content "><i class="material-icons grey-text text-lighten-1">more_vert</i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			-->
			</div>
		</div>
	</div>
</div>

<script>
  $(document).ready(function(){
    //$('.tabs').tabs();
  });
</script>
<?php include("footer.php"); ?>