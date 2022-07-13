// mode de maintenance de WordPress
$time = time();
$limitedTime1 = 1657714750; //Remplacer cette valeur
$limitedTime2 = 1657714770; //Remplacer cette valeur
if($time < $limitedTime1) {
	function wp_maintenance_mode(){
	
		if(!current_user_can('edit_themes') || !is_user_logged_in()){
		
		wp_die('<h1 style="color:red">Site web en maintenance</h1>
		<p>Nous effectuons une maintenance programmée. Nous serons de nouveau en ligne sous peu !</p>');
		
		}
		
		}
		
		add_action('get_header', 'wp_maintenance_mode');

} elseif ($time >= $limitedTime1 AND $time < $limitedTime2) {

	function wp_maintenance_mode(){
	
		if(!current_user_can('edit_themes') || !is_user_logged_in()){
		
		wp_die('<h1 style="color:red">Site web en maintenance 2 </h1>
		<p>Nous effectuons une maintenance programmée. Nous serons de nouveau en ligne sous peu !</p>');
		
		}
		
		}
		
		add_action('get_header', 'wp_maintenance_mode');
}
