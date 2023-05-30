<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ocean </title>
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top p-0 py-2">
        <div class="container">
          <a class="navbar-brand ms-auto" href="#">
            <img src="asset\logo-ocean_one.png" alt="" width="auto" height="40px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item mx-4">
                <a class="nav-link active text-light" aria-current="page" href="#" >Actions</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">Resources</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">Projects</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">Explore</a>
              </li>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Section 1 -->
    <div class="masthead" >
        <div class="color-overlay d-flex justify-content-center align-items-center">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ocean-one";
        $alertScript = "javascript:alert('ayo ramaikan')";
        
        $conn = mysqli_connect($servername,$username,$password,$database);

        $querySelect = "SELECT * FROM SECTION1 WHERE ID = 1 ";
        $section1 = mysqli_query($conn,$querySelect);
        $value = mysqli_fetch_assoc($section1);
        
        echo '
        <div class="singleCol container text-center">
            <h1 id="maintittle">'.$value['tittle'].'</h1>
                <p class="lead text-justify">
                    <strong>
                        '.$value['sub_tittle'].'
                    </strong>
                </p>
                <a href="'.$alertScript.'" class="btn btn-outline-light rounded-pill " style="font-size: 15px;">'.$value['btn-name'].'</a>
        </div>
        ';
        ?>
        </div>
    </div>
     <!-- End Section 1 -->
    
    
    <!-- Section 2 -->
    <div class="section2">
        <div class="color-overlay2">
            <div class="singleCol container p-0 m-0">
                <table class="tittle">
                    <tr>
                        <td><h1>OFFSET YOUR</h1></td>
                    </tr>
                    <td><h1>PLASTIC FOOTPRINT</h1></td>
                </table>
            </div>
            
            <div class="row gy-5 text-align-left d-flex position-relative mt-5">
                <div class="col-lg">
                    <h1 class="position-relative bottom-30px">ALIGN</h1>
                    <div class="box">
                        <p class="detailp" id="text1">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
                        <textarea name="temp" id="textarea" cols="30" rows="10" style="display: none;"></textarea>
                        
                        <div class="d-flex flex-row justify-content-between">
                        <a href="#" class="btn btn-light rounded-pill position-relative bottom-0" id="btn-align">LEARN MORE</a>
                        <button id="edit-btn" onclick="textAreaActivate()" style="width: 40px;">EDIT</button>
                        <button id="save-btn" onclick="setValue()" style="display: none; width: 40px;">SAVE</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <h1 class="position-relative bottom-30px">KICKSTART</h1>
                    <div class="box">
                        
                        <p class="detailp">Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.</p><br>
                        <a href="#" class="btn btn-light rounded-pill position-relative bottom-0 start-0" id="btn-kickstart">START ACTION</a>    
                    </div>
                </div>
                <div class="col-lg">
                    <h1 class="position-relative bottom-30px">AMPLIFY</h1>
                    <div class="box">
                        
                        <p class="detailp">Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p><br>
                        <a href="#" class="btn btn-light rounded-pill bottom-0 start-0" id="btn-amplify">SEE HOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Section 2 -->

    <!-- Section 3 -->
    <div class="section3">
        <div class="color-overlay2">
            <table style="margin-bottom: 5rem;">
                <tr><h1 style="text-align:center;">MAKE YOUR IMPACT</h1></tr>
            </table>
            <div class="row">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center ">
                <img class="mb-3" src="asset/section3-img/1.png" alt="">
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                </div><!-- /.col-lg-4 -->
                
                
                <div class="col-lg-4 d-flex flex-column align-items-center">
                <img class="mb-3" src="asset/section3-img/2.png" alt="">
                <!-- <svg class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 d-flex flex-column align-items-center">
                <!-- <svg class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
                <img class="mb-3" src="asset/section3-img/3.png" alt="">
                <p>And lastly this, the third column of representative placeholder content.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>
    <!-- End Section 3 -->

    <!-- Section 4 -->
    <div class="section4">
        <div class="color-overlay3">
            <div class="row ms-4 pt-5" id="title-section-4">
                <span>Project 1 :</span>
                <h1>OCEANBOUND CLEAN UP</h1>
    
            </div>
            <div class="row ms-4 my-4">
                <div class="col-lg" id="">
                    <img src="asset/section4/Rectangle 4.png" alt="#" style="width: 100%;">
                </div>
                <div class="col-lg m-4 float-end" id="">
                    <h3>PROBLEMS</h3>
                    <span>Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</span>
                </div>
            </div>
            <div class="row me-4 my-4">
                <div class="col-lg m-4 text-end" id="">
                    <h3>SOLUTION</h3>
                    <span class="ps-5">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</span>
                </div>
                <div class="col-lg" id="">
                    <img src="asset/section4/Rectangle 5.png" alt="#" style="width: 100%;">
                </div>
            </div>
    
            <div class="row ms-4 mt-4 pt-4" id="title-section-4">
                <span>Project 2 :</span>
                <h1>FISHING NET RECOVERY</h1>
    
            </div>
            <div class="row ms-4 my-5">
                <div class="col-lg" id="">
                    <img src="asset/section4/Rectangle 6.png" alt="#" style="width: 100%;">
                </div>
                <div class="col-lg m-4 float-end" id="">
                    <h3>PROBLEMS</h3>
                    <span>Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</span>
                </div>
            </div>
            <div class="row me-4 my-4">
                <div class="col-lg m-4 text-end" id="">
                    <h3>SOLUTION</h3>
                    <span>We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</span>
                </div>
                <div class="col-lg" id="">
                    <img src="asset/section4/Rectangle 7.png" alt="#" style="width: 100%;">
                </div>
            </div>
        </div>
    
    <!-- Section 5 -->
    </div>
    <div class="section5">
        <div class="color-overlay3 px-5 pb-5">
            <h1 class="text-center py-5">GET IN TOUCH</h1>
            <div class="row d-flex">
                <div class="col-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1417381102938!2d110.37193787502858!3d-7.774791492244703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584a6eaf7cbb%3A0x294cd98559dc9c8c!2sSekolah%20Vokasi%20UGM!5e0!3m2!1sid!2sid!4v1683468137864!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg">
                    <div  class="row d-flex flex-row justify-content-between">
                        <form class="d-grid gap-3" action="#" id="myForm">
                            <div><input type="text" id="formNama" name="namadepan" placeholder="Name"></div>
                            <div><input type="text" id="formEmail" name="email" placeholder="Email"></div>
                            <div><textarea style="border-radius: 4px; padding: 0.5rem;" name="coment" id="formComment" cols="66" rows="6" placeholder="Write your message here..."></textarea></div>
                            <div><button class="btn btn-light" id="btn-send">SEND</button></div>
                        </form>
                        </div>
                        <div class="col-lg">
                            <br>
                            <br>
                            <span id="output-komentar" style="font-style: italic;"></span>
                            <p id="output-form"></p>
                        </div>                        
                    </div>
                </div>
            </div>

            
            
        </div>
    </div>
    <!-- End Section 5 -->

    <!-- Footer -->
    <div class="container1">
        <div class="navbar navbar-expand-lg navbar-light bg-dark position-relative bottom-0 w-100 start-0 px-3">
            <a class="navbar-brand ms-2" href="">
            <img src="asset\logo-ocean_one.png" alt="" width="auto" height="40px">
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-5">
                <a class="nav-link text-light" href="" >Newsletter</a>
                </li>
                <li class="nav-item mx-5">
                <a class="nav-link text-light" href="">Privacy policy</a>
                </li>
                <li class="nav-item mx-5">
                <a class="nav-link text-light" href="">FAQs</a>
                </li>
        </div>
    </div>

    <!-- End Footer -->

    <script src="js/script.js"></script>




</body>
</html>