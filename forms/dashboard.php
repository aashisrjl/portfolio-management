<?php include('../includes/logincheck.php') ?>

<?php
include('../db/connection.php');
$id=$_SESSION['id'];

$query= "SELECT * FROM `profile` where user_id='$id' ";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0)
{
    header('Location:../forms/profile_register.php');
}else{
  $row= mysqli_fetch_assoc($result);
}
$queryskill="SELECT * FROM skills WHERE user_id='$id' ";
$skills = mysqli_query($conn,$queryskill);

$queryproject="SELECT * FROM project WHERE user_id='$id' ";
$project = mysqli_query($conn,$queryproject);

$queryeducation="SELECT * FROM education WHERE user_id='$id' ";
$education = mysqli_query($conn,$queryeducation);

$expquery="SELECT * FROM experience where user_id='$id' ";
$exp= mysqli_query($conn,$expquery);
?>
<html>
    <head>
    <title>Portfolio</title>
    </head>
    <style>
      
      #h3{
        color: blue;
        font-weight: bold;

      }
      .plus{
        float: right !important;
        margin-right: 40px;
      }
      .modal{
        color:black !important;
      }
      i{
        cursor: pointer;
      }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/noncard.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script>
    <div id="bg">
    <body>
        <header id="bg1">
            <h2 class="logo">Welcome! to My Portfolio</h2>
            <nav class="navigation">
            <a href="#">Aashis</a>
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">About</a>
            <a href="#">News</a>
            <a href="#">Contact</a> 
           
         </header>

         <div class="container" data-aos="fade-out" >
            <div class="row y">
                <div class="col-6">
                    <div class="circle-image">
                        <img src="../profile/<?php echo $row['profile_image'];?>" alt="Your Circular Image">
                      </div>
    </br>
                      <div style="width:300px;">
                      <?php include("../includes/errmsg.php"); ?>
                      <?php include("../includes/successmsg.php"); ?>
    </div>

                </div>
                <div class="col-6  intro" data-aos="slide-up">
                <p id="p1">Hello!</p>
                <br>
               <h1>I'M <?php echo $row['name'] ?>
                <i style="font-size:20px; margin-left:20px; color:blue;" 
                class="fa-sharp fa-solid fa-pen" data-bs-toggle="modal" data-bs-target="#profilemodal">
              </i></h1>
               <h3>A <span style="margin-left:20px; font-size:1.4em;" id="stu" class="sec-text">   </span></h3>
               <br>
               
               <div class="icons" >
                   <a  href="https://www.facebook.com/aashis.rijal.92"target="--"><i class="fa-brands fa-facebook"></i></a></li>
                   <a href="https://www.instagram.com/aashisrjl/" target="__"><i class="fa-brands fa-square-instagram"></i></a></li>
                   <a href="https://twitter.com/AashisRijal1" target="__"><i class="fa-brands fa-twitter"></i></a></li>
                   <a href="https://www.tiktok.com" target="__"><i class="fa-brands fa-tiktok"></i></a></li>
                   <a href="https://www.viber.com" target="__"> <i class="fa-brands fa-viber"></i></a></li>
                </div>
                <br>
                <span id="btn" class="logoutButton" style="cursor:pointer;">LogOut</span>
                </div>

                <div class="col-6 justify-content-md-center x" data-aos="slide-up">
                    <fieldset class="skill">
                        <h3 id="h3">Skills 
                          <span class="plus" data-bs-toggle="modal" data-bs-target="#skillmodal">
                          <i class="fa-solid fa-plus z">
                            </i>
                          </span></h3>
                        <?php while($skillrow= mysqli_fetch_assoc($skills)){ ?> 
                        <li> <?php echo $skillrow['skill_title']; ?> </li>
                        <?php } ?>
                      
                       </fieldset>
                </div>

                <div class="col-6  x" data-aos="slide-up">
                    <div class="table">
                        <h3 id="h3">Projects 
                          <span class="plus" data-bs-toggle="modal" data-bs-target="#projectmodal">
                            <i class="fa-solid fa-plus z" >
                            </i>
                          </span></h3>
                        <table>
                            <thead style="font-size: 1.2em;">
                                <th>Project_Name</th>
                                <th>Proj_desc</th>
                            </thead>
                            <tbody>
                              
                                <?php while($projectrow= mysqli_fetch_assoc($project)){ ?> 
                                  <tr>
                                  <td> <?php echo $projectrow['project_name']; ?> </td>
                                  <td> <?php echo $projectrow['proj_desc']; ?> </td>
                                </tr>
                        <?php } ?>
                      
                      </tbody>
                        </table>
                     </div>

                </div>
                <div class="col-12  justify-content-col-md-center x" data-aos="slide-up">
                    <div class="edu">
                        <h3 id="h3">Education 
                          <span class="plus" data-bs-toggle="modal" data-bs-target="#educationmodal">
                          <i class="fa-solid fa-plus z">
                          </i>
                        </span></h3>
                        <table>
                            <thead style="font-size: 1.2em;">
                                <th>Level</th>
                                <th>Course_Name</th>
                                <th>Join_year</th>
                                <th>Pass_year</th>
                                <th>Percentage</th>
                            </thead>
                            <tbody>
                            <?php while($exprow= mysqli_fetch_assoc($education)){ ?> 
                                <tr>
                                    <td><?php echo $exprow['level']; ?></td>
                                    <td><?php echo $exprow['course_name']; ?> </td>
                                    <td><?php echo $exprow['join_year']; ?></td>
                                    <td><?php echo $exprow['pass_year']; ?></td>
                                    <td><?php echo $exprow['percentage']; ?></td>
                                </tr>
                                <?php }?>
                              
                            </tbody>
                        </table>
    
                    </div>
                </div>
            <div class="col-6  x" data-aos="slide-up">
                <div class="exp">
                    <h3 id="h3">Experiences 
                      <span class="plus" data-bs-toggle="modal" data-bs-target="#expmodal">
                      <i class="fa-solid fa-plus z">
                      </i>
                  </span></h3>
                    <table>
                        <thead style="font-size: 1.2em;">
                            <th>Job_title</th>
                            <th>Join_year</th>
                            <th>Leave_year</th>
                            <th>Company_Name</th>
                        </thead>
                        <tbody>
                          <?php while($exprow = mysqli_fetch_assoc($exp)){ ?>
                            <tr>
                                <td><?php echo $exprow['job_title']; ?></td>
                                <td><?php echo $exprow['join_date']; ?></td>
                                <td><?php echo $exprow['leave_date']; ?></td>
                                <td><?php echo $exprow['company_name']; ?></td>
                            </tr>
                            <?php } ?>

                           
                        
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="col-6 x" data-aos="slide-up">
                    <h3  style="margin-left: 40%;">More Info</h3>
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button style="background-color: black; color: white;" class="accordion-button a" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            My recent college ?
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                          <div class="accordion-body b">
                            <strong>ASIAN SCHOOL OF MANAGEMENT AND TECHNOLOGY</strong> I started my bacehor in Asian college which is located near Gongabu chowk Kathmandu. The available Couses in this college are CSIT, BIM, BCA, BBM. I Joined this college from 2023 jan.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button style="background-color: black; color: white;" class="accordion-button a collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            My hometown ?
                          </button>
                        </h2>
                        
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body b">
                            <strong>My Hometown is Nuwakot Nepal.</strong> My Home address in BIdur-12, Gauribeshi Nuwakot.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button style="background-color: black; color: white;" class="accordion-button collapsed a" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseTwo">
                            What is my qualification ?
                          </button>
                        </h2>
                        
                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body b">
                            <strong>I passed +2 from National School of Sciences(NIST).</strong> And I studying bachelor in  CSIT .
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button style="background-color: black; color: white;" class="accordion-button a collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            My future target ?
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body b">
                            <strong>I want to be a successful full stack developer.</strong>.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>



        <footer style="margin-top: 100px;">
            <div class="footer-container">
              <div class="footer-section">
                <h3>About <i style="font-size:20px; margin-left:20px; color:blue;" 
                class="fa-sharp fa-solid fa-pen" data-bs-toggle="modal" data-bs-target="#aboutmodal" >
                </i></h3>
                <p>  <?php echo $row['about'];?></p>
              </div>
              <div class="footer-section">
                <h3>Contact Us</h3>
                <ul>
                  <li>Email: aashisrijal@gmail.com</li>
                  <li>Phone: 9847749997</li>
                  <li>Address: Manamaiju, Kathmandu</li>
                </ul>
              </div>
              <div class="footer-section">
                <h3>Connect With Me</h3>
                <ul>
                  <li><a href="https://www.facebook.com/aashis.rijal.92">Facebook</a></li>
                    <li><a href="https://twitter.com/AashisRijal1">Twitter</a></li>
                    <li><a href="https://www.instagram.com/aashisrjl/">Instagram</a></li>
                    <li><a href="https://github.com/aashisrjl">GitHub</a></li>
                </ul>
              </div>
            </div>
          </footer>

          <!-- name and profile Modal -->
