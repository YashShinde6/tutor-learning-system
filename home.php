
<style>
    .carousel-item>img{
        object-fit:cover !important;
    }
    #carouselExampleControls .carousel-inner{
        height:25em !important;
    }
    #search-field .form-control.rounded-pill{
        border-top-right-radius:0 !important;
        border-bottom-right-radius:0 !important;
        border-right:none !important
    }
    #search-field .form-control:focus{
        box-shadow:none !important;
    }
    #search-field .form-control:focus + .input-group-append .input-group-text{
        border-color: #86b7fe !important
    }
    #search-field .input-group-text.rounded-pill{
        border-top-left-radius:0 !important;
        border-bottom-left-radius:0 !important;
        border-right:left !important
    }
    .post-item{
        transition:all .2s ease-in-out;
    }
    .post-item:hover{
        transform:scale(1.02);
    }
    .py-3{
        background-color: #8d9ae7;
        background-image: linear-gradient(45deg, #8d9ae7 0%, #fefefe 49%, #7ecff7 100%);

    }
    .col-lg-3 col-md-3 col-sm-12
            {
                background-color:#00ffff;
            }

</style>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide bg-dark" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                            $upload_path = "uploads/banner";
                            if(is_dir(base_app.$upload_path)): 
                            $file= scandir(base_app.$upload_path);
                            $_i = 0;
                                foreach($file as $img):
                                    if(in_array($img,array('.','..')))
                                        continue;
                            $_i++;
                                
                        ?>
                        <div class="carousel-item h-100 <?php echo $_i == 1 ? "active" : '' ?>">
                            <img src="<?php echo validate_image($upload_path.'/'.$img) ?>" class="d-block w-100  h-100" alt="<?php echo $img ?>">
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
        </div>
        <div class="row justify-content-center mt-n3">
            <div class="col-lg-10 col-md-11 col-sm-11 col-sm-11">
                <div class="card card-outline rounded-0">
                    <div class="card-body">
                        <div class="container-fluid">
                            <h3 class="font-weight-bolder text-center">Welcome</h3>
                            <center>
                                <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
                            </center>
                        <?php include('welcome.html') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<style>
        /* Your existing styles here */

        .learn-section {
            background-color: #f7f7f7; /* Change the background color as needed */
            padding: 20px;
            margin-top: 20px;
        }

        .section-buttons {
            text-align: center;
            margin-top: 15px;
        }

        .section-buttons button {
            margin: 10px auto;
            display:block;
        }
</style>
    <!-- Additional styles go here -->
<body>

<!-- Your existing HTML structure -->
<section class="learn-section" style="position: relative; background-color:#98AFC7; width:100%;">
    <div class="container" style="position: relative; z-index: ;">
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-weight-bolder text-center" style="font-family:Arial, sans-serif; font-size:50px; text-align:left"> HTML</h3>
                    <center>
                        <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
                    </center>
                    <p style="font-size:20px; text-align:center;">The language for building web pages</p>
                    <!-- Add HTML content for learning HTML here -->
                    <div class="section-buttons" style="text-align:left;">
                        <button class="btn btn-primary">Learn</button>
                        <button class="btn btn-secondary">Try it Yourself</button>
                        <button class="btn btn-danger">Video Tutorial</button>
                    </div>
            </div>
            <div class="col-md-6">
                <!-- Add image here -->
                <img src="uploads/avatars/3fdfcc1d3c24394c3adda77fc76e7038.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>
</section>


    

<section class="learn-section" style="position: relative; background-color:#F0E68C">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-weight-bolder text-center "style="font-family:Arial, sans-serif; font-size:50px">CSS</h3>
            <center>
                <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
            </center>
            <p style="font-size:20px; text-align:center;"> The Language for Web Styling</p>
             <!-- Add HTML content for learning HTML here -->
                    <div class="section-buttons">
                        <button class="btn btn-primary">Learn</button>
                        <button class="btn btn-secondary">Try it Yourself</button>
                        <button class="btn btn-danger">Video Tutorial</button>
                    </div>
            </div>
            <div class="col-md-6">
                <img src="uploads/avatars/css.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>
</section>

<section class="learn-section" style="position: relative; background-color:#81D8D0" >
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-md-6">
                 <h3 class="font-weight-bolder text-center "style="font-family:Arial, sans-serif; font-size:50px"> C</h3>
            <center>
                <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
            </center>
            <p style="font-size:20px; text-align:center;">The Foundation Language of Developers </p>
            <!-- Add HTML content for learning HTML here -->
                <div class="section-buttons">
                    <button class="btn btn-primary">Learn</button>
                    <button class="btn btn-secondary">Try it Yourself</button>
                    <button class="btn btn-danger">Video Tutorial</button>
                </div>
            </div>
             <div class="col-md-6">
                <!-- Add image here -->
                <img src="uploads/avatars/C-programming.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>
</section>

<section class="learn-section" style="position: relative; background-color:#282a35">
    <div class="container" style="position: relative; z-index: 1;">
         <div class="row">
            <div class="col-md-6">
                <h3 class="font-weight-bolder text-center " style="font-family:Arial, sans-serif; font-size:50px; color:#FFFFFF">C++</h3>
            <center>
            <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1;" color="white" noshade>
            </center>
            <p style="font-size:20px; text-align:center; color:#FFFFFF">A Powerful Language</p>
            <!-- Add HTML content for learning HTML here -->
            <div class="section-buttons">
                <button class="btn btn-primary">Learn</button>
                <button class="btn btn-secondary">Try it Yourself</button>
                <button class="btn btn-danger">Video Tutorial</button>
            </div>
        </div>
            <div class="col-md-6">
                <!-- Add image here -->
                <img src="uploads/avatars/c++.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>
</section>

<section class="learn-section" style="position: relative; background-color:#B1907F">
    <div class="container" style="position: relative; z-index: 1;">
         <div class="row">
            <div class="col-md-6">
        <h3 class="font-weight-bolder text-center "style="font-family:Arial, sans-serif; font-size:50px">JAVA</h3>
        <center>
            <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
        </center>
        <p style="font-size:20px; text-align:center;">A Language For Web Apps, Games, Application</p>
        <!-- Add HTML content for learning HTML here -->
        <div class="section-buttons">
            <button class="btn btn-primary">Learn</button>
            <button class="btn btn-secondary">Try it Yourself</button>
            <button class="btn btn-danger">Video Tutorial</button>
        </div>
    </div>
            <div class="col-md-6">
                <!-- Add image here -->
                <img src="uploads/avatars/Core-Java-Training.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>
</section>

<section class="learn-section" style="position: relative; background-color:#C8C4DF">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-weight-bolder text-center "style="font-family:Arial, sans-serif; font-size:50px"> PYTHON</h3>
                <center>
                    <hr class="bg-navy opacity-100" style="width:8em;height:3px;opacity:1">
                </center>
                    <p style="font-size:20px; text-align:center;">A popular programming language</p>
        <!-- Add HTML content for learning HTML here -->
            <div class="section-buttons">
                <button class="btn btn-primary">Learn</button>
                <button class="btn btn-secondary">Try it Yourself</button>
                <button class="btn btn-danger">Video Tutorial</button>
            </div>
        </div>
            <div class="col-md-6">
                <!-- Add image here -->
                <img src="uploads/avatars/python.jpg" alt="Course Image" class="img-fluid" style="float: right; max-width: 100%;">
            </div>
        </div>
    </div>

</section>

</div>
</section>