<?php


    get_header('home');

    do_action( 'genesis_before_content_sidebar_wrap' );
    genesis_markup( array(
        'html5'   => '<div %s>',
        'xhtml'   => '<div id="content-sidebar-wrap">',
        'context' => 'content-sidebar-wrap',
    ) );

        do_action( 'genesis_before_content' );

        genesis_markup( array(
            'html5'   => '<main %s>',
            'xhtml'   => '<div id="content" class="hfeed">',
            'context' => 'content',
        ) );
            do_action( 'genesis_before_loop' );
            do_action( 'genesis_loop' );
            do_action( 'genesis_after_loop' );
        genesis_markup( array(
            'html5' => '</main>', //* end .content
            'xhtml' => '</div>', //* end #content
        ) );

        ?>

        <section class="section section--story">
            <div class="part-1">
                <h1 class="section-heading">Our Story</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius, dolor vel eleifend sollicitudin, justo orci consectetur nunc, vel adipiscing augue turpis at tortor. Aliquam pretium sapien ac felis ornare, vitae iaculis risus tempus. Mauris adipiscing tempus egestas. In nisi nulla, ultricies sit amet commodo ac, posuere dapibus justo. Sed non ante vel leo aliquam porta sit amet et metus. Vestibulum commodo risus nec justo ultrices, vel condimentum libero aliquet. Integer adipiscing dictum dui, sit amet ornare libero dapibus at. Phasellus ut mattis mauris. Donec dapibus est a quam eleifend, nec cursus augue ornare. Aenean lacus sapien, cursus vel fermentum ac, suscipit at orci. Fusce convallis augue elit, non congue nulla tincidunt a. Nam sollicitudin sodales arcu, ac rutrum erat placerat eu. Quisque sed velit bibendum, elementum est id, adipiscing quam. Morbi lacus quam, blandit vel dolor vitae, pellentesque luctus est. Etiam eu est id mauris luctus interdum molestie ut dolor. Curabitur ut nisi elit.</p>
                <p>Etiam facilisis lobortis tellus id vestibulum. Duis est nulla, lacinia a vestibulum in, tincidunt ac nunc. Cras non gravida orci, eu tristique enim. Fusce est velit, mattis et venenatis sed, porta eget dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu nulla et turpis consequat laoreet. Quisque eget vestibulum leo. Donec convallis interdum velit vitae dictum. Duis feugiat magna ac consequat venenatis. Donec et cursus ligula. Vivamus vestibulum orci eget ipsum pretium dictum. Maecenas sodales tellus vitae elit accumsan, id ultricies metus cursus. Morbi adipiscing malesuada dolor, at gravida nibh. Praesent suscipit odio sed turpis gravida venenatis. In metus nisi, posuere et malesuada nec, congue sit amet orci.</p>
            </div>
        </section>

        <section class="section section--rsvp">
            <h1 class="section-heading">RSVP</h1>
            <p>Help us get a head count.</p>
            <form class="rsvp">
                <input type="text" name="names" id="js-name" />
                <a href="#" class="minus">-</a>
                <input type="text" name="count" id="js-name" />
                <a href="#" class="plus">+</a>
            </form>
        </section>

        <section class="section section--details">
            <div class="part-1">
                <h1 class="section-heading">The drinks</h1>
                <p>We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere.</p>
                <p>We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere.</p>
            </div>
        </section>

        <section class="section section--registry">
            <div class="part-1">
                <h1 class="section-heading">The drinks</h1>
                <p>We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere.</p>
                <p>We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere. Debauchery everywhere. We became alcholics that night. Intoxicated a lot. Debauchery everywhere.</p>
            </div>
        </section>

        <section class="section section--footer">
            <p class="obligatory"><a href="http://www.joshmatz.com">Site built by the groom</a></p>
        </section>

        <?php

        do_action( 'genesis_after_content' );

    echo '</div>'; //* end .content-sidebar-wrap or #content-sidebar-wrap
    do_action( 'genesis_after_content_sidebar_wrap' );

    get_footer();