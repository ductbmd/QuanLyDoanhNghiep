@extends('layouts.myapp')

@section('content')
		
		<div class="navigation_area">
					<div class="fix navigation">
						<a href="">Home</a> > <a href="">Temple Run 1.62</a>
					</div>
		</div>


		<div class="fix main_content_area">
			<div class="fix centre main_content">
				<div class="fix home_content floatleft">
				
					
					<!--Single page title area-->
					
					<div class="fix single_home_content">
						<div class="fix single_page_feature_img floatleft">
							<img src="images/80x80.jpg"/>
						</div>
						<div class="fix single_page_title_info floatright">
							<div class="fix single_page_title">
								<h1>Temple Run updated 2.6.1</h1>
								<div class="single_stars">
									<a href=""></a>
									<a href=""></a>
									<a href=""></a>
									<a href=""></a>
									<a href=""></a>
								</div>
							</div>
							<div class="fix single_post_meta">
								<p><i class="fa fa-user"></i> Develop by Adam Smith &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"></i> Date:15 - 04 - 2014 &nbsp;&nbsp;&nbsp; <i class="fa fa-file"></i> Size: 48.5MB &nbsp;&nbsp;&nbsp; <i class="fa fa-download"></i> Downloads: 10,000,00k+</p>
							</div>
							<div class="fix single_page_download">
								<div class="fix download_btn floatleft">
									<a href="">Download <i class="fa fa-arrow-down"></i></a>
								</div>
								<div class="fix report floatleft">
									<p id="report_link" style="float:left"><i class="fa fa-bug"></i> Report</p>
									<p id="older_version" style="float:right"><i class="fa fa-undo"></i> Older Versions</p>
								</div>
								<div class="fix social_area floatleft">
									<ul>
									
										<!-- Facebook -->
										<li>
										
											<div class="social">
												<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
											</div>
										
										</li>
										
										<!-- Twitter -->
										<li>
										
											<div class="social">
												<a href="https://twitter.com/share" class="twitter-share-button" data-via="apktuts" data-related="apktuts">Tweet</a>
												<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
											</div>
										
										</li>
										
										<!-- Google -->
										<li>
										
											<div class="social">
												<!-- Place this tag where you want the +1 button to render. -->
												<div class="g-plusone" data-size="medium"></div>

												<!-- Place this tag after the last +1 button tag. -->
												<script type="text/javascript">
												  (function() {
													var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
													po.src = 'https://apis.google.com/js/platform.js';
													var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
												  })();
												</script>
											</div>
											
										</li>
										
										<!-- LinkedIn -->
										<li>
										
											<div class="social">
												<script src="//platform.linkedin.com/in.js" type="text/javascript">
												  lang: en_US
												</script>
												<script type="IN/Share" data-url="techtunes.com.bd" data-counter="right"></script>
											</div>
										
										</li>
										
										<!-- stumbleupon -->
										<li>
										
											<div class="social">
												<!-- Place this tag where you want the su badge to render -->
												<su:badge layout="1"></su:badge>

												<!-- Place this snippet wherever appropriate -->
												<script type="text/javascript">
												  (function() {
													var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
													li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
													var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
												  })();
												</script>

											</div>
										
										</li>
										

										
									</ul>
								</div>
							</div>
							
							<div id="report" style="display:none;">Report apps issue</div>
							<div id="older_versions" style="display:none;">Older Versions</div>
						</div>
					</div>
					
					
					<!--Single page Screenshot area-->
					<div class="fix single_home_content">
						<h2 class="screenshot_title"><i class="fa fa-angle-double-down"></i> Screenshots</h2>
						
							<div id="owl-example" class="owl-carousel">
							
							<div class="fix single_slide floatleft">
								
								<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
								
							</div>
							
							<div class="fix single_slide floatleft">
								<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
							</div>
							
						<div class="fix single_slide floatleft">
							<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
						</div>
						
						<div class="fix single_slide floatleft">
							<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
						</div>
						
						<div class="fix single_slide floatleft">
							<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
						</div>
						
						<div class="fix single_slide floatleft">
							<a class="group1" href="images/500x400.jpg" title="Temple Run"><img src="images/200x280.jpg" alt=""/></a>
						</div>
						
							</div>
						
						
					</div>
					
					<!--Single page Description area-->
					<div class="fix single_home_content">
					
							<!--Horizontal Tab-->
							<div id="horizontalTab">
									<ul>
										<li><a href="#tab-1">Description</a></li>
										<li><a href="#tab-2">Technical</a></li>
										<li><a href="#tab-3">Change Log</a></li>
										<li><a href="#tab-4">Comments <i class="fa fa-comment"></i></a></li>
									</ul>

								<div id="tab-1">
									<div class="description floatleft">
										<img src="images/300x285.jpg"/>
									</div>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu scelerisque eros. Fusce ante orci, hendrerit sit amet metus sit amet, venenatis sodales felis. Morbi vel mi in leo dignissim convallis in a neque. Suspendisse sollicitudin nibh non dapibus condimentum. Etiam sit amet arcu ultricies, porttitor justo eget, scelerisque urna. Praesent non ligula nec ligula euismod condimentum eget sed augue. Ut feugiat, turpis id sollicitudin vestibulum, tellus massa adipiscing nisl, quis cursus nisl arcu vel ipsum.</p>

								</div>
								<div id="tab-2">
									<table>
										<tbody>
											<tr><td>Title</td> <td>:</td> <td>Temple Run</td></tr>
											<tr><td>Filename</td> <td>:</td> <td>templerun.apk</td></tr>
											<tr><td>Filesize</td> <td>:</td> <td>25.5MB</td></tr>
											<tr><td>Requirement</td> <td>:</td> <td>Android Jelly Been</td></tr>
											<tr><td>Language</td> <td>:</td> <td>English</td></tr>
											<tr><td>License</td> <td>:</td> <td>Free</td></tr>
											<tr><td>Added Date</td> <td>:</td> <td>25 - 04 - 2014</td></tr>
											<tr><td>Developer</td> <td>:</td> <td>Gameloft</td></tr>
											<tr><td>Playstore</td> <td>:</td> <td><a href="" target="_blank">www.googleplay.com</a></td></tr>
										</tbody>
									</table>
								</div>
								<div id="tab-3">
									<p>Mauris facilisis elit ut sem eleifend accumsan</p>
									<p>molestie sit amet dolor. Pellentesque dapibus arcu </p>
									<p>eu lorem laoreet, vitae cursus metus mattis. Nullam </p>
									<p>eget porta enim, eu rutrum magna. Duis quis tincidunt</p>
									<p>sem, sit amet faucibus magna. Integer commodo, turpis </p>
									<p>consequat fermentum egestas, leo odio posuere dui, </p>
									<p>elementum placerat eros erat id augue. Nullam at eros </p>
									
								</div>
								
								<div id="tab-4">
									<p>Mauris facilisis elit ut sem eleifend accumsan</p>
									<p>molestie sit amet dolor. Pellentesque dapibus arcu </p>
									<p>eu lorem laoreet, vitae cursus metus mattis. Nullam </p>
									
								</div>

							</div>
					

					</div>					
					
					<!--Single page related area-->
					<div class="fix single_home_content">
						<div class="fix single_home_content_container">
							<h2><i class="fa fa-angle-double-down"></i> Related apps </h2>
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>This is apps title for social apk</h2>

								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>this is apps title</h2>
	
								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>this is apps title</h2>
		
								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>this is apps title</h2>

								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>this is apps title</h2>

								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							
							<div class="fix single_content floatleft">
								<img src="images/ex/apps.jpg"/>
								<h2>this is apps title</h2>

								<div class="home_download">
									<a href="">Download</a>
								</div>
								
								
							</div>
							


						</div>
					</div>
					
					<!-- Add shot
					<div class="fix home_wide_add_area">
						<div class="fix home_wide_add">
							<img src="images/728x90.gif"/>
						</div>
					</div>
					-->
					
					<div class="fix single_home_blog_content">
						<div class="fix single_blog_content_container">
							<h2><i class="fa fa-hand-o-down"></i> APK News <a href="" class="floatright">See all <i class="fa fa-angle-double-right"></i></a></h2>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>

						</div>
					</div>
					
					
				</div> <!-- End home content-->
				<div class="fix home_content_sidebar floatright">
				
					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> Categories</h2>

						<div class="home_sidebar_apps">
							<select>
								<option selected="selected"><a>Select Category</a></option>
								<option><a>Select option</a></option>
								<option><a>Select option</a></option>
								<option><a>Select option</a></option>
								<option><a>Select option</a></option>
								<option><a>Select option</a></option>
							</select>
						</div>

					</div>
				
				
					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> Sidebar Title</h2>

							<div class="home_sidebar_apps">
								<a href=""><img src="images/120x120.gif" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
							</div>
							<div class="home_sidebar_apps">
								<a href=""><img src="images/120x120.gif" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
							</div>
							<div class="home_sidebar_apps">
								<a href=""><img src="images/120x120.gif" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
							</div>
							<div class="home_sidebar_apps">
								<a href=""><img src="images/120x120.gif" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
							</div>


					</div>
					
					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> Top Apps</h2>

							<div class="fix home_sidebar_top_apps">
								<a href=""><img src="images/30x30.jpg" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
								<p><a href="">download</a></p>
							</div>
							<div class="fix home_sidebar_top_apps">
								<a href=""><img src="images/30x30.jpg" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
								<p><a href="">download</a></p>
							</div>
							<div class="fix home_sidebar_top_apps">
								<a href=""><img src="images/30x30.jpg" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
								<p><a href="">download</a></p>
							</div>
							<div class="fix home_sidebar_top_apps">
								<a href=""><img src="images/30x30.jpg" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
								<p><a href="">download</a></p>
							</div>
							<div class="fix home_sidebar_top_apps">
								<a href=""><img src="images/30x30.jpg" alt=""/></a>
								<h3><a href="">Templa run 2.8.1</a></h3>
								<p><a href="">download</a></p>
							</div>


					</div>
					
					
					

				</div> <!-- End home sidebar-->
			</div>
		</div> <!-- End main content-->
		@endsection