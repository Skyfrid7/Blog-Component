@extends('layouts.app')

@section('content')
     <div class="background-image grid grid-cols-1 m-auto">
          <div class="flex text-gray-100 pt-10">
               <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                         Tu veux devenir un développeur ?
                    </h1>
                    <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                         Voir plus
                    </a>
               </div>
          </div>
     </div>

     <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
          <div>
               <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
          </div>

          <div class="m-auto sm:m-auto text-left w-4/5 block">
               <h2 class="text-3xl font-extrabold text-gray-600">
                    Envie d'être un meilleur développeur ?
               </h2>
               <p class="py-8 text-gray-500 text-s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum facilis dolores autem blanditiis itaque aliquid molestias veritatis deserunt sit incidunt rerum illum odit, architecto temporibus? Quisquam tempora deserunt unde impedit!
               </p>

               <p class="font-extrabold text-gray-600 text-s pb-9">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit.
               </p>

               <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Voir plus
               </a>
          </div>
     </div>

     <div class="text-center p-15 bg-black text-white">
          <h2 class="text-2xl pb-5 text-l">
              Je suis un pro dans...
          </h2>

          <span class="font-extrabold block text-4xl py-1">
               Ux design
          </span>
          <span class="font-extrabold block text-4xl py-1">
               Management de projet
          </span>
          <span class="font-extrabold block text-4xl py-1">
               Stratégie digitale
          </span>
          <span class="font-extrabold block text-4xl py-1">
               Backend Developpement
          </span>
     </div>

     <div class="text-center py-15">
          <span class="uppercase text-s text-gray-400">
               Blog
          </span>

          <h2 class="text-4xl font-bold py-10">
               Publications Récentes
          </h2>

          <p class="m-auto w-4/5 text-gray-500">
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore soluta.  Consectetur adipisicing elit. Dolore soluta.
          </p>
     </div>
@endsection