<?php include('../includes/logincheck.php') ?>
<?php 
include('../db/connection.php');
$id=$_SESSION['id'];

$query= "SELECT * FROM profile where user_id='$id' ";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0)
{
    header('Location:../forms/profile_register.php');
}else{
  $row= mysqli_fetch_assoc($result);
}
$queryskill="SELECT * FROM skills WHERE user_id='$id' ";
$skills = mysqli_query($conn,$queryskill);
?>
<html>
    <head>
    <title>Portfolio</title>
    </head>
    <style>
        .card{
            height: 300px !important;
            background: transparent !important;


        }
        .card .card-header{
            font-weight: bold;
            font-size: 2em !important;
            margin-left: 30px;
            padding: 10px;
            color: blue;
        }
        .card .card-body{
            padding: 10px;
            color: white;
        }
       .plus{
        float: right !important;
        margin-right:30px;
       }
       .card-body p{
        margin-left: 10px;
       }
       #clk{
        font-weight: bold;
        color:green;
        padding:10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
      
       #btnn{
        text-decoration:none;
        background-color:red;
        color:white;
        padding:5px;
        border-radius:7px;
        margin-left:110px;
       }
       .modal{
        color:black !important;
       }
       textarea{
        height:500px;
       }
       
       

      
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/db.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script>

    <body>
        <header>
            <h2 class="logo">Welcome! to My Portfolio</h2>
            <nav class="navigation">
      
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
                      <br>
                      <h3 style="margin-left: 60px;" id="clk"><?php echo $row['name'] ?>
                       <a style="margin-left: 10px; font-size:13px; underline:none;" href="" data-bs-toggle="modal" data-bs-target="#name"> Edit</a></h3>
                      
                      <a id=btnn href="../process/logout.php" >LogOut</a>  
                </div>
                <div class="col-6 intro" data-aos="slide-up">
                <?php include('../includes/successmsg.php') ?>
            <?php include('../includes/errmsg.php') ?>
                <div class="card">
                  <div class="card-header">
                    About <span class="plus" data-bs-toggle="modal" data-bs-target="#about">
                      <i class="fa-solid fa-plus z"></i>
                    </span>
                  </div>
                  <div class="card-body">
                    <?php echo $row['about'];?>
                  </div>
                </div>
                </div>

                <div class="col-6  x" data-aos="slide-up">
                    <fieldset class="skill">
                       <div class="card">
                        <div class="card-header">Skills 
                          <span class="plus" data-bs-toggle="modal" data-bs-target="#skillmodal">
                            <i class="fa-solid fa-plus z"></i>
                        </span>
                        </div>
                        <div class="card-body">
                        <ul>
                            <?php while($skillrow= mysqli_fetch_assoc($skills)){ ?> 
                              <li> <?php echo $skillrow['skill_title']; ?> </li>
                            <?php } ?>

                            </ul>
                      
                      
                        </div>
                       </div>
                       </fieldset>
                </div>

                <div class="col-6  x" data-aos="slide-up">
                    <div class="card">
                        <div class="card-header">projects 
                          <span class="plus" data-bs-toggle="modal" data-bs-target="#project">
                          <i class="fa-solid fa-plus z"></i>
                        </span>
                      </div>
                        <div class="card-body">
                          <li>Video provides a powerful way to help you prove your point.</li>
                          <li> When you click Online Video, you can paste in the embed code</li>
                          <li> video you want to add. You can also type a keyword to search online</li>
                          <li> the video that best fits your document.</li>
                        </div>
                       </div>
                </div>
                <div class="col-12  justify-content-col-md-center x" data-aos="slide-up">
                    <div class="card">
                        <div class="card-header">Education <span class="plus" data-bs-toggle="modal" data-bs-target="#education">
                          <i class="fa-solid fa-plus z"></i>
                        </span></div>
                        <div class="card-body">
                          <li>Video provides a powerful way to help you prove your point.</li>
                          <li> When you click Online Video, you can paste in the embed code </li>
                          <li> video you want to add. You can also type a keyword to search online </li>
                          <li> the video that best fits your document.</li>
                        </div>
                       </div>
                      </div>
            <div class="col-6 x" data-aos="slide-up">
                <div class="card">
                    <div class="card-header">Experiences <span class="plus" data-bs-toggle="modal" data-bs-target="#experiences">
                      <i class="fa-solid fa-plus z"></i>
                    </span></div>
                    <div class="card-body">
                      <li>Video provides a powerful way to help you prove your point.</li>
                      <li> When you click Online Video, you can paste in the embed code </li>
                      <li> video you want to add. You can also type a keyword to search online</li>
                      <li> the video that best fits your document.</li>
                    </div>
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


<!-- skill Modal -->
<div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Skills</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/addskill.php" method="POST">
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Skills</span>
      <input type="text" class="form-control" name="skill">
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

<!-- name and profile Modal -->
<div class="modal fade" id="name" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal-body">
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

<!-- project Modal -->
<div class="modal fade" id="project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit projects</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">name</span>
      <input type="text" class="form-control" name="proj_title" value="">
</div>
<div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Proj_Desc</span>
      <input type="text" class="form-control" name="proj_desc" >
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
<div class="modal fade" id="education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit education</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Join_date</span>
      <input type="text" class="form-control" name="join_date" value="">
</div>
<div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Pass_date</span>
      <input type="text" class="form-control" name="pass_date">
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

<!-- Experiences Modal -->
<div class="modal fade" id="experiences" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Experiences</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" >
      <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">job_name</span>
      <input type="text" class="form-control" name="name" value="">
</div>
<div class="modal-body">
          <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">start</span>
      <input type="text" class="form-control" name="image">
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


<!-- Modal  About -->
<div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../process/updateabout.php" method="POST">
      <div class="modal-body">
      <div class="input-group">
  <span class="input-group-text">about youself</span>
  <textarea name="about" class="form-control" aria-label="With textarea" id="editor"></textarea>
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
    <script type="text/javascript" src="../js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type=" text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
     <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/super-build/ckeditor.js"></script>

<script>
            // This sample still does not showcase all CKEditor 5 features (!)
            // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                placeholder: 'Welcome to CKEditor 5!',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                htmlEmbed: {
                    showPreviews: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                // The "super-build" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                    'MathType',
                    // The following features are part of the Productivity Pack and require additional license.
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents'
                ]
            });
        </script>
    

</html>