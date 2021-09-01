<div class="px-4 xl:px-0" x-data="{ 'open': false, 'abc': 'test' }">
    <div class="mx-auto container">
        <div class="xl:flex">
            <div class="xl:w-3/4 2xl:w-4/5 -mt-8 xl:-mt-44">
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg shadow lg:flex justify-between items-center">
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Product</p>
                    <div class="md:flex items-center mt-6 lg:mt-0">
                        <div class="flex items-center">
                            <div class="flex items-center pl-3 bg-white border w-64 rounded border-gray-200">
                                <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.33333 13.1667C11.555 13.1667 14.1667 10.555 14.1667 7.33333C14.1667 4.11167 11.555 1.5 8.33333 1.5C5.11167 1.5 2.5 4.11167 2.5 7.33333C2.5 10.555 5.11167 13.1667 8.33333 13.1667Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.5 17.5L12.5 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input wire:model="input" type="text" class="py-2.5 pl-1 w-full border-none outline-none focus:ring-0 text-sm rounded text-gray-600 placeholder-gray-500" placeholder="Search" />
                            </div>
                        </div>
                        <div class="flex items-center mt-4 md:mt-0 md:ml-3 lg:ml-0">
                            <button class="inline-flex ml-1.5 items-start justify-start px-6 py-3 bg-red-700 hover:bg-red-600 focus:outline-none rounded" @click="open = true">
                                <p class="text-sm font-medium leading-none text-white">Add Product</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg pb-8 px-4 md:px-8 xl:px-10">
                    <div class="py-4 sm:py-6 md:py-8">
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead>
                                    <tr class="h-20 w-full text-sm leading-none text-gray-600">
                                        <th class="font-normal text-left pl-11">Name</th>
                                        <th class="font-normal text-left pl-10">Price</th>
                                        <th class="font-normal text-right"></th>
                                        <th class="font-normal text-right"></th>
                                    </tr>
                                </thead>
                                <tbody class="w-full">
                                    @foreach($products as $product)
                                    <tr class="table-row">
                                        <td class="pl-11">{{ $product->name }}</td>
                                        <td>
                                            <p class="mr-16 pl-10">{{ $product->price }}</p>
                                        </td>
                                        <td>
                                            <!-- Status w/ or w/o licence or etc -->
                                            <div class="w-20 h-6 flex items-center justify-center {{ ($product->price > 50)
                                                ? 'bg-green-100 text-green-800'
                                                : 'bg-red-100 text-red-800' }} rounded-full">
                                                <p class="text-xs leading-3">{{ $product->price > 50 ? __('Expansive') : __('Not Expansive') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            /** Edit */
                                            <!-- <button @click="$refs.name.value = '{{ $product->name }}'; open = true">dd</button> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-side-bar>
                <x-side-bar-element title="Quick Access">
                    <x-side-bar-element-row text="Test" bg="bg-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-red-600">
                            <path d="M12 20L9 17H7C6.20435 17 5.44129 16.6839 4.87868 16.1213C4.31607 15.5587 4 14.7956 4 14V8C4 7.20435 4.31607 6.44129 4.87868 5.87868C5.44129 5.31607 6.20435 5 7 5H17C17.7956 5 18.5587 5.31607 19.1213 5.87868C19.6839 6.44129 20 7.20435 20 8V14C20 14.7956 19.6839 15.5587 19.1213 16.1213C18.5587 16.6839 17.7956 17 17 17H15L12 20Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 9H16" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 13H14" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </x-side-bar-element-row>
                </x-side-bar-element>
            </x-side-bar>
        </div>
    </div>
    <div class="w-full h-full" x-show="open" @click="open = false">
        <div class="bg-overlays w-full py-8 overflow-y-auto h-full fixed flex items-center justify-center top-0 md:px-0 px-4">
            <div class="bg-white rounded-md w-full overflow-y-auto lg:h-auto h-full sm:w-10/12 md:w-8/12 lg:w-1/2 2xl:w-2/5 relative">
                <div class="bg-gray-100 rounded-tl-md rounded-tr-md md:px-10 px-4 pt-9 pb-9">
                    <form action="{{ route('product.store') }}" method="POST" x-ref="form">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required x-ref="name" />
                        </div>
                        <div class="mt-4">
                            <x-label for="price" :value="__('Price')" />
                            <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required x-ref="price" />
                        </div>
                    </form>
                </div>
                <div class="pt-3.5 pb-9 md:px-10 px-4 mt-4">
                    <p class="text-xs leading-4 text-gray-500">Here is your text that can contain useful informations.</p>
                    <div class="flex items-center justify-between mt-8">
                        <button class="px-6 py-3 bg-gray-400 hover:bg-gray-500 shadow rounded text-sm text-white" @click="open = false">Close</button>
                        <button class="px-6 py-3 bg-red-700 hover:bg-opacity-80 shadow rounded text-sm text-white" @click="$refs.form.submit()">Add product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
