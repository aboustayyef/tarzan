<header class="section">
	<div class="container">
		<div class="columns is-short">
			<div class="column is-5-desktop">
				<a href="/"><img class="mb2" src="{{asset('img/tarzan-logo.png')}}" width="191" height="56" ></a>
				<h2 class="tarzan__motto title is-3 mb">Providing Backbone Logistics for Ghana’s Cocoa Industry since 1979</h2>
			</div>
			<div class="column is-6-desktop is-offset-1-desktop">
				<div class="columns" role="navigation">
					<div class="column is-third">
						<div class="tarzan_nav__header title is-4">
							Services
						</div>
						<ul>
							{!! tz_menu_item($title = "Haulage &amp; fleet", $path = 'services/haulage' , \Request::Path() ) !!}
							{!! tz_menu_item($title = "Warehousing", $path = 'services/warehousing' , \Request::Path() ) !!}
							{!! tz_menu_item($title = "Container", $path = 'services/container' , \Request::Path() ) !!}
							{!! tz_menu_item($title = "Commercial Stores", $path = 'services/stores' , \Request::Path() ) !!}

						</ul>

					</div>
					<div class="column is-third">
						<div class="tarzan_nav__header title is-4">
							About
						</div>
						<ul>
							<a href="https://news.tarzan.com.gh"><li class="tarzan_nav__link" >Our News</li></a>
							{!! tz_menu_item($title = "Company &amp; History", $path = 'about/company' , \Request::Path() ) !!}
							{!! tz_menu_item($title = "Management", $path = 'about/management' , \Request::Path() ) !!}
						</ul>

					</div>

					<div class="column is-third">
						<div class="tarzan_nav__header title is-4">
							Learn More
						</div>
						<ul>
						
							{!! tz_menu_item($title = "Location", $path = 'learn/location' , \Request::Path() ) !!}
							{!! tz_menu_item($title = "Contact Us", $path = 'learn/contact' , \Request::Path() ) !!}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>