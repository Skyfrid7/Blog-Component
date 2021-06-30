@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
     <div class="py-15 border-b border-gray-200">
          <h1 class="text-6xl">
               Publications du Blog
          </h1>
     </div>
</div>

@foreach $(posts as $post)
     <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
          <div class="limited-img">
               <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
          </div>
          <div>
               <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    Apprend à écrire en Laravel
               </h2>

               <span class="text-gray-500">
                    Par <span class="font-bold italic text-gray-800">DesiWeb</span>, il y a 1 jour
               </span>

               <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt nemo omnis eaque corporis fugit perspiciatis nulla velit molestias officiis. Nisi facere voluptatibus itaque tenetur vel ipsum optio dolor architecto adipisci.
               </p>

               <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Continuer à lire
               </a>
          </div>
     </div>
@endforeach

@endsection