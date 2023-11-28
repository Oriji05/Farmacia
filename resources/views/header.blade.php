<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources\css\style.css')}}" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontSize: {
                        mobile: '0.625 rem'
                    },
                    fontFamily: {
                        regular: ['Outfit', 'sans-serif'],
                        dancingScript: ['DancingScript', 'sans-serif']
                    },
                    colors: {
                        secondaryPink: '#DE3667',
                        clifford: '#da373d',
                        aExpres:'#1877F2',
                        secondaryBlue:'#103556', 
                        gray:'#5D5D5D',
                        danceScriptingColor: '#BF8E5C',
                        danceScriptingSecondary: '#FF0000',
                        backBox: '#F7F7FA'
                    }
                }
            }
        }
    </script>
    <title>Carillo</title>
</head>

<body class="box-border font-regular overflow-visible">
    <header>
        <div class="newsWrapper w-full bg-secondaryBlue flex flex-col justify-center items-center h-[22px] md:h-[32px] ">
            <div
                class="news font-light text-[10px] container mx-auto text-white flex flex-row text-center align-middle justify-center items-center md:text-xs md:font-light">
                <div class="headers hidden md:block text-right mr-1" id="lastArrivals">ULTIMI ARRIVI</div>
                <div class="headers hidden md:flex bg-secondaryPink h-[32px]  justify-center items-center px-5"
                    id="saldi"><a id="saldia" href="">SALDI</a></div>
                <div class="headers md:grow-[4]" id="promo">SPEDIZIONE GRATUITA SOPRA 99 €</div>
                <div class="headers hidden md:block " id="blog">BLOG</div>
                <div class="headers hidden md:block  text-left ml-1" id="serviceC">SERVIZIO CLIENTI</div>
            </div>
        </div>
        <div
            class="navigationSearch container mx-auto flex flex-col justify-center items-center border-b border-[#E8E8EB] lg:border-b-0">

            <div
                class="userAsset flex felx-row w-auto justify-center items-center flex-wrap mt-[12px] mx-3 lg:w-full">
                <div class="imageUserContainer w-2/12 lg:hidden flex justify-center lg:justify-start items-center"><img class="imageUser w-1/3 md:w-1/4 xl:w-1/5 max-w-[25px]"
                        src="{{asset('resources/Carillo_Asset/asset/icon/icon_cart.svg')}}" alt=""></div>
                <div
                    class="imageUserContainer w-2/12 lg:order-3 lg:w-1/12 flex justify-center lg:justify-end items-center">
                    <img class="imageUser w-1/3 xl:w-1/5 md:w-1/4 max-w-[25px]" src="{{asset('resources/Carillo_Asset/asset/icon/icon_user.svg')}}" alt="">
                </div>
                <div
                    class="imageUserContainer w-4/12 lg:w-2/12 lg:order-1 flex justify-center lg:justify-start items-center lg:mr-2.5">
                    <img class="imageUser carilloLogo w-auto h-[72px]" src="{{asset('resources/Carillo_Asset\asset\logo_carillo.svg')}}"
                        alt="">
                </div>
                <div
                    class="imageUserContainer w-2/12 lg:order-4 lg:w-1/12 flex justify-center lg:justify-end items-center  ">
                    <img class="imageUser w-1/3 md:w-1/4 xl:w-1/5 max-w-[25px]" src="{{asset('resources/Carillo_Asset/asset/icon/icon_heart.svg')}}" alt="">
                </div>
                <div
                    class="imageUserContainer w-2/12 lg:order-5 lg:w-1/12 flex justify-center lg:justify-end items-center">
                    <img class="imageUser w-1/3 md:w-1/4 xl:w-1/5 max-w-[25px]" src="{{asset('resources/Carillo_Asset/asset/icon/icon_cart.svg')}}" alt="">
                </div>
                <div
                    class="inside order-1 grow-[2]  lg:order-2 flex justify-center items-center">
                    <form
                        class="formentor formentorHeader w-full inside border border-[#D4D4D6] h-[42px] rounded-md flex flex-row justify-center items-center mt-4 mb-4"
                        method="get">
                        <input class="h-[40px] w-full rounded-md" type="search" name="query"
                            id="searchBar" placeholder="Cosa stai cercando?">
                        <input type="submit" value="" class="h-[40px] rounded-md px-3 py-3 " id="searchButton">
                    </form>
                </div>
            </div>

        </div>
        <div class=" mt-2.5 navigationSection hidden lg:flex flex-row justify-center items-center text-sm font-light w-full container mx-auto">
            <div class="containerButton md:flex justify-center items-center w-full text-center">
                <a class="link mx-auto font-light text-sm" href="">Biancheria Letto</a>
                <a class="link mx-auto font-light text-sm" href="">Bagno</a>
                <a class="link mx-auto font-light text-sm" href="">Cucina & Soggiorno</a>
                <a class="link mx-auto font-light text-sm" href="">Tendaggi & Tessuti</a>
                <a class="link mx-auto font-light text-sm" href="">Tappeti</a>
                <a class="link mx-auto font-light text-sm" href="">Cartoons</a>
                <a class="link mx-auto font-light text-sm" href="">Calcio</a>
                <a class="link mx-auto font-light text-sm" href="">Alberghi</a>
                <a class="link mx-auto font-light text-sm" href="">Pigiami</a>
                <a class="link mx-auto font-light text-sm" href="">Neonato</a>
                <a class="link mx-auto font-light text-sm" href="">Marchi</a>
                <a class="link  text-danceScriptingColor font-dancingScript text-xl" href="">Stili & Tendenze</a>
            </div>
        </div>
    </header>