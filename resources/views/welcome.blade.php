@extends('layout.app')

@section('content')
<div class="content" style="background-image: url('https://chiloka.com/i/i/r/a/j/rajinikanth-in-enthiran-robot-2.jpg'); background-size: cover; background-position: center; height: 100vh;" >
    <div class="content2" style="height: 100vh;width:100vw;background-color:rgba(249, 249, 249, 0.605)">

        <header class=" text-black text-center py-4"  >
            <h1 class="text-4xl font-bold">Rajinikanth Fan Club</h1>
            <p class="text-lg">Celebrating the Legendary Indian Actor</p>
        </header>

        <div class="container mx-auto my-8 px-4" style="opacity: 1">

            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Latest Updates</h2>
                <p class="mb-4">Stay tuned for the latest news, films, and events featuring Rajinikanth.</p>
                <a href="https://www.google.com/" class="text-blue-500 hover:underline">Read More</a>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">About Rajinikanth</h2>
                <p class="mb-4">Learn more about the iconic Indian actor, his early life, career, and achievements.</p>
                <a href="https://en.wikipedia.org/wiki/Rajinikanth" class="text-blue-500 hover:underline">Explore</a>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Social Media</h2>
                <p class="mb-4">Connect with us on social media for exclusive content and updates.</p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/Rajinikanth/" class="text-blue-500 hover:underline">Facebook</a>
                <a href="https://twitter.com/rajnikanth" class="text-blue-500 hover:underline">Twitter</a>
                <a href="https://www.instagram.com/rajinikanth/" class="text-blue-500 hover:underline">Instagram</a>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
            <p class="mb-4">Have questions or suggestions? Reach out to us!</p>
            <a href="mailto:usk2004@gmail.com" class="text-blue-500 hover:underline">Contact Form</a>
        </section>

    </div>
    </div>

</div>
    <footer class="bg-gray-200 py-4 text-sm text-gray-600 text-center">
    <p>&copy; 2023 Rajinikanth Fan Club. All rights reserved.</p>
</footer>
@endsection
