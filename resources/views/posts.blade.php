<x-layout>
<x-slot:title>{{ $title}}</x-slot>
  

  @foreach ($posts as $post)

  <article class="border-b border-gray-300 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8"> 
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-black-400">{{ $post['title'] }}</h2></a>
    <div class="text-base text-gray-400">
      <a href="#">{{ $post['author'] }}</a> | 12 Januari 2022
    </div>

    <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>

    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-400 hover:underline hover:text-blue-600">Read More &raquo;</a>
  </article>

  @endforeach


</x-layout>