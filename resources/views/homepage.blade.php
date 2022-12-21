@include('layouts/navbar')

{{-- Hero Section --}}
<section class="font-serif" style="background-color: antiquewhite">
	<div class="flex flex-col justify-center p-12 sm:py-12 lg:py-12 lg:flex-row lg:justify-between items-center">
		<div class="flex items-center justify-center pl-10 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="/images/banners.jpg" alt="" class="object-contain h- sm:h-80 lg:h-96 xl:h-112 2xl:h-128 rounded-lg">
		</div>
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<div class="flex items-center">
				<h1 class="text-5xl font-bold leading-none sm:text-6xl">
				Love at First Slice!
			</h1>
			<svg class="w-40 h-40 fill-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
			</div>
			<p class="mt-6 mb-8 text-lg sm:mb-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quibusdam, maxime ad voluptatum aliquid, explicabo atque dicta commodi incidunt pariatur omnis nesciunt culpa sunt sapiente dignissimos expedita saepe eaque ducimus?
			</p>
			<div class="flex flex-col sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a href="/cakes" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
					Our Cakes!
                </a>
			</div>
		</div>
	</div>
</section>

{{-- Hero Bottom Bar --}}
<section class="font-serif">
	<div class="grid grid-cols-6">
		<div class="text-transparent select-none" style="background-color: #455662">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-2" style="background-color: #556d7d">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-3" style="background-color: #7a97ab">
			SSSSSSSSSSSSSSSSS
		</div>
	</div>
</section>

{{-- Our Cakes Homepage --}}
<div class="container pt-14 font-serif font-bold grid grid-cols-1">
    <p class="text-4xl text-center">Our Cakes!</p>
	<hr class="mx-auto w-48 h-1 rounded border-0" style="background-color: antiquewhite">

    <div class="pt-5 grid grid-cols-4">
        <img src="/images/logo.png" class="w-72">
    </div>
</div>

{{-- Qualities List --}}
<section class="font-serif mt-40">
	<div class="grid grid-cols-3">
		<div class="py-10 text-center" style="background-color: #AB9163">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/cakes" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
            </a>
		</div>
		<div class="py-10 text-center" style="background-color: #D7C096">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/cakes" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
            </a>
		</div>
		<div class="py-10 text-center" style="background-color: #AB9163">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/cakes" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
            </a>
		</div>
	</div>
</section>

<section class="font-serif">
	<div class="flex flex-col justify-center lg:flex-row lg:justify-between items-center">
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left lg:pl-20">
			<div class="flex items-center">
				<h1 class="text-5xl font-bold leading-none sm:text-6xl">
				Love at First Slice!
			</h1>
			</div>
			<p class="mt-6 mb-8 text-lg sm:mb-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quibusdam, maxime ad voluptatum aliquid, explicabo atque dicta commodi incidunt pariatur omnis nesciunt culpa sunt sapiente dignissimos expedita saepe eaque ducimus?
			</p>
			<div class="flex flex-col sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a href="/cakes" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
					Our Cakes!
                </a>
			</div>
		</div>

		<div class="flex flex-col w-1/2">
			<img src="/images/homeimage.jpg">
		</div>
	</div>

	
</section>

@include('layouts/footer')