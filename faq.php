<!--head-area-->
	<?php include_once 'template/head.php' ?>
<!--//head-area-->

<!--header-area-->
	<?php include_once 'template/header.php'; ?>
<!--//end-header-area-->

<!--header-area-->
	<?php include_once 'template/nav-bar.php'; ?>
<!--//end-header-area-->

	<!--faq-->
	<div class="faq-info">
		<div class="container">
			<div class="title-info">
				<h3 class="title">Frequently Asked<span> Questions</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<ul class="faq">
				<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Can we bring a dog to Safari?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p> No, dogs and other pets are not allowed on Lindisfarne Safari. They will have to wait for you in the kennel, near the admission booths. The kennel is 5$ per day, plus deposit. Guide dogs are allowed on site, but not in the zoological areas.</p></li>										
					</ul>
				</li>
				<li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Is my car going to get scratched or damaged by animals in Safari Aventure?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p> Unlike the era where the baboons were roaming free in Safari Aventure, gleefully ripping off every antennas and whippers available, animals do not usually damage the cars going through. But keep in mind that there is always a small risk, since many animals have massive horns and hooves and are walking right by your car.</p></li>										
					</ul>
				</li>
				<li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Is the Safari Park open every day of the year?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>Yes!  The San Diego Zoo and the Safari Park are open every day of the year, rain or shine, including ALL holidays!</p></li>										
					</ul>
				</li>
				<li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Can I take pictures at your parks?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>We encourage guests to take photos. However, as a not-for-profit organization, commercial use of photos taken at our facilities is strictly prohibited. Entering photo contests does not infringe on our copyright policies as long as photos taken on our grounds are not published. Lens size and other equipment is up to you. Please be courteous to other guests who may wish to get a close look as well.  Some tours prohibit bulky camera equipment, tripods and the use of selfie sticks.</p></li>										
					</ul>
				</li> 
				<li class="item5 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Can I bring camera equipment?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>Yes. For animal health and safety, photo extension poles (selfie sticks) and other devices may not be used to cross exhibit boundaries. Some tours prohibit bringing selfie sticks, bulky camera equipment and tripods.</p></li>										
					</ul>
				</li>
				<li class="item6 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Are backpacks allowed?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>Guests are welcome to bring a backpack into our parks.</p></li>										
					</ul>
				</li>
				<li class="item7 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Can I bring food into the parks?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>Yes!  Guests may bring personal food items into our parks. Large food storage containers such as coolers are not permitted on grounds, and no facilities are available for food storage. For the convenience of guests, there are picnic areas located outside the Zoo’s main entrance and near the Safari Park’s entry plaza within easy walking distance of our parking lots. Zoo and Park guests who have already entered our parks may get their hand stamped for re-entry on the same day of their visit during operating hours. Special accommodations for school groups may be made. For the safety of guests and the animals in our care, please do not bring glass, alcohol, or straws into our parks.</p></li>										
					</ul>
				</li>
				<li class="item8 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">What is the smoking policy at the Safari Park?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>Smoking (including e-cigarettes) is not permitted anywhere on Zoo or Safari Park grounds or parking lots.  Zoo guests should know smoking is not permitted in Park. Guests who wish to smoke are welcome to have their hands stamped for same-day re-entry when leaving our grounds to smoke. Please keep your ticket! Safari Park guests should keep their parking receipts to avoid having to pay twice for same-day parking when leaving the parking lot for and returning from smoke breaks. </p></li>										
					</ul>
				</li>
				<li class="item9 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">How do I lodge a customer service complaint?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>We regret your experience did meet your expectations.  We appreciate constructive feedback to improve our service and guest experience.  To lodge a customer service complaint, please click on the "Contact Us" link at the bottom of this web page.</p></li>										
					</ul>
				</li>
				<li class="item10 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">How do I arrange interviews with keepers?<span class="icon"> </span></a>
					<ul>
						<li class="subitem1"><p>As you can imagine, we receive hundreds of emails each week from guests requesting an interview with our animal care staff. We are unable to accommodate all such requests as this would take our animal care staff away from their primary responsibilities to the animals in their care. Information about animal species may be found on our Lindisfarne Safari Park's website.</p></li>										
					</ul>
				</li> 
			</ul>
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs -->
		</div>			
	</div>			
	<!--//faq-->

<!--footer-->
	<?php include_once 'template/footer.php' ?>
<!--//footer-->