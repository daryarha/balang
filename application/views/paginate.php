    <!DOCTYPE html>
    <html lang="en">
        <head> 
            <title>Pagination Demo | CodesQuery</title> 
            <meta charset="utf-8"> 
            <meta http-equiv="X-UA-Compatible" content="IE=edge">    
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <!--bootstrap CSS --> <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>
        <body>
            <div class="wrapper"> 
                <div class="container" style="margin: 100px;"> 
                    <div class="row"> 
                        <div class="pagination_demo text-center"> 
                            <h4>Pagination Demo | CodesQuery</h4> 
                            <hr> 
                            <table class="table table-bordered table-hover table-responsive paginated"> 
                                <thead> 
                                    <tr> 
                                        <th class="text-center"> S.No. </th> 
                                        <th class="text-center"> Name  </th> 
                                        <th class="text-center"> Email </th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <?php $sn= 1; foreach($users as $value) { ?> 
                                         <tr> 
                                             <td> <?php echo $sn;                  ?></td> 
                                             <td> <?php echo $value['user_name'];  ?></td> 
                                             <td> <?php echo $value['user_email']; ?></td> 
                                         </tr> 
                                     <?php $sn++; }  ?> 
                                 </tbody> 
                             </table> 
                             <div class="pagination_links"> 
                                 <?php echo $links; ?> </div> 
                             </div> 
                         </div> 
                     </div> 
                 </div>
             </div>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
          </body>
    </html>