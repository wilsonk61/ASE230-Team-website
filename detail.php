<?php
require_once('functions.php');

$team = [
    'kyle' => [
        'image' => 'assets/images/kyle.png',
        'name' => 'Kyle',
        'dob' => '2004-05-24',
        'role' => 'Security Analyst',
        'email' => 'wilsonk61@nku.edu',
        'phone' => '502-724-2401',
        'summary' => 'Currently a Cyber Security student at Northern Kentucky University. I am a Junior currently working toward finishing my fifth semester. I have strong problem solving skills along with strong observation skills. I am currently seeking to expand my knowledge by obtaining an internship in Cybersecurity architecture or penetration testing',
        'linkedin' => 'https://www.linkedin.com/in/kyle-wilson-cincinnati/',
        'github' => 'https://github.com/kramer052404',
        'website' => 'kramer052404.com',
        'work_experience' => [
            [
                'position' => 'IT Surplus and Security Operations',
                'company' => 'NKU',
                'time' => 'July 2024 - Present',
                'description' => 'This role is an important part in processing technology in a company. My job was to wipe important information and reimage machines that needed to be resold. I also contributed as part of the NKU Student SOC team and worked through incidents.',
                'achievements' => [
                    'Efficiently wiped and reimaged machines',
                    'Determined future processes for surplusing new technology',
                    'Managed incidents that appeared in the security console',
                    'Determined severity and possible actions to be taken against such risks'
                ],
                'technologies' => ['fog', 'Cisco', 'variety of OS', 'Security endpoint solutions']
            ],
            [
                'position' => 'Shift Leader',
                'company' => 'Dominos',
                'time' => '2021 - 2022',
                'description' => 'During my time at Dominoes I was the lead Customer Service Representative and I was on the front lines of customer complaints and other various calls. I led a small team to ensure all outgoing product met the Dominoes standard.',
                'achievements' => [
                    'Managed a Local Dominoes and oversaw operations.',
                    'Outperformed other local Dominoes in sales revenue by over 250% by producing high quality products in high quantity.',
                    'Oversaw Employees to ensure quality and quantity of Dominoes products.',
                    'Exhibited customer service to a professional degree for customers'
                ],
                'technologies' => ['Point of Sale (POS) Systems', 'Online Ordering Platforms', 'Inventory Management Software']
            ],
            [
                'position' => 'Shift Leader',
                'company' => 'Jersey Mikes',
                'time' => '2023 - 2024',
                'description' => 'During my time at Jersey Mikes I was a shift leader and ensured everything was run smoothly with the best quality',
                'achievements' => [
                    'Oversaw operations',
                    'Ensured Efficiency',
                ],
                'technologies' => ['Point of Sale (POS) Systems', 'Online Ordering Platforms', 'Inventory Management Software']
            ]
        ],
        'projects' => [
            [
                'title' => 'Bug Bounty Python Automation Scripts',
                'image' => 'assets/images/bug.png',
                'description' => 'This project allowed me to explore the inner working',
                'link' => '#'
            ],
            [
                'title' => 'Homelab IDS',
                'image' => 'assets/images/onion.PNG',
                'description' => 'Configured a netowrk to support IDS software in a homelab enviornment.',
                'link' => '#'
            ]
        ],
        'skills' => [
            [
                'name' => 'Python',
                'progress' => 70
            ],
            [
                'name' => 'Penetration Testing',
                'progress' => 66
            ],
            [
                'name' => 'Java',
                'progress' => 70
            ]
        ],
        'other_skills' => [
            'Elementary Network Security',
            'Networking',
            'Linux Command Line',
            'Linux Administration',
            'Windows Administration',
            'Cyber Security Fundamentals',
            'Elementary Japanese N5',
        ],
        'education' => [
            [
                'degree' => 'Bachelors Of Science - CyberSecurity',
                'organization' => 'Northern Kentucky University',
                'time' => 'August 2022 - May 2026'
            ]
        ],
        'awards' => [
            [
                'name' => 'Made University Presidents List',
                'description' => 'To make the university presidents list you must achieve all A\'s throughout your college career'
            ]
        ],
        'languages' => [
            [
                'name' => 'English',
                'proficiency' => 'Native'
            ],
            [
                'name' => 'Japanese',
                'proficiency' => 'Beginner'
            ]
        ],
        'interests' => [
            'Skiing',
            'Virtual Reality',
            'Server Management'
        ]
    ],
    
    'Jackson' => [
        'image' => 'assets/images/Jackson.jpg',
        'name' => 'Jackson Wise',
        'dob' => '2003-06-21',
        'role' => 'System Administrator',
        'email' => 'wisej8@mymail.nku.edu',
        'phone' => '859-414-2345',
        'summary' => "I'm a passionate Cybersecurity student with a strong foundation in linux/windows operating systems, security fundamentals, and data alogorithms and strcutures. My professional experience in retail has taught me essential communcation and problem-solving skills. I'm seeking an entry-level position to apply my skills, contribute to innovating projects, and grow my skills along side the company. Some fun facts about me: I'm double jointed in most of my joints, I'm canadian, and I have three dogs, a gecko, and a bunch of fish!",
        'linkedin' => 'linkedin.com/in/jackson-wise-742a69214',
        'github' => 'github.com/JacksonWiseBusiness',
        'website' => 'jacksonwisebio.com',
        'work_experience'=>[
            [
                "position"=>"Guest Service Advocate",
                "company"=>"Target",
                "time"=>"2021 - Present",
                "description"=>"As a guest advocate, I'm expected to ensure each and every customer that enters the store has the proper guest experience. My goal is to make shopping quick and easy for guests at the checklanes, guest services, gift registry, pick-up and drive up while ensuring exceptional quality",
                "achievements"=>[
                    "Employee of the Month",
                    "Trained and mentored dozens of new employees, leading to improved team performance and customer service.",
                    "Continuously ensured weekly loyalty goals were met",
                ],
                "technologies"=>[
                    "Zebra Technologies",
                    "POS Systems",
                ],
            ],
            [
                "position"=>"Landscaper",
                "company"=>"Self-Employed",
                "time"=>"2018 - 2020",
                "description"=>"As a self-employed landscaper, I was expected to handle my own networking to reach my services to clients. Once I managed to attain clients, I would use effective communication to tailor my services my client's lawncare specifications. I Performed regular maintenance tasks, such as mowing, trimming, pruning, and watering to ensure the appearance of lawns and gardens.",
                "achievements"=>[
                    "Was able to manage 10 different client's lawns at a young age ",
                    "Ensured customer satisfaction rating by delivering high-quality landscaping services and maintaining clear communication.",
                ],
                "technologies"=>[
                    "Social Media",
                ],
            ],
        ],
        'projects' => [
            [
                "title"=>"Deep Space Fix - Text-Based Game",
                "image"=>"assets/images/project1.jpg",
                "description"=>"Deep Space Fix is a text-based game I created using python. In this game, you are an astronaunt who got stranded in space after an astroid hit your spacecraft. The goal of this game is to explore the ship to find the tools required to repair the damages.",
                "link"=>"#",
            ],
            [
                "title"=>"Web Developers turned Critics",
                "image"=>"assets/images/project2.jpg",
                "description"=>"This is a website created using HTML/CSS/Javascript that allows the us, the web developer, to give our own reviews of movies we've recently seen. Users are also able to submit their own review score to add to the current score of the recent movie we've rated.",
                "link"=>"#"
            ],
            [
                "title"=>"AWS Application Loadbalancer",
                "image"=>"assets/images/project3.jpg",
                "description"=>"I used AWS to create an application loadbalancer to balance the load of traffic to EC2 instances. It also had subnets in different avaiablility zones to allow for quickload times for users in these different zones.",
                "link"=>"#",
            ],
        ],
        'skills' => [
            [
                'name' => 'Problem-Solving',
                'progress' => 96
            ],
            [
                'name' => 'Communication',
                'progress' => 96
            ],
            [
                'name' => 'Adaptability',
                'progress' => 93
            ],
            [
                'name' => 'Java',
                'progress' => 93
            ],
            [
                'name' => "Windows/Linux OS",
                'progress' => 90
            ],
        ],
        'other_skills' => [
            "AWS", "Wireshark", "Autopsy", "VSCode", "MySQL", "Teamwork", "MISP", "Python",
        ],
        'education' => [
            [
                "degree"=>"Seeking BSc in you",
                "organization"=>"any university",
                "time"=>"2020 - Present",
            ]
        ],
        'awards' => [
            [
                 "name"=>"President's Honors List",
                "description"=>"Student's who've earned a 4.0 GPA in a semester",
            ]
        ],
        'languages' => [
            [
                "name"=>"English",
                "proficiency"=>"Native"
            ],
        ],
        'interests' => [
            "Video games", "Movies/Shows", "Hiking", "Legos",
        ]
    ], 
    
    'John' => [
        'image' => 'assets/images/chuck.jpg',
        'name' => 'John Doe',
        'dob' => '2000-06-22',
        'role' => 'Language Interpreter',
        'page' => 'detail.php?id=John',
        'email' => 'johndoe3@nku.edu',
        'phone' => '911-911-9191',
        'summary' => 'AI Dummy Info: Experienced and culturally attuned language interpreter with over 7 years of experience bridging communication between diverse populations. Fluent in English, Spanish, and Portuguese, with working knowledge of French. Highly skilled in real-time interpretation and document translation for a variety of sectors, including legal, medical, and business environments. Known for accuracy, professionalism, and a deep understanding of cultural nuances. Strong multitasker with excellent active listening skills and a passion for facilitating understanding across linguistic barriers.',
        'linkedin' => 'johndoe3.linkedin.com',
        'github' => 'johndoe3.github.com',
        'website' => 'johndoe3.website.com',
        'work_experience' => [
            [
                'position' => 'Senior Language Interpreter',
                'company' => 'Global Translations, Inc.',
                'time' => 'January 2018 - Present',
                'description' => 'Provide real-time interpretation and translation services for a variety of clients, specializing in legal and medical fields. Collaborate with diverse teams to ensure seamless communication between English, Spanish, and Portuguese speakers.',
                'achievements' => [
                    'Successfully interpreted for over 500 high-profile legal cases, ensuring accurate communication between non-English speakers and attorneys.',
                    'Developed a standardized glossary for medical terminology in Spanish and Portuguese, enhancing team efficiency.'
                ],
                'technologies' => ['MemoQ', 'Wordfast']
            ],
            [
                'position' => 'Freelance Language Interpreter',
                'company' => 'Freelance',
                'time' => 'June 2015 - December 2017',
                'description' => 'Provided freelance interpretation services for a variety of industries, including business, healthcare, and media. Assisted in translating documents, live events, and personal communications.',
                'achievements' => [
                    'Interpreted at international conferences with up to 200 attendees, contributing to successful cross-cultural business negotiations.',
                    'Translated over 50 business contracts between English and Portuguese, ensuring legal compliance and clarity.'
                ],
                'technologies' => ['SDL Trados Studio', 'Zoom for interpretation']
            ]
        ],
        'projects' => [
            [
                'title' => 'Real-time Translation App',
                'image' => 'assets/images/app.jpg',
                'description' => 'Developed a real-time translation mobile application that supports multilingual voice-to-text translations, allowing users to communicate seamlessly in different languages.',
                'link' => '#'
            ]
        ],
        'skills' => [
            [
                'name' => 'Simultaneous Interpretation',
                'progress' => 85
            ],
            [
                'name' => 'Document Translation',
                'progress' => 90
            ]
        ],
        'other_skills' => [
            'Cultural Sensitivity',
            'Active Listening'
        ],
        'education' => [
            [
                'degree' => 'Bachelor of Arts in Linguistics',
                'organization' => 'University of California, Berkeley',
                'time' => '2013 - 2017'
            ]
        ],
        'awards' => [
            [
                'name' => 'Interpreter of the Year Award',
                'description' => 'Recognized as the top interpreter for outstanding performance in legal and medical translation services at Global Translations, Inc.'
            ]
        ],
        'languages' => [
            [
                'name' => 'English',
                'proficiency' => 'Native'
            ],
            [
                'name' => 'Spanish',
                'proficiency' => 'Fluent'
            ],
            [
                'name' => 'Portuguese',
                'proficiency' => 'Fluent'
            ]
        ],
        'interests' => [
            'Cross-Cultural Communication',
            'Traveling and Learning New Languages'
        ],
    ],
];

