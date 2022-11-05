<!-- https://www.youtube.com/watch?v=BLqDewjag48&t=618s -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleek Gear</title>
   
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .availability-form {
          font-size:2rem;
          display:flex;
          justify-content:center;
          /* background-color:red; */
          /* padding:2rem; */
        }
        
.features{
      /* background-color:red; */

    }
    .container-status{
         background-color: #08036D;
         border-radius:10px;
      
      }
      p{
      text-align: center;
      

      }
        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }

            .availability-form {
          font-size:1rem;
          display:flex;
          justify-content:center;
          /* padding:2rem; */
        }
        }

    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php');?>

   
    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-image">
                    <img src="Images/1.jpg" class="w-100 d-block " />
                </div>
                 
            </div>

        </div>
    </div>

<!-- Statistics -->
    <div class="container availability-form-stats">

    <body onload="load()">
    
      <p>
      <div class="container-status">
         <div class="row">
            <div class="col-sm">
               <p id='0101' class="fs-2 text-light">0</p>
               <p class="text-light">Drivers</p>
            </div>
            <div class="col-sm">
               <p id='0102' class="fs-2 text-light">0</p>
               <p class="text-light">Driving Schools</p>
         </div>
         <div class="col-sm">
            <p class="fs-2 text-light"><span id='0103'>0</span></p>
            <p class="text-light align-content-center">Learners</p>
         </div>
      </div>
   </div>
   </p>            
        
                <!-- <h5 class="mb-4">
                  Drivers
                </h5>
              -->
            </div>
        </div>
    </div>

    <!-- Facilities cards -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Services</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/1.1.jpg" class="card-img-top">
                    <div class="card-body">
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

                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Check Availability</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
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
                      
                        <div class="guests mb-4">
                            <h6 class="mb-1">
                                Age
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                18 years and above
                            </span>
                            <!-- <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span> -->
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Check Availability</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 3rd card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/3.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5>Drivers</h5>
                        <h6 class="mb-4">₹300 per 6hrs</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Available for 8 hrs per day
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
                      
                        <div class="guests mb-4">
                            <h6 class="mb-1">
                                Age
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Experienced and 25 years and above
                            </span>
                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Check Availability</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">More Services>>></a>
            </div>
        </div>
    </div>
    <!-- our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/1.png" width="80px">
                <h5 class="mt-3">
                   Drivers
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/5.png" width="80px">
                <h5 class="mt-3">
                 Safety
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/6.png" width="80px">
                <h5 class="mt-3">
               Affordable
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/4.png" width="80px">
                <h5 class="mt-3">
                    Active GPS
                </h5>
            </div>

            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div> -->

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">more facilities >>></a>
            </div>

        </div>
    </div>
    <!-- testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">

        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">


                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/user1.png" width="50px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/user2.png" width="50px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>


                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/user3.png" width="50px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>



            </div>

            <div class="swiper-pagination"></div>
           
        </div>



        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">know more >>></a>
        </div>
    </div>

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Search Near By Schools</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                
                <iframe class="w-100 rounded" height="320 px"
                    
                    height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://my.atlistmaps.com/map/159ee24a-f358-4f28-8580-ce7dbd974485?share=true" allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +91999999999" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91999999999</a>
                    <br>
                    <a href="tel: +91999999999" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91999999999</a>

                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-twitter me-1"></i> Twitter</span></a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-facebook me-1"></i> Facebook</span></a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-instagram me-1"></i> Instagram</span></a>
                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php');?>





    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    





    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>

    <!-- Initialize Swiper for second -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    sliderPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Changing Number
        function animate(obj, initVal, lastVal, duration) {
         let startTime = null;

      //get the current timestamp and assign it to the currentTime variable
      let currentTime = Date.now();

      //pass the current timestamp to the step function
      const step = (currentTime ) => {

      //if the start time is null, assign the current time to startTime
      if (!startTime) {
         startTime = currentTime ;
      }

      //calculate the value to be used in calculating the number to be displayed
      const progress = Math.min((currentTime - startTime)/ duration, 1);

      //calculate what to be displayed using the value gotten above
      obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

      //checking to make sure the counter does not exceed the last value (lastVal)
      if (progress < 1) {
         window.requestAnimationFrame(step);
      } else {
            window.cancelAnimationFrame(window.requestAnimationFrame(step));
         }
      };
      //start animating
         window.requestAnimationFrame(step);
      }
      let text1 = document.getElementById('0101');
      let text2 = document.getElementById('0102');
      let text3 = document.getElementById('0103');
      const load = () => {
         animate(text1, 0, 511, 7000);
         animate(text2, 0, 232, 7000);
         animate(text3, 100, 25, 7000);
      }
    </script>
</body>

</html>