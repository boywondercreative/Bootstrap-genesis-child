<?php
/*
Template Name: Coaching
*/

/*
This is a custom page template. You can
add functions here and they will only be
called on this page. You can also overwrite 
page layout options, remove sidebars, or
enqueue page specific scripts.

This is an example of a custom page. Feel free to edit
this one or just use it as an example on how to create
your own. :D

*/
// add flexslider
wp_enqueue_script('jquery.flexslider-min');

// force page layout to be full width
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// remove comments (you can do this in the wp admin too, but it's nice to be safe)
remove_action( 'genesis_comments', 'genesis_do_comments' );

// remove sidebar (you can also remove sidebar alt if you have that active too)
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

// inserting custom page content into genesis template
add_action( 'genesis_before_post', 'bfg_custom_page_example' ); 

// creating custom page content
function bfg_custom_page_example() { ?>
<div class="coaching">
<p>Brad Gerlach is now available for private coaching world-wide. Specializing in surfing technique and how to get better.
</br></br>
No matter what your level. 
 </br></br>
<a class="fancybox" href="http://dl.dropbox.com/u/45681663/CoffinGerlach.png"><img src="http://dl.dropbox.com/u/45681663/CoffinGerlach.png" title="Connor Coffin with Coach Brad Gerlach" width="400" height="223" class="alignleft" /></a>
His teaching style is a combination of explained surfing mechanics, how to practice through surf specific exercises, and how to implement them with visualization.
</br></br>
Brad's mentor's have been his father, an Olympic Diver from Hungary, Adrian Crook, a student of Kung Fu and sports movement specialist and Laura McCormac, a 4th degree black belt in Ace Aikido, Tai Chi Master, Professional Dancer, and Feldenkrais practitioner for over 20 years.</br></br>
 
Read testimonials below from some of his students, ranging from beginners to pros:</p>

<!-- ==================================== QUOTES Flexslider   ===================================== -->

<h4>Testamonials</h4>
<div class="quotes">
  <ul class="slides">
    <li>
      <blockquote>
	"Brad has a unique gift as a surfing coach and has developed a land and water program that will accelerate your surfing to a new level." <br />- Joe Dowling    
</blockquote>
    </li>
    <li>
      <blockquote>
	"Brad Gerlach is a great surf coach. He is clear in his communication, and his surfing skills are off the Richter" <br />- Colton Sarlo
</blockquote>
    </li>
    <li>
     <blockquote>
	"Here is this guy who lead the World Tour at one point, still rides Cortes Bank and other horrifying breaks, demanding that I stop punishing myself in the water and try remember the pure joy of surfing you got as a kid." <br />- Steve Rabineau, Santa Monica, CA
</blockquote>
    </li>
  </ul>
</div>

</div>


<?php
}



// do genesis
genesis();  

?>