<?php include_once "Array.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islam Elserougi - CV</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <section id="about_me">
    <header>
      <div class="container">
            <h1><?php echo $header['name']?></h1>
            <h2><?php echo $header['job']?></h2>
            <p>
                <i class="fas fa-map-marker-alt"></i> <?php echo $header['address']?> |
                <a href="mailto:islam.elserougi.7@gmail.com"><i class="fas fa-envelope"></i> <?php echo $header['email']?></a>
            </p>
        </div>
      
    </header>
  </section>

    <!-- Fixed Bar -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="#about_me">About Me</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- About Me -->
    <section id="about">
        <div class="container">
            <h3><i class="fas fa-user"></i> About Me</h3>
            <p style="font-size:larger">
            <?php echo $about_me['content']?>
            </p>
        </div>
    </section>

    <!-- Education -->
    <section id="education">
        <div class="container">
            <h3><i class="fas fa-graduation-cap"></i> Education</h3>
            <ul>
                <li>
                    <strong><?php echo $education[0]['degree']?></strong><br>
                    <?php echo $education[0]['university']?> <?php echo $education[0]['date']?><br>
                    Grade: <?php echo $education[0]['grades']?>
                </li>
                <li>
                <strong><?php echo $education[1]['degree']?></strong><br>
                    <?php echo $education[1]['university']?> <?php echo $education[1]['date']?><br>
                    Grade: <?php echo $education[1]['grades']?>
                </li>
                <li>
                <strong><?php echo $education[2]['degree']?></strong><br>
                    <?php echo $education[2]['university']?> <?php echo $education[2]['date']?><br>
                    Grade: <?php echo $education[2]['grades']?>
                </li>
            </ul>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience">
        <div class="container">
            <h3><i class="fas fa-briefcase"></i> Work Experience</h3>
            <div class="experience-item">
                <div class="experience-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                <div class="experience-content">
                    <h4><?php echo $experience[0]['position']?></h4>
                    <h5><?php echo $experience[0]['company']?></h5>
                    <span><?php echo $experience[0]['date']?></span>
                    <h5 style="color: #314459; font-weight: normal;"><?php echo $experience[0]['role']?></h5>
                </div>
            </div>
            <div class="experience-item">
                <div class="experience-icon"><i class="fas fa-headset"></i></div>
                <div class="experience-content">
                    <h4><?php echo $experience[1]['position']?></h4>
                    <h5><?php echo $experience[1]['company']?></h5>
                    <span><?php echo $experience[1]['date']?></span>
                    <h5 style="color: #314459; font-weight: normal;"><?php echo $experience[1]['role']?></h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills">
        <div class="container">
            <h3><i class="fas fa-laptop-code"></i> Skills</h3>
            <div class="skill-bars">
                <div class="skill">
                    <h4>Python <i class="fab fa-python"></i></h4>
                    <div class="progress-bar"><span style="width: 90%;"></span></div>
                </div>
                <div class="skill">
                    <h4>Excel <i class="fas fa-file-excel"></i></h4>
                    <div class="progress-bar"><span style="width: 80%;"></span></div>
                </div>
                <div class="skill">
                    <h4>Adobe Photoshop <i class="fab fa-file"></i></h4>
                    <div class="progress-bar"><span style="width: 60%;"></span></div>
                </div>
                <div class="skill">
                    <h4>Java <i class="fab fa-java"></i></h4>
                    <div class="progress-bar"><span style="width: 50%;"></span></div>
                </div>
                <div class="skill">
                    <h4>Linux <i class="fab fa-linux"></i></h4>
                    <div class="progress-bar"><span style="width: 50%;"></span></div>
                </div>
                <div class="skill">
                    <h4>HTML & CSS <i class="fab fa-html5"></i></h4>
                    <div class="progress-bar"><span style="width: 50%;"></span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <h3><i class="fas fa-project-diagram"></i> Projects</h3>
            <div class="projects-list">
                <div class="project-item">
                    <div class="project-image" style="background-image: url('Week 1/Final/assets/Designs.jpg');"></div>
                    <div class="project-content">
                        <h4>Designs <i class="fas fa-paint-brush"></i></h4>
                        <p>Some designs made for clients using Photoshop.</p>
                        <div class="buttons">
                            <a href="https://drive.google.com/drive/folders/1LFrYSMA8pjrS2xGwuDkhDnsWUtIJbwa4?usp=drive_link" target="_blank" class="button">View Designs</a>
                        </div>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-image" style="background-image: url('Week 1/Final/assets/CC.jpg');"></div>
                    <div class="project-content">
                        <h4>Code Colosseum <i class="fas fa-code"></i></h4>
                        <p>A web app that gamifies learning programming by combining Kahoot with Codeforces.</p>
                        <div class="buttons">
                            <a href="https://github.com/Islam-vz7/Code-Colosseum" target="_blank" class="button">GitHub Repo</a>
                        </div>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-image" style="background-image: url('Week 1/Final/assets/TC.png');"></div>
                    <div class="project-content">
                        <h4>TypoChamp <i class="fas fa-keyboard"></i></h4>
                        <p>A typing game inspired by Tetris.</p>
                        <div class="buttons">
                            <a href="typochamp.com" target="_blank" class="button">Play Now</a>
                            <a href="https://github.com/Islam-vz7/TypoChamp-Beta" target="_blank" class="button">GitHub Repo</a>
                        </div>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-image" style="background-image: url('Week 1/Final/assets/SGS.png');"></div>
                    <div class="project-content">
                        <h4>Smart Gardening System <i class="fas fa-seedling"></i></h4>
                        <p>Automated plant care system developed using Arduino.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <h3><i class="fas fa-envelope"></i> Contact Me</h3>
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Send Message">
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2024 Islam Elserougi. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