$id = $_GET['id'];

$person = $team[$id];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $person['name']?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 
<body>
    <article class="resume-wrapper text-center position-relative">
        <?php /* Only the following line changed from the file in the previous assignment */ ?>
        <div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="<?= $person['image']; ?>" alt="">
                    </div><!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $person['name'] ?></h1>
                                <div class="title mb-1"><?= $person['role']?></div>
                                <?= 'Age: ' . calculateAge($person['dob']); ?>
                                <div style="margin: 10px;"></div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $person['email']?></a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $person['phone']?></a></li>
                                </ul>
                            </div><!--//primary-info-->
                            <div class="secondary-info col-auto mt-2">
                                <ul class="resume-social list-unstyled">
                                    <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $person['linkedin']?></a></li>
                                    <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $person['github']?></a></li>
                                    <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $person['website']?></a></li>
                                </ul>
                            </div><!--//secondary-info-->
                        </div><!--//row-->
                    </div><!--//col-->
                </div><!--//row-->
            </header>
            <div class="resume-body p-5">
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0"><?= $person['summary']?></p>
                    </div>
                </section><!--//summary-section-->
                <div class="row">
                    <div class="col-lg-9">
                        <section class="resume-section experience-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                            <div class="resume-section-content">
                                <div class="resume-timeline position-relative">
                                    <?php foreach ($person['work_experience'] as $experience) displayWorkExperience($experience) ?>         
                                </div><!--//resume-timeline-->                          
                            </div>
                        </section><!--//projects-section-->
                    </div>
                    <div class="col-lg-3">
                        <section class="resume-section skills-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                            <div class="resume-section-content">
                                <div class="resume-skill-item">
                                    <ul class="list-unstyled mb-4">
                                        <?php foreach ($person['skills'] as $skill): ?>
                                            <li class="mb-2">
                                                <div class="resume-skill-name"><?= $skill['name'] ?></div>
                                                <div class="progress resume-progress">
                                                    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $skill['progress'] ?>%" aria-valuenow="<?= $skill['progress'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div><!--//resume-skill-item-->
                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                    <ul class="list-inline">
                                        <?php foreach ($person['other_skills'] as $other_skill): ?>
                                            <li class="list-inline-item"><span class="badge badge-light"><?= $other_skill ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div><!--//resume-skill-item-->
                            </div><!--resume-section-content-->
                        </section><!--//skills-section-->
                        <section class="resume-section education-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                    <?php foreach ($person['education'] as $education): ?>
                                        <li class="mb-2">
                                            <div class="resume-degree font-weight-bold"><?= $education['degree'] ?></div>
                                            <div class="resume-degree-org"><?= $education['organization'] ?></div>
                                            <div class="resume-degree-time"><?= $education['time'] ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//education-section-->
                        <section class="resume-section reference-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-awards-list">
                                    
                                    <?php foreach ($person['awards'] as $award): ?>
                                        <li class="mb-2 ps-4 position-relative">
                                            <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                            <div class="resume-award-name"><?= $award['name'] ?></div>
                                            <div class="resume-award-desc"><?= $award['description'] ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//interests-section-->
                        <section class="resume-section language-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled resume-lang-list">
                                    <?php foreach ($person['languages'] as $language): ?>
                                        <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?= $language['name'] ?></span> <small class="text-muted font-weight-normal">(<?= $language['proficiency'] ?>)</small></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//language-section-->
                        <section class="resume-section interests-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                            <div class="resume-section-content">
                                <ul class="list-unstyled">
                                <?php foreach ($person['interests'] as $interest): ?>
                                    <li class="mb-1"><?= $interest ?></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </section><!--//interests-section--> 
                    </div>
                </div><!--//row-->
                <section class="resume-section experience-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
                    <div class="row mt-4">
                        <?php foreach ($person['projects'] as $project): ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $project['title'] ?></h5>
                                        <p class="card-text"><?= $project['description'] ?></p>
                                        <a href="<?= $project['link'] ?>" class="btn btn-outline-primary">Go to link</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>                        
                    </div>
                </section><!--//projects-section-->
            </div><!--//resume-body--> 
        </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> Kyle</small>
    </footer>
</body>
</html> 
