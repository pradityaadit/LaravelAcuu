<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        <div class="pl-28 pt-28  items-center gap-2 bg-hero bg-cover bg-center w-screen h-[547px] ">
            <h1 class="mt-1 text-gray-500 font-bold pt-10 text-5xl font-serif text-shadow"> Welcome To My Blog</h1>
            <p class="mt-1 text-xl font-serif">Hello, I'm <span id="devType"></span></p>
            <p class="mt-1 max-w-[700px]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum error ipsum expedita praesentium eius facere voluptatum magni nam amet, rem, exercitationem eos quo id sunt autem, recusandae a dolore eveniet.</p>
            <button class="mt-5 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-5 rounded-full"><a href="/posts">Get Started</a></button>
        </div>

        <script>
            const devTypes = ['Praditya Oktanza', 'Front End Developer', 'UI/UX Designer'];
            let currentIndex = 0;
            const devTypeElement = document.getElementById('devType');

            function typeWriter(text, i, callback) {
                if (i < text.length) {
                    devTypeElement.innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true">|</span>';
                    setTimeout(() => typeWriter(text, i + 1, callback), 100);
                } else {
                    setTimeout(() => deleteWriter(text, text.length, callback), 2000); // Stay 2 detik sebelum menghapus
                }
            }

            function deleteWriter(text, i, callback) {
                if (i > 0) {
                    devTypeElement.innerHTML = text.substring(0, i - 1) + '<span aria-hidden="true">|</span>';
                    setTimeout(() => deleteWriter(text, i - 1, callback), 100);
                } else {
                    currentIndex = (currentIndex + 1) % devTypes.length; // Update index
                    setTimeout(callback, 500); // Delay sebelum mulai mengetik yang baru
                }
            }

            function startAnimation() {
                typeWriter(devTypes[currentIndex], 0, () => {
                    setTimeout(startAnimation, 500); // Tunggu sebelum memulai siklus baru
                });
            }

            startAnimation();
        </script>
</x-layout>