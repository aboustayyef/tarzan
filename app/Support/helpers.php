<?php 

	/**
	 *  This function generates nav menu items.
	 *  It compares the request Path with the page location and shows the class "active" when they're the same
	 */

	function tz_menu_item($title = "home", $path = '/', $requestPath){
		
		$isactive = $path == $requestPath ? 'active' : '';

		return '<a href="/' . $path . '"><li class="tarzan_nav__link ' . $isactive . '" >' . $title . '</li></a>' . '<!--' . $requestPath .  '-->';

	}
 ?>