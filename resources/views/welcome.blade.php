@extends('layout.app')

@section('content')
<header class="bg-blue-500 text-white text-center py-4">
    <h1 class="text-4xl font-bold">Rajinikanth Fan Club</h1>
    <p class="text-lg">Celebrating the Legendary Indian Actor</p>
  </header>

  <div class="container mx-auto my-8 px-4">

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">Latest Updates</h2>
      <p class="mb-4">Stay tuned for the latest news, films, and events featuring Rajinikanth.</p>
      <a href="#" class="text-blue-500 hover:underline">Read More</a>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">About Rajinikanth</h2>
      <p class="mb-4">Learn more about the iconic Indian actor, his early life, career, and achievements.</p>
      <a href="#" class="text-blue-500 hover:underline">Explore</a>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">Social Media</h2>
      <p class="mb-4">Connect with us on social media for exclusive content and updates.</p>
      <div class="flex space-x-4">
        <a href="#" class="text-blue-500 hover:underline">Facebook</a>
        <a href="#" class="text-blue-500 hover:underline">Twitter</a>
        <a href="#" class="text-blue-500 hover:underline">Instagram</a>
      </div>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
      <p class="mb-4">Have questions or suggestions? Reach out to us!</p>
      <a href="#" class="text-blue-500 hover:underline">Contact Form</a>
    </section>

  </div>

  <footer class="bg-gray-200 py-4 text-sm text-gray-600 text-center">
    <p>&copy; 2023 Rajinikanth Fan Club. All rights reserved.</p>
  </footer>
@endsection
