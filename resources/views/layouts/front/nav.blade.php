 <header class= "fixed w-full flex flex-wrap z-10 justify-center ">
    <div class=" container flex flex-wrap md:flex-row items-center justify-center px-5 rounded-2xl  ">
        <nav class="flex flex-wrap items-center text-base font-semibold">
            <a href="#home" class="mr-5"><strong>Hasan Isufov</strong></a>
            <a href="#project" class="mr-5 hover:text-sky-600 text-sm max-lg:hidden">Projects</a>
            <a href="#servis" class="mr-5 hover:text-sky-600 text-sm max-lg:hidden">Servis & Pricing</a>
            <a href="#about" class="mr-5 hover:text-sky-600 text-sm max-lg:hidden">About Me</a>
            <a href="#contact-form"  class="contact-btn mr-5 hover:text-sky-600 text-sm">
                <span><i class="fa-solid fa-paper-plane text-sm" style="color: #74C0FC;"></i> Contact</span>
            </a>

            <!-- Contact Form Modal -->
            <div class="contact-form-modal  hidden fixed inset-0 flex  mt-5 bg-opacity-50 justify-center z-50 ">
                <div class="relative  w-full h-[556px]  max-w-md shadow-xl rounded-lg ">
                    <!-- Close Button -->
                    <button onclick="document.querySelector('.contact-form-modal').classList.add('hidden')"
                        class="absolute top-2 right-2 p-2   text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- Form İçeriği -->
                    <div>
                        @include('layouts.front.contact')
                    </div>
                </div>
            </div>

            <div class="flex  items-center font-semibold text-sm ml-32 max-lg:hidden">
                <a href="{{ asset('img/isufov_cv.pdf') }}" download='isufov_cv.pdf'
                    class="hover:text-sky-600 text-sm">Download CV</a>
                <a href="https://www.linkedin.com/in/hasan-isufov-a8043a313" target="_blank"
                    class="hover:text-sky-600 underline pl-4 text-sm">Request a project</a>
            </div>
        </nav>


        <nav class="relative ml-2 hover:text-sky-600">
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="flex flex-wrap items-center p-2 w-10 h-10 justify-center text-sm text-black-600 rounded-lg"
                aria-controls="navbar-dropdown" aria-expanded="false"
                onclick="document.getElementById('navbar-dropdown').classList.toggle('hidden')">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </nav>
    </div>

    {{-- <--card-menu-wrapper --> --}}
    <div id="navbar-dropdown" class="hidden fixed justify-center w-80 border bg-white z-40 rounded-lg shadow mt-20">
        <button onclick="document.getElementById('navbar-dropdown').classList.add('hidden')"
            class="absolute top-2 right-2 p-2 text-gray-500 hover:text-gray-700  focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="flex flex-col items-center p-4">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/hasan-foto.jpeg') }}"
                alt="Hasan-isufov" />
            <h5 class="mb-1 text-xl font-medium text-gray-900">Hasan Isufov</h5>
            <span class="text-sm text-gray-500">hsnsvs.work@gmail.com</span>
            <div class="flex flex-col mt-4">
                <a href="#project" class="text-sm font-medium text-black-700 hover:underline mt-2">Projects</a>
                <a href="#servis" class="text-sm font-medium text-black-700 hover:underline mt-2">Services</a>
                <a href="#about" class="text-sm font-medium text-black-700 hover:underline mt-2">About Me</a>


                <br />
                <a href="https://www.linkedin.com/in/hasan-isufov-a8043a313" target="_blank">
                    <span><i class="fa-solid fa-paper-plane" style="color: #74C0FC;"></i> Request a
                        project</span>
                </a>
                <br />
                <p class="text-sm text-gray-500"><span>© 2024 Hasan Isufov. All rights reserved.</span></p>
            </div>
        </div>
    </div>
    {{-- <--card-menu-wrapper- end --> --}}

</header>
