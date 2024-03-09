<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceejay Salonga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (Integrity Hash) ..." crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="profilepic.png" style="border-radius: 20px;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">

    </style>
</head>
<body>
    <header>
    <div class="top-bar">
        <img class="profile-image" src="Images/profilepic.png" alt="Ceejay Salonga">
        <div class="name">
            <header>Ceejay Salonga</header>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/ceejay.salonga.9" target="_blank"><img src="Images/fblogo.png" alt="Facebook"></a>
            <a href="https://twitter.com/ceejay_salonga" target="_blank"><img src="Images/twitterlogo.png" alt="Twitter"></a>
            <a href="https://www.linkedin.com/in/carlos-salonga-9645b3288/" target="_blank"><img src="Images/linkedinlogo.png" alt="LinkedIn"></a>
            <a href="https://github.com/CeejaySalonga" target="_blank"><img src="Images/githublogo.png" alt="GitHub"></a>
            <a href="https://www.youtube.com/channel/UCJpUeMNtXqAlKJ8W4qvHjpg" target="_blank"><img src="Images/youtubelogo.png" alt="Youtube"></a>
            <a href="https://discordapp.com/users/422006366320721952" target="_blank"><img src="Images/discordlogo.png" alt="Discord"></a>
        </div>
    </div>
    </header>

    <div class="content">
        <h1>Ceejay Salonga</h1>
        <p>My name is Carlos Salonga Jr. but you can call me Ceejay. I'm a second-year I.T. student at National University Fairview.</p>
        <div class="tabs">
            <div class="tab active-tab" onclick="showTab('work')" role="tab" aria-selected="true">Professional</div>
            <div class="tab" onclick="showTab('school')" role="tab">Academic</div>
            <div class="tab" onclick="showTab('hobbies')" role="tab">Hobbies</div>
            <div class="tab" onclick="showTab('gaming')" role="tab">Gaming</div>
            <div class="slide"></div>
        </div>
        </div>

        <div class="tab-content active" id="work-content" role="tabpanel">
        <h2>Professional Background</h2>
            <div class="cv-header">
                <div class="contact-info">
                    <h1>Carlos D. Salonga Jr.</h1>
                    <p>Email: ceejaysalonga45@gmail.com</p>
                    <p>Phone: +63 977 754 8714</p>
                    <p>LinkedIn: <a href="https://www.linkedin.com/in/carlos-salonga-9645b3288/" target="_blank">linkedin.com/in/carlos-salonga</a></p>
                    <p>GitHub: <a href="https://github.com/ceejaysalonga" target="_blank">github.com/ceejaysalonga</a></p>
                    <p>Location: Caloocan, Philippines</p>
                </div>
            </div>
            <div class="work-item">
            <h2>Professional Summary</h2>
            <p>
                My name is Carlos Salonga Jr., commonly known as Ceejay. I am a second-year I.T. student at National University Fairview.<br>
                Although I have not yet gained formal work experience, I possess a strong foundation in various programming languages and technologies.
            </p>
            </div>
            <div class="work-item">
            <h2>Skills</h2>
            <ul>
                <li>Communication</li>
                <li>Git</li>
                <li>Bootstrap (Framework)</li>
                <li>JavaScript</li>
                <li>Cascading Style Sheets (CSS)</li>
                <li>HTML5</li>
                <li>SQL</li>
                <li>Microsoft PowerPoint</li>
                <li>Microsoft Office</li>
                <li>Microsoft Word</li>
                <li>Microsoft Excel</li>
                <li>Java</li>
                <li>Python (Programming Language)</li>
                <li>English</li>
            </ul>
            </div>
            <div class="work-item">
            <h2>Certifications</h2> 
            <ul>
                <li>
                    <strong>Oracle Cloud Data Management 2023 Foundations Associate</strong>
                    <br>
                    Issued by Oracle, Aug 2023 · Expires Aug 2025
                </li>
                <li>
                    <strong>Oracle Cloud Infrastructure 2023 Foundations Associate</strong>
                    <br>
                    Issued by Oracle, Aug 2023 · Expires Aug 2025
                </li>
                <li>
                    <strong>Excel: Tips and Tricks</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022 · Expires Oct 2024
                </li>
                <li>
                    <strong>PowerPoint Essential Training (Office 365/Microsoft 365) (2020)</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022 · Expires Oct 2024
                </li>
                <li>
                    <strong>PowerPoint Tips And Tricks</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022
                </li>
                <li>
                    <strong>Word Essential Training (Office 365/Microsoft 365)</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022 · Expires Oct 2024
                </li>
                <li>
                    <strong>Word Tips and Tricks</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022 · Expires Oct 2024
                </li>
                <li>
                    <strong>Working with Computers and Devices</strong>
                    <br>
                    Issued by Linkedin Learning, Oct 2022 · Expires Oct 2024
                </li>
            </ul>
        </div>
        <div class="button">
        <button onclick="downloadResume()" class="download-button">Download Resume</button>
        </div>
        </div>
        </div>

        <div class="tab-content" id="school-content" role="tabpanel">
            <h2>Educational Background</h2>
            <div class="education-item">
                <div class="school-item">
                <h1>Tertiary Level</h1>
                <h2>National University Fairview</h2>
                <p><strong>Program:</strong> Bachelor of Science in Information Technology</p>
                <p><strong>Timeframe:</strong> 2022 - Current</p>
                <p><strong>Relevant Coursework:</strong> Web Development, Database Management, Programming Fundamentals</p>
                <p><strong>Projects:</strong>
                    <ul>
                        <li>Developed a personal portfolio website using HTML, CSS, and JavaScript</li>
                        <li>Collaborated on a team project to create a web-based inventory management system</li>
                        <li>Collaborated on a team project to create a Thrill/Horror Game</li>
                        <li>Developed a basic encryption and decryption program using Python</li>
                    </ul>
                </p>
                <p><strong>Academic Achievements:</strong>
                    <ul>
                        <li>Awarded Dean's List for outstanding academic performance (Semester 3, 2023)</li>
                    </ul>
                </p>
            </div>
            <div class="school-item">
                <h1>Secondary Level</h1>
                <h2>Mystical Rose School of Caloocan Inc.</h2>
                <p><strong>Program:</strong>Science, Technology, Engineering, and Mathematics</p>
                <p><strong>Timeframe:</strong> 2015 - 2022</p>
                <p><strong>Relevant Coursework:</strong> Web Development, Programming Fundamentals</p>
                <p><strong>Projects:</strong>
                    <ul>
                        <li>Developed a personal portfolio website using HTML, CSS, and JavaScript</li>
                        <li>Created Simple Webpages using HTML</li>
                    </ul>
                </p>
                <p><strong>Academic Achievements:</strong>
                    <ul>
                        <li>Awarded multiple Certificates Of Recognition for Spelling Bee Competitions</li>
                        <li>Awarded multiple Certificates Of Recognition for Science Quiz Bee Competitions</li>
                        <li>Awarded multiple Certificates Of Recognition for Math Quiz Bee Competitions</li>
                        <li>Awarded with a Certificate Of Recognition for multiple Poster Making Contest</li>
                        <li>Awarded with Honor's from 7th - 12th Grade</li>
                    </ul>
                </p>
            </div>
            <div class="school-item">
                <h1>Primary Level</h1>
                <h2>Mystical Rose School of Caloocan Inc.</h2>
                <p><strong>Timeframe:</strong> 2011 - 2015</p>
                <p><strong>Projects:</strong>
                    <ul>
                        <li>Created Simple Webpages using HTML</li>
                    </ul>
                </p>
                <p><strong>Academic Achievements:</strong>
                    <ul>
                        <li>Awarded multiple Certificates Of Recognition for Spelling Bee Competitions</li>
                        <li>Awarded multiple Certificates Of Recognition for Science Quiz Bee Competitions</li>
                        <li>Awarded multiple Certificates Of Recognition for Math Quiz Bee Competitions</li>
                        <li>Awarded with Honor's from 2nd - 6th Grade</li>
                    </ul>
                </p>
            </div>
            <div class="school-item">
                <h2>Colegio de San Gabriel Arcangel</h2>
                <p><strong>Timeframe:</strong> 2007 - 2011</p>
                <p><strong>Academic Achievements:</strong>
                    <ul>
                        <li>Awarded multiple Certificates Of Recognition for Spelling Bee Competitions</li>
                        <li>Awarded multiple Certificates Of Recognition for Science Quiz Bee Competitions</li>
                        <li>Awarded with Honor's in 1st Grade</li>
                    </ul>
                </p>
            </div>
            </div>
        </div>


        <div class="tab-content" id="hobbies-content" role="tabpanel">
            <h2>Personal Interests</h2>

            <div class="hobby-item">
                <h3>Reading</h3>
                <div class="paragraph">
                    <p>
                        I have a profound love for reading, especially in the realms of fantasy, fiction, and adventure. Some of my favorite books include "Mistwalker," "Harry Potter," and "Lord of the Rings." Reading allows me to immerse myself in captivating worlds and stories.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/HarryPotter.jpg" alt="Reading Image" style="Width: 1024; Height: 576;">
                </div>
            </div>

            <div class="hobby-item">
                <h3>Gaming</h3>
                <div class="paragraph">
                    <p>
                        Gaming is a significant part of my leisure time. I am actively engaged in competitive multiplayer games like Valorant and League of Legends. Additionally, I enjoy the immersive experience of solo games such as God of War and Horizon. Gaming provides a perfect balance of competition and relaxation.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/ARK.png" alt="Gaming Image" style="Width: 1024; Height: 576;">
                </div>
            </div>

            <div class="hobby-item">
                <h3>Puzzles</h3>
                <div class="paragraph">
                    <p>
                        Solving puzzles is both a challenging and rewarding hobby for me. I particularly enjoy working with Rubik's Cubes and have even participated in competitions.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/Puzzle.png" alt="Puzzle Image" style="Width: 1024; Height: 576;">
                </div>
            </div>

            <div class="hobby-item">
                <h3>Music</h3>
                <div class="paragraph">
                    <p>
                        Exploring the world of music through instruments is a delightful pastime. I play the Piano, Guitar, and Ukelele for the sheer joy of creating melodies. It's not only a creative outlet but also a therapeutic activity that brings harmony to my life.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/Piano.png" alt="Music Image" style="Width: 1024; Height: 576;">
                </div>
            </div>

            <div class="hobby-item">
                <h3>Travelling</h3>
                <div class="paragraph">
                    <p>
                        Traveling is one of my cherished hobbies that allow me to unwind and discover new perspectives. It serves as a way to escape the stresses of life, providing opportunities to explore diverse cultures, cuisines, and landscapes.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/Travel.jpg" alt="Reading Image" style="Width: 1024; Height: 576;">
                </div>
            </div>

            <div class="hobby-item">
                <h3>Drawing</h3>
                <div class="paragraph">
                    <p>
                        Drawing is a creative outlet I frequently indulge in during my free time. While I mostly focus on traditional art, I occasionally experiment with digital art as well.
                    </p>
                </div>
                <div class="hobby-image">
                    <img src="Images/InstagramDrawings.png" alt="Drawing Image" style="Width: 1024; Height: 576;">
                </div>
            </div>
        </div>


        <div class="tab-content" id="gaming-content" role="tabpanel">
            <h2>Gaming Content</h2>

            <!-- Valorant -->
            <div class="game-section">
                <h3>Valorant</h3>
                <div class="media-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/d6A2FxdPMWc" title="Triple Kill" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen alt="Valorant"></iframe>
                </div>
                <div class="paragraph">
                    <p>Valorant is currently my favorite game, my Highest Rank is Ascendant 1.</p>
                    <p>My main agents are Killjoy, Raze, and Sova. (Video Clip is from when I was Gold 2)</p>
                    <p><strong>Gaming Tag:</strong> DaTortilla #SLUSH</p>
                </div>
            </div>

            <!-- League of Legends -->
            <div class="game-section">
                <h3>League of Legends</h3>
                <div class="media-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CSnauUd7YjE" title="Katarina Quadra Kill" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen alt="League of Legends"></iframe>
                </div>
                <div class="paragraph">
                    <p>League of Legends is probably my most played game, I've been playing since season 6.</p>
                    <p>My highest Rank is Diamond 1. I mostly play Mid, Top, And Jungle. I main Katarina, Shaco, Teemo</p>
                    <p><strong>Gaming Tag:</strong> Ceejay #CREAM</p>
                </div>
            </div>

            <!-- Teamfight Tactics -->
            <div class="game-section">
                <h3>Teamfight Tactics</h3>
                <div class="media-container">
                    <img src="Images/TFT.png" alt="Teamfight Tactics" width="560" height="315" alt="Teamfight Tactics">
                </div>
                <div class="paragraph">
                    <p>TeamFight Tactics is a game I play mostly to keep my mind busy.</p>
                    <p>My highest Rank is Grandmaster way back in Season 6. But now I play it casually.</p>
                    <p><strong>Gaming Tag:</strong> Ceejay #CREAM</p>
                </div>
            </div>

            <!-- Lethal Company -->
            <div class="game-section">
                <h3>Lethal Company</h3>
                <div class="media-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CQdfxKNtsW4" title="A Normal Day in Lethal Company" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen alt="Lethal Company"></iframe>
                </div>
                <div class="paragraph">
                    <p>Lethal Company is a game I play with my friends just to have fun and enjoy my free time.</p>
                    <p><strong>Steam ID:</strong> 916100223</p>
                </div>
            </div>

            <!-- Debug By Daylight -->
            <div class="game-section">
                <h3>Debug By Daylight</h3>
                <div class="media-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/h5SZTR5dgb0" title="Debug by Daylight Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen alt="Debug by Daylight"></iframe>
                </div>
                <div class="paragraph">
                    <p>Apart from playing popular titles, my friends and I developed a Thriller/Horror game.</p>
                    <p>Objective: Get out of the campus in the middle of the night by debugging codes while hiding from a monster.</p>
                    <!-- Add any other relevant information about Debug By Daylight here -->
                </div>
            </div>
        </div>

    <script>
        function downloadResume() {
            // Replace the placeholder with the actual path to your resume file
            var resumePath = "CeejaySalongaCV.pdf";

            // Create a temporary link element
            var link = document.createElement("a");
            link.href = resumePath;
            link.download = "Carlos_Salonga_Jr_Resume.pdf";
            
            // Append the link to the body
            document.body.appendChild(link);

            // Trigger a click on the link to start the download
            link.click();

            // Remove the link from the DOM
            document.body.removeChild(link);
        }
    </script>
    <script>
        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            document.getElementById(tabName + '-content').classList.add('active');
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active-tab'));
            document.querySelector('.tab[onclick="showTab(\'' + tabName + '\')"]').classList.add('active-tab');

            // Reset the slide animation
            document.querySelector('.slide').style.transform = 'translateX(0)';

            // Trigger the slide animation after a small delay
            setTimeout(() => {
                document.querySelector('.slide').style.transform = 'translateX(100%)';
            }, 10);
        }
    </script>
