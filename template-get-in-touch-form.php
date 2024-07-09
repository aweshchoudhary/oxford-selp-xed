<?php
// Template Name: Get In Touch Form
get_header();
?>

<article class="md:px-44 md:py-10 px-5 py-10">
    <div>
        <header class="space-y-5 mb-5">
            <h1 class="text-center md:mb-10 mb-5">
                Oxford Senior Executive Leadership Programme
            </h1>
            <p>We are glad to see your interest in Cornell’s CHRO Leadership Program <br>
                Please provide your details and get access to the program brochure.</p>
        </header>
        <div class="container mx-auto">
            <?php echo do_shortcode('[wpforms id="269" title="false"]');
            ?>
        </div>
    </div>
</article>

<?php
get_footer();
?>