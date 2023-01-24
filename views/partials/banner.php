
<div class="w-[100%]">
    <div class="relative h-[60vh] w-[100%]" style="overflow-x: hidden; overflow-y: hidden;">
        <div class="slide relative w-full">
            <img class="w-full h-[65vh] object-cover"
                    src="https://cdn.cinemacloud.co.uk/imageFilm/1246_1_2.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 text-white flex items-center flex-col w-screen" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">AVERTAR</h1>
                <div class="mt-10">
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Get ticket</a>
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">View trailer</a>
                </div>
            </div>
        </div>
    
        <div class="slide relative">
            <img class="w-full h-[65vh] object-cover"
                src="https://www.newcanaanymca.org/wp-content/uploads/2021/11/Moana-Movie-Poster-landscape.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">MOANA</h1>
                <div class="mt-10">
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Get ticket</a>
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">View trailer</a>
                </div>
            </div>
        </div>
    
        <div class="slide relative">
            <img class="w-full h-[65vh] object-cover"
                src="https://www.bt.com/content/dam/bt/portal/images/articles/tv/tv-drama-the-last-of-us-key-art-now-sky-atlantic.jpg/jcr:content/renditions/landscape-desktop.764.430.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl">The Last of Us - Season 1</h1>
                <div class="mt-10">
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Get ticket</a>
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">View trailer</a>
                </div>
            </div>
        </div>
        <div class="slide relative">
            <img class="w-full h-[65vh] object-cover"
                src="https://pic9.iqiyipic.com/image/20210721/22/39/a_100466598_m_601_en_m1_1080_608.jpg">
            <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
            <div class="absolute bottom-40 w-screen text-white flex items-center flex-col" style="margin-top:-70%">
                <p class="text-3xl">TIME TO START WATCHING</p>
                <h1 class="text-5xl uppercase">Unforgettable Love</h1>
                <div class="mt-10">
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Get ticket</a>
                    <a href="#" class="bg-red-800 py-3 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">View trailer</a>
                </div>
            </div>
        </div>
    
        <!-- The previous button -->
        <a class="absolute left-0 top-60 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a>
    
        <!-- The next button -->
        <a class="absolute right-0 top-60 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a>
    
    </div>
    <!-- The dots -->
    <div class="flex justify-center items-center space-x-2 dot-scroll">
        <div class="dot w-2 h-2 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-2 h-2 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-2 h-2 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
        <div class="dot w-2 h-2 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
    </div>
</div>
<br>


<script>
    let slideIndex = 1;
    showSlide(slideIndex);
    function moveSlide(moveStep)
    {
        showSlide(slideIndex += moveStep);
    }
    function currentSlide(n)
    {
        showSlide(slideIndex = n);
    }

    function showSlide(n)
    {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName('dot');
        
        if (n > slides.length){ 
            slideIndex = 1
        }
        if (n < 1) { 
            slideIndex = slides.length 
        }
        // hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        };
        // remove active status from all dots
        for (i = 0; i < dots.length; i++){
            dots[i].classList.remove('bg-red-500');
            dots[i].classList.add('bg-slate-900');
        };
        // show the active slide
        slides[slideIndex - 1].classList.remove('hidden');

        // highlight the active dot
        dots[slideIndex - 1].classList.remove('bg-slate-900');
        dots[slideIndex - 1].classList.add('bg-red-500');
    };
</script>