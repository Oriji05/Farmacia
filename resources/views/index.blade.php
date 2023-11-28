@include('header')

    <section class="page relative flex flex-col justify-center items-center">
        <div class="containerTitle flex flex-col justify-center items-center mt-[40px] w-full">
            <div
                class="parag mt-1 mb-1 w-fit text-center text-danceScriptingColor text-xl md:text-2xl font-dancingScript font-normal">
                Stili & Tendenze
            </div>
            <div class="parag mt-1 mb-1 w-fit text-center text-xl md:text-3xl font-normal">
                Lasciati ispirare dai nostri look
            </div>
            <div class="parag mt-1 mb-1  text-center text-xs md:text-sm font-light text-gray">Prendi ispirazione dai
                nostri look per
                arredare la tua casa! Scopri nuove idee per
                ogni stile e gusto e trova la soluzione perfetta per te.
            </div>

            <ul
                class="searchButton mt-4 mb-4 text-center whitespace-nowrap md:text-sm overflow-x-auto w-[95%] list-disc overflow-visible font-light">
                <a href="" class="searchPage pl-2.5">TUTTI</a>
                <a href="" class="searchPage pl-2.5">CAMERA DA LETTO</a>
                <a href="" class="searchPage pl-2.5">BAGNO</a>
                <a href="" class="searchPage pl-2.5">CUCINA</a>
                <a href="" class="searchPage text-danceScriptingColor underline pl-2.5">SOGGIORNO</a>
                <a href="" class="searchPage pl-2.5">ALBERGHI</a>
                <a href="" class="searchPage pl-2.5">CAMERA BAMBINI</a>
                <a href="" class="searchPage pl-2.5">ESTERNI</a>
            </ul>
        </div>


        <div
            class="imagesContainer md:container mx-auto flex flex-wrap justify-center lg:justify-start items-center ">
            <div class="imageContainer w-1 md:w-4/12 min-w-[290px] flex flex-col justify-center items-center mt-2 px-1.5">
                <img src="{{asset('resources/Carillo_Asset\asset\IMG\shop by\collezione_agathe.jpg')}}" alt=""
                    class=" rounded-md w-full  h-auto imageSell">
                <div class="containerParagrafi flex flex-col justify-center items-center">
                    <p class="paragrafoImg my-1.5 font-dancingScript text-lg text-danceScriptingColor">Soggiorno</p>
                    <p class="paragrafoImg text-base my-1.5">Collezione Agathe</p>
                </div>
            </div>
            <div class="imageContainer w-1 md:w-4/12 min-w-[290px] flex flex-col justify-center items-center mt-2 px-1.5">
                <img src="{{asset('resources/Carillo_Asset\asset\IMG\shop by\collezione_nashi.jpg')}}" alt=""
                    class="rounded-md  w-full h-auto imageSell">
                <div class="containerParagrafi flex flex-col justify-center items-center">
                    <p class="paragrafoImg my-1.5 font-dancingScript text-lg text-danceScriptingColor">Soggiorno</p>
                    <p class="paragrafoImg text-base my-1.5">Collezione Nashi</p>
                </div>
            </div>
            <div class="imageContainer w-1 md:w-4/12 min-w-[290px] flex flex-col justify-center items-center mt-2 px-1.5">
                <img src="{{asset('resources/Carillo_Asset\asset\IMG\shop by\collezione_pauline.jpg')}}" alt=""
                    class=" rounded-md w-full h-auto imageSell">
                <div class="containerParagrafi flex flex-col justify-center items-center">
                    <p class="paragrafoImg my-1.5 font-dancingScript text-lg text-danceScriptingColor">Soggiorno</p>
                    <p class="paragrafoImg text-base my-1.5">Collezione Pauline</p>
                </div>
            </div>
            <div class="imageContainer w-1 md:w-4/12 min-w-[290px] flex flex-col justify-center items-center mt-2 px-1.5">
                <img src="{{asset('resources/Carillo_Asset\asset\IMG\shop by\collezione_pauline_2.jpg')}}" alt=""
                    class=" rounded-md w-full h-auto imageSell">
                <div class="containerParagrafi flex flex-col justify-center items-center">
                    <p class="paragrafoImg my-1.5 font-dancingScript text-lg text-danceScriptingColor">Soggiorno</p>
                    <p class="paragrafoImg text-base my-1.5">Collezione Pauline </p>
                </div>
            </div>
            <div class="imageContainer w-1 md:w-4/12 min-w-[290px] flex flex-col justify-center items-center mt-2 px-2.5">
                <img src="{{asset('resources/Carillo_Asset\asset\IMG\shop by\collezione_esquisse.jpg')}}" alt=""
                    class=" rounded-md w-full h-auto imageSell">
                <div class="containerParagrafi flex flex-col justify-center items-center">
                    <p class="paragrafoImg my-1.5 font-dancingScript text-lg text-danceScriptingColor">Soggiorno</p>
                    <p class="paragrafoImg text-base my-1.5">Collezione Esquisse</p>
                </div>

            </div>
        </div>
    </section>

    @include('footer')