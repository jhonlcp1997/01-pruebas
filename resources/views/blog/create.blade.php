<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear') }}
        </h2>
    </x-slot>

    <form
        class="max-w-2xl w-full bg-white p-8 text-xl rounded my-2  mx-auto"
        action="{{ route('dashboard.storeshow')}}" method="POST">
        @csrf

        <div class="my-2">
            <h2 class="w-full text-center text-2xl font-black">Puede editar el blog</h2>
        </div>

        <div class="my-2">
            <label for="titleBlog">Titulo del blog:</label>
            <input type="text"
                id="titleBlog"
                name="titleBlog"
                class="bg-slate-50 rounded border-white"
            />
            <x-input-error :messages="$errors->get('titleBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="authorBlog">Autor del blog:</label>
            <input type="text"
                id="authorBlog"
                name="authorBlog"
                class="bg-slate-50 rounded border-white"
            />
            <x-input-error :messages="$errors->get('authorBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="imgBlog">Imagen del blog:</label>
            <input type="text"
                id="imgBlog"
                name="imgBlog"
                class="bg-slate-50 rounded border-white w-full"
            />
            <x-input-error :messages="$errors->get('imgBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="date">Fecha del blog:</label>
            <input type="text"
                id="date"
                name="date"
                class="bg-slate-50 rounded border-white"
            />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="dayCreateBlog">Dia de creación del blog:</label>
            <input type="text"
                id="dayCreateBlog"
                name="dayCreateBlog"
                class="bg-slate-50 rounded border-white"
            />
            <x-input-error :messages="$errors->get('dayCreateBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="monthCreateBlog">Me de creación del blog:</label>
            <input type="text"
                id="monthCreateBlog"
                name="monthCreateBlog"
                class="bg-slate-50 rounded border-white"
            />
            <x-input-error :messages="$errors->get('monthCreateBlog')" class="mt-2" />
        </div>
        <div class="my-2">
            <label for="descriptionBlog">Descripción del blog:</label>
            <textarea type="text"
                id="descriptionBlog"
                name="descriptionBlog"
                class="bg-slate-50 rounded border-white w-full h-[100px]"
            ></textarea>
            <x-input-error :messages="$errors->get('descriptionBlog')" class="mt-2" />
        </div>
        <button
            type="submit"
            class="py-2 px-4 bg-indigo-600 text-white rounded">
            Crear
        </button>
    </form>
</x-app-layout>
