$today = date("F j, Y);
 include('bin/check.php');
 
 <?php echo do_shortcode("[si-contact-form form='1']"); ?>
 
 background: -webkit-radial-gradient(red 5%, green 15%, blue 60%); /* Safari 5.1-6.0 */
  background: -o-radial-gradient(red 5%, green 15%, blue 60%); /* Opera 11.6-12.0 */
  background: -moz-radial-gradient(red 5%, green 15%, blue 60%); /* Firefox 3.6-15 */
  background: radial-gradient(red 5%, green 15%, blue 60%); /* Standard syntax */
  
  
 text-shadow:
   -1px -1px 0 white,
   1px -1px 0 white,
   -1px 1px 0 white,
   1px 1px 0 white; 
   
   <?php the_post_thumbnail('large', array(
'class' => 'img-responsive'

)); ?>
 <a href="mailto:youremailaddress">Email Me</a>
 hr {   border: 0;   border-top: 1px solid #8c8c8c;   border-bottom: 1px solid #fff; }
<hr style="color:#919090; background-color:#919090; height:1px; border:none;">

hr 
{	
border:none;	
border-top:1px #CCCCCC solid;
height: 1px;
}
border-style: solid;
   border-top: thick double #ff0000;
   
<?php if(is_page('Home')) { ?>
 <?php
$args = array('cat' => '13', 'posts_per_page' => 1);
$query = new WP_Query($args);
while($query -> have_posts()) : $query -> the_post();
           	?>
                   <div id="mission" style="color:#fff; font-size:18px; padding-top:0px;">
                   	<?php the_content() ?>
                   </div>
                   	<?php 
               	endwhile;
           	?>
   <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
the_post_thumbnail('large', array('class' => 'img-responsive'));

   max-width: 100%;
 	height: auto;
height:150px;
width:150px;
border-radius:5px;
border-color:#0F0;
border-style:solid;
border-width:10px;

.map-responsive{ overflow:hidden; padding-bottom:56.25%; position:relative; height:0; } .map-responsive iframe{ left:0; top:0; height:100%; width:100%; position:absolute; }

<div class="box fade-in three">
       Where Dreams Come True.
</div>
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
.fade-in {
opacity:0;  /* make things invisible upon start */
-webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
-moz-animation:fadeIn ease-in 1;
animation:fadeIn ease-in 1;
 
-webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
-moz-animation-fill-mode:forwards;
animation-fill-mode:forwards;
 
-webkit-animation-duration:1s;
-moz-animation-duration:1s;
animation-duration:1s;
}
 
 
.fade-in.three {
-webkit-animation-delay: 1.6s;
-moz-animation-delay: 1.6s;
animation-delay: 1.6s;
}
 
/*---make a basic box ---*/
.box{
width: 200px;
height: 200px;
position: relative;
margin: 10px;
float: left;
border: 1px solid #333;
background: #999;
}
@media only screen 
 (max-width : 1670px) {

}
@media only screen  
and (min-width : 1442px)
and (max-width : 1662px)
<img style="padding-bottom:10px" class="img-responsive" src="/account_docs/images/<?php echo $photo;?>">
if (mysqli_error($GLOBALS['dbc'])) {
$Error = 'UPDATE FAILURE: Error updating account. SQL: ' . $query . ' . MySQL: ' . mysqli_error($GLOBALS['dbc']);
<!-- 16:9 aspect ratio --> <div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="..."></iframe> </div> <!-- 4:3 aspect ratio --> <div class="embed-responsive embed-responsive-4by3"> <iframe class="embed-responsive-item" src="..."></iframe> </div>

$date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');
Dusty Satterlee (dsatterlee@megabytes.co)
<label class="radio-inline">
     <input type="radio" name="optradio">Option 1
   </label>
   <label class="radio-inline">
     <input type="radio" name="optradio">Option 2
   </label>
   <label class="radio-inline">
     <input type="radio" name="optradio">Option 3
   </label>
   foreach ($Shift as $key => $value){
echo '<option value="' . $key . '" ';
if(!empty($x['shift']) && $x['shift'] == $key)echo 'selected';	
echo '>' . $value . '</option>';
[si-contact-form form='2']
waterBill{
color: #12b666;
border-radius: 5px;
font-size: 16px;
padding: 10px;
background-color: #f4f4f4;
margin-top: 20px;
}
.waterBill:hover{
color: #e76200;
text-decoration: none;
}
<p> <a class="waterBill" href="https://www.courtmoney.com/makepayment/payment.php?testID=26">Pay Water Bill Online</a></p>
http://cityofherrin.com/
May 18, 4:30 PM

Bootstrap:

Generally good place to start looking for info on Bootstrap:
https://www.w3schools.com/bootstrap/

Media Query (stuff like the layout changing based on screen size):
https://scotch.io/quick-tips/default-sizes-for-twitter-bootstraps-media-queries
https://stackoverflow.com/questions/18424798/twitter-bootstrap-3-how-to-use-media-queries


PHP:

Information on sanitization (to stop injection attacks)
http://www.php.net/manual/en/filter.filters.sanitize.php




Shorthand IF statement (useful for echo statements inside other code)
https://davidwalsh.name/php-ternary-examples

Shorthand example plus explanation:

Example: 
$variable = ($user['is_logged_in'] ? $user['first_name'] : 'Guest');

Explanation:
If the user is logged in (so $user['is_logged_in'] == true), get the user's first name (so $user['first_name'] == Timothy).!"
If the user is logged out, get "Guest."
Assign answer to $variable.

Normal form:

if($user['is_logged_in'] == TRUE) {
     $variable = $user['first_name'];
} else {
     $variable = 'Guest';
}

}