<div class="services section">
	<div class="container">
		<div class="columns">
			<div class="column is-one-half-tablet is-two-thirds-desktop">
				<div class="tarzan_services">
					<h2 class="title tarzan__motto is-3" style="width:100%">
						Our Services
					</h2>
					<div>
					<p class="lead">Tarzan offers multiple services, from logistics and transport, to warehousing and trade. Find out more: </p>
					</div>
					<div class="tarzan_service__tile has_right_margin has_bottom_margin" style="background-image:url('{{asset('img/haulage-and-fleet.jpg')}}')">
						<a href="/services/haulage">
							<h3 class="tarzan_service__headline">
								Haulage &amp; Fleet
							</h3>
						</a>
					</div>

					<div class="tarzan_service__tile has_bottom_margin" style="background-image:url('{{asset('img/warehouses.jpg')}}')">
						<a href="/services/warehousing">
							<h3 class="tarzan_service__headline">
								Warehousing
							</h3>
						</a>
					</div>
					
					<div class="tarzan_service__tile has_right_margin" style="background-image:url('{{asset('img/container.jpg')}}')">
						<a href="/services/container">
							<h3 class="tarzan_service__headline">
								Container Depot
							</h3>
						</a>
					</div>
					<div class="tarzan_service__tile" style="background-image:url('{{asset('img/store.jpg')}}')">
						<a href="/services/stores">
							<h3 class="tarzan_service__headline">
								Commercial Stores
							</h3>
						</a>
					</div>
				</div>
			</div>
			<div class="column is-one-half-tablet is-one-third-desktop" >

				<?php 

					// If latest post details are not cached, fetch and cache
					// to reset cache and get new posts, go to /cache-clear 

					if (! \Cache::has('postDetails')) {
						// get latest post
						$latestPosts = collect(json_decode(file_get_contents('https://news.tarzan.com.gh/wp-json/wp/v2/posts')));
						$latestPost = $latestPosts->first();
						$postDetails = [
							'title'	=>	$latestPost->title->rendered,
							'url'	=>	$latestPost->link,
							'data'	=> New Carbon\Carbon($latestPost->date),
							'excerpt' => strip_tags($latestPost->excerpt->rendered)
						];

						// if has media
						
						if ($latestPost->featured_media > 0) {
							$media = json_decode(file_get_contents('https://news.tarzan.com.gh/wp-json/wp/v2/media/' . $latestPost->featured_media));
							$media_url = $media->guid->rendered;
							$postDetails['media'] = $media_url;
						}
						\Cache::forever('postDetails', $postDetails );
					}

					$postDetails = \Cache::get('postDetails');

				?>




				<h2 class="title tarzan__motto is-3">News</h2>
				<a href="{{$postDetails['url']}}"><img class="news__image" src="{{$postDetails['media']}}"></a>
				<h3 class="subtitle is-4 news__title"><a href="{{$postDetails['url']}}">{{$postDetails['title']}}</a></h3>
				<p>{{$postDetails['excerpt']}} &mdash; <a href="{{$postDetails['url']}}"> read > </a></p>
			</div>
		</div>
	</div>
</div>