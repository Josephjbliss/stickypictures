<?php
/*
Template Name: Capabilities
*/
get_header();

get_template_part('templates/slider'); ?>

<section class="capabilities-blurb">
    <h3>A Partnership For The
    <br>2016 NBC Universal Upfront.</h3>

    <p>As a collaborative partner we invite creative input from our clients at key dates throughout the schedule. We also encourage an ongoing dialogue throughout the project with informal check-ins as needed throughout the project duration.</p>

    <p>Sticky Pictures brings the right people together for individual projects. We are small enough that we can be involved in every detail on a project, yet carry the weight and experience to know how to deliver a project well and on time.</p>

    <p>Sticky Pictures brings the right people together for individual projects. We fully anticipate feedback after the pitch stage and look forward to the challenge of bringing this video to life. We are small enough that we can be involved in every detail on a project, yet carry the weight and experience to know how to deliver a project well and on timpe.</p>
</section>
<div class="rule capabilities-blurb"></div>

<section class="team-members">
    <div class="team-members-blurb">
        <h3>2016 NBC Universal Upfront <br>
        Principal Team Members.</h3>

        <p>Here's a few of the brands we've enjoyed working with so far. More text on second line. Collaboration text goes here how we work with our clients. More text on next linpe. More text sample here.</p>
    </div>

    <div class="team-member">
        <img src="images/headshot.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
    <div class="team-member">
        <img src="images/headshot.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
    <div class="team-member">
        <img src="images/headshot.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
    <div class="team-member">
        <img src="images/headshot2.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
    <div class="team-member">
        <img src="images/headshot2.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
    <div class="team-member">
        <img src="images/headshot2.png">
        <h4>Kyle Smithers</h4>
        <h4>Principal</h4>

        <div class="biography">
            <p>We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette, and let the stories of Robert, Alex, Kim, and Nate speak to some of America’s heavy healthcare issues.</p>

            <p><a href="http://www.johnsmithers.com" target="_blank">www.johnsmithers.com</a></p>
        </div>
        <h5 class="bio-toggle">Biography</h5>
    </div>
</section>

<div class="rule team-members"></div>

<section class="the-studio">
    <div class="the-studio-blurb1">
        <h3>The Studio.</h3>

        <p>Here's a few of the brands we've enjoyed working with so far. More text on second line.</p> 

        <p>Collaboration text goes here how we work with our clientpps. More text on next line.</p>
    </div>
    
    <img src="images/studiopic1.png" class="the-studio-pic1">

    <div class="the-studio-blurb-2">
        <p>The studio is a critical part of the design equation but it rarely gets its due. It's the unsung hero. The fifth Beatle. To do great work we need a great studio: a comfortable space with proper meeting areas, all the right tools to experiment with, space to shoot, a great library of books / magazines / music / movies, and an open plan to facilitate collaboration on projects. Not to mention great people to work with, some good snacks and lots of light.</p>
    </div>

    <img src="images/studiopic2.png" class="the-studio-pic2">
</section>


<?php
$case_studies = get_field('case_studies');
related_projects( $case_studies, $title = 'Relevant Case Studies' );
?>
<?php
get_footer();
?>