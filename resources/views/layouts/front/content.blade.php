{{-- hero-start --}}

<div class="relative flex container mx-auto  w-4/5 h-screen  items-center justify-center overflow-hidden max-md:h-[400px]"
id="home">
    <!-- Video Background -->
    <video class="absolute  inset-0 w-full object-cover rounded-2xl max-md:h-[400px] max-md:mt-10  lg:h-screen" autoplay loop muted>
        <source src="{{ asset('img/hero-bg-hd.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

    <!-- Text Content -->
    <div class="relative text-center max-md:text-2xl  animate__animated animate__fadeInUp">
        <h1 class="text-5xl max-md:text-3xl tracking-widest text-gray-500" style="font-family:'Ballet'">Next Level</h1>
        <p class="mt-4 text-lg max-md:text-sm text-gray-500" style="font-family: 'Inter Tight'">Blending art and function in every line
            of code.</p>
    </div>
</div>
{{-- hero-end --}}

{{-- project start --}}
<div data-aos="fade-right" class=" grid mx-4 my-20 p-10 rounded-xl gap-7 md:grid-cols-3 bg-gradient-to-l from-gray-50 to-gray-300 scroll-mt-20" id="project">

    <!-- Project Title - Sol Sütun -->
    <div class="title col-span-1 row-span-1" style="font-family:'Inter Tight'">
        <h2 class="text-2xl font-bold text-gray-600">Project</h2>
        <p class="text-gray-400 text-sm">With the success I’ve achieved with my own product, I help my clients reach
            their growth goals.</p>
    </div>


    <!-- right side grid -->
    <div class="col-span-2 grid gap-6 grid-cols-1 sm:grid-cols-2">
        <!-- Kart 1 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:scale-110  h-[200px] sm:h-[250px] lg:h-[300px] ">
            <img alt="Web-shop" src="{{ asset('img/web-shop.png') }}"
                class="absolute  inset-0 h-full w-full object-cover object-top" />
        </article>

        <!-- cart 2 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:scale-110 h-[200px] sm:h-[250px] lg:h-[300px]">
            <img alt="small-shop" src="{{ asset('img/small-shop.png') }}"
                class="absolute inset-0 h-full w-full object-cover object-top" />
        </article>


        <!-- Kart 3 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:scale-110 h-[200px] sm:h-[250px] lg:h-[300px]">
            <img alt="web" src="{{ asset('img/web-2.png') }}"
                class="absolute inset-0 h-full w-full object-cover object-top" />
        </article>

        <!-- Kart 4 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:scale-110 h-[200px] sm:h-[250px] lg:h-[300px]">
            <img alt="online-shop" src="{{ asset('img/online-shop.png') }}"
                class="absolute inset-0 h-full w-full object-cover object-top" />
        </article>
    </div>

</div>
{{-- project end --}}

