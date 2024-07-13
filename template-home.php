<?php
// Template Name: Home Page

get_header();

$hero_sec = get_field("hero_section");
$program_details = get_field("program_details");
?>
<article>
    <section>
        <figure class="w-full md:h-full h-[400px] md:p-0 p-5">
            <?php
            $image = $hero_sec["hero_image"];
            $image_sizes = $image["sizes"];
            ?>
            <?php echo wp_get_attachment_image($image["id"], "large", false, array(
                "loading" => "eager",
                "class" => "image-cover",
            )); ?>
            <figcaption class="sr-only"><?php echo $image["alt"]; ?></figcaption>
        </figure>

        <div class="md:px-44 md:py-10 p-5">
            <h1 class="text-center font-tnr mb-5">
                <?php echo $hero_sec["program_heading"]; ?>
            </h1>
            <div class="md:flex-row flex-col flex items-center gap-3 justify-center md:mb-10 mb-5">
                <a aria-label="goto apply now page" href="<?php echo $hero_sec["apply_now"]["url"]; ?>" class="cbtn-primary"><?php echo $hero_sec["apply_now"]["title"]; ?></a>
                <a aria-label="goto eligibility page" href="<?php echo $hero_sec["review_my_application"]["url"]; ?>" class="cbtn-outline"><?php echo $hero_sec["review_my_application"]["title"]; ?></a>
                <button name="open download brochure form" aria-label="open download brochure form" onclick="download_brochure.showModal();" class="cbtn-outline">Download brochure</button>
            </div>
            <hr class="border-primary border" />
            <div>
                <h2 class="mb-5 font-tnr">
                    <?php echo $hero_sec["program_overview"]["heading"]; ?>
                </h2>
                <div>
                    <?php echo $hero_sec["program_overview"]["description"]; ?>
                </div>
            </div>
        </div>
    </section>
    <dialog id="download_brochure" class="modal">
        <div class="modal-box rounded md:p-10 p-5 md:max-w-[60%]">
            <h2>Get your brochure</h2>
            <?php echo do_shortcode('[wpforms id="512"]'); ?>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <section class="md:px-44 md:py-10 py-5 px-8 bg-[#D6D3CE]">
        <ul class="list-none pl-0 flex flex-wrap gap-5 items-center justify-between">
            <?php foreach ($program_details["list"] as $item) { ?>
                <li class="flex items-center md:basis-1/4 flex-1 basis-full gap-5">
                    <figure class="w-[60px] h-full">
                        <?php
                        $image = $item["icon"];
                        $image_sizes = $image["sizes"];
                        ?>
                        <?php echo wp_get_attachment_image(
                            $image["id"],
                            "large",
                            false,
                            array("loading" => "lazy", "class" => "image-cover")
                        ); ?>
                        <figcaption class="sr-only"><?php echo $image["alt"]; ?></figcaption>
                    </figure>

                    <div>
                        <h3 class="md:text-2xl text-xl"><?php echo $item["subtitle"]; ?></h3>

                        <p class="mb-0 md:text-2xl text-lg font-bold"><?php echo $item["title"]; ?></p>

                        <?php if (!empty($item["modal"]["modal_name"])) { ?>
                            <button name="show more details" aria-label="show more details" class="mt-1 block underline" onclick="<?php echo $item["modal"]["modal_name"]; ?>.showModal()"><?php echo $item["modal"]["title"]; ?></button>

                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>
    <dialog id="emi_form_modal" class="modal">
        <div class="modal-box rounded md:p-10 p-5 md:max-w-[60%]">
            <?php echo do_shortcode('[wpforms id="235" title="true"]'); ?>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <section class="md:px-44 md:py-10 p-5">
        <div>
            <p>
                The programme fee covers teaching fees, academic materials and programme lunch fees. It does not include transport expenses, accommodation expenses, associated visa fees or any other expenses not expressly mentioned.
                <br><br>
                The face-to-face programme will adhere to university and government guidelines.
                <br><br>
            </p>
            <h3 class="mb-5">
                Paul Fisher invites you to join the Oxford Senior Executive Leadership Programme
            </h3>

            <div class="w-full">
                <div class="bg-gray-200 rounded-none">
                    <figure class="cursor-pointer relative group" onclick="lazyLoadVideo('7h9rj5BkzjM', this)">
                        <?php echo wp_get_attachment_image(
                            "541",
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-video"]
                        ); ?>
                        <figcaption class="sr-only"></figcaption>
                        <button class="play-btn">
                            <svg class="group-hover:opacity-0 ml-1 transition absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-width="1" d="m3 22l18-10L3 2z" />
                            </svg>

                            <svg class="group-hover:opacity-100 transition opacity-0 ml-1 absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-width="2" d="m3 22l18-10L3 2zm2-3l12.6-7L5 5zm2-3l7.2-4L7 8zm2-3l1.8-1L9 11z" />
                            </svg>
                        </button>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(<?php echo wp_get_attachment_image_url(
                                        459,
                                        "large"
                                    ); ?>);background-position:center;background-repeat: no-repeat;background-size: cover;" class="md:px-44 bg-center bg-no-repeat md:py-10 p-5 relative bg-primary text-white">
        <div>
            <h2 class="md:mb-20 mb-5 font-tnr">
                Key highlights
            </h2>
            <ul class="list-none pl-0 flex flex-wrap md:gap-16 gap-5">
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <?php echo wp_get_attachment_image(
                            470,
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-contain"]
                        ); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                        470
                                                    ); ?></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Campus immersion
                        <br>
                        at Oxford
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <?php echo wp_get_attachment_image(
                            471,
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-contain"]
                        ); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                        471
                                                    ); ?></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Industry immersion <br>
                        in Dubai</p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <?php echo wp_get_attachment_image(
                            472,
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-contain"]
                        ); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                        472
                                                    ); ?></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Oxford Business Alumni <br>
                        (OBA) Network</p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <?php echo wp_get_attachment_image(
                            473,
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-contain"]
                        ); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                        473
                                                    ); ?></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Learn from Oxford faculty <br>
                        and global industry experts</p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <?php echo wp_get_attachment_image(
                            474,
                            "large",
                            false,
                            ["loading" => "lazy", "class" => "image-contain"]
                        ); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                        474
                                                    ); ?></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Live online <br>
                        sessions </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <figure class="shrink-0 md:w-[80px] w-[60px]">
                            <?php echo wp_get_attachment_image(
                                475,
                                "large",
                                false,
                                [
                                    "loading" => "lazy",
                                    "class" => "image-contain",
                                ]
                            ); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                            475
                                                        ); ?></figcaption>
                        </figure>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Certificate from <br>
                        Saïd Business School<br>
                        University of Oxford</p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0 md:w-[80px] w-[60px]">
                        <figure class="shrink-0 md:w-[80px] w-[60px]">
                            <?php echo wp_get_attachment_image(
                                476,
                                "large",
                                false,
                                [
                                    "loading" => "lazy",
                                    "class" => "image-contain",
                                ]
                            ); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                            476
                                                        ); ?></figcaption>
                        </figure>
                    </figure>
                    <p class="md:text-2xl mb-0 sm:text-xl text-lg font-semibold text-left">
                        Highly personalised <br>
                        leadership development <br>
                        journey</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="md:px-44 md:py-10 p-5">
        <div>
            <h2 class="mb-5 font-tnr">
                9 months immersive learning journey
            </h2>
            <hr class="mt-10 border-primary" />
        </div>
        <div>
            <h2 class="mb-5 font-tnr">
                Leadership narratives
            </h2>

            <h3 class="mb-3">
                Pre-module
            </h3>
            <p>
                Prior to the programme start, participants will complete a questionnaire about their personal leadership journey, reflecting on past accomplishments, future goals, leadership experiences and challenges faced. Participants will then apply the programme's teachings to their own roles and ambitions. Within the framework of self, organisation and context, we will incorporate each participant's personal leadership journey to develop a tailored leadership narrative. This process serves as a valuable self-awareness tool, helping participants gain deeper insight into their strengths, weaknesses and values. Participants will also engage in peer-to-peer learning by sharing their personal reflections.
            </p>

            <h3 class="mb-3">
                What will you learn?
            </h3>

            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Campus immersion at Oxford <!-- (To be finalized) -->
                </h3>
                <ul>
                    <li>Leadership in a volatile world – insights from the chief executive officer report</li>
                    <li>Scenario planning</li>
                    <li>Inspirational leadership – lessons from Shakespeare</li>
                    <li>Persuasion and influence</li>
                    <li>Leading through organisational culture</li>
                    <li>The importance of humility in leadership</li>
                    <li>Leadership as a performing art</li>
                </ul>

                <div class="readmore-content mt-5" style="display: none;">

                    <h3><strong>Leadership in a volatile world – insights from the chief executive officer report</strong></h3>
                    <p>This session will focus on findings from Saïd Business School, University of Oxford chief executive officer report, which interviewed over 150 global leaders. Key findings will be discussed, including how chief executive officers have had to reinvent their communication, leadership, and strategy in a world where trust is at a premium. The session will also explore how chief executive officers must find new ways to establish organisational values and culture, build teams, and align their companies.</p>

                    <h3><strong>Scenario planning</strong></h3>
                    <p>This session will equip participants with skills and tools to effectively deal with potential opportunities, threats, and challenges in an uncertain world. An overview of the Oxford scenario planning approach principles will be provided, followed by a discussion on how participants can adapt and adopt these principles for their own purposes.</p>

                    <h3><strong>Inspirational leadership – how to take others with you. Lessons from Shakespeare</strong></h3>
                    <p>Participants will be introduced to Shakespeare's most inspired and inspiring leader, Henry V, and explore the various leadership challenges Henry faced.</p>

                    <h3><strong>Persuasion and influence</strong></h3>
                    <p>This session will examine the seven universal principles of persuasion that have been scientifically proven effective, based on Dr Robert Cialdini's work. These principles are central to building trust and relationships. Other key areas covered will include the power of storytelling, personal narrative, and potential narrative frameworks, drawing on the work of Joseph Campbell, the McKinsey method developed by Barbara Minto, and language of the senses.</p>

                    <h3><strong>Leading through organisational culture</strong></h3>
                    <p>This session explores the concept of organisational culture and how successful leaders seek to change organisational practices. A critical assessment of various leadership models will be conducted, discussing what leaders can learn from them.</p>

                    <h3><strong>The importance of humility in leadership</strong></h3>
                    <p>This session will examine how humility can lead to greater sincerity, fairness, truthfulness, and modesty in a world of deep divisions. Participants will learn how to improve their humility by acknowledging mistakes, learning from them, and being open to understanding where they might be wrong.</p>

                    <h3><strong>Leading as a performing art</strong></h3>
                    <p>Participants will investigate similarities and connections between music performance and leadership innovation. The session will focus on transforming knowledge and experience from the performing arts into core leadership principles that can be understood and applied across any industry.</p>
                </div>

                <button name="show more details" aria-label="show more details" class="cbtn-outline mt-5" data-target="0" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Industry immersion in Dubai <!-- (06 Jan, 2024 - 10 Jan, 2024) -->
                </h3>
                <ul>
                    <li>Reimagining the future</li>
                    <li>Execution excellence </li>
                    <li>Creative thinking and the fine art of success</li>
                </ul>
                <div class="readmore-content mt-5" style="display: none;">

                    <h3><strong>Reimagining the future</strong></h3>
                    <p>This workshop provides an in-depth exploration of disruption, innovation and their impact on business. Delve into digital transformation, emerging technologies, industry disruption, and various innovation methodologies. Examine real-world case studies for deeper insights into the current state of innovation and disruption. Explore best practices in innovation, human-centric design, lean methodologies and a multi-horizon portfolio approach to innovation.</p>

                    <h3><strong>Execution excellence </strong></h3>
                    <p>This immersive module offers insights into brain learning processes, methods for accelerated learning, reasons behind poor judgement, and strategies for learning from successes and failures. Through real-life examples and interactive activities, participants will learn to make more deliberate and informed decisions, potentially doubling their learning capacity. The module also teaches how to systematically reflect on experiences and extract valuable lessons.</p>

                    <h3><strong>Creative thinking and the fine art of success</strong></h3>
                    <p>This intensive module helps participants understand how to enhance individual and collective creativity. Learn why many organisations view creativity as a crucial strategic capability. Discover techniques for fostering creativity to achieve higher levels of organisational innovation. Unlock your personal and organisational creative potential through interactive lectures, case study discussions and experiential exercises.</p>
                </div>

                <button name="show more details" aria-label="show more details" class="cbtn-outline mt-5" data-target="1" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>Live online modules</h3>
                <ul>
                    <li>My leadership journey</li>
                    <li>Relational resilience and neuroscience</li>
                    <li>Innovation drivers and landscape</li>
                    <li>Revisiting your leadership narrative</li>
                    <li>Operational excellence</li>
                    <li>Understanding the global supply chain</li>
                    <li>Marketing in the digital age</li>
                    <li>Environmental, social, and governance – future directions and trends</li>
                    <li>Global perspectives and challenges – the world at a crossroads</li>
                    <li>Digital transformation</li>
                    <li>Commercial acumen (simulation – 5 sessions)</li>
                    <li>Designing collaborative strategies and building new social capital</li>
                </ul>

                <div class="readmore-content mt-5" style="display: none;">
                    <h3><strong>My leadership journey</strong></h3>
                    <p>The live virtual modules begin with the real-life leadership journey of an outstanding global leader. We will learn about the challenges this leader faced and overcame, as well as advice on reaching and maintaining top leadership positions.</p>
                    <h3><strong>Relational resilience and neuroscience</strong></h3>
                    <p>Explore the science of leadership, teams and resilience from a neuroscience perspective. This framework helps leaders understand human behaviour and develop strategies for team collaboration and relational resilience in volatile times. Learn how senior leaders create an environment of trust and open communication to strengthen teams, foster collaboration and drive organisational success.</p>
                    <h3><strong>Innovation drivers and landscape</strong></h3>
                    <p>This module explores innovation models beyond technology and disruption. Understand innovation drivers, key enablers and success factors in today's innovation economy. Identify emerging trends, relevant technologies and competitive approaches. Learn to adapt your organisation to changing market environments and promote a culture of innovation and continuous improvement to accelerate innovation agility.</p>
                    <h3><strong>Revisiting your leadership narrative</strong></h3>
                    <p>Return to your learning narratives in this session. Trace your journey since the programme began, evaluate your growth and applied learnings. Consider whether you have started developing your career roadmap.</p>
                    <h3><strong>Operational excellence</strong></h3>
                    <p>Learn from real-world case studies about key principles of excellence, the importance of ongoing scepticism, setting precise objectives and goals, and establishing clear values that govern team culture.</p>
                    <h3><strong>Understanding the global supply chain</strong></h3>
                    <p>Explore supply chain partnerships in today's business landscape. Examine how ethical and environmental concerns impact the supply chain and why developing partnerships aligned with organisational values and goals is essential. Unravel supply chain complexities and the impact of decisions on the broader ecosystem. Learn to balance stakeholder interests in creating partnerships.</p>
                    <h3><strong>Marketing in the digital age</strong></h3>
                    <p>Learn how businesses can use digital channels to reach and engage customers. Develop effective digital marketing strategies aligned with business goals and customer needs. Understand how to measure and optimise campaigns for maximum impact.</p>
                    <h3><strong>Environmental, social, and governance – future directions and trends</strong></h3>
                    <p>Gain insight into future developments in environmental, social, and governance investing and sustainable finance. Learn to leverage environmental, social, and governance practices for long-term value creation and enhanced stakeholder reputation. Explore latest trends and best practices, including sustainable investing, social responsibility and governance's role in creating accountability.</p>
                    <h3><strong>Global perspectives and challenges – the world at a crossroads</strong></h3>
                    <p>Gain a comprehensive overview of global challenges facing companies and organisations. Learn about shifting economic blocs, china's continued rise, the future of jobs, finance, income inequality, geopolitics and climate crisis. Explore key trends shaping the global economy and society, and discuss how businesses can navigate these challenges to thrive long-term.</p>
                    <h3><strong>Digital transformation</strong></h3>
                    <p>Explore how new technologies, global connectivity and changing business dynamics have altered work and life. Learn new approaches to strategic thinking, leadership and management. In this connected world, we must learn from the future, not just the past. Examine digital transformation from a futuristic perspective, debating forces, technologies and market dynamics driving future business success.</p>
                    <h3><strong>Commercial acumen (simulation – 5 sessions)</strong></h3>
                    <p>Address the challenge many senior managers face in judging the financial strength of their decisions. This session provides an overview of financial management for creating higher market values and its impact on managers' daily lives. Through a business simulation, learn to understand financial statements, make financial decisions, analyse financials, build cost-pricing strategies, forecast cash flows, identify opportunities, select investment projects, analyse new markets, revisit strategy, and understand profitable growth drivers.</p>
                    <h3><strong>Designing collaborative strategies and building new social capital</strong></h3>
                    <p>Learn how collaborative strategies and social capital are essential for successful leadership. Discover how to foster teamwork, communication and trust within organisations, leading to improved problem-solving, decision-making and productivity. Learn to build a collaborative culture and social capital to enhance organisational reputation, access new opportunities and valuable resources.</p>
                </div>

                <button name="show more details" aria-label="show more details" class="cbtn-outline mt-5" data-target="2" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <hr class="border-primary" />
        </div>
    </section>
    <section>
        <div class="md:px-44 md:py-10 p-5">
            <h2 class="font-tnr">
                Programme outcome
            </h2>
        </div>
        <figure class="md:h-auto h-[250px] object-cover">
            <?php echo wp_get_attachment_image(466, "large", false, [
                "loading" => "lazy",
                "class" => "image-cover",
            ]); ?>
            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                            466
                                        ); ?></figcaption>
        </figure>
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <div>
                <h3>
                    A personalised leadership playbook
                </h3>
                <p>Participants will create a tangible take-away that consolidates their learnings and reflections from the programme, including a specific action plan for themselves and their organisation to implement immediately.</p>
            </div>
            <div>
                <h3>
                    Immerse
                </h3>
                <p>Gain insights into major business and leadership challenges of the 21st century and learn how scenarios can be used to examine potential future contexts and their implications for leadership initiatives.</p>
            </div>
            <div>
                <h3>
                    Explore
                </h3>
                <p>Develop expertise and explore resources, models and frameworks to excel in addressing contemporary issues.</p>
            </div>
            <div>
                <h3>
                    Build
                </h3>
                <p>Interact and build a network of high-achieving peers from diverse organisations and industries worldwide.</p>
            </div>
            <div>
                <h3>
                    Lead
                </h3>
                <p>Become a purposeful leader, equipped to tackle today's greatest challenges with a clear vision that fuels important strategic decisions and positively impacts society.</p>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white">
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <h2 class="font-tnr">
                Oxford Business Alumni Network
            </h2>
        </div>
        <figure class="md:h-auto h-[250px]">
            <?php echo wp_get_attachment_image(465, "large", false, [
                "loading" => "lazy",
                "class" => "image-cover",
            ]); ?>
            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                            465
                                        ); ?></figcaption>
        </figure>
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <p>
                Upon completing the programme, you become eligible for lifelong membership in the Oxford Business Alumni network, the official global business alumni network of Saïd Business School, University of Oxford.
                <br><br>

                With over 24,000 members in more than 150 countries and 20 chapters worldwide, this network represents a truly world-class international business community.
            </p>
            <h3>Your alumni benefits include:</h3>
            <ul>
                <li>A lifelong Oxford business alumni email address</li>
                <li>Membership of global Oxford business alumni chapters and online regional groups</li>
                <li>Exclusive online and in-person invitations to events globally and in Oxford</li>
                <li>Access to our LinkedIn group to connect with alumni online and open direct communication</li>
                <li>Alumni rates for further study at the school</li>
                <li>News and updates from the school and opportunities to blog or share your news</li>
            </ul>
        </div>
    </section>
    <section class="md:py-10 py-5 md:pb-0 pb-0">
        <div class="md:px-44 md:mb-10 mb-5 px-5">
            <h2 class="font-tnr">
                Learn from world-class faculty
            </h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="faculty-slick-prev md:left-32 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>
            <button name="slide next" aria-label="slide next" class="faculty-slick-next md:right-32 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>


            <div class="slick-slider-faculty md:px-44 px-5 relative z-0">
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Phyllida_Hancock.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 477; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Phyllida Hancock</p>
                        <p class="mb-2 text-left">Teaches Inspirational leadership</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="David_Trevaskis.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 478; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">David Trevaskis</p>
                        <p class="mb-2 text-left">Teaches Persuasion and influence</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Sue_Dopson.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 479; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Sue Dopson</p>
                        <p class="mb-2 text-left">Professor of Organisational Behaviour</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Rachel_Botsman.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 480; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Rachel Botsman</p>
                        <p class="mb-2 text-left">Associate Fellow</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Peter_Hanke.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 481; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Peter Hanke</p>
                        <p class="mb-2 text-left">Associate Fellow</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Trudi_Lang.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 482; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Trudi Lang</p>
                        <p class="mb-2 text-left">Senior Fellow in Management Practice</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Ian_Goldin.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 483; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Ian Goldin</p>
                        <p class="mb-2 text-left">Professor of Globalisation and Development</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Joel_Shapiro.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 484; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Joel Shapiro</p>
                        <p class="mb-2 text-left">Professor of Financial Economics</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Andrew_Stephen.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 485; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Andrew Stephen</p>
                        <p class="mb-2 text-left">Professor of Marketing</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Steve_New.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 486; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Steve New</p>
                        <p class="mb-2 text-left">Associate Professor in Operations Management</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Pinar_Ozcan.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 487; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Pinar Ozcan</p>
                        <p class="mb-2 text-left">Professor of Entrepreneurship and Innovation</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Nelisha_Wickremasinghe.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 488; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Nelisha Wickremasinghe</p>
                        <p class="mb-2 text-left">Leadership and change consultant</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Paul_Fisher.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 489; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Paul Fisher</p>
                        <p class="mb-2 text-left">Programme Director, Oxford Senior Executive Leadership Programme</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Michael_Smets.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 490; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Michael Smets</p>
                        <p class="mb-2 text-left">Professor of Management</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="md:py-10 py-5">
        <div class="md:px-44 md:mb-10 mb-5 px-5">
            <h2 class="font-tnr">
                Global industry experts
            </h2>
        </div>
        <div class="relative">

            <button name="slide previous" aria-label="slide previous" class="global-experts-slick-prev md:left-32 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>

            <button name="slide next" aria-label="slide next" class="global-experts-slick-next md:right-32 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>

            <div class="slick-slider-global-experts h-full md:px-44 px-5 relative z-0">
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Edward_Rogers.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 495; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Edward Rogers</p>
                        <p class="mb-2 text-left">Ex Chief Knowledge Officer at Nasa</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Jamie_Anderson.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 491; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Jamie Anderson</p>
                        <p class="mb-2 text-left">Professor of Reimagining the future and Fine Art of Success</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Anton_Musgrave.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 492; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Anton Musgrave</p>
                        <p class="mb-2 text-left">Strategy, Innovation and Digital Transformation</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Olivier_Tabatoni.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 493; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Olivier Tabatoni</p>
                        <p class="mb-2 text-left">Professor of Finance and Strategy</p>
                    </div>
                </div>
                <div>
                    <div class="p-6 text-center h-full">
                        <figure onclick="Mike_Grandinetti.showModal()" class="aspect-square w-full overflow-hidden group cursor-pointer">
                            <?php $image_id = 494; ?>
                            <img width="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[1] ?>" height="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[2] ?>" data-lazy="<?php echo wp_get_attachment_image_src($image_id, "medium", false)[0] ?>" srcset="<?php echo wp_get_attachment_image_srcset($image_id, "medium", false) ?>" decoding="async" sizes="<?php echo wp_get_attachment_image_sizes($image_id, "medium", false) ?>" alt="<?php echo wp_get_attachment_caption($image_id); ?>" class="image-cover group-hover:scale-105 transition">

                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Mike Grandinetti</p>
                        <p class="mb-2 text-left">Professor of Innovation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-10 p-5 md:px-44">
        <hr class="border-primary md:mb-10 mb-5 border-2">
        <div>
            <h2 class="md:mb-10 mb-5 font-tnr">Certificate</h2>
            <p>Upon successful completion of the programme, participants receive a verified certificate from Saïd Business School, University of Oxford at the graduation ceremony held on the Oxford campus.</p>

            <figure class="border border-primary">
                <?php echo wp_get_attachment_image(548, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption(548); ?></figcaption>
            </figure>
        </div>
        <p class="mt-5">
            Please note: The certificate image is for illustrative purposes only and may be subject to change at the discretion of Saïd Business School, University of Oxford.
        </p>
        <hr class="border-primary md:mt-10 mt-5 border-2">
    </section>


    <!-- Modals For Each person -->
    <div>
        <dialog id="David_Trevaskis" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(478, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    478
                                                ); ?></figcaption>
                </figure>

                <div>
                    <h3>
                        David Trevaskis
                    </h3>
                    <h4 class="mb-4">
                        Teaches Persuasion and influence
                    </h4>
                    <p>
                        David Trevaskis trained as an actor and his directing reflects this, he believes the director’s job is one of service; of the play and its message, of the actors and their needs and most importantly in service of the audience. He’s a facilitator with a proven track record of delivering high impact commutation skills sessions. Specialising in presentations, difficult conversations, executive presence and public speaking. David has a postgraduate certificate of professional acting from Academy of Live and Recorded Arts and a Bachelor of Divinity from the University of St Andrews.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Phyllida_Hancock" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(477, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    477
                                                ); ?></figcaption>
                </figure>

                <div>
                    <h3>
                        Phyllida Hancock
                    </h3>
                    <h4 class="mb-4">
                        Teaches Inspirational leadership
                    </h4>
                    <p>
                        Phyllida Hancock is a Senior Programme Director with Olivier Mythodrama and leads Mythodrama programmes for organisations across the private and public sectors in the UK and overseas. She also manages a leadership development programme for a large global client and has a liaison role with several other clients. Phyllida was a consultant for many years in an interdepartmental ‘futurefocus’ facility working across government on scenario planning and project working. In addition to her work with Olivier Mythodrama, she works as a freelance facilitator on leadership and organisational development programmes across sectors, focusing particularly on communication and presence skills
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Sue_Dopson" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(479, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    479
                                                ); ?></figcaption>
                </figure>

                <div>
                    <h3>
                        Sue Dopson
                    </h3>
                    <h4 class="mb-4">
                        Professor of Organisational Behaviour
                    </h4>
                    <p>
                        Sue Dopson has a BSc in Sociology, MSc in Sociology with special reference to medicine, MA (Oxon) and a PhD studying the introduction of general management into the NHS. She is a fellow of the academy of Social Sciences. Dopson conducts research in a range of public and private sector organisations. Her research lies in the area of innovation, change and healthcare studies. She has led a number of research projects in public and private sector organisations
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Rachel_Botsman" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(480, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    480
                                                ); ?></figcaption>
                </figure>

                <div>
                    <h3>
                        Rachel Botsman
                    </h3>
                    <h4 class="mb-4">
                        Associate Fellow
                    </h4>
                    <p>
                        Named one of the world’s 50 most influential management thinkers, a Young Global Leader by the World Economic Forum and one of Fast Company’s most Creative People in Business, Rachel is a leading expert and author on trust in the digital world. Rachel has lived and worked on four different continents, giving her a global perspective on the important issues of our times. She currently lives in Oxford and is passionate about empowering the next generation to make informed decisions about trust in a rapidly changing world.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Peter_Hanke" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(481, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    481
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Peter Hanke
                    </h3>
                    <h4 class="mb-4">
                        Associate Fellow
                    </h4>
                    <p>
                        Peter Hanke is a conductor of classical music and an associate of the Centre for Art and Leadership at the Copenhagen Business School. An experienced classical music conductor and performer, Peter investigates the connections between leadership and music, philosophy and performance theory. Since 2003 Peter has delivered numerous experiential learning sessions on conducting leadership at Saïd Business School, University of Oxford. He holds a BA in Musicology from the University of Copenhagen and an MA in Conducting from the Royal Danish Academy of Music. He received the Einar Hansens Research Award in 2005.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Trudi_Lang" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        482,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    482
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Trudi Lang
                    </h3>
                    <h4 class="mb-4">
                        Senior Fellow in Management Practice
                    </h4>
                    <p>
                        As a practice faculty, Trudi Lang works with executives to support them in the achievement of their strategic objectives. Her research, executive education and consulting focuses on strategising in dynamic environments. In addition to holding a PhD (DPhil, Management Studies) from the University of Oxford, Trudi has an MSc degree in Management Research from Oxford, graduating with Distinction and winning the Templeton College Nautilus Award for Outstanding Academic Achievement. She also holds an MBA (Executive) (Distinction) from Curtin University, Australia, and an MA (Political Science) from the University of Hawaii, USA. She is a member of the Strategic Management Society and the Academy of Management.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Ian_Goldin" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        483,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    483
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Ian Goldin
                    </h3>
                    <h4 class="mb-4">
                        Professor of Globalisation and Development
                    </h4>
                    <p>Ian Goldin was the founding Director of the Oxford Martin School from September 2006 to September 2016. He is currently Oxford University Professor of Globalisation and Development, Senior Fellow at the Oxford Martin School, a Professorial Fellow at the University’s Balliol College and responsible for the Oxford Martin School Programmes on the Future of Work, Technological and Economic Change and Future of Development. During his decade as Director, the School established 45 programmes of research, bringing together more than 500 academics from across Oxford, from over 100 disciplines and becoming the world’s leading centre for interdisciplinary research into critical global challenges.
                    </p>

                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Joel_Shapiro" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        484,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    484
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Joel Shapiro
                    </h3>
                    <h4 class="mb-4">
                        Professor of Financial Economics
                    </h4>
                    <p>
                        Joel Shapiro’s main area of expertise is the regulation and governance of financial institutions. Joel has conducted research on credit ratings, banking regulation, corporate governance, executive compensation, LIBOR, ESG and conflicts of interest in retail finance. He is published in top international journals such as the Journal of Finance, Journal of Financial Economics and the Review of Financial Studies. Prior to joining Saïd Business School, Joel was a tenured associate professor at Universitat Pompeu Fabra in Barcelona. He received his PhD in Economics in 2000 from Princeton University. He has been a visiting lecturer for the University of Wisconsin-Madison and the New York University Stern School of Business as well as visiting researcher for the Federal Reserve Bank of New York. Joel is also an Associate Editor at the Journal of Corporate Finance.
                    </p>

                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Andrew_Stephen" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        485,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    485
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Andrew Stephen
                    </h3>
                    <h4 class="mb-4">
                        Professor of Marketing
                    </h4>
                    <p>

                        Andrew Stephen is one of the world’s leading academic marketing experts. At Oxford Saïd, Andrew is Associate Dean of Research, responsible for all academic matters at the School. As L’Oréal Professor of Marketing, he is the University’s most-senior marketing academic and leads the School’s group of marketing faculty members and research staff, as well as serving as the director of the Oxford Future of Marketing Initiative. Andrew is one of the world’s top marketing academics and is a leading voice on the future of the marketing, media and advertising industries. His research and industry engagement work focuses predominantly on issues related to new technologies in marketing (such as AI) and how both customers and businesses can benefit from new technologies.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Steve_New" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        486,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    486
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>Steve New</h3>
                    <h4 class="mb-4">Associate Professor in Operations Management</h4>
                    <p>
                        Steve New’s main areas of expertise are supply chain management and process improvement. A leading authority on supply chain management, Steve’s interests lie in developing a more rigorous appreciation of how individuals and organizations construct and interpret their environment and the systems in which they operate. Steve began his career as an engineer, working for Rolls Royce plc while completing a degree in physics at Southampton University. After working in management consultancy for Collinson Grant, he went to Manchester Business School (MBS) where he completed his doctorate on the use of visual interactive modelling for decision support in manufacturing
                    </p>

                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Pinar_Ozcan" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        487,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    487
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>Pinar Ozcan</h3>
                    <h4 class="mb-4">Professor of Entrepreneurship and Innovation</h4>
                    <p>
                        Pinar Ozcan is Professor of Entrepreneurship and Innovation. She also serves as the Director of the Oxford Future of Finance and Technology (Fintech) Initiative. Pinar specialises in entrepreneurship and strategy in technology markets. Her current research includes the open banking project, where she examines the industry disruption in banking through regulation and entry of fintechs, and the development of the sharing economy. Pinar completed her PhD at the Oxford Senior Executive Leadership Programme Technology Ventures Programme (STVP) at the Oxford Senior Executive Leadership Programme University Management Science and Engineering Department and also holds a Master of Science and dual Bachelor’s degrees from Oxford Senior Executive Leadership Programme.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Nelisha_Wickremasinghe" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        488,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    488
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>Nelisha Wickremasinghe</h3>
                    <h4 class="mb-4">Leadership and change consultant</h4>
                    <p>
                        Nelisha Wickremasinghe is a chartered psychologist, author, educator and international leadership/organisational change consultant. She has worked in the field of human development for over 30 years. Nelisha has postgraduate degrees in psychology and family therapy, a master’s in public sector management and a doctorate in organisational change. Nelisha works internationally with large corporates, teaching and consulting on healthy growth. In addition to her role at Saïd Business School, she is also an associate at the Ashridge Hult Business School and founding director/lead practitioner at The Dialogue Space, which provides therapeutic depth development for individuals, families and employees within organisations.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Paul_Fisher" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        489,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    489
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>Paul Fisher</h3>
                    <h4 class="mb-4">Programme Director, Oxford Senior Executive Leadership Programme</h4>
                    <p>
                        Paul Fisher is Programme Director of the Oxford Programme on Negotiation (OPN) which he has helped to design and develop since its inception in 2004. Paul also teaches on OPN and other programmes with topics including preparation in negotiations, decision-making, persuasion, stakeholder management, managing emotions, multi-party & multi-issue negotiations and virtual negotiations. Paul has co-written a number of negotiation simulations, including one on the building of a football stadium and the other designed specifically for virtual negotiations. Paul has over 20 years’ experience in the field of communications, education and capacity building, helping private and public sector organisations to achieve their full potential.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Michael_Smets" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(
                        490,
                        "medium",
                        false,
                        array("loading" => "lazy", "class" => "image-cover")
                    ); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    490
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>Michael Smets</h3>
                    <h4 class="mb-4">Professor of Management</h4>
                    <p>
                        Michael Smets regularly speaks at academic and practitioner conferences and delivers executive education programmes for leading companies in the legal, consulting, reinsurance and healthcare sectors. His research is published in leading academic journals, academic and professional handbooks and has been featured in the national and professional press. Michael obtained the equivalent of a BA in Business and Economics from Cologne University in Germany before joining Saïd Business School for his postgraduate education. There he obtained an MSc in Management Research and a DPhil in Management before accepting a post-doc position jointly held by Saïd Business School and the School of Management at the University of Alberta, Canada.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>



        <dialog id="Jamie_Anderson" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(491, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    491
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Jamie Anderson
                    </h3>
                    <h4 class="mb-4">
                        Professor of Reimagining the future and Fine Art of Success
                    </h4>
                    <p>

                        Jamie has held teaching positions at some of the world’s top business schools, such as London Business School, IMD, ESMT Berlin and the University of Melbourne. Named as a “management guru” by the Financial Times, Jamie has also been listed as one of the world’s top 25 management thinkers by the journal Business Strategy Review. He is passionate about teaching strategy, innovation and creativity.

                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Anton_Musgrave" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(492, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    492
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Anton Musgrave
                    </h3>
                    <h4 class="mb-4">
                        Strategy, Innovation and Digital Transformation
                    </h4>
                    <p>
                        Anton Musgrave lectures regularly for London Business School, Duke CE, and IMD among others. He is passionate about teaching business strategy, innovation and the future. He shares an insightful understanding of the drivers of long-term business success, shifting business models, and what it takes to stay ahead of the market.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Olivier_Tabatoni" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(493, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    493
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Olivier Tabatoni
                    </h3>
                    <h4 class="mb-4">
                        Professor of Finance and Strategy
                    </h4>
                    <p>
                        Olivier Tabatoni is Associate Fellow at the Saïd Business School, University of Oxford. He was Visiting Professor at the Kellogg School of Management, Northwestern University and the Haas Business School, Berkeley.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Mike_Grandinetti" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(494, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    494
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Mike Grandinetti
                    </h3>
                    <h4 class="mb-4">
                        Professor of Innovation
                    </h4>
                    <p>
                        Mike Grandinetti is an Adjunct Professor at the School of Engineering at Brown University. Mike has been continuously active in the fields of innovation, entrepreneurship, human-centric design and digital marketing.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
        <dialog id="Edward_Rogers" class="modal">
            <div class="modal-box flex gap-10 md:flex-row flex-col rounded md:p-10 p-5 md:max-w-[60%]">
                <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                    <?php echo wp_get_attachment_image(495, "medium", false, array(
                        "loading" => "lazy",
                        "class" => "image-cover",
                    )); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    495
                                                ); ?></figcaption>
                </figure>
                <div>
                    <h3>
                        Edward Rogers
                    </h3>
                    <h4 class="mb-4">
                        Ex Chief Knowledge Officer at Nasa
                    </h4>
                    <p>
                        Edward Rogers joined NASA in 2003 and served as the Chief Knowledge Officer at the Goddard Space Flight Center for 17 years. Dr. Rogers earned his PhD from Cornell University and has taught executives across the globe for more than a decade.
                    </p>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>
    </div>
    <!-- Close Modals For Each person -->


    <!-- start slick slider -->

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css" />
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script async>
        $(document).ready(function() {
            $('.slick-slider-faculty').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                autoplay: false,
                autoplaySpeed: 2500,
                adaptiveHeight: true,
                lazyLoad: 'ondemand',
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.faculty-slick-prev').click(function() {
                $('.slick-slider-faculty').slick('slickPrev');
            });

            $('.faculty-slick-next').click(function() {
                $('.slick-slider-faculty').slick('slickNext');
            });
        });
        $(document).ready(function() {
            $('.slick-slider-global-experts').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                autoplay: false,
                autoplaySpeed: 2500,
                adaptiveHeight: true,
                lazyLoad: 'ondemand',
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.global-experts-slick-prev').click(function() {
                $('.slick-slider-global-experts').slick('slickPrev');
            });

            $('.global-experts-slick-next').click(function() {
                $('.slick-slider-global-experts').slick('slickNext');
            });
        });
    </script>

    <!-- End slick slider -->


    <section class="md:px-44 md:py-10 p-5">
        <h2 class="font-tnr text-center md:mb-10 mb-5">Cohort statistics</h2>
        <div class="flex md:flex-row flex-col justify-between md:gap-10 gap-5">
            <div class="basis-[40%]">
                <h3 class="mb-3 text-center">Work experience</h3>
                <figure>
                    <?php echo wp_get_attachment_image(456, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    456
                                                ); ?></figcaption>
                </figure>
                <h4 class="my-3 text-center">Average work experience: 22 years</h4>
            </div>
            <div>
                <h3 class="mb-3">Designation</h3>
                <ul>
                    <li>
                        Chief Executive Officer
                    </li>
                    <li>
                        Managing Director
                    </li>
                    <li>
                        President
                    </li>
                    <li>
                        Director
                    </li>
                    <li>
                        Founder
                    </li>
                    <li>
                        Vice President
                    </li>
                    <li>
                        Chief Business Officer
                    </li>
                    <li>
                        Chief Marketing Officer
                    </li>
                    <li>
                        General Manager
                    </li>
                    <li>
                        Dean
                    </li>
                    <li>
                        Division Manager
                    </li>
                    <li>
                        Business Head
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-3">Industry</h3>
                <ul class="list-disc">
                    <li>Banking</li>
                    <li>Consulting</li>
                    <li>Edtech</li>
                    <li>Entertainment</li>
                    <li>Financial Services</li>
                    <li>Government</li>
                    <li>Healthcare</li>
                    <li>Information Technology</li>
                    <li>Manufacturing</li>
                    <li>NGO</li>
                    <li>Real Estate</li>
                    <li>Travel</li>
                </ul>
            </div>
        </div>
        <h3 class="text-center md:my-10 my-5">Companies</h3>
        <figure class="md:mt-10 mt-5">
            <?php echo wp_get_attachment_image(458, "large", false, [
                "loading" => "lazy",
                "class" => "image-cover",
            ]); ?>
            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                            458
                                        ); ?></figcaption>
        </figure>
        <hr class="border-primary md:mt-10 mt-5" />
    </section>
    <section class="md:py-10 py-5">
        <div class="md:px-44 px-5">
            <h2 class="font-tnr md:mb-10 mb-5">
                The Oxford experience
            </h2>
            <p>
                Oxford stands among the world's leading research universities. For over eight centuries, the University of Oxford has nurtured some of the most influential and respected leaders globally. Throughout its history, gifted leaders have both studied and taught at the university. These include 28 British prime ministers, at least 30 international leaders, 55 Nobel prize winners and 120 Olympic medal winners. <br><br>
                Our faculty deliver programmes that blend inspirational teaching with innovative and experiential learning methods. They bring diverse backgrounds, combining academic research with practical experience. <br><br>
                Our programmes offer participants the chance to immerse themselves in the classic Oxford experience. This may involve enjoying a formal dinner in an Oxford college, networking with global participants, or attending classes in our award-winning facilities.

            </p>
            <br>
            <h3 class="md:mb-10 mb-5">
                Explore the Oxford campus
            </h3>
            <div class="bg-gray-200 rounded-none">
                <figure class="cursor-pointer relative group" onclick="lazyLoadVideo('qYrS3ORfPr4', this)">
                    <?php echo wp_get_attachment_image(539, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-video",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    539
                                                ); ?></figcaption>
                    <button class="play-btn">
                        <svg class="group-hover:opacity-0 ml-1 transition absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="1" d="m3 22l18-10L3 2z" />
                        </svg>

                        <svg class="group-hover:opacity-100 transition opacity-0 ml-1 absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="2" d="m3 22l18-10L3 2zm2-3l12.6-7L5 5zm2-3l7.2-4L7 8zm2-3l1.8-1L9 11z" />
                        </svg>
                    </button>
                </figure>
            </div>
            <h3 class="my-10">
                Hear from Paul Fisher, Programme Director
            </h3>
            <div class="bg-gray-200 rounded-none">
                <figure class="cursor-pointer relative group" onclick="lazyLoadVideo('nAdBOEw6Kbc', this)">
                    <?php echo wp_get_attachment_image(540, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-video",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                                    540
                                                ); ?></figcaption>
                    <button class="play-btn">
                        <svg class="group-hover:opacity-0 ml-1 transition absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="1" d="m3 22l18-10L3 2z" />
                        </svg>

                        <svg class="group-hover:opacity-100 transition opacity-0 ml-1 absolute inset-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-width="2" d="m3 22l18-10L3 2zm2-3l12.6-7L5 5zm2-3l7.2-4L7 8zm2-3l1.8-1L9 11z" />
                        </svg>
                    </button>
                </figure>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white">
        <div class="md:px-44 px-5 md:py-10 py-5">
            <h2 class="font-tnr md:mb-10 mb-5">
                Is the programme right for me?
            </h2>
            <ul>
                <li>10+ years of relevant work experience with demonstrated success in leading high-performance teams/impactful projects</li>
                <li>Rich domain expertise with significant responsibilities and proven career advancement in corporate, entrepreneurial, <br class="md:block hidden"> business, or public sector domains</li>
                <li>At least a graduate degree with a strong academic record</li>
                <li>Curious and motivated leader seeking solutions to challenges faced by yourself, your organisation, and society at large</li>
            </ul>

        </div>
        <figure class="class=" md:h-auto h-[250px] object-cover w-full md:object-contain"">
            <?php echo wp_get_attachment_image(462, "large", false, [
                "loading" => "lazy",
                "class" => "image-cover",
            ]); ?>
            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                            462
                                        ); ?></figcaption>
        </figure>
    </section>
    <section>
        <div class="md:px-44 md:py-10 p-5">
            <h2 class="font-tnr md:mb-10 mb-5">
                Application process
            </h2>
            <p>
                When reviewing applications, the Admission's Committee aims for a balance of organisational and industry representation, while considering candidates' professional experience and current responsibilities.
            </p>

            <h3>
                The Admission's Committee evaluates:
            </h3>
            <ul class="mb-3">
                <li>Application responses
                </li>
                <li>Curriculum vitae or LinkedIn profile</li>
            </ul>
            <p class="block">
                We may conduct one-on-one discussions with candidates to assess interpersonal and communication skills, work experience, career focus and motivations for pursuing this programme.
            </p>
            <div class="flex flex-wrap md:gap-8 gap-5 md:my-10 my-5">
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        1
                    </div>
                    <h4>Application submission</h4>
                    <p class="text-left mb-0">
                        Answer the questions and submit your CV/upload or LinkedIn profile</p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        2
                    </div>
                    <h4>Application review</h4>
                    <p class="text-left mb-0">
                        Admission Committee will verify your application and evaluate it for eligibility and fit to programme</p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        3
                    </div>
                    <h4>Interaction</h4>
                    <p class="text-left mb-0">
                        Select candidates to interact with the Admissions Director</p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        4
                    </div>
                    <h4>Result</h4>
                    <p class="text-left mb-0">
                        Receive a decision on your programme application via an email from the Admissions Committee.</p>
                </div>
            </div>
            <p>
                We do not discriminate against any person based on race, colour, sex or sexual orientation, gender identity, religion, age, national or ethnic origin, political beliefs, veteran status, or disability in admission to, access to, treatment in, or employment in this programme.
            </p>
            <a aria-label="goto apply now page" href="/apply-now" class="cbtn-outline">Apply now</a>
        </div>
        <figure class="w-full md:h-[400px] h-[250px] object-cover">
            <?php echo wp_get_attachment_image(460, "large", false, [
                "loading" => "lazy",
                "class" => "image-cover",
            ]); ?>
            <figcaption class="sr-only"><?php echo wp_get_attachment_caption(
                                            460
                                        ); ?></figcaption>
        </figure>
    </section>
    <section class="md:px-44 md:py-10 p-5">
        <div class="md:mb-10 mb-5">
            <h2 class="font-tnr md:mb-8 mb-5">
                Inquire for your organisation
            </h2>
            <p>
                Taking this programme with colleagues can enhance communication and accelerate impact within your organisation. It also fosters meaningful discussions among participants.
            </p>
            <a aria-label="goto get in touch" href="/get-in-touch" class="cbtn-outline">Get in touch</a>
        </div>
        <div>
            <h2 class="font-tnr md:mb-8 mb-5">
                Refer a colleague
            </h2>
            <p>
                Recommend suitable candidates who you believe will benefit from Oxford's Senior Executive Leadership Programme. You will earn USD 750 if they enrol. Additionally, they will receive a USD 750 waiver on the programme fee.
            </p>
            <a aria-label="goto refer and earn page" href="https://referrals.xedinstitute.org/hgKaSP/join" class="cbtn-outline">Refer and earn</a>
        </div>
    </section>
</article>
<?php get_footer(); ?>