<?php
/*
Template Name: Custom
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
//wp_enqueue_script('jquery.flexslider-min');

// force page layout to be full width
//add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// remove comments (you can do this in the wp admin too, but it's nice to be safe)
remove_action( 'genesis_comments', 'genesis_do_comments' );

// remove sidebar (you can also remove sidebar alt if you have that active too)
//remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

// inserting custom page content into genesis template
add_action( 'genesis_before_post', 'bfg_custom_page_example' ); 

// creating custom page content
function bfg_custom_page_example() { ?>


<!-- Sample Content to Plugin to Template -->
<h1 class="entry-title">CSS Basic Elements</h1>
 
<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
 
<hr />
 
<h1 id="headings">Headings</h1>
 
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
 
<small><a href="#wrap">[top]</a></small>
<hr />
 
 
<h1 id="paragraph">Paragraph</h1>
 
<img style="width:260px;height:180px;float:right" src="http://placehold.it/260x180" alt="CSS | God's Language" />
<p>Gentrify irony messenger bag,<a href="#" title="test link">polaroid food truck semiotics VHS cardigan cred.</a>  polaroid food truck semiotics VHS cardigan cred.  Fixie biodiesel gentrify Austin scenester photo booth readymade lo-fi, locavore squid aesthetic keytar farm-to-table pork belly.  Put a bird on it fap pop-up, gluten-free sartorial street art seitan kale chips.  Umami fanny pack keytar retro readymade.  Skateboard organic umami iphone gastropub polaroid 3 wolf moon, mcsweeney's vice DIY carles portland irony.  Selvage ethical fap truffaut food truck.  Blog umami raw denim readymade gastropub sustainable, occupy 8-bit fixie fingerstache brooklyn VHS pitchfork brunch.</p>
 
<p>Gentrify irony messenger bag, <em>polaroid food truck semiotics VHS cardigan cred.</em>  Fixie biodiesel gentrify Austin scenester photo booth readymade lo-fi, locavore squid aesthetic keytar farm-to-table pork belly.  Put a bird on it fap pop-up, gluten-free sartorial street art seitan kale chips.  Umami fanny pack keytar retro readymade.  Skateboard organic umami iphone gastropub polaroid 3 wolf moon, mcsweeney's vice DIY carles portland irony.  Selvage ethical fap truffaut food truck.  Blog umami raw denim readymade gastropub sustainable, occupy 8-bit fixie fingerstache brooklyn VHS pitchfork brunch.</p>
 
<small><a href="#wrap">[top]</a></small>
<hr />
 
<h1 id="list_types">List Types</h1>
 
<h3>Definition List</h3>
<dl>
	<dt>Definition List Title</dt>
	<dd>This is a definition list division.</dd>
</dl>
 
<h3>Ordered List</h3>
<ol>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
 
<h3>Unordered List</h3>
<ul>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
 
<small><a href="#wrap">[top]</a></small>
<hr />
 
<h1 id="form_elements">Fieldsets, Legends, and Form Elements</h1>
 
<fieldset>
	<legend>Legend</legend>
 
<p>Gentrify irony messenger bag, polaroid food truck semiotics VHS cardigan cred.  Fixie biodiesel gentrify Austin scenester photo booth readymade lo-fi, locavore squid aesthetic keytar farm-to-table pork belly.  Put a bird on it fap pop-up, gluten-free sartorial street art seitan kale chips.  Umami fanny pack keytar retro readymade.  Skateboard organic umami iphone gastropub polaroid 3 wolf moon, mcsweeney's vice DIY carles portland irony.  Selvage ethical fap truffaut food truck.  Blog umami raw denim readymade gastropub sustainable, occupy 8-bit fixie fingerstache brooklyn VHS pitchfork brunch.</p>

 
	<form>
		<h2>Form Element</h2>
 
		<p>Gentrify irony messenger bag, polaroid food truck semiotics VHS cardigan cred.  Fixie biodiesel gentrify Austin scenester photo booth readymade lo-fi</p>
 
		<p><label for="text_field">Text Field:</label><br />
		<input type="text" id="text_field" /></p>
 
		<p><label for="text_area">Text Area:</label><br />
		<textarea id="text_area"></textarea></p>
 
		<p><label for="select_element">Select Element:</label><br />
			<select name="select_element">
			<optgroup label="Option Group 1">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</optgroup>
			<optgroup label="Option Group 2">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</optgroup>
		</select></p>
 
		<p><label for="radio_buttons">Radio Buttons:</label><br />
			<input type="radio" class="radio" name="radio_button" value="radio_1" /> Radio 1<br/>
				<input type="radio" class="radio" name="radio_button" value="radio_2" /> Radio 2<br/>
				<input type="radio" class="radio" name="radio_button" value="radio_3" /> Radio 3<br/>
		</p>
 
		<p><label for="checkboxes">Checkboxes:</label><br />
			<input type="checkbox" class="checkbox" name="checkboxes" value="check_1" /> Radio 1<br/>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_2" /> Radio 2<br/>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_3" /> Radio 3<br/>
		</p>
 
		<p><label for="password">Password:</label><br />
			<input type="password" class="password" name="password" />
		</p>
 
		<p><label for="file">File Input:</label><br />
			<input type="file" class="file" name="file" />
		</p>
 
 
		<p><input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" />
		</p>
 
 
 
	</form>
 
</fieldset>
 
<small><a href="#wrap">[top]</a></small>
<h1>Buttons</h1>

<button class="btn" href="#">Default</button>
<button class="btn btn-primary" href="#">Primary</button>
<button class="btn btn-info" href="#">Info</button>
<button class="btn btn-success" href="#">Success</button>
<button class="btn btn-warning" href="#">Warning</button>
<button class="btn btn-danger" href="#">Danger</button>
<button class="btn btn-inverse" href="#">Inverse</button>


<hr />
 
<h1 id="tables">Tables</h1>
 
<table cellspacing="0" cellpadding="0">
	<tr>
		<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
	</tr>
	<tr>
		<td>Division 1</td><td>Division 2</td><td>Division 3</td>
	</tr>
	<tr class="even">
		<td>Division 1</td><td>Division 2</td><td>Division 3</td>
	</tr>
	<tr>
		<td>Division 1</td><td>Division 2</td><td>Division 3</td>
	</tr>
 
</table>
 
<small><a href="#wrap">[top]</a></small>
<hr />
 
<h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>
 
<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
 
<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>
 
<blockquote>
	"This stylesheet is going to help so freaking much." <br />-Blockquote
</blockquote>
 
<small><a href="#wrap">[top]</a></small>
<!-- End of Sample Content -->
















<?php
}



// do genesis
genesis();  

?>