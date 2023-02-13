<?php
// Error text display

$titleError = "";
$authorError = "";
$durationError = "";
$screenError = "";
$catetoryError = "";
$imageError = "";
$trailerError = "";
$descriptionError = "";
$dateError = "";
$timeError = "";
$hallError = "";
$venueError = "";
$addressError = "";
$languageError = "";
$priceError = "";


//correct text display

$title = "";
$author = "";
$duration = "";
$screen = "";
$catetory = "";
$image = "";
$trailer = "";
$description = "";
$date = "";
$time = "";
$hall = "";
$venue = "";
$language = "";
$price = "";


//    if correct condition
$titleValid = true;
$authorValid = true;
$durationValid = true;
$screenValid = true;
$catetoryValid = true;
$imageValid = true;
$trailerValid = true;
$descriptionValid = true;
$dateValid  = true;
$timeValid =  true;
$hallValid = true;
$venueValid = true;
$languageValid = true;
$priceValid = true;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $titleValid = FALSE;
     $authorValid = FALSE;
     $durationValid = FALSE;
     $screenValid = FALSE;
     $catetoryValid = FALSE;
     $imageValid = FALSE;
     $trailerValid = FALSE;
     $descriptionValid = FALSE;
     $dateValid = FALSE;
     $timeValid = FALSE;
     $hallValid = FALSE;
     $venueValid = FALSE;
     $languageValid = FALSE;
     $priceValid  = FALSE;


     // ------------------title show  -----------------------

     if (isset($_POST["name"])) {
          if (empty($_POST["name"])) {
               $titleError = "You must beinput a title";
          } else {
               if (titleShow($_POST["name"])) {
                    $titleValid = true;
               } else {
                    $titleError = "Title must be more than 2 letters and less than 40 letters";
               }
          }
     }
     // ------------------------------author----------------
     if (isset($_POST["author"])) {
          if (empty($_POST["author"])) {
               $authorError = "Must be a text";
          } else if (authorOfShow($_POST["author"])) {
               $authorValid = true;
          } else {
               $authorError = "Author must be string and don't have sign";
          }
     }
     // ------------------------------duration----------------
     if (isset($_POST["h"]) && (isset($_POST["m"]))) {
          if (empty($_POST["h"]) && empty($_POST["m"])) {
               $durationError = "Duration must be input";
          } else {
               if (durationShow($_POST["h"], $_POST["m"])) {
                    $durationValid = true;
               } else {
                    $durationError = "Duration must be less than 10 hours";
               }
          }
     }
     // ------------------------------screen ----------------
     if (isset($_POST["screen"])) {
          $screenValid = true;
     } else {
          $screenError = "You must be select a screen";
     }
     // ------------------------------category ----------------
     if (isset($_POST["category"])) {
          $catetoryValid = true;
     } else {
          $catetoryError = "Category must be select";
     }
     // ------------------------------ language----------------
     if (isset($_POST["language"])) {
          $languageValid = true;
     } else {
          $languageError = "Language must be select";
     }
     // ----------------------------Uplaod image -- ----------------
     if (isset($_FILES["imageUpload"]["name"])) {
          if (!empty($_FILES["imageUpload"]["name"])) {
               $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
               if ($check !== false) {
                    $imageValid = true;
               } else {
                    $imageError = "Mush be file image ";
               }
          } else {
               $imageError = "You must be choose a image";
          }
     }
     // ----------------------------trailer-- ----------------
     if (isset($_POST["trailer"])) {
          if (empty($_POST["trailer"])) {
               $trailerError = "You must be fill a trailer";
          } else {
               if (traillerShow($_POST["trailer"])) {
                    $trailerValid = true;
               } else {
                    $trailerError = "Trailer must be link trailer";
               }
          }
     }
     // ----------------------------describtion-- ----------------
     if (isset($_POST["descripton"])) {
          if (empty($_POST["descripton"])) {
               $descriptionError = "Description must be input";
          } else if (empty($_POST["descript"])) {
               if (describtionShow($_POST["descripton"])) {
                    $descriptionValid = true;
               } else {
                    $descriptionError = "Description must be at least 250 characters and more than 3";
               }
          }
     }

     // ----------------------------Date of show -- ----------------

     if (isset($_POST['date'])) {
          if (empty($_POST['date'])) {
               $dateError = "Date must be input";
          } elseif (validateDate($_POST['date']) && $_POST['date'] >= date("Y-m-d")) {
               $dateValid = true;
          } else {
               $dateError = "date incorrect";
          }
     }
     // ----------------------------time show-- ----------------
     if (isset($_POST["time"])) {
          if (empty($_POST["time"])) {
               $timeError = "Time must be select a time";
          } else {
               $timeValid = true;
          }
     }
     // ----------------------------hall-- ----------------
     if (isset($_POST["hall"])) {
          $hallValid = true;
     } else {
          $hallError = "Hall must be fill";
     }
     // ----------------------------hall-- ----------------
     if (isset($_POST["price"])) {
          if (empty($_POST["price"])) {
               $priceError = "Price must be fill ";
          } elseif ($_POST["price"] >= 0 && $_POST["price"] <= 100) {
               $priceValid  = true;
          } else {
               $priceError = "Price must be more than 0$ and less than 100$";
          }
     }
     // ----------------------------venue-- ----------------

     if (isset($_POST["venue"])) {
          $venueValid = true;
     } else {
          $venueError = "You must be fill in a venue";
     }
     // ---------------------------------------condection is correct---------
     if ($titleValid && $authorValid && $durationValid && $screenValid && $catetoryValid && $imageValid && $trailerValid && $descriptionValid && $dateValid && $timeValid && $hallValid && $venueValid && $languageValid && $priceValid) {
          // --------------table show data-------------
          $title = $_POST["name"];
          $author = $_POST["author"];
          $duration = $_POST["h"] . ":" . $_POST["m"];
          $screen = $_POST["screen"];
          $catetory = $_POST["category"];
          $trailer = $_POST["trailer"];
          $description = $_POST["descripton"];
          $language = $_POST["language"];
          $sellerId = $_COOKIE["id"];
          // --------------table show_detail data-------------
          $date = $_POST["date"];
          $time = $_POST["time"];
          $hall = $_POST["hall"];
          $venue = $_POST["venue"];
          $price = $_POST["price"]."$";
          if (!getShowsName($title, $sellerId, 0)) {
               // -----------image insert into folder---------------
               $target_file = basename($_FILES["imageUpload"]["name"]);
               $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
               // -----------image insert name into db---------------
               $random_file_name = randomNameImage();
               move_uploaded_file($_FILES["imageUpload"]["tmp_name"], "views/images/shows_image/" . $random_file_name . "." . $imageFileType);
               $image = $random_file_name . "." . $imageFileType;
               // -----------Show insert into table show---------------
               $idShowCurrent = createNewShow($title, $description, $image, $author, $trailer, $duration, $catetory, $screen, $sellerId, $language);
               // --------------table show detail -------------
               createShowDetails($venue, $date, $time, $hall, $idShowCurrent, $price);
               header('location:/seller?create-show=1');
          } else {
               $titleError = "Your show already exists";
          }
     }
}
