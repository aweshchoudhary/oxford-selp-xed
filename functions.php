<?php

function cornell_chro_enqueue_styles()
{
    wp_enqueue_style('cornell-chro', get_stylesheet_uri(), array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'cornell_chro_enqueue_styles');

function my_custom_funcs()
{
?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const country_select = document.querySelector('.country-select');
            const msg_container = document.querySelector('.countries-dissallowed-msg');
            const download_btn = document.querySelector(".wpforms-submit");

            country_select.addEventListener("change", () => {
                setTimeout(() => {
                    if (msg_container.style.display !== "none") {
                        download_btn.disabled = true;
                    } else {
                        download_btn.disabled = false;
                    }
                }, 200);

            })
        });

        function toggleReadMore(button) {
            // Get the data-target attribute value from the button
            const target = button.getAttribute('data-target');

            // Select the corresponding readmore content based on the target
            const readMoreContent = document.querySelectorAll('.readmore-content')[target];

            // Toggle the display style of the readmore content
            if (readMoreContent.style.display === 'none') {
                readMoreContent.style.display = 'block';
                button.innerText = 'Read Less';
            } else {
                readMoreContent.style.display = 'none';
                button.innerText = 'Read More';
            }
        }

        function lazyLoadVideo(videoId, triggerRef) {
            if (!videoId || !triggerRef) return;

            const videoEle = `
            <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay class="aspect-video w-full h-full"></iframe>
            `;

            triggerRef.style.display = "none";
            triggerRef.insertAdjacentHTML("afterend", videoEle);
        }
    </script>
<?php
};

add_action("wp_footer", "my_custom_funcs");
