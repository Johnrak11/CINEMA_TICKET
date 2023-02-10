<?php
// Error text display

$titleError = "";
$authorError = "";
$durationError = "";
$screenError = "";
$catetoryError = "";
$imageError = "";
$trailerError = "";
$describtionError = "";
$dateError = "";
$timeError = "";
$hallError = "";
$venueError = "";
$addressError = "";


//correct text display

$title = "";
$author = "";
$duration = "";
$screen = "";
$catetory = "";
$image = "";
$trailer = "";
$describtion = "";
$date = "";
$time = "";
$hall = "";
$venue = "";
$address = "";

//    if correct condition
$titleValid = true;
$authorValid = true;
$durationValid = true;
$screenValid = true;
$catetoryValid = true;
$imageValid = true;
$trailerValid = true;
$describtionValid = true;
$dateValid  = true;
$timeValid =  true;
$hallValid = true;
$venueValid = true;
$addressValid = true;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $titleValid = FALSE;
     $authorValid = FALSE;
     $durationValid = FALSE;
     $screenValid = FALSE;
     $catetoryValid = FALSE;
     $imageValid = FALSE;
     $trailerValid = FALSE;
     $describtionValid = FALSE;
     $dateValid = FALSE;
     $timeValid = FALSE;
     $hallValid = FALSE;
     $venueValid = FALSE;
     $addressValid = FALSE;

    // ------------------title show  -----------------------

     if(isset($_POST["name"])){
          if(empty($_POST["name"])){
               $titleError = "You must provide a title";
          }
          else{
               if(titleShow($_POST["name"])){
                    $titleValid = true;
                    $title = ($_POST["name"]);
               }
               else{
                    $titleError = "Title must be add less 2 letters and less than 50 letters";   
               }
          }
     }
     // ------------------------------author----------------
     if (isset($_POST["author"])){
          if (empty($_POST["author"])){
               $authorError = "You must be fill a author name";

          }else if(authorOfShow($_POST["author"])){
               $authorValid = true;  
          }                                            
          else{
               $authorError = "Author must be string and don't have sign";  

               } 
          
     }

     
     // ------------------------------duration----------------
      if(isset($_POST["duration"])){
          if(empty($_POST["duration"])){
               $durationError = "You must be fill a duration";
          }else{
               if(durationShow($_POST["duration"])){
                    $durationValid = true;
                    $duration = ($_POST["duration"]);
               }else{
                    $durationError = "You must be equal or less than 0 and add less 10";
               }

          }
              
          
     }

     // ------------------------------screen ----------------
    if(isset($_POST["screen"])){
          $screenValid = true;
     }
     else{
          $screenError = "You must be choose a screen";
     }
    // ------------------------------category ----------------
     if(isset($_POST["category"])){
          $categoryValid = true;
     }
     else{
          $catetoryError = "You must be select a category";
     }

    
    // ----------------------------Uplaod image -- ----------------
    $target_dir = "views/images/show_images";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])){
     if(!empty($_POST["submit"])){
          $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
          if($check !== false) {
             $imageError = $check;
             $random_file_name = randomNameImage();
             $imageError = $random_file_name;   
          }else{
               $imageError = "Mush be file image ";
          }
     }
         
      }
     else{
          $imageError = "You must be choose a image";      
     }


    // ----------------------------trailer-- ----------------
    if(isset($_POST["trailer"])){
          if(empty($_POST["trailer"])){
               $trailerError = "You must be fill a trailer";
          }else{
               if(traillerShow($_POST["trailer"])){
                    $trailerValid = true;
               }
               else{
                    $trailerError = "Trailer must be link trailer";
               }
          }
     }

    // ----------------------------describtion-- ----------------
    if(isset($_POST["descripton"])){
          if (empty($_POST["descripton"])){
               $describtionError = "You must be fill describtion";
          }
          else if (empty($_POST["descript"])){
               if(describtionShow($_POST["descripton"])){
                    $describtionValid = true;
               }
               else{
                    $describtionError = "Describtion must be have add less 20 letters and less than 200 letters";
               }
          }

     }
    // ----------------------------Date of show -- ----------------
    
    if(isset($_POST["date"])){
     if(empty($_POST["date"])){
          $dateError = "You must be choose a date";
     }else{
          if(dateOfShow($_POST["date"])){
               $dateValid = true;

          }
     }
}

// ----------------------------time show-- ----------------
    
     if(isset($_POST["time"])){
          if(empty($_POST["time"])){
               $timeError = "You must be choose a time";
          }else{
               $timeValid = true;
          }
     }

// ----------------------------hall-- ----------------


     if(isset($_POST["hall"])){
          $hallValid = true;
     }
     else{
          $hallError = "You must be fill hall";
     }
     

     // ----------------------------venue-- ----------------


     if(isset($_POST["venue"])){
          if(empty($_POST["venue"])){
               $venueError = "You must be fill in a venue";
          }else{
               $venueValid = true;
          }
     }

     // ----------------------------address-- ----------------


     if(isset($_POST["address"])){
          if(empty($_POST["address"])){
               $addressError = "You must be fill a address";
          }else{
               if(addressShow($_POST["address"])){
                    $adressValid = true;
               }else{
                    $addressError = "Address must be add less 3 letters and less than 100 letters";
               }
          }
     }


}


