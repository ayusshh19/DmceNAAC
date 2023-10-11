<?php

$content = "<section>
    <br>

    <div class='head-title my-5'>
        <h3>CAPACITY BUILDING AND<span class='red'> SKILL ENHANCEMENT</span></h3>
    </div>

    <div class='container tab-container p-0 naacaqar'>
        <ul class='nav nav-pills tab-btns'>
            <li class='active'>
                <a href='#1b' data-toggle='tab'>Soft Skills</a>
            </li>
            <li><a href='#2b' data-toggle='tab'>Language Communication Skills</a>
            </li>
            <li><a href='#3b' data-toggle='tab'>Life Skills</a>
            </li>
            <li><a href='#4b' data-toggle='tab'>ICT/Computing Skills</a>
            </li>
        </ul>

        <div class='tab-content clearfix'>
            <div class='tab-pane active' id='1b'>
                <div class='content-con my-0 px-3'>
                    <div class='brbt'>
                        <h4 class='red'>Soft Skills</h4>
                    </div>
                    <p>Soft skills are personality traits and behaviours. Unlike technical or ‘hard’ skills, soft skills are not
                        about the knowledge you possess but the behaviours you display in different situations. Soft skills include any
                        skill that can be classified as a personality trait or habit. Interpersonal skills and communication skills are more
                        specific categories of these, that many employers look for in job candidates.
                        <br><br>
                        There are many soft skills that you could list on your resume or cover letter. Some of the most sought after ones
                        include:
                    </p>
                    <div class='list-con'>
                        <ul>
                            <li>Effective communication skills</li>
                            <li>Teamwork</li>
                            <li>Dependability</li>
                            <li>Adaptability</li>
                            <li>Conflict resolution</li>
                        </ul>
                    </div>
                    <p>Soft skills play an important role in resume writing, interviewing and finding success in communicating with people at work and in other areas of your life. For example, as you look for jobs, you may find that many employers list specific soft skills on their job posts in the ‘required’ or ‘desired’ sections. A job posting for a Human Resources associate may list ‘attention to detail’ as a desired trait, while a job for a Marketing Specialist could list ‘leadership’ and ‘great communication skills.</p>

                    <div id='soft-skill-carousel' class='owl-carousel my-4'>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/dmce_gits-20230103-0012.jpg'>
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/dmce_gits-20230103-0018.jpg' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/dmce_gits-20230103-0019.jpg' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/IMG-20230103-WA0009.jpg' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/Picsart_22-09-28_23-21-05-626.jpg' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Soft_Skills/image6' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='tab-pane' id='2b'>
                <div class='content-con my-0 px-3'>
                    <div class='brbt'>
                        <h4 class='red'>Language Communication Skills</h4>
                    </div>
                    <p>
                        The linguistics encompasses the study of grammar, syntax, and phonetics. Sociolinguistics, dialectology, psycholinguistics, computational linguistics, comparative linguistics and structural linguistics are few particular branches of the linguistics. <br><br>
                        Linguist skills are important attributes that these professionals bring to the industry. Linguists can learn both hard skills and soft skills during their training. Hard skills are technical abilities that linguists apply directly to their work, such as foreign language fluency or interpretation. Soft skills are transferrable skills, often interpersonal skills, that linguists can apply to the job. Soft skills and hard skills are equally important because they often support one another. For instance, an interpreter may require both foreign language fluency and patience to excel in the industry. <br><br>
                        Linguists study languages of all kinds, including languages that are foreign to their native language. This requires foreign language fluency or the ability to interpret and speak certain languages effectively. This includes understanding the nuances of language, including:
                    </p>
                    <div class='list-con'>
                        <ul>
                            <li>how culture affects languages</li>
                            <li>how geography affects dialects</li>
                            <li>how words or phrases translate to different languages</li>
                            <li>speaking complete sentences at speed</li>
                            <li>how dialects differ in words and phrases</li>
                            <li>how to write and read the language</li>
                        </ul>
                    </div>

                    <div id='language-skill-carousel' class='owl-carousel my-4'>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Language_Skills/Screenshot 2023-01-12 at 12.57.01 PM.png'>
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Language_Skills/Screenshot 2023-01-12 at 12.57.15 PM.png' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Language_Skills/Screenshot 2023-01-12 at 12.57.32 PM.png' />
                        </div>
                        <div class='row mx-2 justify-content-center'>
                            <img class='col-12' src='../images/naac/Language_Skills/Screenshot 2023-01-12 at 12.57.47 PM.png' />
                        </div>
                    </div>

                </div>
            </div>
            <div class='tab-pane' id='3b'>
                <h3>Upcoming...</h3>
            </div>
            <div class='tab-pane' id='4b'>
                <h3>Upcoming...</h3>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#soft-skill-carousel').owlCarousel({
            items: 3, //items to be shown,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 1],
            itemsTablet: [300, 1],
            pagination: true,
            autoPlay: true,
            loop: true,
            center: true,
            nav: true,
            lazyLoad: true,
        });
    })
</script>
<script>
    $(document).ready(function() {
        $('#language-skill-carousel').owlCarousel({
            items: 3, //items to be shown,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 1],
            itemsTablet: [300, 1],
            pagination: true,
            autoPlay: true,
            loop: true,
            center: true,
            nav: true,
            lazyLoad: true,
        });
    })
</script>";

require_once './index.php';