{{-- Servis & Pricing start --}}
<div data-aos="fade-left" class="project bg-gradient-to-r from-gray-50 to-gray-300 p-10 rounded-xl grid mx-4 my-20 gap-3 md:grid-cols-3  scroll-mt-20" id="servis">
    <!-- Project Title - Sol Sütun -->
    <div class="title col-span-1 row-span-2" style="font-family:'Inter Tight'">
        <h2 class="text-2xl font-bold text-gray-600">Servis</h2>
    </div>

    <!-- rihgt side  -->
    <div class="col-span-2 grid gap-3 grid-cols sm:grid-cols-2">
        <!-- cart 1 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-xl h-[150px] sm:h-[100px] lg:h-[150px]">
            <div class="servis flex flex-wrap mx-4 my-2 " style="font-family:'Inter Tight'">
                <h3 class="  text-gray-600 flex text-xl font-semibold">UX/UI design</h3>
                <img class="m-1 h-[20px]" src="{{ asset('img/figma_logo.png') }} " alt="figma_logo">

                <p class="text-gray-400 text-sm my-3">User interface development for websites and applications, design
                    systems engineering.</p>
                <button onclick=" window.open('https:www.linkedin.com/in/hasan-isufov-a8043a313','_blank') "
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                    <span class="font-medium"> Discuss the project
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>
            </div>
        </article>

        <!-- cart 2 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-xl h-[150px] sm:h-[100px] lg:h-[150px]">
            <div class="servis flex flex-wrap mx-4 my-2 " style="font-family:'Inter Tight'">
                <h3 class="  text-gray-600 flex text-xl font-semibold mr-2">Website development</h3>
                <img class="my-1 h-[20px]" src="{{ asset('img/figma_logo.png') }} " alt="figma_logo">
                <img class="my-1 h-[20px]" src="{{ asset('img/wpress_logo.png') }} " alt="wordpress_logo">
                <img class="my-1  h-[22px]" src="{{ asset('img/shopify_logo.png') }} " alt="shopify_logo">
                <p class="text-gray-400 text-sm my-3">Creation of landing pages, websites and online stores for small
                    and medium-sized businesses.</p>
                <button onclick="window.open('https:www.linkedin.com/in/hasan-isufov-a8043a313','_blank') "
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                    <span class="font-medium"> Discuss the project
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>

            </div>

        </article>

        <!-- cart 3 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-xl h-[150px] sm:h-[100px] lg:h-[150px]">
            <div class="servis flex flex-wrap mx-4 my-2 " style="font-family:'Inter Tight'">
                <h3 class="  text-gray-600 flex text-xl font-semibold">Front-end development</h3>
                <img class="m-1 h-[20px]" src="{{ asset('img/html_logo.png') }} " alt="html">
                <img class="m-1 h-[20px]" src="{{ asset('img/css_logo.png') }} " alt="css">
                <img class="m-1 h-[20px]" src="{{ asset('img/js_logo.png') }} " alt="js">

                <p class="text-gray-400 text-sm my-3">Layout and development of functionality on HTML, CSS and
                    JavaScript</p>
                <button onclick="window.open('https:www.linkedin.com/in/hasan-isufov-a8043a313','_blank') "
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                    <span class="font-medium"> Discuss the project
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>

            </div>
        </article>

        <!-- cart 4 -->
        <article
            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-xl h-[150px] sm:h-[100px] lg:h-[150px]">
            <div class="servis flex flex-wrap mx-4 my-2 " style="font-family:'Inter Tight'">
                <h3 class="  text-gray-600 flex text-xl font-semibold">Back-end devolopment</h3>
                <img class="m-1 h-[20px]" src="{{ asset('img/laravel_logo.png') }} " alt="figma_logo">
                <img class="m-1 h-[20px]" src="{{ asset('img/nodejs_logo.png') }} " alt="figma_logo">
                <img class="m-1 h-[20px]" src="{{ asset('img/php_logo.png') }} " alt="figma_logo">

                <p class="text-gray-400 text-sm my-3">Server-side development for web applications, including database
                    management and API integrations.</p>
                <button onclick="window.open('https:www.linkedin.com/in/hasan-isufov-a8043a313','_blank') "
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                    <span class="font-medium"> Discuss the project
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>

            </div>
        </article>
    </div>
</div>
{{-- Servis & Pricing end --}}

{{-- about start --}}
<div data-aos="fade-right"  class="project bg-gradient-to-br from-gray-50 to-gray-300 p-10 rounded-xl grid mx-4 my-20 gap-3 md:grid-cols-3  scroll-mt-20" id="about">
    <!-- Project Title - Sol Sütun -->
    <div class="title col-span-1 row-span-2" style="font-family:'Inter Tight'">
        <h2 class="text-2xl font-bold text-gray-600">About Me </h2>
    </div>

    <!-- rihgt side  -->
    <div class=" grid  gap-3 grid-cols col-span-2 ">
        <!-- cart 1 -->
        <article
            class="relative col-span-2 overflow-hidden rounded-lg shadow transition h-[500px] sm:h-[350px] lg:h-[500px] ">
            <div class=" flex  mx-4 my-2 justify-center " style="font-family:'Inter Tight'">
                <img class="m-1 h-24 rounded-full" src="{{ asset('img/hasan-foto.jpeg') }} " alt="figma_logo">
            </div>
            <p class="text-gray-400 text-sm my-3 mx-3 text-justify ">Hello! I’m Hasan Isufov, a passionate and driven
                freelance developer with expertise in web development and a range of programming languages. Over the
                years, I have honed my skills in HTML, CSS, JavaScript, PHP, and Laravel, along with other technologies
                that allow me to craft dynamic, responsive, and user-centered digital experiences. Each project I work
                on is not just a task, but an opportunity to build something innovative, efficient, and meaningful for
                my clients. <br>

                Freelancing has been an incredible journey, giving me the freedom to dive deep into projects that excite
                me and challenge my skills. I find immense satisfaction in understanding the unique needs of each client
                and translating those needs into a digital solution that exceeds their expectations. From creating
                sleek, intuitive front-end designs to developing robust back-end functionalities, I approach each task
                with curiosity and dedication. <br>

                What truly excites me about this work is the potential for continuous growth and learning. The tech
                world is always evolving, and I stay up-to-date with the latest trends and techniques to ensure my work
                is modern, efficient, and effective. This commitment to learning fuels my passion and keeps me motivated
                to create solutions that are not only functional but also impactful.<br>

                As a freelancer, I take pride in my ability to manage projects independently while maintaining clear
                communication and collaboration with my clients. Whether I’m developing a website from scratch,
                optimizing an application, or exploring a new tech stack, I’m dedicated to delivering high-quality
                results that bring my clients’ visions to life.<br>

                If you’re looking for a developer who is enthusiastic, skilled, and committed to excellence, let’s
                connect! I’m excited to bring your ideas to life and help your business thrive in the digital world.</p>
        </article>
    </div>
</div>
{{-- about  end --}}
