<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar y editar') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl w-full bg-white p-8 text-xl rounded my-2  mx-auto">
        <div class="flex w-full justify-between text-2xl font-black">
            <h4>Blog: {{$blog->titleBlog}}</h4>
            <h4>{{$blog->authorBlog}}</h4>
        </div>
        <hr class="my-4">
        <div>
            <img src="http://localhost:3000{{ $blog->imgBlog }}" alt="imga">
        </div>
        <hr class="my-4">
        <div class="flex justify-between w-full my-4">
            <p>
                <span class="font-black">Imagen: </span>
                {{$blog->imgBlog}}
            </p>
            <p>
                <span class="font-black">Fecha: </span>
                {{$blog->date}}
            </p>
        </div>
        <div class="flex justify-between w-full my-4">
            <p>
                <span class="font-black">Dia de creación: </span>
                {{$blog->dayCreateBlog}}
            </p>
            <p>
                <span class="font-black">Mes de creacion: </span>
                {{$blog->monthCreateBlog}}
            </p>
        </div>
        <div class="my-4">
            <h5 class="font-black">Descripción:</h5>
            <p>{{$blog->descriptionBlog}}</p>
        </div>
    </div>

    <form
        class="max-w-2xl w-full bg-white p-8 text-xl rounded my-2  mx-auto"
        action="{{ route('blog.edit', $blog)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="my-2">
            <h2 class="w-full text-center text-2xl font-black">Puede editar el blog</h2>
        </div>

        <div class="my-2">
            <label for="titleBlog">Titulo del blog:</label>
            <input type="text"
                id="titleBlog"
                name="titleBlog"
                class="bg-slate-50 rounded border-white"
                value="{{$blog->titleBlog}}"
            />
            <x-input-error :messages="$errors->get('titleBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="authorBlog">Autor del blog:</label>
            <input type="text"
                id="authorBlog"
                name="authorBlog"
                class="bg-slate-50 rounded border-white"
                value="{{$blog->authorBlog}}"
            />
            <x-input-error :messages="$errors->get('authorBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="imgBlog">Imagen del blog:</label>
            <input type="text"
                id="imgBlog"
                name="imgBlog"
                class="bg-slate-50 rounded border-white w-full"
                value="{{$blog->imgBlog}}"
            />
            <x-input-error :messages="$errors->get('imgBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="date">Fecha del blog:</label>
            <input type="text"
                id="date"
                name="date"
                class="bg-slate-50 rounded border-white"
                value="{{$blog->date}}"
            />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="dayCreateBlog">Dia de creación del blog:</label>
            <input type="text"
                id="dayCreateBlog"
                name="dayCreateBlog"
                class="bg-slate-50 rounded border-white"
                value="{{$blog->dayCreateBlog}}"
            />
            <x-input-error :messages="$errors->get('dayCreateBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="monthCreateBlog">Me de creación del blog:</label>
            <input type="text"
                id="monthCreateBlog"
                name="monthCreateBlog"
                class="bg-slate-50 rounded border-white"
                value="{{$blog->monthCreateBlog}}"
            />
            <x-input-error :messages="$errors->get('monthCreateBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="descriptionBlog">Descripción del blog:</label>
            <textarea type="text"
                id="descriptionBlog"
                name="descriptionBlog"
                class="bg-slate-50 rounded border-white w-full h-[100px]"
            >{{$blog->descriptionBlog}}</textarea>
            <x-input-error :messages="$errors->get('descriptionBlog')" class="mt-2" />
        </div>
        <script>
            ClassicEditor
                .create( document.querySelector( '#descriptionBlog' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
        </script>
        <button
            type="submit"
            class="py-2 px-4 bg-indigo-600 text-white rounded">
            Guardar
        </button>
    </form>
</x-app-layout>
