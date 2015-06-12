  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>

    <!-- Bootstrap -->
   <!--  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS & JS -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


     </head>
      <body>

<div class="jumbotron">
  <div class="container">
    <h1>BM Concepts</h1>
    <p>CI Base Model CURD With Form Validation And Delete Via Ajax By Baqir Memon</p>
    <p>
      <a href="baqirmemon.github.io/bmconcepts" class="btn btn-primary btn-lg">Baqirm Memon</a>
    </p>
  </div>
</div>

    <!-- ends here -->



     <!-- ============================================================
          CONTENT AREA
           ============================================================
      -->
      <div class="clearfix">&nbsp;</div>
     

    <section class="main-content">
      <div class="container">
        <div class="row">

         <?php //if($this->ion_auth->logged_in()): ?>
           
          <!-- List Of Admin Modules -->
            <div class="col-sm-3">
              <div class="list-group">
                  <a class="list-group-item  active" href="<?php echo site_url() ?>company/">View Company</a>
                  <a class="list-group-item" href="<?php echo site_url() ?>company/create">Add Company</a>
             </div>
            </div>
            <!-- Main Content -->


           <div class="col-sm-9" style="text-align: justify;">
              <?php $this->load->view($mainContent); ?>
            </div>
     
      </div>
    </section>
  <!-- ============================================================
          CONTENT AREA END
           ============================================================
      -->


    <!-- Footer Start-->

      





    


    











    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


      <script>  
     $(document) .ready(function(e) {

     // delete via ajax
     $(".singleDelete").click(function(e) {
                    e.preventDefault();
                        var currentLink = $(this);
                        var message = confirm("Are you sure?");
                           if(message)
                                {
                                  $.ajax({
                                          url: $(this).attr('href'),
                                          success: function(msg){

                                              currentLink.closest('tr').fadeOut('fast').css("background-color", "#F00");
                                            }
                                        });
                                }
        });

      // status Via Ajax
      $(".linkStatus").click(function(e) {
          e.preventDefault();
          var currentLink = $(this);
          $(currentLink).html('<i class="fa fa-spinner fa-spin fa-2x"></i>');
                  $.ajax({
                      url: $(this).attr('href'),
                      success: function(msg){
                        $(currentLink).html(msg);

                      }
                    });
           });

      });

      </script>

    </body>
  </html>

