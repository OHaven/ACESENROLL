<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="width: 80%; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Current Courses') }}
                    </h2>

                          
<div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="margin:2em;">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Course
                </th>
              
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if($crcnt > 0)
        @for($i=0; $i < $crcnt; $i++)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$crs[$i]}}
                </th>
              
                
                <td class="px-6 py-4">
                    <a href="editcourse?id={{$crsid[$i]}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" style="margin-right: 1em;">Change</a>
                    <a href="deletecourse?id={{$crsid[$i]}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            

            @endfor

            @else
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    No Data
                </th>
                <td class="px-6 py-4">
          
                </td>
                <td class="px-6 py-4">
             
                </td>
                
                <td class="px-6 py-4">
                  
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

             

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
