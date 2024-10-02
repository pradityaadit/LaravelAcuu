<x-layout>
  <x-slot:title>{{ $title}}</x-slot>

    <article class="border-b border-gray-300 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

      <h2 class="mb-1 text-3xl tracking-tighter font-bold text-black-400">{{ $post['title'] }}</h2>
      <div class="text-base text-gray-400">
        <a href="#">{{ $post['author'] }}</a> | 12 Januari 2022
      </div>

      <p class="my-4 font-light">{{ $post['body']}}</p>

      <a href="/posts" class="font-medium text-blue-400 hover:underline hover:text-blue-600">&laquo; Back to Blog </a>
    </article>


</x-layout>