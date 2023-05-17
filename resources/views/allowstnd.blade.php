<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Approve Students') }}
                    </h2>

                    <div class="flex flex-col">
                        <div class="overflow-y-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden" style="overflow-y:scroll;">
                              <table class="min-w-full text-left text-sm font-light" >
                                <thead class="border-b font-medium dark:border-neutral-500" >
                                  <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Name</th>
                                    <th scope="col" class="px-6 py-4">View Details</th>
                                    <th scope="col" class="px-6 py-4">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @if($ucount > 0)
                                    @for ($i=0; $i < $ucount; $i++)
                                  <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$id[$i]}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$name[$i]}}</td>
                                    <td class="whitespace-nowrap px-6 py-4"> <a style="margin-right: 1em;" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="viewstu?id={{$id[$i]}}">
                    {{ __('View') }}
                </a></td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <div x-data="">
                                         <a href="old?id={{$id[$i]}}">   <button class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" style="display:inline-flex;">
                                                         <span>Old Student</span>
                                            </button> </a>

                                            <a href="new?id={{$id[$i]}}">
                                            <button class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-red-600 dark:hover:bg-red-700 dark:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50" style="display:inline-flex;">
                                                <span>New Student/ Transferee</span>
                                   </button>
                                            </a>
                                </td>


                               
                                  </tr>
                                  @endfor

                                  @elseif ($ucount == 0)
                                                             <tr>
                                                              <td class="whitespace-nowrap px-6 py-4 font-medium"></td>
                                                                  <td class="whitespace-nowrap px-6 py-4">No New User Request</td>
                                                             </tr>
                                  @endif

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
