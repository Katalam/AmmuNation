<x-app-layout>
    <x-card title="Dashboard">
        <!-- Side Bar -->
        <x-slot name="side">
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
        </x-slot>
        <!-- Side Bar -->
        <div class="border rounded-lg border-gray-100">
            <div class="py-4 md:py-6 pl-4 md:pl-6">
                <p class="text-base md:text-lg lg:text-xl font-bold leading-tight text-gray-800">Bestellungen</p>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr class="bg-gray-50 h-16 w-full text-sm leading-none text-gray-800">
                            <th class="font-normal text-left pl-8">
                                Date
                            </th>
                            <th class="font-normal text-left px-10 lg:px-6 xl:px-0 ">
                                Product
                            </th>
                            <th class="font-normal text-left px-10 lg:px-6 xl:px-0 ">
                                Amount
                            </th>
                            <th class="font-normal text-left px-10 lg:px-6 xl:px-0 ">
                                Customer
                            </th>
                            <th class="font-normal text-left px-10 lg:px-6 xl:px-0 ">
                                Order #
                            </th>
                            <th class="font-normal text-left px-10 lg:px-6 xl:px-0 ">
                                Status
                            </th>
                            <th class="font-normal text-left ">
                                Confirmation
                            </th>

                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                            <td class="pl-8">
                                06/02/2020
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Apple Macbook 2020
                                <p class="text-gray-600 font-normal mt-2">PID: 982 0192</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                $2200
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Samantha Smith
                                <p class="text-gray-600 font-normal mt-2">samantha@gmail.com</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <p class="underline text-blue-500">WMC0191</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <div class="flex items-center justify-center w-20 h-6  bg-yellow-100 rounded-full">
                                    <p class="text-xs leading-3 text-yellow-600">Pending</p>
                                </div>
                            </td>
                            <td>
                                <button class="flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded xl:mr-0 mr-4">
                                    <p class="text-sm leading-none text-indigo-700">Confirm Order</p>
                                </button>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                            <td class="pl-8">
                                06/02/2020
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Apple Macbook 2020
                                <p class="text-gray-600 font-normal mt-2">PID: 982 0192</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                $2200
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Samantha Smith
                                <p class="text-gray-600 font-normal mt-2">samantha@gmail.com</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <p class="underline text-blue-500">WMC0191</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <div class="flex items-center justify-center w-20 h-6  bg-yellow-100 rounded-full">
                                    <p class="text-xs leading-3 text-yellow-600">Pending</p>
                                </div>
                            </td>
                            <td>
                                <button class="flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded xl:mr-0 mr-4">
                                    <p class="text-sm leading-none text-indigo-700">Confirm Order</p>
                                </button>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                            <td class="pl-8">
                                06/02/2020
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Apple Macbook 2020
                                <p class="text-gray-600 font-normal mt-2">PID: 982 0192</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                $2200
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Samantha Smith
                                <p class="text-gray-600 font-normal mt-2">samantha@gmail.com</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <p class="underline text-blue-500">WMC0191</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <div class="flex items-center justify-center w-20 h-6  bg-green-100 rounded-full">
                                    <p class="text-xs leading-3 text-green-600">Shipped</p>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-800">
                            <td class="pl-8">
                                06/02/2020
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Apple Macbook 2020
                                <p class="text-gray-600 font-normal mt-2">PID: 982 0192</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                $2200
                            </td>
                            <td class="font-medium px-10 lg:px-6 xl:px-0">
                                Samantha Smith
                                <p class="text-gray-600 font-normal mt-2">samantha@gmail.com</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <p class="underline text-blue-500">WMC0191</p>
                            </td>
                            <td class="px-10 lg:px-6 xl:px-0">
                                <div class="flex items-center justify-center w-20 h-6  bg-red-100 rounded-full">
                                    <p class="text-xs leading-3 text-red-600">Cancelled</p>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-card>
</x-app-layout>
