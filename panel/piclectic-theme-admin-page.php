<?php

     
    add_action('admin_menu', 'piclectic_setup_menu');
     
    function piclectic_setup_menu(){
    	add_theme_page( esc_html__('Piclectic Theme Details', 'piclectic' ), esc_html__('Piclectic Theme Details', 'piclectic' ), 'edit_theme_options', 'piclectic-setup', 'piclectic_init' ); 
    }  
      
 	function piclectic_init(){
		
		wp_enqueue_style( 'piclectic-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
		wp_enqueue_style( 'piclectic-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
		
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">'; 
		printf(esc_html__('Thank you for using Piclectic!', 'piclectic' ));
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf(esc_html__('Creating Image Posts', 'piclectic' ));
        echo '</h2>';
		
		echo '<p>';
		printf(esc_html__('We created a quick tutorial to show you how to create image posts to populate your home page. Click the button below.', 'piclectic' ));
		echo '</p>';
		
		echo '<a href="https://modernthemes.net/piclectic-documentation/piclectic-adding-images/" target="_blank"><button>'; 
		printf(esc_html__('View Tutorial', 'piclectic' ));  
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>';
		printf(esc_html__('Documentation', 'piclectic' ));
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Check out our documentation for tutorials on theme functions and how to get the most out of Piclectic.', 'piclectic' ));   
		echo '</p>'; 
		
		echo '<a href="https://modernthemes.net/piclectic-documentation/" target="_blank"><button>'; 
		printf(esc_html__('Read Docs', 'piclectic' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf(esc_html__('ModernThemes', 'piclectic' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Want more to learn more about ModernThemes? Let us help you at modernthemes.net.', 'piclectic' ));
		echo '</p>';
		
		echo '<a href="https://modernthemes.net/plugins/" target="_blank"><button>';
		printf(esc_html__('Visit Us', 'piclectic' ));
		echo '</button></a></div></div>';
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Go Premium. Get more out of Piclectic.', 'piclectic' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-home"></i><h4>';
		printf( esc_html__('Home Page Layouts', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Piclectic Premium comes with a Masonry and Slider home page option for your images.', 'piclectic' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-twitter"></i><h4>';
        printf( esc_html__('Social Sharing', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Share you image posts easily with a social sharing option on each post. Icons show up and the user can post right away.', 'piclectic' )); 
		echo '</p></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
        printf( esc_html__('Lightbox Options', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Piclectic Premium comes with a lightbox display option so users can scroll through your images like a gallery.', 'piclectic' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>'; 
        printf( esc_html__('Gallery Pages', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Set up different gallery pages so you can show your posts on different pages and in different layouts!', 'piclectic' ));
		echo '</p></div>';
		
        echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-shopping-cart"></i><h4>'; 
		printf( esc_html__( 'WooCommerce', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Turn your website into a powerful eCommerce machine. Piclectic Pro Pro is fully compatible with WooCommerce.', 'piclectic' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>Plugin Content</h4><p>'; 
		printf( esc_html__( 'Piclectic Premium is compatible with all of our free content plugins to add services, projects, team members, etc.', 'piclectic' ));
		echo '</p></div>'; 
		
       	echo '<div class="col-1-4"><i class="fa fa-arrow-circle-o-down"></i><h4>';
		printf( esc_html__( 'Footer Widget Areas', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Want more content for your footer? Piclectic Pro Pro has footer widget areas to populate with any content you want.', 'piclectic' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'piclectic' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Pro themes come with free support that goes directly to our support staff.', 'piclectic' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/piclectic-premium/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'View Premium Version', 'piclectic' ));
		echo '</button></a></div></div>';

		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'piclectic' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'piclectic' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'piclectic' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'piclectic' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'piclectic' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'piclectic' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( esc_html__( 'Access to New Themes', 'piclectic' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'piclectic' ));   
		echo '</p></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'piclectic' ));
		echo '</button></a></div></div>';
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">';
		printf( esc_html__( 'Changelog' , 'piclectic' ) ); 
        echo "</h2>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.0.7 - Make WordPress theme revisions' , 'piclectic' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.0 - New Theme!', 'piclectic' ));
		echo '</p></div></div>';
		
    }
?>