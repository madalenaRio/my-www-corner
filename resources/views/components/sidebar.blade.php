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
            <svg class="absolute inset-0 w-full h-full text-white" style="filter: drop-shadow(10px 0 10px #00000030)" preserveAspectRatio="none" viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                <div class="flex items-center justify-between flex-shrink-0 w-56 p-5 mt-10">
                    <a href="#">
                        <img class="object-contain rounded-3xl" src="images/avatar_copy.jpg" alt="Bordered avatar">
                    </a>
                </div>
                <!-- End Logo avatar image-->
                <nav class="flex flex-col flex-1 w-64 p-4 mt-4">
                    <div>
                        <a href="#" class="flex items-center space-x-2">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="text-2xl font-bold">Madalena Rio</span>
                        </a>
                        <h3 class="text-lg text-clip mb-4 ">Junior full-stack webdeveloper</h3>
                    </div>
                    <div class="flex flex-row mt-10">
                        <svg class="w-8 mr-2" aria-hidden="true" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M35,22H13C7.477,22,3,17.523,3,12S7.477,2,13,2h22c5.522,0,10,4.477,10,10  S40.522,22,35,22z M35,4H13c-4.418,0-8,3.582-8,8s3.582,8,8,8h22c4.418,0,8-3.582,8-8S39.418,4,35,4z M13,18c-3.313,0-6-2.686-6-6  c0-3.313,2.687-6,6-6s6,2.687,6,6C19,15.314,16.313,18,13,18z M13,8c-2.209,0-4,1.791-4,4c0,2.209,1.791,4,4,4s4-1.791,4-4  C17,9.791,15.209,8,13,8z M13,26h22c5.522,0,10,4.478,10,10s-4.478,10-10,10H13C7.477,46,3,41.522,3,36S7.477,26,13,26z M13,44h22  c4.418,0,8-3.582,8-8s-3.582-8-8-8H13c-4.418,0-8,3.582-8,8S8.582,44,13,44z M35,30c3.313,0,6,2.687,6,6s-2.687,6-6,6s-6-2.687-6-6  S31.687,30,35,30z M35,40c2.209,0,4-1.791,4-4s-1.791-4-4-4s-4,1.791-4,4S32.791,40,35,40z" fill-rule="evenodd" />
                        </svg>
                        <span class="text-md uppercase font-black mt-4">Skills</span>
                    </div>

                    <!-- Skill icons-->
                    <section class="flex flex-row flex-wrap mt-4 ">

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">GitHub</span>
                            <svg class="p-2 w-12" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path clip-rule="evenodd" d="M16.003,0C7.17,0,0.008,7.162,0.008,15.997  c0,7.067,4.582,13.063,10.94,15.179c0.8,0.146,1.052-0.328,1.052-0.752c0-0.38,0.008-1.442,0-2.777  c-4.449,0.967-5.371-2.107-5.371-2.107c-0.727-1.848-1.775-2.34-1.775-2.34c-1.452-0.992,0.109-0.973,0.109-0.973  c1.605,0.113,2.451,1.649,2.451,1.649c1.427,2.443,3.743,1.737,4.654,1.329c0.146-1.034,0.56-1.739,1.017-2.139  c-3.552-0.404-7.286-1.776-7.286-7.906c0-1.747,0.623-3.174,1.646-4.292C7.28,10.464,6.73,8.837,7.602,6.634  c0,0,1.343-0.43,4.398,1.641c1.276-0.355,2.645-0.532,4.005-0.538c1.359,0.006,2.727,0.183,4.005,0.538  c3.055-2.07,4.396-1.641,4.396-1.641c0.872,2.203,0.323,3.83,0.159,4.234c1.023,1.118,1.644,2.545,1.644,4.292  c0,6.146-3.74,7.498-7.304,7.893C19.479,23.548,20,24.508,20,26c0,2,0,3.902,0,4.428c0,0.428,0.258,0.901,1.07,0.746  C27.422,29.055,32,23.062,32,15.997C32,7.162,24.838,0,16.003,0z" fill="#181616" fill-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">Laravel</span>
                            <svg class="p-2 w-12" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" />
                            </svg>
                        </div>

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">Javascript</span>
                            <svg class="p-2 w-12" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32,32V480H480V32ZM272,380c0,43.61-25.76,64.87-63.05,64.87-33.68,0-53.23-17.44-63.15-38.49h0l34.28-20.75c6.61,11.73,11.63,21.65,26.06,21.65,12,0,21.86-5.41,21.86-26.46V240h44Zm99.35,63.87c-39.09,0-64.35-17.64-76.68-42h0L329,382c9,14.74,20.75,24.56,41.5,24.56,17.44,0,27.57-7.72,27.57-19.75,0-14.43-10.43-19.54-29.68-28l-10.52-4.52c-30.38-12.92-50.52-29.16-50.52-63.45,0-31.57,24.05-54.63,61.64-54.63,26.77,0,46,8.32,59.85,32.68L396,290c-7.22-12.93-15-18-27.06-18-12.33,0-20.15,7.82-20.15,18,0,12.63,7.82,17.74,25.86,25.56l10.52,4.51c35.79,15.34,55.94,31,55.94,66.16C441.12,424.13,411.35,443.87,371.35,443.87Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">PHP</span>
                            <svg class="w-9 pt-1" viewBox="0 0 37 37" xmlns="http://www.w3.org/2000/svg">
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
                            <span class="text-md">HTML</span>
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
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
                            <span class="text-md">React</span>
                            <svg style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <path d="M6,2h20c2.2,0,4,1.8,4,4v20c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4V6C2,3.8,3.8,2,6,2z" />
                                <g>
                                    <path class="st0" d="M27.5,16c0-1.6-1.9-2.9-4.7-3.8c0.7-2.9,0.4-5.2-0.9-5.9C21.5,6.1,21.2,6,20.8,6c-1.3,0-2.9,0.9-4.5,2.5   C14.6,6.9,13,6,11.7,6c-0.4,0-0.8,0.1-1.1,0.3C9.3,7,9,9.3,9.7,12.2C6.9,13.1,5,14.4,5,16s1.9,2.9,4.7,3.8c-0.7,2.9-0.5,5.2,0.9,6   c0.3,0.2,0.7,0.3,1.1,0.3c1.3,0,2.9-0.9,4.5-2.5c1.6,1.6,3.3,2.5,4.5,2.5c0.4,0,0.8-0.1,1.1-0.3c1.3-0.8,1.6-3.1,0.9-6   C25.6,18.9,27.5,17.5,27.5,16z M20.8,7.1c0.2,0,0.4,0,0.5,0.1c0.6,0.4,0.9,1.7,0.7,3.4c-0.1,0.4-0.1,0.9-0.2,1.3   c-0.9-0.2-1.9-0.4-2.9-0.5c-0.6-0.8-1.2-1.6-1.8-2.2C18.5,7.8,19.9,7.1,20.8,7.1z M19.3,17.8c-0.3,0.6-0.7,1.1-1,1.7   c-0.7,0-1.3,0.1-2,0.1s-1.4,0-2-0.1c-0.4-0.5-0.7-1.1-1-1.7c-0.3-0.6-0.6-1.2-0.9-1.8c0.3-0.6,0.6-1.2,0.9-1.8   c0.3-0.6,0.7-1.2,1.1-1.7c0.6,0,1.3-0.1,2-0.1s1.3,0,2,0.1c0.4,0.5,0.7,1.1,1.1,1.7c0.3,0.6,0.6,1.2,0.9,1.8   C20,16.6,19.6,17.2,19.3,17.8z M20.8,17.3c0.2,0.6,0.4,1.1,0.6,1.7c-0.6,0.1-1.2,0.2-1.8,0.3c0.2-0.3,0.4-0.6,0.6-1   C20.4,18,20.6,17.6,20.8,17.3L20.8,17.3z M16.2,22c-0.4-0.4-0.8-0.9-1.2-1.4c0.4,0,0.8,0,1.2,0c0.4,0,0.8,0,1.2,0   C17,21.1,16.6,21.6,16.2,22z M12.8,19.3c-0.6-0.1-1.2-0.2-1.8-0.3c0.2-0.6,0.4-1.1,0.6-1.7c0.2,0.3,0.4,0.7,0.6,1   C12.4,18.7,12.6,19,12.8,19.3L12.8,19.3z M11.7,14.7c-0.2-0.6-0.4-1.2-0.6-1.7c0.6-0.1,1.2-0.2,1.8-0.3c-0.2,0.3-0.4,0.7-0.6,1   C12,14,11.8,14.4,11.7,14.7z M16.2,10c0.4,0.4,0.8,0.9,1.2,1.4c-0.4,0-0.8,0-1.2,0c-0.4,0-0.8,0-1.2,0C15.4,10.9,15.8,10.4,16.2,10   z M20.2,13.7c-0.2-0.4-0.4-0.7-0.6-1c0.6,0.1,1.2,0.2,1.8,0.3c-0.2,0.6-0.4,1.2-0.6,1.7C20.6,14.4,20.4,14,20.2,13.7z M10.5,10.6   c-0.2-1.7,0-3,0.7-3.4c0.1-0.1,0.3-0.1,0.5-0.1c0.9,0,2.3,0.7,3.8,2.2c-0.6,0.7-1.2,1.4-1.8,2.2c-1,0.1-2,0.3-2.9,0.5   C10.6,11.5,10.5,11,10.5,10.6z M8.7,18.2c-1.6-0.7-2.6-1.5-2.6-2.3c0-0.7,1-1.6,2.6-2.3c0.4-0.2,0.8-0.3,1.3-0.4   c0.3,0.9,0.6,1.8,1,2.7c-0.4,0.9-0.8,1.8-1,2.7C9.5,18.6,9.1,18.4,8.7,18.2L8.7,18.2z M11.2,24.8c-0.6-0.4-0.9-1.7-0.7-3.4   c0.1-0.4,0.1-0.9,0.3-1.4c0.9,0.2,1.8,0.4,2.8,0.5c0.6,0.8,1.2,1.6,1.9,2.3c-1.5,1.4-2.9,2.2-3.8,2.2   C11.5,24.9,11.3,24.9,11.2,24.8L11.2,24.8z M22,21.4c0.2,1.7,0,3-0.7,3.4c-0.1,0.1-0.3,0.1-0.5,0.1c-0.9,0-2.3-0.7-3.8-2.2   c0.6-0.7,1.3-1.4,1.9-2.3c1-0.1,2-0.2,2.8-0.5C21.8,20.5,21.9,21,22,21.4L22,21.4z M23.8,18.2c-0.4,0.2-0.8,0.3-1.3,0.5   c-0.3-0.9-0.6-1.8-1-2.7c0.4-0.9,0.8-1.9,1-2.7c0.5,0.1,0.9,0.3,1.3,0.4c1.6,0.7,2.6,1.5,2.6,2.3C26.4,16.7,25.4,17.6,23.8,18.2   L23.8,18.2z" />
                                    <path class="st0" d="M16.3,18.1c1.2,0,2.1-0.9,2.1-2.1s-0.9-2.1-2.1-2.1s-2.1,0.9-2.1,2.1S15.1,18.1,16.3,18.1z" />
                                </g>
                            </svg>
                        </div>

                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">CSS</span>
                            <svg class="w-10" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <g data-name="1" id="_1">
                                    <path d="M393.43,450H164.56a50.17,50.17,0,0,1-50.11-50.11V98.11A50.17,50.17,0,0,1,164.56,48h150.1a15,15,0,0,1,10.61,4.39L439.15,166.27a15,15,0,0,1,4.39,10.61v223A50.17,50.17,0,0,1,393.43,450ZM164.56,78a20.13,20.13,0,0,0-20.11,20.11V399.89A20.13,20.13,0,0,0,164.56,420H393.43a20.13,20.13,0,0,0,20.11-20.11V183.09L308.45,78Z" />
                                    <path d="M428.54,191.88H349.77a50.17,50.17,0,0,1-50.11-50.11V63a15,15,0,0,1,30,0v78.77a20.13,20.13,0,0,0,20.11,20.11h78.77a15,15,0,1,1,0,30Z" />
                                    <path d="M208.38,279.14c-7.55,0-11.91,4.24-11.91,13.24v35.08c0,9,4.36,13.24,12,13.24,10.59,0,11.25-8.08,11.65-13.24.4-4.9,4.9-6.22,10.19-6.22,7.15,0,10.46,1.85,10.46,9.79,0,17.61-14.3,27.67-33.22,27.67-17.35,0-31.77-8.47-31.77-31.24V292.38c0-22.77,14.42-31.24,31.77-31.24,18.92,0,33.22,9.53,33.22,26.34,0,7.95-3.31,9.8-10.32,9.8-5.56,0-10.06-1.46-10.33-6.22C220,287.62,219.63,279.14,208.38,279.14Z" />
                                    <path d="M291,332c0-16-42-13.24-42-44.21,0-19.86,17.34-27.4,33.88-27.4,7,0,26.34,1.32,26.34,11.65,0,3.57-2.38,10.85-8.2,10.85-4.77,0-7.28-5-18.14-5-9.4,0-13.24,3.84-13.24,7.94,0,13.24,42,10.73,42,44.08,0,19.06-13.9,29.39-33.1,29.39-17.34,0-31.9-8.47-31.9-17.21,0-4.5,4-11.12,9-11.12,6.23,0,10.2,9.8,22.51,9.8C284.23,340.7,291,338.31,291,332Z" />
                                    <path d="M361.53,332c0-16-42-13.24-42-44.21,0-19.86,17.34-27.4,33.88-27.4,7,0,26.34,1.32,26.34,11.65,0,3.57-2.38,10.85-8.2,10.85-4.77,0-7.28-5-18.14-5-9.39,0-13.23,3.84-13.23,7.94,0,13.24,42,10.73,42,44.08,0,19.06-13.9,29.39-33.1,29.39-17.34,0-31.9-8.47-31.9-17.21,0-4.5,4-11.12,9-11.12,6.23,0,10.2,9.8,22.51,9.8C354.78,340.7,361.53,338.31,361.53,332Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col mt-2 mr-2">
                            <span class="text-md">Tailwind</span>
                            <svg class="w-10" fill="none" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M7.5 3C5.63333 3 4.46667 4 4 5.99999C4.7 4.99999 5.51667 4.625 6.45 4.87499C6.98252 5.01763 7.36314 5.43155 7.78443 5.88974C8.47074 6.63613 9.26506 7.49999 11 7.49999C12.8667 7.49999 14.0333 6.49999 14.5 4.5C13.8 5.49999 12.9833 5.87499 12.05 5.62499C11.5175 5.48235 11.1369 5.06844 10.7156 4.61025C10.0293 3.86386 9.23494 3 7.5 3ZM4 7.49999C2.13333 7.49999 0.966667 8.49998 0.5 10.5C1.2 9.49998 2.01667 9.12498 2.95 9.37498C3.48252 9.51762 3.86314 9.93154 4.28443 10.3897C4.97074 11.1361 5.76506 12 7.5 12C9.36667 12 10.5333 11 11 8.99998C10.3 9.99998 9.48333 10.375 8.55 10.125C8.01748 9.98234 7.63686 9.56843 7.21557 9.11023C6.52926 8.36385 5.73494 7.49999 4 7.49999Z" fill-rule="evenodd" stroke="black" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </section>
                    <!-- End Skill icons-->

                </nav>
                <div class="flex-shrink-0 p-4">
                    <button class="flex items-center space-x-2">
                        <!-- this is a button for the footer -->
                    </button>
                </div>
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
                <div class="m-4 text-center text-xl text-gray">
                    <p class="text-gray-600">
                        <i>"I live in the Present. </br> 
                        The Future I do not Know. </br>
                        The Past is no longer mine." </i>
                        <b></br>Fernando Pessoa</b>
                    </p>
                </div>
            </div>
        
         <div class="z-10 w-42 items-center">
                <h1 class="flex-end text-center text-3xl m-2">Welcome to my corner!</h1>
                <h3 class="m-2 text-2xl font-extrabold text-center"> ;)</h3>
                
                    <svg class="animate-bounce w-14 h-14 inset-x-0 bottom-0" 
                        style="enable-background:new 0 0 512 512;" 
                        version="1.1" viewBox="0 0 512 512" xml:space="preserve" 
                        xmlns="http://www.w3.org/2000/svg" 
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M341.8,461.2c113.3-47.7,166.5-178.3,118.7-291.6S282.2,3.2,168.9,50.9S2.5,229.2,50.3,342.5  C85,425,165.9,478.7,255.4,478.7C285.1,478.7,314.5,472.8,341.8,461.2z M63.4,256.7c0-106,86-192,192-192s192,86,192,192  s-86,192-192,192S63.4,362.7,63.4,256.7z M370.7,284.7L255.4,400L140.1,284.7l21.2-21.2l79.1,79.2V134.5h30v208.2l79.1-79.1  L370.7,284.7z"/>
                    </svg>
                
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