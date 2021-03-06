<?php
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>/assets/css/theme.css" rel="stylesheet" media="all"> -->

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>assets/theme/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/theme/css/creative.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
    
<body> 
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"></a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Main_Controller'); ?>"><i class="material-icons" style="vertical-align:middle;">account_balance</i> Home</a></li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/Gallery/loadImage'); ?>"><i class="material-icons" style="vertical-align:middle;">photo_library</i> Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services"><i class="material-icons" style="vertical-align:middle;">speaker_notes</i> Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/Schedule_CI'); ?>"><i class="material-icons" style="vertical-align:middle;">schedule</i> Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><i class="material-icons" style="vertical-align:middle;">phone</i> Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/peopledetails'); ?>"><i class="material-icons" style="vertical-align:middle;">people</i> People Details</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/login_CI'); ?>"><i class="material-icons" style="vertical-align:middle;">account_circle</i> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-uppercase text-white ">Welcome to</h2>
          
          <h1 class=" text-white font-weight-bold">Meegahajanadura Gramaniladhari Division</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Meegahajanadura is a beautiful village situated near Hambantota with a population of over 10,000 citizens. Meegahajanadura is a quiet and calm village which is near to the sooriyawewa international cricket stadium.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">View Updates</a>
        </div>
      </div>
    </div>
  </header>  
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>       
          
 <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Contact Me</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">You may contact me within office hours  . For further details visit the "Schedule" tab. </p>
        </div>
      </div>
      <h1>
        <div class="col-lg ml-auto text-center mb-5 mb-lg-0" style="color: white;">
        <i class="material-icons" style="vertical-align:middle;">phone</i>  +94-704328737
      </h1>
    
    </div>
  </section>
       
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Recent Posts</h2>
      <hr class="divider my-4">
      <div class="row" >
      <?php foreach($display->result() as $row){?> 
      <?php } ?>
      <div class="card-column" style="margin: 0 auto; width: 50rem; "  >       
      <?php if($_SESSION['role']=='A'){ echo ' <a href= "'; echo base_url();echo 'index.php/Main_Controller/add/';  echo' " class="add"  ><h3 align="center"><button type="submit" class="btn btn-primary" value="add" name="add">  Add New Post Here</button></h3></a>';}?>      
        <?php      
        echo "\n";
        foreach($display->result() as $row){      
          ?>   <br>      
          <div class="card mb-4 " style="border-color: #f4623a; border-radius: 20px" >
            <img style="width: 35rem; height: 12rem; margin-top: 30px;margin:0 auto;" class="card-img-top" src="<?php echo base_url('/assets1/img/notice.jpg')?>" alt="Card image cap"align="center">
            <div class="card-body">
              <h1 class="card-title" style="text-align:center;"> <?php echo $row->title;?></h1>
              <b><p class="card-text"><?php echo $row->post;?></p></b>
              <li >Sent By   :   <?php echo $row->sender;?></li><br>
              <li >Date   :   <?php echo $row->date;?></li>
              <br>
              <?php if($_SESSION['role']=='A'){
              echo '<a href= "'; echo base_url();echo 'index.php/Main_Controller/deletedata/'; echo $row->id;echo' " class="delete"  ><button type="submit" class="btn btn-danger" value="delete" name=delete>Delete</button></a>            
              <a href= "'; echo base_url();echo 'index.php/Main_Controller/edit/'; echo $row->id; echo'" class="update"  ><button type="submit" class="btn btn-warning" value="update" name=update>Edit</button></a>'; } ?>
            </div>
          </div>          
        <?php }  ?>    
        
      </div>
      </div>
    </div>
  </section> 
  
   <!-- Footer -->
  <footer class="bg-dark py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Meegahajanadura Gramaniladhari Division</div>
    </div>
  </footer>   
                        
 
<script>
  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
</script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url(); ?>assets/theme/js/creative.min.js"></script>
</div>
</body>
          
</html>