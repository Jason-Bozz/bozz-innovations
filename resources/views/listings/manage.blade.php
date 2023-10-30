<x-layout>
    <x-card class="p-10 bg-dark text-white">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Listings
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="show.html">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/php-example/public/listings/{{ $listing->id }}/edit"
                                    class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form method="POST" action="/php-example/public/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash"></i>
                                        DELETE
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="border-gray-300 text-center">
                        <td class="border-t border-b border-grey-300 text-lg">

                        </td>
                        <td class="px-4 py-8 border-t border-b border-grey-300 text-lg">
                            <a href="/php-example/public/listings/create" class="bg-warning text-dark 
                            hover:text-white py-2 px-5"> Post Listing </a>
                        </td>
                        <td class="border-t border-b border-grey-300 text-lg">

                        </td>
                    </tr>
                @else
                    <tr class="border-gray-300 text-center">
                        <td class="px-4 py-8 border-t border-b border-grey-300 text-lg">
                            <p class="text-center">No listings found</p> &nbsp;
                            {{-- <a href="/php-example/public/listings/create" class="text-center bg-warning text-dark hover:text-white py-2 px-5 "> Post Job </a> --}}
                        </td>
                        <td class="border-t border-b border-grey-300 text-lg">
                            <a href="/php-example/public/listings/create" class="bg-warning text-dark 
                            hover:text-white py-2 px-5"> Post Listing </a>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>
