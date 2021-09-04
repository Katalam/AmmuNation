<div class="px-4 xl:px-0">
    <div class="mx-auto container">
        <div class="xl:flex">
            <div class="xl:w-3/4 2xl:w-4/5 -mt-8 xl:-mt-44">
                <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg shadow lg:flex justify-between items-center">
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Cart</p>
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
                                    @foreach($cart['products'] as $product)
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
                                            <a wire:click="removeFromCart({{ $product->id }})" class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button wire:click="checkout()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Checkout
                            </button>
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
</div>