<div class="modal fade" id="profilemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/profileedit.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">fullname</span>
      <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
      </div>
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Image</span>
      <input type="file" class="form-control" name="image">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>

          <!-- skill Modal -->
          <div class="modal fade" id="skillmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Skill</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/addskill.php" method="POST">
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Skill_title</span>
      <input type="text" class="form-control" name="skill" value="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>

 <!-- about Modal -->
 <div class="modal fade" id="aboutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit about</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/updateabout.php" method="POST">
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">about yourself</span>
      <input type="text" class="form-control" name="about" value="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>

          <!-- project Modal -->
          <div class="modal fade" id="projectmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/projectadd.php" method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">project_Name</span>
      <input type="text" class="form-control" name="project_name" value="">
      </div>
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Proj_desc</span>
      <input type="text" class="form-control" name="proj_desc" value="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>

 <!-- education Modal -->
 <div class="modal fade" id="educationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action='../process/education_add.php' method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Level</span>
      <input type="text" class="form-control" name="level" value="">
      </div>
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Course_Name</span>
      <input type="text" class="form-control" name="course_name" value="">
      </div>
      <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Join_year</span>
      <input type="date" class="form-control" name="join_year" value="">
      </div>
      <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Pass_year</span>
      <input type="date" class="form-control" name="pass_year" value="">
      </div>
      <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Percentage</span>
      <input type="text" class="form-control" name="percentage" value="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div><!-- education Modal -->
 <div class="modal fade" id="expmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Experiences</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action='../process/exp_add.php' method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Job_title</span>
      <input type="text" class="form-control" name="title" value="">
      </div>
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Join_year</span>
      <input type="date" class="form-control" name="join" value="">
      </div>
      <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Leave_year</span>
      <input type="date" class="form-control" name="leave" value="">
      </div>
      <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Company_Name</span>
      <input type="text" class="form-control" name="name" value="">
      </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class=" btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>




    </body>
    <script type=" text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    const text = document.querySelector(".sec-text");
    const textLoad = () => {
        setTimeout( () => {
            text.textContent = "DEVELOPER";
        },0);

        setTimeout( () => {
            text.textContent = "DESIGNER";
        },2000);

        setTimeout( () => {
            text.textContent = "CSIT STUDENT";
        },3500);
        
    }
    textLoad();
    setInterval(textLoad,5000);
</script>
    <script>
   
    document.getElementById('btn').addEventListener('click', function() {
         window.location = '../process/logout.php'; 
       });
      
  </script>
   <script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>


</html>