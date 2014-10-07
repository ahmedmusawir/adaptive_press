<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-9 article-container-fix">

				<div class="articles">
					<article class="clearfix">
						<header>
							<a href="#" class="article-meta-comments">10</a>
							<p class="article-meta-categories">
								<a href="">Category</a>
								<h1>
									This is the Article Title
								</h1>
								<p class="article-meta-extra">September 20th, 2012, by <a href="">Da Moose</a></p>
							</p>
						</header>

						<figure class="article-full-image">
							<!-- <div class="article-full-image"> -->
								<a href=""><img class="img-responsive" src="images/post-large-img.jpg" alt="Preview Image"/></a>
							<!-- </div> -->
						</figure>

						
						<p class="tag-container">Tag: <a href="#">tag 1</a>, <a href="#">tag 2</a></p>

						<!-- end tag container -->

						<div class="post-navigation">

							<p>Page 1 <a href="#">Page 2</a></p>

						</div>
						<!-- end post-navigation -->


					</article>
					<!-- end article tag -->

					<div class="article-author">

						<h5>Article by <a href="#">Da Moose</a></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aliquid libero ratione, voluptatum nam quos eveniet, labore sapiente voluptate soluta alias atque iusto. Provident dolore, tempore voluptas assumenda porro dignissimos.</p>
					
					</div>
					<!-- end article-author -->


				</div>
				<!-- end articles class -->

				<div class="comments-area" id="comments">
							<a href="#respond" class="article-add-comments">10</a>
							<h3>4 comments to this article</h3>
							<ol class="commentslist">
								<li>
									<article>
										<header>
											<h5><a href="#">Da Moose</a></h5>
											<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="#">Reply</a></p>
										</header>

										<figure class="comment-avatar">
											<a href="#"><img class="img-circle" src="http://lorempixel.com/80/80" alt="Avatar" /></a>
										</figure>

										<p class="awaiting-moderation">Your comment is awaiting moderation</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, aliquam, qui? Tempore at aperiam, et, quibusdam vitae ipsam beatae atque delectus rem eaque minima dignissimos architecto repellat, tenetur eos in!</p>

									</article>
								</li>
								<li>
									<article>
										<header>
											<h5><span>ADMIN</span><a href="#">Da Moose</a></h5>
											<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="#">Reply</a></p>
										</header>

										<figure class="comment-avatar">
											<a href="#"><img class="img-circle" src="http://lorempixel.com/80/80" alt="Avatar" /></a>
										</figure>

										<p class="awaiting-moderation">Your comment is awaiting moderation</p>

										<p>This is the actual comment .Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, aliquam, qui? Tempore at aperiam, et, quibusdam vitae ipsam beatae atque delectus rem eaque minima dignissimos architecto repellat, tenetur eos in!</p>

									</article>

									<ol>
										<li>
											<article>
												<header>
													<h5>Da Moose</h5>
													<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="#">Reply</a></p>
												</header>

												<figure class="comment-avatar">
													<a href="#"><img class="img-circle" src="http://lorempixel.com/80/80" alt="Avatar" /></a>
												</figure>


												<p>This is the actual comment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, aliquam, qui? Tempore at aperiam, et, quibusdam vitae ipsam beatae atque delectus rem eaque minima dignissimos architecto repellat, tenetur eos in!</p>

											</article>
										</li>
									</ol>

								</li>
							</ol>

							<div class="comments-nav-section clearfix">

								<p class="pull-left"><a href="#">&larr; Older Comments</a></p>
								<p class="pull-right"><a href="#">Newer Comments &rarr;</a></p>
								
							</div>
							<!-- end comments-nav-section -->

							<div id="respond">
								<h3>Leave a reply</h3>
								<form action="#" method="post" id="comment-form">
									<p>
										<input type="text" name="author" id="author" placeholder="" />
										<label for="author">Name (required)</label>
									</p>
									<p>
										<input type="text" name="email" id="email" placeholder="" />
										<label for="email">Email (required) [ Will not be published ]</label>
									</p>
									<p>
										<input type="text" name="url" id="url" placeholder="" />
										<label for="url">Website</label>
									</p>

									<p>
										<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
									</p>

									<p>
										<input type="submit" name="" value="Submit Comment">
									</p>
								</form>
							</div>

						</div>
						<!-- end comments-area -->
				
			</div>
			<!-- end col-md-9 -->
	

	
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

<?php get_footer(); ?>