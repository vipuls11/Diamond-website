@extends('layout')

@section('content')
    <style>
        .main_conatiner {
            position: relative;
            width: 100%;

        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;

        }

        /* .main_conatiner:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        background-color: rgb(122 89, 48);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        opacity: 0.8;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        z-index: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } */

        .main_conatiner:hover .image {
            opacity: 0.8;

        }

        .main_conatiner:hover .middle {
            opacity: 1;

        }

        .text {
            background-color: transparent;
            color: rgb(7, 7, 7);
            font-size: 17px;
            font-weight: 600;
            text-decoration: underline;
            /* padding: 2px 5px; */
            border: none;
        }

        .mama_image {
            position: relative;
        }

        .Content_shop {
            position: absolute;
            top: 50%;
            left: 200px;
            width: 40%;
        }

        .stone_quality {
            position: relative;
        }

        .stone_shop {
            position: absolute;
            top: 30%;
            right: 150px;
            width: 40%;
        }

        /* Media Query for Mobile Devices */
        @media (max-width: 480px) {

            .Content_shop,
            .stone_quality,
            .stone_shop {
                position: static;
                width: 100%;
            }
        }

        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 481px) and (max-width: 767px) {

            .Content_shop,
            .stone_quality,
            .stone_shop {
                position: static;
                width: 100%;
            }
        }

        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px) {

            .Content_shop,
            .stone_quality,
            .stone_shop {
                position: static;
                width: 100%;
            }
        }
    </style>
    <div>
        <div>
            <a href="#"> <img src="{{ asset('shreya_img/Add a little bit of body text (1).png') }}" alt=""
                    class="w-100 d-block" style="cursor: pointer;"></a>
        </div>
        <div class="container-fluid">
            <div class="my-5 text-center">
                <h2 class=""
                    style="font-size:48px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44;">GIFT
                    GUIDE
                </h2>
                <div class="row g-3">
                    <div class="col-lg-3 col-6">
                        <div class="p-3">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/1_694f062e-52cd-4854-8f96-35b6ddc342d9_400x400.jpg?v=1711820590"
                                alt="" class=" w-100 d-block" style="cursor: pointer;">
                            <h4 style="font-size:24px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44;">
                                Stack a Surprise for Them</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="p-3">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/6_58b2f523-a376-42ad-834e-85f389b67ec9_400x400.jpg?v=1711825292"
                                alt="" class="w-100 d-block" style="cursor: pointer;">
                            <h4
                                style="font-size:24px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44; cursor: pointer;">
                                The Golden Touch of Motherhood</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="p-3">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/3_7bec9888-a9f3-4b7a-bbb2-7651043a196c_400x400.jpg?v=1711820623"
                                alt="" class=" w-100 d-block" style="cursor: pointer;">
                            <h4
                                style="font-size:24px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44; ">
                                Rings for Every Role She Plays</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="p-3">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/4_09cdfceb-7bbc-41ea-b26d-9106cb951726_400x400.jpg?v=1711820662"
                                alt="" class="w-100 d-block" style="cursor: pointer;">
                            <h4
                                style="font-size:24px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44; ">
                                Celebrate Her with Elegance</h4>
                        </div>
                    </div>
                </div>
            </div>


            {{-- .................................Collections....................... --}}
            <div class="my-5 text-center">
                <h2 class=" my-2"
                    style="font-size:48px; font-family: Antic Didone, serif; font-weight: 400; color: #574b44;">COLLECTION
                </h2>
                <div class="row g-3">
                    <div class="col-lg-3 col-6">
                        <div class="main_conatiner  rounded-circle">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/ringg_x353.jpg?v=1664822338"
                                alt="" class="image w-100 d-block rounded-circle">
                            <div class="middle">
                                <button class="text">Shop Collection <span style="font-size: 17px;"><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <h4 class="my-3"
                            style="font-size: 24px; font-weight:400; font-family: Antic Didone, serif; color: #574b44;">
                            Rings</h4>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="main_conatiner rounded-circle">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/necklace_483a4684-f1d1-42e5-800a-bb38e7ca4e54_x353.jpg?v=1664821562"
                                alt="" class="image w-100 d-block rounded-circle" style="cursor: pointer;">
                            <div class="middle">
                                <button class="text">Shop Collection <span style="font-size: 17px;"><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <h4 class="my-3"
                            style="font-size: 24px; font-weight:400; font-family: Antic Didone, serif; color: #574b44;">
                            Necklaces</h4>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="main_conatiner rounded-circle">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/bracelet_4bdc74b4-5e41-4966-9427-eb890d2de897_x353.jpg?v=1664822313"
                                alt="" class="image w-100 d-block rounded-circle" style="cursor: pointer;">
                            <div class="middle">
                                <button class="text">Shop Collection <span style="font-size: 17px;"><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <h4 class="my-3"
                            style="font-size: 24px; font-weight:400; font-family: Antic Didone, serif; color: #574b44;">
                            Bracelets</h4>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="main_conatiner rounded-circle">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/EARRING_00841c73-4c9f-4993-a181-5c466d9213f1_x353.jpg?v=1664821583"
                                alt="" class="image w-100 d-block rounded-circle" style="cursor: pointer;">
                            <div class="middle">
                                <button class="text">Shop Collection <span style="font-size: 17px;"><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <h4 class="my-3"
                            style="font-size: 24px; font-weight:400; font-family: Antic Didone, serif; color: #574b44;">
                            Earrings</h4>
                    </div>
                </div>
            </div>

            {{-- ........................................mama collection................ --}}

            <div class="container">
                <div class="mama_image row my-5">
                    <div class="col-lg-6">
                        <div class="Content_shop">
                            <div>
                                <h3
                                    style="font-size:32px; font-family: Antic Didone, serif;
                                font-weight: 400;
                                color: #574b44;">
                                    Adorn Her with the Title <br>She Wears with Pride</h3>
                                <p style="width: 100%; height:2px; background-color:#A38473;"></p>
                                <button class="fw-semibold my-3"
                                    style="border:0;
                                background-color: #A38473;
                                color:white; padding:15px 50px;">SHOP</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <img src="https://ferkosfinejewelry.com/cdn/shop/files/MAMA_BANNER_672x@2x.jpg?v=1711825401"
                                alt="Mama Image" class="w-100 d-block">
                        </div>
                    </div>
                </div>
            </div>

            {{-- .................................................. --}}
            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <img src="https://prosteps.cloudimg.io/v7/https://tilroy.s3.eu-west-1.amazonaws.com/138/content/2023_12_15_Twice_as_nice_model156032024.jpg?w=372&h=372&org_if_sml=0&optipress=2&fit_enlarge=1&sharp=0"
                                alt="Mama Image" class="w-100 d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="p-5 text-center">
                                <img src="https://ferkosfinejewelry.com/cdn/shop/products/R11228YWE_1x1_790c0b35-0a8e-45b9-9c8f-70a51d0f3d11_442x553.jpg?v=1630546507"
                                    alt="" class="w-75 m-auto d-block">
                                <h4 class="my-3"
                                    style="font-size:20px; font-family: Antic Didone, serif;
                                font-weight: 400;
                                color: #574b44;">
                                    Adorn Her with the Title She Wears with Pride</h4>
                                <p class="my-2 fw-semibold"><span>$118.30</span> <del
                                        style="color: #574b44;">$118.30</del></p>
                                <button class="fw-semibold my-3"
                                    style="border:0;
                                background-color: #A38473;
                                color:white; padding:15px 50px;">SHOP</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ...............................dksfdkjgnbvdfnbgkjdvf............................. --}}
            <div>
                <div class="container">
                    <div class="stone_quality row">
                        <div class="col-lg-6">
                            <div class="">
                                <img src="https://ferkosfinejewelry.com/cdn/shop/files/stone_quality_copy_672x@2x.jpg?v=1653329864"
                                    alt="Mama Image" class="w-100 d-block">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stone_shop">
                                <div class="">
                                    <h3 class="px-5"
                                        style="font-size:32px; font-family: Antic Didone, serif;
                                font-weight: 400;
                                color: #574b44;">
                                        Stone Quality</h3>
                                    <p style="width: 100%; height:2px; background-color:#A38473;"></p>
                                    <p class="my-3 px-5" style="">When buying jewelry, it’s imperative to purchase
                                        high
                                        quality pieces that will last. Our family-owned business is proud to use only 14k &
                                        18k solid gold and high quality diamonds.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
