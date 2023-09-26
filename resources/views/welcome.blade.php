<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center" style="background-image: url('https://tourhassanpalace.com/wp-content/uploads/2018/02/La-maison-arabe-salle-2.jpg')">
        <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To MEDINA Restaurant</span>
        </h1>
        <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            Dive into a culinary experience like no other. Fresh ingredients, masterful chefs, and an ambiance to remember.
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{route('reservations.step.one')}}" type="button" class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Make Reservation
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            From humble beginnings to becoming the city's favorite dining spot, our story is a testament to passion, dedication, and the love for food.
                        </p>
                        <!-- <div class="relative flex">
                            <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://images.unsplash.com/photo-1530021853947-7d73da7acb70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bW9yb2Njb24lMjBmb29kfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <!-- Partie image -->
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://atalayar.com/sites/default/files/inline-images/chef-el-hadi-marruecos%20%282%29.jpg" alt="feature image">
                </div>
                <!-- Partie texte -->
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0 ">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">About Us</h2>
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            THE MEDINA PROMISE
                        </h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Experience gourmet dishes, impeccable service, and an atmosphere that feels like home</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Swift Service & Fresh Ingredients</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
    </section>

    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
    @if (isset($menus) && count($menus) > 0)
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center"> <!-- Ajout de justify-center -->
            @foreach ($menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48 object-cover object-center" src="{{ Storage::url($menu->image) }}" alt="Image" /> <!-- Ajout de object-center -->
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            {{ $menu->name }}
                        </h4>
                        <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">${{ $menu->price }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No special menus available.</p>
    @endif
</div>
</section>


    <section class="pt-4 pb-12 bg-gray-50">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Food Gallery</h2>
            <p class="text-xl">Discover the essence of culinary art with every bite.</p>
        </div>
        <div class="container grid gap-4 mx-auto lg:grid-cols-3">
            <div class="w-full rounded">
                <img src="https://middlebury.coop/wp-content/uploads/2023/01/Chicken-Tagine.-SS.-Low-Res-476x476.jpg" alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1567982047351-76b6f93e38ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fG1vcm9jY28lMjBmb29kfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1541518763669-27fef04b14ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG1vcm9jY28lMjBmb29kfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://res.cloudinary.com/hsxfx8igq/image/upload/t_4x3_recipe_image,f_auto/v1611869928/Moroccan-Style-Fish-Tagine-main_f0qvdy.jpg" alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1517314626714-ac1b9a16515e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bW9yb2NjbyUyMGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1574545190776-9693cc4affc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bW9yb2NjbyUyMGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="image" class="object-cover w-full h-80">
            </div>
        </div>

    </section>
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Testimonial </h2>
            <p class="text-xl text-white">Hear from our satisfied customers who experienced the magic of our dishes</p>
        </div>
        <div class="grid gap-4 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg ml-6">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">A Culinary Delight</h2>
                    <p class="mt-2 text-gray-600">From the very first bite, I was transported to a world of rich flavors and exquisite taste. The menu at A.H.Y is nothing short of a culinary masterpiece</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Mahmoud Laraki</a>
                </div>
            </div>

            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg ml-3">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Unforgettable Culinary Experience</h2>
                    <p class="mt-2 text-gray-600">Every dish on the menu tells a story of passion, creativity, and an unparalleled love for food. The flavors are harmonious, yet each ingredient stands out, making every bite a delightful experience</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Nouhaila El mouhadeb</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Authenticity and Innovation in Every Bite</h2>
                    <p class="mt-2 text-gray-600">What I love about the menu here is its authenticity and depth of flavor. Every dish is a testament to the chef's expertise and dedication to delivering an unforgettable dining experience.</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Hamza Hamdi</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>