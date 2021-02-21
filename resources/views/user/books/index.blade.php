<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Here are your favourite books!') }} {{-- title --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('message'))
                        <div class="pb-2 mb-4 border-b-2">{{ session('message') }}</div>
                    @endif
                    
                    <div class="container my-12 mx-auto px-4 md:px-12">
                        <div class="flex flex-wrap -mx-2 lg:-mx-4">
                            @foreach ($books as $book)
                            <!-- Column -->
                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">

                                <!-- Article -->
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <a href="#">
                                        <img alt="Placeholder" class="block h-auto w-full"
                                            src="https://picsum.photos/600/400/?random">
                                    </a>

                                    <div class="flex justify-center items-center p-2 md:p-4">
                                        <h1 class="text-lg font-bold">
                                            {{ Illuminate\Support\Str::limit(strtoupper($book->title), 11, $end='...') }}
                                            {{-- {{ strtoupper($book->title) }} --}}

                                        </h1>                                        
                                    </div>  

                                    <div class="flex items-center justify-between leading-tight p-2 md:p-2">
                                        @foreach ($book->genres as $genre)
                                        <a class="no-underline hover:underline text-black"  href="#">
                                            {{ Illuminate\Support\Str::limit($genre->name, 13, $end='...') }} {{-- limit 5 --}}                                              
                                            
                                        </a>
                                        @endforeach
                                        <p class="text-grey-darker text-sm">
                                            {{ Carbon\Carbon::parse($book->created_at)->diffForHumans() }}                                           
                                        </p>
                                    </div>                                  
                                    
                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            {{-- <img alt="Placeholder" class="block rounded-full"
                                                src="https://picsum.photos/32/32/?random"> --}}
                                           @foreach ($book->authors as $author)
                                                <p class="ml-0 text-sm font-bold">
                                                 {{ $author->name }}
                                                </p>
                                            @endforeach
                                        </a>                               
                                        
                                        {{-- <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a> --}}
                                    </footer>

                                    <div class="grid grid-cols-2 divide-x text-bold py-3 "> 
                                        <p class="text-center text-2xl font-bold  ">{{ $book->price }} Eur</p>
                                        <p class="text-center">-{{ $book->discount }}%</p>                                        
                                    </div>

                                    <div class="flex justify-center items-center">
                                        <div class="flex items-center mt-2 mb-4">
                                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                          <svg class="mx-1 w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        </div>
                                      </div>

                                </article>
                                <!-- END Article -->

                            </div>
                            <!-- END Column -->
                    @endforeach      

                        </div>
                    </div>



                    Hello

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
