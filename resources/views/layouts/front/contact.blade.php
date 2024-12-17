

<section class=" bg-white dark:bg-gray-300 shadow-xl rounded-lg justify-center z-50">
    <div class="flex items-center text-base m-2 justify-center font-semibold"><h2>Contact</h2></div>
    <div class="rounded-lg md:p-8">
        <form action="/contact" method="POST" enctype="multipart/form-data" id="contact-form">
            @csrf
            <div class="-mx-2 md:items-center md:flex">
                <div class="flex-1 px-2">
                    <label class="block mb-2 text-sm text-gray-900">First Name</label>
                    <input type="text" id="name" name="name" placeholder="John " required
                        class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400
                        border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-200
                         dark:text-gray-800 dark:border-gray-700 focus:border-blue-400
                         dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none
                           focus:ring focus:ring-opacity-40" />
                </div>

                <div class="flex-1 px-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm text-gray-900 ">Last Name</label>
                    <input type="text" id="surname" name="surname" placeholder="Doe" required
                        class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400
                        bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600
                        dark:bg-gray-200 dark:text-gray-800 dark:border-gray-700
                        focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400
                        focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
            </div>

            <div class="mt-4">
                <label class="block mb-2 text-sm text-gray-900 ">Email address</label>
                <input type="email" id="email" name="email" placeholder="johndoe@example.com" required
                    class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400
                    bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600
                    dark:bg-gray-200 dark:text-gray-800 dark:border-gray-700 focus:border-blue-400
                    dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring
                    focus:ring-opacity-40" />
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm text-gray-900 ">Message</label>
                <textarea id="message" name="message" required
                    class="block w-full h-32 px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400
                    bg-white border border-gray-200 rounded-lg md:h-56 dark:placeholder-gray-600
                    dark:bg-gray-200 dark:text-gray-800 dark:border-gray-700 focus:border-blue-400
                    dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring
                    focus:ring-opacity-40"
                    placeholder="Message"></textarea>
            </div>

            <button type="submit" value="Submit"
                class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize
                transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400
                focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                Send message
            </button>
        </form>

    </div>
</section>
