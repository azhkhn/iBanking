<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iBanking - Your Trusted eBanking Agent</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--Data tables css-->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!--load swal js -->
  <script src="dist/js/swal.js"></script>
       
       <!--Inject SWAL-->
       <?php if(isset($success)) {?>
       <!--This code for injecting success alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Success","<?php echo $success;?>","success");
                           },
                               100);


                           
               </script>

       <?php } ?>

       <?php if(isset($err)) {?>
       <!--This code for injecting error alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Failed","<?php echo $err;?>","error");
                           },
                               100);
               </script>

       <?php } ?>
       <?php if(isset($info)) {?>
       <!--This code for injecting info alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Success","<?php echo $info;?>","warning");
                           },
                               100);
               </script>

       <?php } ?>
       <script>
       function getiBankAccs(val)
            
             {
                    $.ajax
                    ({
                        //get account rates
                    type: "POST",
                    url: "pages_ajax.php",
                    data:'iBankAccountType='+val,
                    success: function(data){
                    //alert(data);
                    $('#AccountRates').val(data);
                }
                });

                $.ajax
                    ({
                        //get account transferable name
                    type: "POST",
                    url: "pages_ajax.php",
                    data:'iBankAccNumber='+val,
                    success: function(data){
                    //alert(data);
                    $('#ReceivingAcc').val(data);
                }
                });

                $.ajax
                    ({
                    //get account transferable holder | owner
                    type: "POST",
                    url: "pages_ajax.php",
                    data:'iBankAccHolder='+val,
                    success: function(data){
                    //alert(data);
                    $('#AccountHolder').val(data);
                }
                });
            }
    </script> 

</head>