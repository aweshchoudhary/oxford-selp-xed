<?php
// Template Name: Brochure Download Page

get_header();

$download_brochure_file = get_field("download_brochure_file");
?>
<article class="md:p-20 p-5 min-h-[80vh] flex items-center justify-center">

    <h1 class="md:text-5xl text-2xl font-bold">Thank You!</h1>



    <script>
        window.onload = function() {
            const fileName = 'program-brochure.pdf';
            const fileUrl = "<?php echo $download_brochure_file["brochure_file"] ?>";

            if (fileUrl) {
                // Create a hidden anchor element
                const link = document.createElement('a');
                link.href = fileUrl;
                link.download = fileName;

                // Append the anchor to the document body
                document.body.appendChild(link);

                // Simulate a click to trigger the download
                link.click();

                // Remove the anchor from the document
                document.body.removeChild(link);

                // Close the window after a short delay to ensure the download starts
                setTimeout(() => {
                    window.history.back();
                }, 100); // Adjust the delay if necessary
            }
        };
    </script>
</article>
<?php get_footer(); ?>