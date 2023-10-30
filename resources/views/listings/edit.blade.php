<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 text-black">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit listing
            </h2>
            <p class="mb-4">Edit: {{$listing->title}}</p>
        </header>

        <form method="POST" action="/php-example/public/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{$listing->title}}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="brand" class="inline-block text-lg mb-2">Brand</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="brand"
                    placeholder="Example: Ibanez" value="{{$listing->brand}}" />

                @error('brand')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="body_wood" class="inline-block text-lg mb-2">Body wood</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="body_wood"
                    placeholder="Example: Remote, Boston MA, etc" value="{{$listing->body_wood}}" />

                @error('body_wood')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="neck_wood" class="inline-block text-lg mb-2">Neck wood</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="neck_wood"
                    value="{{$listing->neck_wood}}" />

                @error('neck_wood')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            {{-- <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{$listing->website}}" />

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div> --}}

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="img" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="img" />

                <img class="w-48 mr-6 mb-6"
                    src="{{ $listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('img')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Guitar Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value="{{$listing->description}}">{{$listing->description}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-warning text-dark rounded py-2 px-4 hover:bg-black" type="submit">
                    Update Gig
                </button>

                <a href="/php-example/public" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
