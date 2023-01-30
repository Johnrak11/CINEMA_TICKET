<?php
require_once('views/partials/head.php');
?>
<style>
    .swiper {
        width: 100%;
        height: 70%;
        position: absolute;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 70vh;
        object-fit: cover;
    }
</style>

<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img class="w-full h-[65vh] object-cover" src="https://www.movienewsletters.net/media/slider/1200x444/340283.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">Puss in Boots: The Last Wish</h1>
                <div class="mt-10">
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">Get ticket</a>
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">View trailer</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="w-full h-[65vh] object-cover" src="https://i0.wp.com/chipandco.com/wp-content/uploads/2021/06/new-black-widow-clip.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">Black Widow</h1>
                <div class="mt-10">
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">Get ticket</a>
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">View trailer</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="w-full h-[65vh] object-cover" src="https://cdn.cinemacloud.co.uk/imageFilm/1246_1_2.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">AVERTAR</h1>
                <div class="mt-10">
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">Get ticket</a>
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">View trailer</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="w-full h-[65vh] object-cover" src="https://cdn.mos.cms.futurecdn.net/NY9XiGGqQM7gdQum5KoDqL.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">Iron Man</h1>
                <div class="mt-10">
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">Get ticket</a>
                    <a href="#" class="bg-[#ff0000] py-3 px-3 hover:scale-75 hover:animate-bounce text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800 " style="border-radius: 20px;">View trailer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });
</script>

