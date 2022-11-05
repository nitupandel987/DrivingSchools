<!-- https://www.youtube.com/watch?v=BLqDewjag48&t=618s -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleek Gear</title>

    <?php require('inc/links.php');?>

    <style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">
            Trainings
        </h2>
        <div class="h-line bg-dark"> </div>


    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">
                            Filters
                        </h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropDown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropDown">
                        <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">Find The Educators</h5>

                                <!-- <label class="form-label" style="font-weight:500">Check in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label" style="font-weight:500">Check out</label>
                            <input type="date" class="form-control shadow-none"> -->

                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1"class="form-check-input shadow-none me-1">

                                    <label class="form-label" for="f1" >Two Wheeler</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2"class="form-check-input shadow-none me-1">

                                    <label class="form-label" for="f2" >Four Wheeler</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3"class="form-check-input shadow-none me-1">

                                    <label class="form-label" for="f3" >Only Drivers</label>
                                </div>
                           
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">Level</h5>
                                <div class="d-flex">
                                <div class="me-3">
                                <label class="form-label">From Zero</label>
                                <input type="number" class="form-control shadow-none">

                              </div>
                           <div>
                                <label class="form-label">Basic Understanding</label>
                                <input type="number" class="form-control shadow-none">
                                
                              </div>
                            </div>

                          

                        </div>
                                </div>
                             



                        
                    </div>
                </nav>
            </div>


<div class="col-lg-9 col-md-12 px-4">
<div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">

    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="Images/rooms/1.1.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
    <h5>Two Wheelers</h5>
                        <h6 class="mb-4">₹200 per 2 hrs</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                8 km per day
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Saftely Rules
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                             GPS
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                               Active Monitoring
                            </span>
                        </div>
                        <!-- <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div> -->

                        <div class="guests mb-4">
                            <h6 class="mb-1">
                                Age
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                16 years and above
                            </span>
                            <!-- <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span> -->
                        </div>

    </div>
 




    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
     
   
                       
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
     
    </div>


  </div>
</div>
<div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">

    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
    <img src="Images/rooms/2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
    <h5>Four Wheelers</h5>
                        <h6 class="mb-4">₹300 per 2hrs</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                8 km per day
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Saftely Rules
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                             GPS
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                               Active Monitoring
                            </span>
                        </div>
                        <!-- <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div> -->

                        <div class="guests mb-4">
                            <h6 class="mb-1">
                                Age
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                16 years and above
                            </span>
                            <!-- <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span> -->
                        </div>

    </div>
 




    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
     
   
                       
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
     
    </div>


  </div>
</div>
<div class="card mb-4 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">

    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
    <img src="Images/rooms/3.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
    <h5>Drivers</h5>
                        <h6 class="mb-4">₹300 per 6hrs</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                8 km per day
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Saftely Rules
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                             GPS
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                               Active Monitoring
                            </span>
                        </div>
                        <!-- <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div> -->

                        <div class="guests mb-4">
                            <h6 class="mb-1">
                                Age
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                16 years and above
                            </span>
                            <!-- <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span> -->
                        </div>

    </div>



    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
     
   
                       
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
     
    </div>


  </div>
</div>




</div>

        </div>
    </div>

    <?php require('inc/footer.php');?>

</body>

</html>