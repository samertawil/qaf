<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Government Website
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-blue-900 text-white">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="flex items-center">
     <img alt="Government logo, a detailed emblem with an eagle and shield" class="h-10 w-10 mr-3" height="50" src="https://storage.googleapis.com/a1aa/image/4udH2vyf_m6-RA6v4415a0P2vtoS9-k5KJZmZii-kCE.jpg" width="50"/>
     <h1 class="text-2xl font-bold">
      Government Portal
     </h1>
    </div>
    <nav class="hidden md:flex space-x-6">
     <a class="hover:underline" href="#">
      Home
     </a>
     <a class="hover:underline" href="#">
      About Us
     </a>
     <a class="hover:underline" href="#">
      Services
     </a>
     <a class="hover:underline" href="#">
      Departments
     </a>
     <a class="hover:underline" href="#">
      Contact
     </a>
    </nav>
    <div class="md:hidden">
     <button class="text-white focus:outline-none" id="menu-btn">
      <i class="fas fa-bars">
      </i>
     </button>
    </div>
   </div>
  </header>
  <!-- Mobile Menu -->
  <div class="hidden md:hidden bg-blue-900 text-white" id="mobile-menu">
   <a class="block px-4 py-2 hover:bg-blue-700" href="#">
    Home
   </a>
   <a class="block px-4 py-2 hover:bg-blue-700" href="#">
    About Us
   </a>
   <a class="block px-4 py-2 hover:bg-blue-700" href="#">
    Services
   </a>
   <a class="block px-4 py-2 hover:bg-blue-700" href="#">
    Departments
   </a>
   <a class="block px-4 py-2 hover:bg-blue-700" href="#">
    Contact
   </a>
  </div>
  <!-- Hero Section -->
  <section class="bg-blue-800 text-white py-20">
   <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-4">
     Welcome to the Government Portal
    </h2>
    <p class="text-lg mb-8">
     Your gateway to all government services and information.
    </p>
    <button class="bg-yellow-500 text-blue-900 px-6 py-2 rounded-full font-bold hover:bg-yellow-600">
     Learn More
    </button>
   </div>
  </section>
  <!-- Services Section -->
  <section class="py-20">
   <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">
     Our Services
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Icon representing healthcare services" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4NIKnFTwYFS8_VQ7FeLMAHi7bdCTTaVf0U1XO2nQh70.jpg" width="100"/>
      <h3 class="text-xl font-bold mb-2">
       Healthcare
      </h3>
      <p>
       Access healthcare services and information.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Icon representing education services" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4XRy3e488v5Q3kz-anm7uMkXQRvOl2qV18uQh9UbNIk.jpg" width="100"/>
      <h3 class="text-xl font-bold mb-2">
       Education
      </h3>
      <p>
       Find educational resources and services.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Icon representing transportation services" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/ycruAxZV9y8B6-_IhyYmKSluS9pSZkvirJQwg7j5MEk.jpg" width="100"/>
      <h3 class="text-xl font-bold mb-2">
       Transportation
      </h3>
      <p>
       Get information on public transportation and infrastructure.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- News Section -->
  <section class="bg-gray-200 py-20">
   <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">
     Latest News
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Image of a government official giving a speech" class="w-full mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/gF4T-ctpsQgq3N3fTtXUtXiB7ooUuiOGBKo7u5ljPQI.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       Government Official Speech
      </h3>
      <p>
       Details about the recent speech given by a government official.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Image of a new public park" class="w-full mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/Yg0OM-R3_2pO8tpg2bN7f5RWeW2TtkWcYlNWzmqWZJg.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       New Public Park
      </h3>
      <p>
       Information about the opening of a new public park.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <img alt="Image of a community event" class="w-full mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/Qt2oM0fv6M-jzhXVucVoPVaDDfvc2IuQo-o3ZEY_4uE.jpg" width="300"/>
      <h3 class="text-xl font-bold mb-2">
       Community Event
      </h3>
      <p>
       Highlights from the recent community event.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-8">
   <div class="container mx-auto text-center">
    <div class="mb-4">
     <a class="mx-2 hover:underline" href="#">
      Privacy Policy
     </a>
     <a class="mx-2 hover:underline" href="#">
      Terms of Service
     </a>
     <a class="mx-2 hover:underline" href="#">
      Contact Us
     </a>
    </div>
    <p>
     © 2023 Government Portal. All rights reserved.
    </p>
   </div>
  </footer>
  <script>
   document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
  </script>
 </body>
</html>