<div class="footer">
    <?php
    require_once "database.php"; // Make sure to include the database connection file

    // Check if the user is logged in
    if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes") {

        // If the feedback form is submitted
        if (isset($_POST["submit_feedback"])) {
            $user_email = isset($_SESSION["user_email"]) ? $_SESSION["user_email"] : null;
            $feedback = $_POST["feedback"];

            // Check if the feedback textarea is empty
            if (empty($feedback)) {
                echo "<div class='alert alert-danger'>Feedback cannot be empty.</div>";
            } else {
                // Insert the feedback into the tbl_feedback table
                $insertFeedbackSQL = "INSERT INTO tbl_feedback (USER_EMAIL, USER_FEEDBACK) VALUES ('$user_email', '$feedback')";
                $result = mysqli_query($conn, $insertFeedbackSQL);

                if ($result) {
                    echo "<div class='alert alert-success'>Feedback submitted successfully!</div>";
                    // Reset the textarea value using JavaScript
                    echo "<script>document.getElementById('feedbackTextarea').value = '';</script>";
                } else {
                    echo "<div class='alert alert-danger'>Error submitting feedback.</div>";
                }
            }
        }

        // Display the feedback form since the user is logged in
        echo "<h3>Submit Feedback</h3>";
        echo "<div id='feedbackMessages'>"; // Container for feedback messages
        echo "<form action='index.php' method='post' class='feedback-form' onsubmit='return validateFeedback()'>";
        echo "<textarea name='feedback' id='feedbackTextarea' placeholder='Type your feedback here' class='feedback-textarea'></textarea>";
        echo "<div class='button-container'>";
        echo "<input type='submit' name='submit_feedback' value='Submit' class='button-submit'>";
        echo "</div>";
        echo "</form>";
        echo "</div>";

        // Display the logout button
        echo "<div class='button-container'>";
        echo "<a href='logout.php' class='button-logout'><button>Logout</button></a>";
        echo "</div>";
        //Display the Feedback button
        echo "<div class='button-container'>";
        echo "<a href='feedbacks.php' class='button-login' target='_blank'><button>View Feedbacks</button></a>";
        echo "</div>";

 

    } else {
        // Display a message to login if the user is not logged in
        echo "<p class='login-message'>Login to submit feedback</p>";
         echo "<div class='button-container'>";
        echo "<a href='login.php' class='button-login'><button>Login</button></a>";
        echo "</div>";
        echo "<div class='button-container'>";
        echo "<a href='feedbacks.php' class='button-login' target='_blank'><button>View Feedbacks</button></a>";
        echo "</div>";

    }
    ?>
</div>
</body>
</html>