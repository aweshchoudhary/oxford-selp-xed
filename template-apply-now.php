<?php
// Template Name: Apply Now
get_header(); ?>

<article class="md:px-44 md:py-10 px-5 py-10">
    <div>
        <header class="space-y-5 mb-5">
            <h1 class="text-center md:mb-10 mb-5">
                Oxford Senior Executive Leadership Programme
            </h1>
            <p>
                We are glad to see your interest in Oxford’s Senior Executive Leadership Programme.
            </p>
            <p>
                We are looking for aspirants who desire to gain knowledge and expertise in leadership and are willing to contribute to the cohort and Oxford’s Business Alumni (OBA) Network.
            </p>
            <p>
                Please provide your details. The Admissions Team will review your credentials and get back to you shortly.
            </p>
        </header>
        <div class="container mx-auto">
            <?php echo do_shortcode('[wpforms id="439" title="false"]'); ?>
        </div>
    </div>
</article>

<?php get_footer();
?>
