<?php
// Template Name: Home Page

get_header();

$hero_sec = get_field("hero_section");
$program_details = get_field("program_details");
?>
<article>
    <section>
        <figure class="w-full md:h-full h-[400px] md:p-0 p-5">
            <?php $image = $hero_sec["hero_image"];
            $image_sizes = $image["sizes"]; ?>
            <img src="<?php echo $image["sizes"]["large"] ?>" sizes="(min-width: 600px) 50vw, 70vw" alt="<?php echo $image["alt"] ?>" loading="eager" width="500" height="500" class="w-full h-full object-cover">
            <figcaption class="sr-only"><?php echo $image["alt"] ?></figcaption>
        </figure>

        <div class="md:px-44 md:py-10 p-5">
            <h1 class="text-center font-tnr mb-5">
                <?php echo $hero_sec["program_heading"]; ?>
            </h1>
            <div class="md:flex-row flex-col flex items-center gap-3 justify-center md:mb-10 mb-5">
                <a href="<?php echo $hero_sec["apply_now"]["url"] ?>" class="cbtn-primary"><?php echo  $hero_sec["apply_now"]["title"] ?></a>
                <a href="<?php echo $hero_sec["review_my_application"]["url"] ?>" class="cbtn-outline"><?php echo  $hero_sec["review_my_application"]["title"] ?></a>
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
    <section class="md:px-44 md:py-10 py-5 px-8 bg-[#D6D3CE]">
        <ul class="list-none flex flex-wrap gap-5 items-center justify-between">
            <?php foreach ($program_details["list"] as $item) { ?>
                <li class="flex items-center md:basis-1/4 flex-1 basis-full gap-5">
                    <figure class="w-[60px] h-full">

                        <?php $image = $item["icon"];
                        $image_sizes = $image["sizes"]; ?>

                        <img src="<?php echo $image["url"] ?>" sizes="(min-width: 600px) 50vw, 70vw" alt="<?php echo $image["alt"] ?>" loading="lazy" width="50" height="50" class="w-[50px] h-full object-contain">

                        <figcaption class="sr-only"><?php echo $image["alt"] ?></figcaption>
                    </figure>

                    <div>
                        <h3 class="md:text-2xl text-xl"><?php echo $item["subtitle"] ?></h3>

                        <p class="mb-0 md:text-2xl text-lg font-bold"><?php echo $item["title"] ?></p>

                        <?php if (!empty($item["modal"]["modal_name"])) { ?>

                            <button class="mt-1 block underline" onclick="<?php echo $item["modal"]["modal_name"] ?>.showModal()"><?php echo $item["modal"]["title"] ?></button>

                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>
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
                    <figure class="cursor-pointer" onclick="lazyLoadVideo('7h9rj5BkzjM', this)">
                        <?php echo wp_get_attachment_image("424", "full", false, array('loading' => 'lazy', "class" => "image-video")) ?>
                        <figcaption class="sr-only"></figcaption>

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section style="background: url(<?php echo get_template_directory_uri() ?>/media/key-highlights-bg.webp);background-position:center;" class="md:px-44 bg-center bg-no-repeat md:py-10 p-5 relative bg-primary text-white">
        <div>
            <h2 class="md:mb-20 mb-5 font-tnr text-4xl">
                Key highlights
            </h2>
            <ul class="list-none flex flex-wrap md:gap-16 gap-5">
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/1.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Campus immersion
                        <br>
                        at Oxford
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/4.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Industry immersion <br>
                        in Dubai
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/7.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Oxford Business Alumni <br>
                        (OBA) Network
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/5.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Learn from Oxford faculty <br>
                        and global industry experts
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/6.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Live online <br>
                        sessions </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/2.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Certificate from <br>
                        Saïd Business School<br>
                        University of Oxford
                    </p>
                </li>
                <li class="flex items-center md:basis-1/3 flex-1 basis-full md:gap-10 gap-5">
                    <figure class="shrink-0">
                        <img width="80" src="<?php echo get_template_directory_uri() ?>/media/key-highlights/3.webp" alt="" loading="lazy">
                        <figcaption></figcaption>
                    </figure>
                    <p class="md:text-2xl mb-0 text-xl font-semibold text-left">
                        Highly personalised <br>
                        leadership development <br>
                        journey
                    </p>
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
                    Campus immersion at Oxford (To be finalized)
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
                    <p>
                        This session will focus on findings from Saïd Business School, University of Oxford chief executive officer report, which interviewed over 150 global leaders. Key findings will be discussed, including how chief executive officers have had to reinvent their communication, leadership, and strategy in a world where trust is at a premium. The session will also explore how chief executive officers must find new ways to establish organisational values and culture, build teams, and align their companies.
                    </p>

                    <h3><strong>Scenario planning</strong></h3>
                    <p>
                        This session will equip participants with skills and tools to effectively deal with potential opportunities, threats, and challenges in an uncertain world. An overview of the Oxford scenario planning approach principles will be provided, followed by a discussion on how participants can adapt and adopt these principles for their own purposes.
                    </p>

                    <h3><strong>Inspirational leadership – how to take others with you. Lessons from Shakespeare</strong></h3>
                    <p>
                        Participants will be introduced to Shakespeare's most inspired and inspiring leader, Henry V, and explore the various leadership challenges Henry faced.
                    </p>

                    <h3><strong>Persuasion and influence</strong></h3>
                    <p>
                        This session will examine the seven universal principles of persuasion that have been scientifically proven effective, based on Dr Robert Cialdini's work. These principles are central to building trust and relationships. Other key areas covered will include the power of storytelling, personal narrative, and potential narrative frameworks, drawing on the work of Joseph Campbell, the McKinsey method developed by Barbara Minto, and language of the senses.
                    </p>

                    <h3><strong>Leading through organisational culture</strong></h3>
                    <p>
                        This session explores the concept of organisational culture and how successful leaders seek to change organisational practices. A critical assessment of various leadership models will be conducted, discussing what leaders can learn from them.
                    </p>

                    <h3><strong>The importance of humility in leadership</strong></h3>
                    <p>
                        This session will examine how humility can lead to greater sincerity, fairness, truthfulness, and modesty in a world of deep divisions. Participants will learn how to improve their humility by acknowledging mistakes, learning from them, and being open to understanding where they might be wrong.
                    </p>

                    <h3><strong>Leading as a performing art</strong></h3>
                    <p>
                        Participants will investigate similarities and connections between music performance and leadership innovation. The session will focus on transforming knowledge and experience from the performing arts into core leadership principles that can be understood and applied across any industry.
                    </p>
                </div>

                <button class="cbtn-outline mt-5" data-target="0" onclick="toggleReadMore(this)">Read More</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    Industry immersion in Dubai (06 Jan, 2024 - 10 Jan, 2024)
                </h3>
                <ul>
                    <li>Creative thinking</li>
                    <li>Systems thinking and managing complexity</li>
                    <li>Reimagining the future</li>
                </ul>
                <div class="readmore-content mt-5" style="display: none;">

                    <h3><strong>Creative thinking</strong></h3>
                    <p>
                        This intensive module helps participants understand how to enhance individual and collective creativity. Learn why many organisations view creativity as a crucial strategic capability. Discover techniques for fostering creativity to achieve higher levels of organisational innovation. Unlock your personal and organisational creative potential through interactive lectures, case study discussions and experiential exercises.
                    </p>
                    <h3><strong>Systems thinking and managing complexity</strong></h3>
                    <p>
                        This immersive module offers insights into brain learning processes, methods for accelerated learning, reasons behind poor judgement, and strategies for learning from successes and failures. Through real-life examples and interactive activities, participants will learn to make more deliberate and informed decisions, potentially doubling their learning capacity. The module also teaches how to systematically reflect on experiences and extract valuable lessons.
                    </p>
                    <h3><strong>Reimagining the future</strong></h3>
                    <p>
                        This workshop provides an in-depth exploration of disruption, innovation and their impact on business. Delve into digital transformation, emerging technologies, industry disruption, and various innovation methodologies. Examine real-world case studies for deeper insights into the current state of innovation and disruption. Explore best practices in innovation, human-centric design, lean methodologies and a multi-horizon portfolio approach to innovation. </p>
                </div>

                <button class="cbtn-outline mt-5" data-target="1" onclick="toggleReadMore(this)">Read More</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>

                    Live online modules

                </h3>
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
                    <p>
                        The live virtual modules begin with the real-life leadership journey of an outstanding global leader. We will learn about the challenges this leader faced and overcame, as well as advice on reaching and maintaining top leadership positions.
                    </p>
                    <h3><strong>Relational resilience and neuroscience</strong></h3>
                    <p>
                        Explore the science of leadership, teams and resilience from a neuroscience perspective. This framework helps leaders understand human behaviour and develop strategies for team collaboration and relational resilience in volatile times. Learn how senior leaders create an environment of trust and open communication to strengthen teams, foster collaboration and drive organisational success.
                    </p>
                    <h3><strong>Innovation drivers and landscape</strong></h3>
                    <p>
                        This module explores innovation models beyond technology and disruption. Understand innovation drivers, key enablers and success factors in today's innovation economy. Identify emerging trends, relevant technologies and competitive approaches. Learn to adapt your organisation to changing market environments and promote a culture of innovation and continuous improvement to accelerate innovation agility.
                    </p>
                    <h3><strong>Revisiting your leadership narrative</strong></h3>
                    <p>
                        Return to your learning narratives in this session. Trace your journey since the programme began, evaluate your growth and applied learnings. Consider whether you have started developing your career roadmap.
                    </p>
                    <h3><strong>Operational excellence</strong></h3>
                    <p>
                        Learn from real-world case studies about key principles of excellence, the importance of ongoing scepticism, setting precise objectives and goals, and establishing clear values that govern team culture.
                    </p>
                    <h3><strong>Understanding the global supply chain</strong></h3>
                    <p>
                        Explore supply chain partnerships in today's business landscape. Examine how ethical and environmental concerns impact the supply chain and why developing partnerships aligned with organisational values and goals is essential. Unravel supply chain complexities and the impact of decisions on the broader ecosystem. Learn to balance stakeholder interests in creating partnerships.
                    </p>
                    <h3><strong>Marketing in the digital age</strong></h3>
                    <p>
                        Learn how businesses can use digital channels to reach and engage customers. Develop effective digital marketing strategies aligned with business goals and customer needs. Understand how to measure and optimise campaigns for maximum impact.
                    </p>
                    <h3><strong>Environmental, social, and governance – future directions and trends</strong></h3>
                    <p>
                        Gain insight into future developments in environmental, social, and governance investing and sustainable finance. Learn to leverage environmental, social, and governance practices for long-term value creation and enhanced stakeholder reputation. Explore latest trends and best practices, including sustainable investing, social responsibility and governance's role in creating accountability.
                    </p>
                    <h3><strong>Global perspectives and challenges – the world at a crossroads</strong></h3>
                    <p>
                        Gain a comprehensive overview of global challenges facing companies and organisations. Learn about shifting economic blocs, china's continued rise, the future of jobs, finance, income inequality, geopolitics and climate crisis. Explore key trends shaping the global economy and society, and discuss how businesses can navigate these challenges to thrive long-term.
                    </p>
                    <h3><strong>Digital transformation</strong></h3>
                    <p>
                        Explore how new technologies, global connectivity and changing business dynamics have altered work and life. Learn new approaches to strategic thinking, leadership and management. In this connected world, we must learn from the future, not just the past. Examine digital transformation from a futuristic perspective, debating forces, technologies and market dynamics driving future business success.
                    </p>
                    <h3><strong>Commercial acumen (simulation – 5 sessions)</strong></h3>
                    <p>
                        Address the challenge many senior managers face in judging the financial strength of their decisions. This session provides an overview of financial management for creating higher market values and its impact on managers' daily lives. Through a business simulation, learn to understand financial statements, make financial decisions, analyse financials, build cost-pricing strategies, forecast cash flows, identify opportunities, select investment projects, analyse new markets, revisit strategy, and understand profitable growth drivers.
                    </p>
                    <h3><strong>Designing collaborative strategies and building new social capital</strong></h3>
                    <p>
                        Learn how collaborative strategies and social capital are essential for successful leadership. Discover how to foster teamwork, communication and trust within organisations, leading to improved problem-solving, decision-making and productivity. Learn to build a collaborative culture and social capital to enhance organisational reputation, access new opportunities and valuable resources.
                    </p>
                </div>

                <button class="cbtn-outline mt-5" data-target="2" onclick="toggleReadMore(this)">Read More</button>
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
        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/media/programme-outcome.jpg" class="md:h-auto h-[250px] object-cover" alt="" loading="lazy">
            <figcaption></figcaption>
        </figure>
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <div>
                <h3>
                    A personalised leadership playbook
                </h3>
                <p>
                    Participants will create a tangible take-away that consolidates their learnings and reflections from the programme, including a specific action plan for themselves and their organisation to implement immediately.
                </p>
            </div>
            <div>
                <h3>
                    Immerse
                </h3>
                <p>
                    Gain insights into major business and leadership challenges of the 21st century and learn how scenarios can be used to examine potential future contexts and their implications for leadership initiatives.

                </p>
            </div>
            <div>
                <h3>
                    Explore
                </h3>
                <p>
                    Develop expertise and explore resources, models and frameworks to excel in addressing contemporary issues.
                </p>
            </div>
            <div>
                <h3>
                    Build
                </h3>
                <p>
                    Interact and build a network of high-achieving peers from diverse organisations and industries worldwide.
                </p>
            </div>
            <div>
                <h3>
                    Lead
                </h3>
                <p>
                    Become a purposeful leader, equipped to tackle today's greatest challenges with a clear vision that fuels important strategic decisions and positively impacts society.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white">
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <h2 class="font-tnr">
                Oxford Business Alumni Network
            </h2>
        </div>
        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/media/Oxford-Business-Alumni-Network-2.jpg" alt="" class="md:h-auto h-[250px] object-cover" loading="lazy">
            <figcaption></figcaption>
        </figure>
        <div class="md:px-44 md:py-10 p-5 space-y-5">
            <p class="mb-5">
                Upon completing the programme, you become eligible for lifelong membership in the Oxford Business Alumni Network, the official global business alumni network of the Saïd Business School, University of Oxford.
                <br><br>

                With over 24,000 members in more than 150 countries worldwide, this network represents a truly world-class international business community.
            </p>
            <h3>Membership benefits include:</h3>
            <ul>
                <li>Lifelong Oxford business alumni email address</li>
                <li>Joining your regional chapter and connecting with the ambassador in your city</li>
                <li>Access to the LinkedIn group and online community for networking</li>
                <li>Invitations to academic, networking and social events in Oxford and your home country</li>
                <li>Subscription to the monthly electronic newsletter</li>
                <li>Access to the network website, news, resources and university research</li>
            </ul>

        </div>
    </section>
    <section class="md:py-10 py-5">
        <div class="md:px-44 md:mb-10 mb-5 px-5">
            <h2 class="font-tnr">
                Learn from world-class faculty
            </h2>
        </div>
        <div class="relative">
            <button class="faculty-slick-prev md:left-32 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>
            <button class="faculty-slick-next md:right-32 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>


            <div class="slick-slider-faculty h-full md:px-44 px-5 relative z-0">
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/faculty/Phyllida-Hancock.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Phyllida Hancock</h4>
                        <p class="mb-2 text-center">Teaches Inspirational leadership</p>
                        <button class="hover:underline" onclick="Phyllida_Hancock.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/faculty/David-Trevaskis.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">David Trevaskis</h4>
                        <p class="mb-2 text-center">Teaches Persuasion and influence</p>
                        <button class="hover:underline" onclick="David_Trevaskis.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/faculty/Sue-Dopson.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Sue Dopson</h4>
                        <p class="mb-2 text-center">Professor of Organisational Behaviour</p>
                        <button class="hover:underline" onclick="Sue_Dopson.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/faculty/Rachel-Botsman.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Rachel Botsman</h4>
                        <p class="mb-2 text-center">Associate Fellow</p>
                        <button class="hover:underline" onclick="Rachel_Botsman.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/faculty/Peter-Hanke.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Peter Hanke</h4>
                        <p class="mb-2 text-center">Associate Fellow</p>
                        <button class="hover:underline" onclick="Peter_Hanke.showModal()">Read More</button>
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

            <button class="global-experts-slick-prev md:left-32 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>

            <button class="global-experts-slick-next md:right-32 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg></button>

            <div class="slick-slider-global-experts h-full md:px-44 px-5 relative z-0">
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/experts/Edward-Rogers.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Edward Rogers</h4>
                        <p class="mb-2 text-center">Ex Chief Knowledge Officer at Nasa</p>
                        <button class="hover:underline" onclick="Edward_Rogers.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/experts/Jamie-Anderson.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Jamie Anderson</h4>
                        <p class="mb-2 text-center">Professor of Creative Thinking and Fine Art of Success</p>
                        <button class="hover:underline" onclick="Jamie_Anderson.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/experts/Anton-Musgrave.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Anton Musgrave</h4>
                        <p class="mb-2 text-center">Strategy, Innovation and Digital Transformation</p>
                        <button class="hover:underline" onclick="Anton_Musgrave.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/experts/Olivier-Tabatoni.webp" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Olivier Tabatoni</h4>
                        <p class="mb-2 text-center">Professor of Finance and Strategy</p>
                        <button class="hover:underline" onclick="Olivier_Tabatoni.showModal()">Read More</button>
                    </div>
                </div>
                <div class="md:p-2.5 px-4">
                    <div class="p-6 text-center border border-primary md:min-h-[470px] h-full">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/media/experts/Mike-Grandinetti.jpg" alt="" loading="lazy">
                            <figcaption></figcaption>
                        </figure>
                        <h4 class="md:text-2xl font-semibold mt-3">Mike Grandinetti</h4>
                        <p class="mb-2 text-center">Professor of Innovation</p>
                        <button class="hover:underline" onclick="Mike_Grandinetti.showModal()">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="md:px-44 md:py-10 p-5">
        <h2 class="font-tnr text-center md:mb-10 mb-5">Cohorts statistics</h2>
        <div class="flex md:flex-row flex-col justify-between md:gap-10 gap-5">
            <div class="basis-[40%]">
                <h3 class="mb-3 text-center">Work Experience</h3>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/media/chart.jpg" class="p-5" alt="chart graph">
                    <figcaption></figcaption>
                </figure>
                <h4 class="my-3 text-center">Average Work Experience: 22 years</h4>
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
            <img src="<?php echo get_template_directory_uri() ?>/media/companies.webp" class="w-full" loading="lazy" alt="">
            <figcaption></figcaption>
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
                <figure class="cursor-pointer" onclick="lazyLoadVideo('qYrS3ORfPr4', this)">
                    <img src="<?php echo get_template_directory_uri() ?>/media/Explore-the-Oxford-Campus.webp" class="w-full object-contain" alt="" loading="lazy">
                    <figcaption class="sr-only"></figcaption>
                </figure>
            </div>
            <h3 class="my-10">
                Hear from Professor Paul Fisher, Programme Director
            </h3>
            <div class="bg-gray-200 rounded-none">
                <figure class="cursor-pointer" onclick="lazyLoadVideo('nAdBOEw6Kbc', this)">
                    <img src="<?php echo get_template_directory_uri() ?>/media/watch-webinar.png" class="w-full object-contain" alt="" loading="lazy">
                    <figcaption class="sr-only"></figcaption>
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
                <li class="-indent-[1em] pl-[1em]">10+ years of relevant work experience with demonstrated success in leading high-performance teams/impactful projects</li>
                <li class="-indent-[1em] pl-[1em]">Rich domain expertise with significant responsibilities and proven career advancement in corporate, entrepreneurial, business, <br> or public sector domains</li>
                <li class="-indent-[1em] pl-[1em]">At least a graduate degree with a strong academic record</li>
                <li class="-indent-[1em] pl-[1em]">Curious and motivated leader seeking solutions to challenges faced by yourself, your organisation, and society at large</li>
            </ul>

        </div>
        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/media/oxford-team-2-1.jpg" alt="" loading="eagerclass=" md:h-auto h-[250px] object-cover w-full md:object-contain">
            <figcaption></figcaption>
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
                        Answer the questions and submit your CV/upload or LinkedIn Profile
                    </p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        2
                    </div>
                    <h4>Application review</h4>
                    <p class="text-left mb-0">
                        Admission Committee will verify your application and evaluate it for eligibility and fit to programme
                    </p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        3
                    </div>
                    <h4>Interaction</h4>
                    <p class="text-left mb-0">
                        Select candidates to interact with the Admissions Director
                    </p>
                </div>
                <div class="md:basis-1/5 sm:basis-1/3 basis-full flex-1">
                    <div class="flex items-center justify-center rounded-full bg-primary text-white size-12 text-3xl font-bold mb-8">
                        4
                    </div>
                    <h4>Result</h4>
                    <p class="text-left mb-0">
                        Receive a decision on your programme application via an email from the Admissions Committee.
                    </p>
                </div>
            </div>
            <p>
                We do not discriminate against any person based on race, colour, sex or sexual orientation, gender identity, religion, age, national or ethnic origin, political beliefs, veteran status, or disability in admission to, access to, treatment in, or employment in this programme.
            </p>
            <a href="/apply-now" class="cbtn-outline">Apply Now</a>
        </div>
        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/media/inquiry.jpg" class="w-full md:h-[400px] h-[250px] object-cover" alt="" loading="lazy">
            <figcaption></figcaption>
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
            <a href="/get-in-touch" class="cbtn-outline">Get In Touch</a>
        </div>
        <div>
            <h2 class="font-tnr md:mb-8 mb-5">
                Refer a colleague
            </h2>
            <p>
                Recommend suitable candidates who you believe will benefit from Oxford's Senior Executive Leadership Programme. You will earn USD 750 if they enrol. Additionally, they will receive a USD 750 waiver on the programme fee.
            </p>
            <a href="https://referrals.xedinstitute.org/hgKaSP/join" class="cbtn-outline">Refer and Earn</a>
        </div>
    </section>
</article>
<?php get_footer() ?>