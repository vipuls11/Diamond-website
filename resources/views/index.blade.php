@extends('layout')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <style>
        .Card {
            position: relative;
        }

        .card_img {
            position: absolute;
            top: -40px;
            left: 45%;
        }

        .Mein_card {
            height: 70vh;
        }

        #next-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 24px;
            font-weight: 700;
            padding: 8px 15px;
            margin-bottom: 10px;
        }

        #prev-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 24px;
            font-weight: 700;
            padding: 8px 15px;
            margin-bottom: 10px;
        }

        /* ..............testmonial........... */
        #clothes_slider1 {
            width: 90%;
            margin: auto;
            position: relative;
            height: 100%;
        }

        #next-btn1 {
            position: absolute;
            top: 50%;
            left: 0;
            background-color: rgb(247, 183, 100);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 24px;
            font-weight: 700;
            padding: 8px 15px;
            margin-bottom: 10px;
            z-index: 50;
        }

        #prev-btn2 {
            position: absolute;
            top: 50%;
            right: 0;
            background-color: rgb(247, 183, 100);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 24px;
            font-weight: 700;
            padding: 8px 15px;
            margin-bottom: 10px;
            z-index: 50;
        }

        /* ..............testmonial........... */

        @media only screen and (max-width: 640px) {

            /* Styles for mobile screens */
            .card_img {
                position: absolute;
                top: -40px;
                left: 38%;
            }

        }

        /* Tablet (portrait) */
        @media only screen and (min-width: 641px) and (max-width: 960px) {

            /* Styles for tablet screens */
            .card_img {
                position: absolute;
                top: -40px;
                left: 42%;
            }

        }

        /* Desktop (landscape) */
        @media only screen and (min-width: 961px) {

            /* Styles for desktop screens */

        }
    </style>
    <div>
        <div>

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img src="{{ asset('image/diamond second banner.png') }}" alt="" class="w-100 d-block">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('image/5.jpg') }}" alt="" class="w-100 d-block">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="bg-black">
            <div class="" style="width: 90%; margin:auto;">
                <div class="d-lg-flex justify-content-between text-white py-5 align-items-center ">
                    <p class="py-2 fs-4 m-0">DIAMOND AND JEWELLERY GRADING PROCESS</p>
                    <button class="px-5 py-2 fs-4 rounded-pill text-white"
                        style="border:2px solid white;
                background-color:transparent;">LEARN MORE <span
                            class="" style="margin-left: 10px;"><i
                                class="fa-solid fa-arrow-right"></i></span></button>
                </div>
                <div class="row g-3 text-white py-5">
                    <div class="col-lg-3  col-md-6">
                        <div class="p-3 border border-2 border-white h-100">
                            <div class="">
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/Diamond videos resize.mp4') }}" type="video/mp4">
                                    </video>

                                </div>
                                <h6>Your Article Title Goes Here</h6>
                                {{-- <h3>Your diamonds and jewellery will be in the best hands.</h3> --}}
                                <p>There is just enough space here for several lines of
                                    text. Make sure you get your message across clearly
                                    yet concisely.
                                </p>
                            </div>
                            <div class="" style="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="https://hrdantwerp.com/wp-content/uploads/2023/05/grad-diamond.png"
                                        alt="" style="width:40px; height:40px;">
                                    <a href="" class="" style=""><button class="text-white"
                                            style="border:none;
                                            background-color:transparent;
                                            text-decoration: underline;
                                            font-size:17px;">Explore
                                            more
                                            <span class="" style="margin-left: 10px;"><i
                                                    class="fa-solid fa-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-3 border border-2 border-white h-100">
                            <div>
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/Untitled design (2).mp4') }}" type="video/mp4">
                                    </video>
                                </div>

                                <h6>Your Article Title Goes Here</h6>
                                <p>
                                    There is just enough space here for several lines of
                                    text. Make sure you get your message across clearly
                                    yet concisely.

                                </p>
                            </div>
                            <div class="" style="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="https://hrdantwerp.com/wp-content/uploads/2023/05/grad-diamond.png"
                                        alt="" style="width:40px; height:40px;">
                                    <a href="" class="" style=""><button class="text-white"
                                            style="border:none;
                                            background-color:transparent;
                                            text-decoration: underline;
                                            font-size:17px;">Explore
                                            more
                                            <span class="" style="margin-left: 10px;"><i
                                                    class="fa-solid fa-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-3 border border-2 border-white h-100">
                            <div>
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/Untitled design (1).mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <h6>Your Article Title Goes Here</h6>
                                <p>
                                    There is just enough space here for several lines of
                                    text. Make sure you get your message across clearly
                                    yet concisely.

                                </p>
                            </div>
                            <div class="" style="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="https://hrdantwerp.com/wp-content/uploads/2023/05/grad-diamond.png"
                                        alt="" style="width:40px; height:40px;">
                                    <a href="" class="" style=""><button class="text-white"
                                            style="border:none;
                                            background-color:transparent;
                                            text-decoration: underline;
                                            font-size:17px;">Explore
                                            more
                                            <span class="" style="margin-left: 10px;"><i
                                                    class="fa-solid fa-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-3 border border-2 border-white h-100">
                            <div>
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/Diamond videos resize.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <h6>Your Article Title Goes Here</h6>
                                <p>
                                    There is just enough space here for several lines of
                                    text. Make sure you get your message across clearly
                                    yet concisely.

                                </p>
                            </div>
                            <div class="" style="">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img src="https://hrdantwerp.com/wp-content/uploads/2023/05/grad-diamond.png"
                                        alt="" style="width:40px; height:40px;">
                                    <a href="" class="" style=""><button class="text-white"
                                            style="
                                            border:none;
                                            background-color:transparent;
                                            text-decoration: underline; 
                                            font-size:17px;">Explore
                                            more
                                            <span class="" style="margin-left: 10px;"><i
                                                    class="fa-solid fa-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ...........................shop by Category.................... --}}
                <div>
                    <h3 class="text-center text-white fs-2">Shop By Category</h3>
                    <div class="row g-3 text-white py-5">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-lg-4  col-md-6">
                                <div class="p-3 ">
                                    <div class="">
                                        <video width="100%" height="100%" controls>
                                            <source src="{{ asset('image/Untitled design (1).mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="p-3 border border-2 border-white h-100">
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/Untitled design (2).mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="p-3 border border-2 border-white h-100">
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/WhatsApp Video 2024-03-29 at 2.39.05 PM.mp4') }}"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="p-3 border border-2 border-white h-100">
                                <div class="">
                                    <video width="100%" height="100%" controls class="">
                                        <source src="{{ asset('image/WhatsApp Video 2024-03-29 at 2.39.03 PM (2).mp4') }}"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="p-3 border border-2 border-white h-100">
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/WhatsApp Video 2024-03-29 at 2.39.03 PM (1).mp4') }}"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="p-3 border border-2 border-white h-100">
                                <div class="">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ asset('image/WhatsApp Video 2024-03-29 at 2.39.02 PM.mp4') }}"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- ...........................................2Grids Column............................  --}}

                    <div>

                        <div class="row align-items-center py-5">
                            <div class="col-lg-6">
                                <div class="">
                                    <h2 class="text-white mb-5"
                                        style="font-size: 40px;
                                    font-weight:700;">
                                        Whatever the <br>
                                        occasion, we've got <br>
                                        a beautiful piece of <br>
                                        diamond for you.
                                    </h2>

                                    <button class="text-white px-4 py-2"
                                        style="border:none;
                                            background-color:grey;
                                            font-size:24px;
                                            ">Explore
                                        more
                                        <span class="" style="margin-left: 10px;"><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('image/big-beautiful-jewel.jpg') }}" alt=""
                                    class="w-100 d-block">
                            </div>
                        </div>
                    </div>

                    {{-- .............................3 Grid Cols....................... --}}
                    <div>
                        <h3 class="text-center text-white fs-2">Latest Collections</h3>
                        <div class="row g-3 text-white py-5">
                            <div class="col-lg-4  col-md-6">
                                <div class="p-3  h-100">
                                    <div class="">
                                        <div class="">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{ asset('image/Diamond videos resize.mp4') }}"
                                                    type="video/mp4">
                                            </video>

                                        </div>
                                        <h6>Your Article Title Goes Here</h6>
                                        {{-- <h3>Your diamonds and jewellery will be in the best hands.</h3> --}}
                                        <p>There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3  h-100">
                                    <div>
                                        <div class="">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{ asset('image/Untitled design (2).mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>

                                        <h6>Your Article Title Goes Here</h6>
                                        <p>
                                            There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.

                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3 h-100">
                                    <div>
                                        <div class="">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{ asset('image/Untitled design (1).mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                        <h6>Your Article Title Goes Here</h6>
                                        <p>
                                            There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.

                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="" style="">
                            <div class="text-center">

                                <a href="" class="" style=""><button
                                        class="text-black px-4 py-2 mb-5 bg-secondary-subtle"
                                        style="border:none;
                                            background-color:transparent;
                                            text-decoration: underline;
                                            font-size:17px;
                                            font-weight:600;">Explore
                                        more
                                        <span class="" style="margin-left: 10px;"><i
                                                class="fa-solid fa-arrow-right"></i></span></button></a>
                            </div>
                        </div>
                    </div>

                    {{-- .............................New For You!....................... --}}
                    <div>
                        <h3 class="text-center text-white fs-2">New For You!</h3>
                        <p class="text-white text-center" style="font-size:20px;">Our latest releases, just for you !</p>
                        <div class="row g-3 text-white text-center py-5">
                            <div class="col-lg-4  col-md-6">
                                <div class="p-3  h-100">
                                    <div class="">
                                        <div class="p-5">
                                            <video width="100%" height="100%" controls class="rounded-circle ">
                                                <source src="{{ asset('image/Diamond videos resize.mp4') }}"
                                                    type="video/mp4">
                                            </video>

                                        </div>
                                        <h6>Your Article Title Goes Here</h6>
                                        {{-- <h3>Your diamonds and jewellery will be in the best hands.</h3> --}}
                                        <p>There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3  h-100">
                                    <div>
                                        <div class="p-5">
                                            <video width="100%" height="100%" controls class="rounded-circle ">
                                                <source src="{{ asset('image/Untitled design (2).mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>

                                        <h6>Your Article Title Goes Here</h6>
                                        <p>
                                            There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.

                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3 h-100">
                                    <div>
                                        <div class="p-5">
                                            <video width="100%" height="100%" controls class="rounded-circle ">
                                                <source src="{{ asset('image/Untitled design (1).mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                        <h6>Your Article Title Goes Here</h6>
                                        <p>
                                            There is just enough space here for several lines of
                                            text. Make sure you get your message across clearly
                                            yet concisely.

                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="" style="">
                            <div class="text-center">

                                <a href="" class="" style=""><button
                                        class="text-black px-4 py-2 mb-5 bg-secondary-subtle"
                                        style="border:none;
                                            background-color:transparent;
                                            text-decoration: underline;
                                            font-size:17px;
                                            font-weight:600;">Explore
                                        more
                                        <span class="" style="margin-left: 10px;"><i
                                                class="fa-solid fa-arrow-right"></i></span></button></a>
                            </div>
                        </div>
                    </div>

                    {{-- ...........................testmonial.................................... --}}

                    <div class="">
                        <div id="clothes_slider" class="my-5 text-center border-top pt-3">
                            <div class="container-fluid text-white">
                                <h4 class="m-0 fw-bold">Customer Love</h4>
                                {{-- <p class="m-0">High On Demand</p> --}}
                            </div>
                            <div class="sliders_clothes owl-carousel d-flex g-3 text-white ">

                                <div class="Mein_card p-5 m-1 text-center">
                                    <div
                                        class="Card w-lg-75 m-auto bg-body-tertiary rounded text-black rounded-4 my-3 p-4 h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC-buhde5C1FxyNtkRvkUTCe6gq73eLIv_JOycF3WMvg&s"
                                            class="card_img d-block rounded-circle " alt="sdgodfmbhlgfklm"
                                            style="width: 100px;">
                                        <div class="" style="margin:70px 0px;">
                                            <h5 class="fw-bolder fs-3 my-5">Vipul Vishwakarma</h5>
                                            <p class="my-5" style="font-size:17px;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Culpa provident non quo modi ad minus eos
                                                distinctio aperiam totam minima rerum perspiciatis illum itaque natus
                                                possimus doloribus, ea asperiores aut.</p>
                                            <p class="m-0 fs-6">The Baylea ring</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (2).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (3).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (4).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (5).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (6).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (7).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1">
                                    <img src="{{ asset('image/11 (8).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (9).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>
                                <div class="p-0 m-1 border rounded">
                                    <img src="{{ asset('image/11 (10).jpeg') }}" class="d-block w-100 rounded-top"
                                        alt="...">
                                    <div class="p-2">
                                        <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                                        <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                                        <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                                style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                                60%)</span></p>
                                    </div>
                                </div>

                            </div>
                            <button id="next-btn"> > </button>
                            <button id="prev-btn">
                                < </button>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        {{-- ........................testmonial 1............. --}}
        <div class="">
            <div id="clothes_slider1" class="my-5 text-center border-top pt-3">
                <div class="container-fluid text-white">
                    <h4 class="m-0 fw-bold">Customer Love</h4>
                    {{-- <p class="m-0">High On Demand</p> --}}
                </div>
                <div class="sliders_clothes owl-carousel d-flex g-3 text-white ">

                    <div class="Mein_card p-5 m-1 text-center">
                        <div class="Card w-lg-75 m-auto bg-body-tertiary rounded text-black rounded-4 my-3 p-4 h-100">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC-buhde5C1FxyNtkRvkUTCe6gq73eLIv_JOycF3WMvg&s"
                                class="card_img d-block rounded-circle " alt="sdgodfmbhlgfklm" style="width: 100px;">
                            <div class="" style="margin:70px 0px;">
                                <h5 class="fw-bolder fs-3 my-5">Vipul Vishwakarma</h5>
                                <p class="my-lg-5" style="font-size:17px;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Culpa provident non quo modi ad minus eos
                                    distinctio aperiam totam minima rerum perspiciatis illum itaque natus
                                    possimus doloribus, ea asperiores aut.</p>
                                <p class="m-0 fs-6">The Baylea ring</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (2).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (3).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (4).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (5).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (6).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (7).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1">
                        <img src="{{ asset('image/11 (8).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (9).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (10).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>

                </div>
                <button id="next-btn1"> > </button>
                <button id="prev-btn2">
                    < </button>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $(".sliders_clothes").owlCarousel({
                    loop: true,
                    autoplay: false,
                    autoplayTimeout: 2000, //2000ms = 2s;
                    autoplayHoverPause: true,
                    items: 1
                    // responsive: {
                    //     0: {
                    //         items: 2, // 2 items for mobile
                    //     },
                    //     768: {
                    //         items: 4, // 4 items for tablet
                    //     },
                    //     1024: { // 1024px and above for desktop
                    //         items: 5, // 5 items for desktop
                    //     },
                    // },
                });

                $("#next-btn").click(function() {
                    $(".sliders_clothes").owlCarousel("next");
                });

                $("#prev-btn").click(function() {
                    $(".sliders_clothes").owlCarousel("prev");
                });
            });
        </script>
    @endsection
