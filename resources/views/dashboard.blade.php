<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4 class="text-xl mb-2 text-center uppercase font-black">Formulario - Blog</h4>
                    <hr>
                    <div>
                        @foreach ($blogs as $blog)
                            <div class="bg-slate-100 p-2 rounded my-4">
                                <div class="flex w-full justify-between text-lg font-black">
                                    <h4>Blog: {{$blog->titleBlog}}</h4>
                                    <h4>{{$blog->authorBlog}}</h4>
                                </div>
                                <hr class="my-2">
                                <div class="flex justify-between w-full my-1">
                                    <p>
                                        <span class="font-black">Imagen: </span>
                                        {{$blog->imgBlog}}
                                    </p>
                                    <p>
                                        <span class="font-black">Fecha: </span>
                                        {{$blog->date}}
                                    </p>
                                </div>
                                <div class="flex justify-between w-full my-1">
                                    <p>
                                        <span class="font-black">Dia de creación: </span>
                                        {{$blog->dayCreateBlog}}
                                    </p>
                                    <p>
                                        <span class="font-black">Mes de creacion: </span>
                                        {{$blog->monthCreateBlog}}
                                    </p>
                                </div>
                                <div class="my-1">
                                    <h5 class="font-black">Descripción:</h5>
                                    <p>{{$blog->descriptionBlog}}</p>
                                </div>
                                <div class="mt-4">
                                    <a href="{{ route('blog.show', $blog)}}"
                                        class="py-2 px-5 bg-green-600 text-white rounded"
                                    >ver Blog</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <form
                        class="mt-2"
                        action="{{'/api/blog'}}" method="POST">
                        @csrf
                        <button>

                        </button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
