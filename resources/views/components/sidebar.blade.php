<!-- component -->
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-yellow-900 bg-yellow-100">
            Loading.....
        </div>

        <!-- Sidebar -->
        <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-10 flex w-80">
            <!-- Curvy shape -->
            <svg class="absolute inset-0 w-full h-full text-white" style="filter:drop-shadow(10px 0 10px #00000030)" preserveAspectRatio="none" viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
            </svg>
            <!-- Sidebar content -->
            <div class="z-10 flex flex-col flex-1">

                <!-- Close btn -->
                <button @click="isSidebarOpen = false" class="z-40 absolute top-0 right-0 mx-10 my-6 rounded-lg focus:outline-none focus:ring">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close sidebar</span>
                </button>
                <!-- End Close btn -->

                <!-- Logo avatar image-->
                <div id="home" class="flex items-center justify-between flex-shrink-0 w-56 p-5 mt-10">
                    <img class="image_on object-contain rounded-3xl transition duration-1000 ease-out delay-300 hover:delay-300" src="images/avatar_bw2.jpg" alt="logo" />
                    <img class="image_off object-contain rounded-3xl" src="images/avatar_color.jpg" alt="logo" />
                </div>
                <!-- End Logo avatar image-->
                <nav class="flex flex-col flex-1 w-64 p-4 mt-4">
                    <div>
                        <h1 class="text-2xl font-bold transition duration-1000 ease-out delay-300 hover:delay-300 hover:text-blue-500">Madalena Rio</h1>
                        <h3 class="text-lg text-clip mb-2 transition duration-1000 ease-out delay-300 hover:delay-300 hover:text-fuchsia-500 ">Junior full-stack webdeveloper</h3>
                    </div>
                    <div class="flex flex-row mt-8">
                        <h1 class="text-lg uppercase font-black mt-2 transition duration-1000 ease-out delay-300 hover:delay-300 hover:text-rose-500 ">Skills</h1>
                    </div>

                    <!-- Skill icons-->
                    <section class="flex flex-row flex-wrap mt-2 ">

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-red-500">Laravel</span>
                            <svg class="p-2 w-12 transition duration-300 delay-150 hover:delay-300 hover:fill-red-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" />
                            </svg>
                        </div>

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-yellow-500">Javascript</span>
                            <svg class="p-2 w-12 transition duration-300 delay-150 hover:delay-300 hover:fill-yellow-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32,32V480H480V32ZM272,380c0,43.61-25.76,64.87-63.05,64.87-33.68,0-53.23-17.44-63.15-38.49h0l34.28-20.75c6.61,11.73,11.63,21.65,26.06,21.65,12,0,21.86-5.41,21.86-26.46V240h44Zm99.35,63.87c-39.09,0-64.35-17.64-76.68-42h0L329,382c9,14.74,20.75,24.56,41.5,24.56,17.44,0,27.57-7.72,27.57-19.75,0-14.43-10.43-19.54-29.68-28l-10.52-4.52c-30.38-12.92-50.52-29.16-50.52-63.45,0-31.57,24.05-54.63,61.64-54.63,26.77,0,46,8.32,59.85,32.68L396,290c-7.22-12.93-15-18-27.06-18-12.33,0-20.15,7.82-20.15,18,0,12.63,7.82,17.74,25.86,25.56l10.52,4.51c35.79,15.34,55.94,31,55.94,66.16C441.12,424.13,411.35,443.87,371.35,443.87Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-purple-500">PHP</span>
                            <svg class="w-9 pt-1 transition duration-300 delay-150 hover:delay-300 hover:fill-purple-500" viewBox="0 0 37 37" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.429,36.744H8.571a5.259,5.259,0,0,1-5.252-5.252V6.509A5.259,5.259,0,0,1,8.571,1.256h13.32A5.238,5.238,0,0,1,25.615,2.8l7.521,7.515a5.3,5.3,0,0,1,1.545,3.728V31.492A5.259,5.259,0,0,1,29.429,36.744ZM8.571,3.756A2.757,2.757,0,0,0,5.819,6.509V31.492a2.756,2.756,0,0,0,2.752,2.752H29.429a2.756,2.756,0,0,0,2.752-2.752V14.04a2.786,2.786,0,0,0-.811-1.958L23.848,4.566a2.786,2.786,0,0,0-1.957-.81Z" />
                                <path d="M32.32,13.72H27.665A5.24,5.24,0,0,1,22.43,8.485V2.51h2.5V8.485a2.738,2.738,0,0,0,2.735,2.735H32.32Z" />
                                <path d="M12.515,18.551a1.74,1.74,0,0,1,.975.3,2.244,2.244,0,0,1,.735.811,2.369,2.369,0,0,1-.735,3.085,1.721,1.721,0,0,1-.975.3h-1.84l.1-.179v2.069a.618.618,0,0,1-.16.435.542.542,0,0,1-.42.175.53.53,0,0,1-.41-.175.618.618,0,0,1-.16-.435V19.162a.6.6,0,0,1,.61-.611Zm0,3.361a.555.555,0,0,0,.37-.161,1.261,1.261,0,0,0,.3-.415,1.264,1.264,0,0,0,0-1.075,1.217,1.217,0,0,0-.3-.4.564.564,0,0,0-.37-.154h-1.86l.12-.181v2.55l-.11-.159Z" />
                                <path d="M10.2,25.676a.651.651,0,0,1-.5-.216.744.744,0,0,1-.193-.52V19.161a.722.722,0,0,1,.735-.735h2.28a1.869,1.869,0,0,1,1.044.32,2.372,2.372,0,0,1,.775.855,2.56,2.56,0,0,1,0,2.39,2.41,2.41,0,0,1-.774.859,1.857,1.857,0,0,1-1.045.326H10.9V24.94a.747.747,0,0,1-.193.52A.663.663,0,0,1,10.2,25.676Zm.04-7a.472.472,0,0,0-.485.485V24.94a.5.5,0,0,0,.127.352.41.41,0,0,0,.318.134.42.42,0,0,0,.328-.135.5.5,0,0,0,.127-.351V23.173a.122.122,0,0,1-.083-.059.125.125,0,0,1,0-.124l.1-.179a.122.122,0,0,1,.141-.061.126.126,0,0,1,.094.121v.055h1.615a1.62,1.62,0,0,0,.906-.283,2.277,2.277,0,0,0,.7-2.921,2.132,2.132,0,0,0-.7-.767,1.624,1.624,0,0,0-.906-.279Zm.54,3.519a.125.125,0,0,1-.1-.053l-.11-.16a.125.125,0,0,1,.088-.2V19.826a.124.124,0,0,1-.1-.194l.12-.181a.129.129,0,0,1,.14-.051.128.128,0,0,1,.089.121v.055h1.615a.691.691,0,0,1,.451.185,1.342,1.342,0,0,1,.332.446,1.391,1.391,0,0,1,0,1.183,1.4,1.4,0,0,1-.33.455.679.679,0,0,1-.453.191H10.9v.034a.124.124,0,0,1-.088.119A.119.119,0,0,1,10.775,22.2Zm.125-.409h1.615a.437.437,0,0,0,.287-.129,1.139,1.139,0,0,0,.27-.375A1.143,1.143,0,0,0,12.8,19.95a.442.442,0,0,0-.288-.124H10.9Z" />
                                <path d="M16.8,18.551a.6.6,0,0,1,.425.175.577.577,0,0,1,.185.436v5.779a.569.569,0,0,1-.19.435.63.63,0,0,1-.44.175.591.591,0,0,1-.62-.61V19.162a.584.584,0,0,1,.18-.436A.635.635,0,0,1,16.8,18.551Zm-.03,2.91h4.46v1.15h-4.46Zm4.46-2.91a.591.591,0,0,1,.62.611v5.779a.593.593,0,0,1-.175.435.628.628,0,0,1-.465.175.6.6,0,0,1-.425-.175.572.572,0,0,1-.185-.435V19.162a.568.568,0,0,1,.19-.436A.631.631,0,0,1,21.225,18.551Z" />
                                <path d="M21.205,25.676a.725.725,0,0,1-.511-.209.7.7,0,0,1-.224-.527V22.735H17.53V24.94a.7.7,0,0,1-.23.528.759.759,0,0,1-.525.208.715.715,0,0,1-.745-.736V19.161a.706.706,0,0,1,.218-.525.755.755,0,0,1,.547-.21.724.724,0,0,1,.51.209.7.7,0,0,1,.225.526v2.175h2.94V19.161a.691.691,0,0,1,.23-.527.754.754,0,0,1,.525-.208.717.717,0,0,1,.745.735V24.94a.717.717,0,0,1-.211.524A.755.755,0,0,1,21.205,25.676Zm-.485-2.941V24.94a.453.453,0,0,0,.146.345.475.475,0,0,0,.339.141.5.5,0,0,0,.377-.139.471.471,0,0,0,.138-.347V19.161a.467.467,0,0,0-.495-.485.511.511,0,0,0-.356.141.449.449,0,0,0-.149.344v2.175h.505a.126.126,0,0,1,.125.125V22.61a.125.125,0,0,1-.125.125ZM16.8,18.676a.513.513,0,0,0-.373.139.459.459,0,0,0-.142.346V24.94a.467.467,0,0,0,.495.486.507.507,0,0,0,.355-.142.447.447,0,0,0,.15-.344V22.735h-.515a.124.124,0,0,1-.125-.125V21.461a.125.125,0,0,1,.125-.125h.515V19.161a.454.454,0,0,0-.146-.345A.481.481,0,0,0,16.8,18.676Zm3.925,3.809h.38v-.9h-.38Zm-3.19,0h2.94v-.9H17.53Zm-.64,0h.39v-.9h-.39Z" />
                                <path d="M26.735,18.551a1.742,1.742,0,0,1,.975.3,2.244,2.244,0,0,1,.735.811,2.438,2.438,0,0,1,0,2.269,2.3,2.3,0,0,1-.735.816,1.724,1.724,0,0,1-.975.3H24.9l.1-.179v2.069a.623.623,0,0,1-.16.435.542.542,0,0,1-.42.175.528.528,0,0,1-.41-.175.618.618,0,0,1-.16-.435V19.162a.6.6,0,0,1,.61-.611Zm0,3.361a.552.552,0,0,0,.369-.161,1.313,1.313,0,0,0,.421-.95,1.234,1.234,0,0,0-.12-.54,1.205,1.205,0,0,0-.3-.4.562.562,0,0,0-.369-.154h-1.86l.12-.181v2.55l-.11-.159Z" />
                                <path d="M24.415,25.676a.648.648,0,0,1-.5-.216.744.744,0,0,1-.193-.52V19.161a.722.722,0,0,1,.735-.735h2.28a1.869,1.869,0,0,1,1.044.32,2.372,2.372,0,0,1,.775.855,2.56,2.56,0,0,1,0,2.39,2.4,2.4,0,0,1-.775.859,1.852,1.852,0,0,1-1.044.326H25.12V24.94a.747.747,0,0,1-.193.52A.665.665,0,0,1,24.415,25.676Zm.04-7a.472.472,0,0,0-.485.485V24.94a.5.5,0,0,0,.127.352.41.41,0,0,0,.318.134.42.42,0,0,0,.328-.135.5.5,0,0,0,.127-.351V23.173a.12.12,0,0,1-.083-.059.125.125,0,0,1,0-.124l.1-.179a.123.123,0,0,1,.141-.061.126.126,0,0,1,.094.121v.055h1.615a1.62,1.62,0,0,0,.906-.283,2.274,2.274,0,0,0,.694-2.921,2.12,2.12,0,0,0-.694-.767,1.626,1.626,0,0,0-.906-.279ZM25,22.2a.123.123,0,0,1-.1-.053l-.11-.16a.121.121,0,0,1-.008-.128.123.123,0,0,1,.1-.067V19.826a.125.125,0,0,1-.106-.066.128.128,0,0,1,.006-.128l.121-.181a.125.125,0,0,1,.229.07v.055h1.615a.691.691,0,0,1,.451.185,1.342,1.342,0,0,1,.332.446,1.373,1.373,0,0,1,.132.594,1.387,1.387,0,0,1-.132.589,1.4,1.4,0,0,1-.331.455.677.677,0,0,1-.452.191H25.12v.034A.127.127,0,0,1,25,22.2Zm.125-.409h1.615a.432.432,0,0,0,.286-.129,1.155,1.155,0,0,0,.271-1.343,1.125,1.125,0,0,0-.269-.364.442.442,0,0,0-.288-.124H25.12Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-red-500">HTML</span>
                            <svg class="transition duration-300 delay-150 hover:delay-300 hover:fill-red-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <g data-name="1" id="_1">
                                    <path d="M371.43,450H142.56a50.17,50.17,0,0,1-50.11-50.11V98.11A50.17,50.17,0,0,1,142.56,48h150.1a15,15,0,0,1,10.61,4.39L417.15,166.27a15,15,0,0,1,4.39,10.61v223A50.17,50.17,0,0,1,371.43,450ZM142.56,78a20.13,20.13,0,0,0-20.11,20.11V399.89A20.13,20.13,0,0,0,142.56,420H371.43a20.13,20.13,0,0,0,20.11-20.11V183.09L286.45,78Z" />
                                    <path d="M406.54,191.88H327.77a50.17,50.17,0,0,1-50.11-50.11V63a15,15,0,0,1,30,0v78.77a20.13,20.13,0,0,0,20.11,20.11h78.77a15,15,0,1,1,0,30Z" />
                                    <path d="M177.74,317.62H157.92v27c0,3.19-3.88,4.78-7.76,4.78s-7.77-1.59-7.77-4.78V281.27c0-3.28,3.88-4.68,7.77-4.68s7.76,1.4,7.76,4.68v24.4h19.82v-24.4c0-3.28,3.88-4.68,7.77-4.68s7.76,1.4,7.76,4.68V344.6c0,3.19-3.88,4.78-7.76,4.78s-7.77-1.59-7.77-4.78Z" />
                                    <path d="M247.14,276.59c3.29,0,4.68,3.59,4.68,6.87,0,3.79-1.69,7.07-4.68,7.07H233.4V344.6c0,3.19-3.89,4.78-7.77,4.78s-7.77-1.59-7.77-4.78V290.53H204.12c-3,0-4.68-3.28-4.68-7.07,0-3.28,1.4-6.87,4.68-6.87Z" />
                                    <path d="M293,323.59a5.7,5.7,0,0,1-5.18,2.89,5.1,5.1,0,0,1-4.87-2.89l-9.46-17.32V344.6c0,3.19-3.89,4.78-7.77,4.78S258,347.79,258,344.6V284.36c0-5.68,3.88-7.77,7.77-7.77,5.57,0,8,.6,12.05,7.77l10.25,17.92,10.26-17.92c4.08-7.17,6.47-7.77,12.05-7.77,4,0,7.77,2.09,7.77,7.77V344.6c0,3.19-3.89,4.78-7.77,4.78s-7.77-1.59-7.77-4.78V307.26Z" />
                                    <path d="M335.66,349.38c-3.39,0-6.77-1.59-6.77-4.78V281.27c0-3.28,3.88-4.68,7.76-4.68s7.77,1.4,7.77,4.68v54.57h22.7c3,0,4.49,3.39,4.49,6.77s-1.5,6.77-4.49,6.77Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-blue-500">React</span>
                           <svg class="w-10 transition duration-300 delay-150 hover:delay-300 hover:fill-blue-500" fill="black" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 9.861A2.139 2.139 0 1 0 12 14.139 2.139 2.139 0 1 0 12 9.861zM6.008 16.255l-.472-.12C2.018 15.246 0 13.737 0 11.996s2.018-3.25 5.536-4.139l.472-.119.133.468a23.53 23.53 0 0 0 1.363 3.578l.101.213-.101.213a23.307 23.307 0 0 0-1.363 3.578l-.133.467zM5.317 8.95c-2.674.751-4.315 1.9-4.315 3.046 0 1.145 1.641 2.294 4.315 3.046a24.95 24.95 0 0 1 1.182-3.046A24.752 24.752 0 0 1 5.317 8.95zM17.992 16.255l-.133-.469a23.357 23.357 0 0 0-1.364-3.577l-.101-.213.101-.213a23.42 23.42 0 0 0 1.364-3.578l.133-.468.473.119c3.517.889 5.535 2.398 5.535 4.14s-2.018 3.25-5.535 4.139l-.473.12zm-.491-4.259c.48 1.039.877 2.06 1.182 3.046 2.675-.752 4.315-1.901 4.315-3.046 0-1.146-1.641-2.294-4.315-3.046a24.788 24.788 0 0 1-1.182 3.046zM5.31 8.945l-.133-.467C4.188 4.992 4.488 2.494 6 1.622c1.483-.856 3.864.155 6.359 2.716l.34.349-.34.349a23.552 23.552 0 0 0-2.422 2.967l-.135.193-.235.02a23.657 23.657 0 0 0-3.785.61l-.472.119zm1.896-6.63c-.268 0-.505.058-.705.173-.994.573-1.17 2.565-.485 5.253a25.122 25.122 0 0 1 3.233-.501 24.847 24.847 0 0 1 2.052-2.544c-1.56-1.519-3.037-2.381-4.095-2.381zM16.795 22.677c-.001 0-.001 0 0 0-1.425 0-3.255-1.073-5.154-3.023l-.34-.349.34-.349a23.53 23.53 0 0 0 2.421-2.968l.135-.193.234-.02a23.63 23.63 0 0 0 3.787-.609l.472-.119.134.468c.987 3.484.688 5.983-.824 6.854a2.38 2.38 0 0 1-1.205.308zm-4.096-3.381c1.56 1.519 3.037 2.381 4.095 2.381h.001c.267 0 .505-.058.704-.173.994-.573 1.171-2.566.485-5.254a25.02 25.02 0 0 1-3.234.501 24.674 24.674 0 0 1-2.051 2.545zM18.69 8.945l-.472-.119a23.479 23.479 0 0 0-3.787-.61l-.234-.02-.135-.193a23.414 23.414 0 0 0-2.421-2.967l-.34-.349.34-.349C14.135 1.778 16.515.767 18 1.622c1.512.872 1.812 3.37.824 6.855l-.134.468zM14.75 7.24c1.142.104 2.227.273 3.234.501.686-2.688.509-4.68-.485-5.253-.988-.571-2.845.304-4.8 2.208A24.849 24.849 0 0 1 14.75 7.24zM7.206 22.677A2.38 2.38 0 0 1 6 22.369c-1.512-.871-1.812-3.369-.823-6.854l.132-.468.472.119c1.155.291 2.429.496 3.785.609l.235.02.134.193a23.596 23.596 0 0 0 2.422 2.968l.34.349-.34.349c-1.898 1.95-3.728 3.023-5.151 3.023zm-1.19-6.427c-.686 2.688-.509 4.681.485 5.254.987.563 2.843-.305 4.8-2.208a24.998 24.998 0 0 1-2.052-2.545 24.976 24.976 0 0 1-3.233-.501zM12 16.878c-.823 0-1.669-.036-2.516-.106l-.235-.02-.135-.193a30.388 30.388 0 0 1-1.35-2.122 30.354 30.354 0 0 1-1.166-2.228l-.1-.213.1-.213a30.3 30.3 0 0 1 1.166-2.228c.414-.716.869-1.43 1.35-2.122l.135-.193.235-.02a29.785 29.785 0 0 1 5.033 0l.234.02.134.193a30.006 30.006 0 0 1 2.517 4.35l.101.213-.101.213a29.6 29.6 0 0 1-2.517 4.35l-.134.193-.234.02c-.847.07-1.694.106-2.517.106zm-2.197-1.084c1.48.111 2.914.111 4.395 0a29.006 29.006 0 0 0 2.196-3.798 28.585 28.585 0 0 0-2.197-3.798 29.031 29.031 0 0 0-4.394 0 28.477 28.477 0 0 0-2.197 3.798 29.114 29.114 0 0 0 2.197 3.798z"/>
                        </svg>
                        </div>

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-blue-600">CSS</span>
                            <svg class="w-10 transition duration-300 delay-150 hover:delay-300 hover:fill-blue-600" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.446 17.412c.275 0 .581-.061.762-.132l.138.713c-.168.084-.546.174-1.037.174-1.397 0-2.117-.869-2.117-2.021C7.191 14.768 8.175 14 9.398 14c.474 0 .833.096.995.18l-.186.726a1.98 1.98 0 0 0-.768-.149c-.726 0-1.29.438-1.29 1.337.001.808.482 1.318 1.297 1.318zm2.491.755c-.461 0-.917-.119-1.145-.245l.186-.756c.246.126.624.252 1.014.252.42 0 .642-.174.642-.438 0-.252-.192-.396-.678-.57-.672-.234-1.109-.605-1.109-1.193 0-.689.575-1.217 1.529-1.217.455 0 .791.096 1.031.203l-.204.738a1.919 1.919 0 0 0-.846-.192c-.396 0-.587.181-.587.39 0 .258.228.372.749.57.714.264 1.05.636 1.05 1.205-.001.678-.523 1.253-1.632 1.253zm3.24 0c-.461 0-.917-.119-1.145-.245l.186-.756c.246.126.624.252 1.014.252.42 0 .642-.174.642-.438 0-.252-.192-.396-.678-.57-.672-.234-1.109-.605-1.109-1.193 0-.689.575-1.217 1.529-1.217.455 0 .791.096 1.031.203l-.204.738a1.919 1.919 0 0 0-.846-.192c-.396 0-.587.181-.587.39 0 .258.228.372.749.57.714.264 1.05.636 1.05 1.205 0 .678-.523 1.253-1.632 1.253zM14 9h-1V4l5 5h-4z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-blue-500">Tailwind</span>
                            <svg class="w-9 transition duration-300 delay-150 hover:delay-300 hover:fill-blue-500" fill="none" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M7.5 3C5.63333 3 4.46667 4 4 5.99999C4.7 4.99999 5.51667 4.625 6.45 4.87499C6.98252 5.01763 7.36314 5.43155 7.78443 5.88974C8.47074 6.63613 9.26506 7.49999 11 7.49999C12.8667 7.49999 14.0333 6.49999 14.5 4.5C13.8 5.49999 12.9833 5.87499 12.05 5.62499C11.5175 5.48235 11.1369 5.06844 10.7156 4.61025C10.0293 3.86386 9.23494 3 7.5 3ZM4 7.49999C2.13333 7.49999 0.966667 8.49998 0.5 10.5C1.2 9.49998 2.01667 9.12498 2.95 9.37498C3.48252 9.51762 3.86314 9.93154 4.28443 10.3897C4.97074 11.1361 5.76506 12 7.5 12C9.36667 12 10.5333 11 11 8.99998C10.3 9.99998 9.48333 10.375 8.55 10.125C8.01748 9.98234 7.63686 9.56843 7.21557 9.11023C6.52926 8.36385 5.73494 7.49999 4 7.49999Z" fill-rule="evenodd" stroke="black" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </section>
                    <!-- End Skill icons-->

                    <!-- Contact icons-->
                    <section class="flex flex-col mt-2">
                        <h1 class="text-lg uppercase font-black mt-2 transition duration-1000 ease-out delay-300 hover:delay-300 hover:text-cyan-400 ">Contacts</h1>

                        <section class="flex flex-row flex-wrap w-64 p-2">

                            <div class="flex flex-col mt-2 mr-2">
                                <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-blue-700">Linkedin</span>
                                <a href="https://linkedin.com/in/madalena-rio-0504a7aa">
                                    <svg class="w-10 transition duration-300 delay-150 hover:delay-300 hover:fill-blue-700" fill="black" enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <path d="M30.071,27.101v-0.077c-0.016,0.026-0.033,0.052-0.05,0.077H30.071z" />
                                            <path d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12   c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z    M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88   C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078   c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179   c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex flex-col mt-2 mr-2">
                                <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-purple-900">Github</span>
                                <a href="https://github.com/madalenaRio">
                                    <svg id="Layer_1" class="w-10 transition duration-300 delay-150 hover:delay-300 hover:fill-purple-900"  height="64" fill="black" fill-rule="evenodd" width="64" version="1.0" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path clip-rule="evenodd" d="M16.003,0C7.17,0,0.008,7.162,0.008,15.997  c0,7.067,4.582,13.063,10.94,15.179c0.8,0.146,1.052-0.328,1.052-0.752c0-0.38,0.008-1.442,0-2.777  c-4.449,0.967-5.371-2.107-5.371-2.107c-0.727-1.848-1.775-2.34-1.775-2.34c-1.452-0.992,0.109-0.973,0.109-0.973  c1.605,0.113,2.451,1.649,2.451,1.649c1.427,2.443,3.743,1.737,4.654,1.329c0.146-1.034,0.56-1.739,1.017-2.139  c-3.552-0.404-7.286-1.776-7.286-7.906c0-1.747,0.623-3.174,1.646-4.292C7.28,10.464,6.73,8.837,7.602,6.634  c0,0,1.343-0.43,4.398,1.641c1.276-0.355,2.645-0.532,4.005-0.538c1.359,0.006,2.727,0.183,4.005,0.538  c3.055-2.07,4.396-1.641,4.396-1.641c0.872,2.203,0.323,3.83,0.159,4.234c1.023,1.118,1.644,2.545,1.644,4.292  c0,6.146-3.74,7.498-7.304,7.893C19.479,23.548,20,24.508,20,26c0,2,0,3.902,0,4.428c0,0.428,0.258,0.901,1.07,0.746  C27.422,29.055,32,23.062,32,15.997C32,7.162,24.838,0,16.003,0z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex flex-col mt-2 mr-2">
                                <span class="text-md transition duration-300 delay-150 hover:delay-300 hover:text-amber-600">email</span>
                                <a href="mailto:madalena.rio@.com?Subject=upport" style="color: White">
                                <svg class="w-14 mt-1 transition duration-300 delay-150 hover:delay-300 hover:fill-amber-600"  height="64" fill="black" fill-rule="evenodd" viewBox="0 0 34 34" width="64" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21,7.38246601 L21,5 L3,5 L3,7.38199365 L12.0000224,11.8824548 L21,7.38246601 Z M21,9.61853399 L11.9999776,14.1185452 L3,9.61810635 L3,19 L21,19 L21,9.61853399 Z M3,3 L21,3 C22.1045695,3 23,3.8954305 23,5 L23,19 C23,20.1045695 22.1045695,21 21,21 L3,21 C1.8954305,21 1,20.1045695 1,19 L1,5 C1,3.8954305 1.8954305,3 3,3 Z" />
                                </svg>
                                </a>
                            </div>
                        </section>
                    </section>
                    <!-- End Contact icons-->

                </nav>

            </div>
        </div>
        <main class="flex flex-col items-center justify-center flex-1">
            <!-- Page content -->

            <!-- hamburguer -->
            <button @click="isSidebarOpen = true" class="fixed p-2 text-white bg-black rounded-lg top-5 left-5">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="sr-only">Open menu</span>
            </button>
            <!-- end hamburguer -->

            <div class="flex flex-col flex-wrap justify-center h-3/4 px-4 mx-auto">
                <div class="text-center max-w-2xl mx-auto">
                    <a href="{{route('welcome')}}">
                        <h1 class="text-6xl font-bold mb-2">Mad Corner</h1>
                    </a>
                </div>
                <div class="m-4 mt-20 text-center text-xl text-gray">
                    <p class="text-gray-600">
                        <i>"I live in the Present. </br>
                            The Future I do not Know. </br>
                            The Past is no longer mine." </i>
                        <b></br>Fernando Pessoa</b>
                    </p>
                </div>
            </div>

            <div class="w-42 items-center">
            <a href="#jumpHere">
                <svg class="animate-bounce w-14 h-14 inset-x-0 bottom-0" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M341.8,461.2c113.3-47.7,166.5-178.3,118.7-291.6S282.2,3.2,168.9,50.9S2.5,229.2,50.3,342.5  C85,425,165.9,478.7,255.4,478.7C285.1,478.7,314.5,472.8,341.8,461.2z M63.4,256.7c0-106,86-192,192-192s192,86,192,192  s-86,192-192,192S63.4,362.7,63.4,256.7z M370.7,284.7L255.4,400L140.1,284.7l21.2-21.2l79.1,79.2V134.5h30v208.2l79.1-79.1  L370.7,284.7z" />
                </svg>
            </a>
            </div>
        </main>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
<script>
    const setup = () => {
        return {
            isSidebarOpen: true,
        }
    }
</script>