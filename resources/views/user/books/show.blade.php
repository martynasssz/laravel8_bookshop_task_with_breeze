<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />{{-- for validation error showing --}}
                    <div class="container my-12 mx-auto px-4 md:px-12">
                        <div class="flex justify-center -mx-2 lg:-mx-4">
                            <div class="overflow-hidden rounded-lg shadow-lg">                                
                                <a href="#">
                                    <img alt="Placeholder" class="block h-auto w-full"
                                        src="https://picsum.photos/600/400/?random">
                                </a>   
                                <div class="flex justify-center items-center p-2 md:p-4">
                                    <h1 class="text-2xl font-bold">
                                        {{ strtoupper($book->title) }}
                                        

                                    </h1>                                        
                                </div>
                                <div class="flex justify-start justify-content: flex-start p-2 md:p-4  ">
                                    <h1 class="text-xl font-bold">
                                        @foreach ($book->genres as $genre)
                                        <a class="no-underline hover:underline text-black  ">
                                           Genre: {{ $genre->name }} {{-- limit 5 --}}                                              
                                            
                                        </a>
                                        @endforeach                                         
                                    </h1>         
                                                                   
                                </div>
                                <div class="flex justify-start justify-content: flex-start p-2 md:p-4  ">
                                    <h1 class="text-lg font-bold">
                                        @foreach ($book->authors as $author)
                                        <p class="text-xl font-bold">
                                            Author: {{ $author->name }}
                                        </p>
                                        @endforeach                                        
                                    </h1>         
                                                                   
                                </div>
                                <div class="grid grid-cols-2 divide-x text-bold py-3 mb-4 "> 
                                    <p class="text-center text-2xl font-bold  ">{{ $book->price }} Eur</p>
                                    <p class="text-center">-{{ $book->discount }}%</p>                                        
                                </div>
                                {{-- individual rating --}}
                                <div class="flex justify-between pl-4">
                                    <div class="text-lg font-bold">
                                        Rate this book
                                    </div>

                                    <div class="flex items-center mt-2 mb-4 ">
                                      <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                      <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                      <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                      <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                      <svg class="mx-1 w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    </div>
                                  </div>

                                  <div>
                                      There will be reviews
                                  </div>








                                
                            </div>
                        </div>
                    </div>    
                    
                    


                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
