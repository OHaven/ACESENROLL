<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="width: 20em; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Course') }}
                    </h2>

                    <form method="POST" action="addcourse">
                        @csrf
                        <div class="mt-4">
                            <x-label for="course" value="{{ __('Course') }}" />
                            <x-input id="course" class="block mt-1 w-full" type="text" name="course" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('Semester') }}" />
                            <select name="sem" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                            <option value="{{$sy[0]}}" class="block mt-1 w-full">{{$sem[0]}}&nbsp;•&nbsp{{$sy[0]}}</option>
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Course') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12" style="width: 20em; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Subject') }}
                    </h2>

                    <form method="POST" action=addsub>
                        @csrf
                        <div class="mt-4">
                            <x-label for="sub" value="{{ __('Subject') }}" />
                            <x-input id="sub" class="block mt-1 w-full" type="text" name="sub" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="course" value="{{ __('Course') }}" />
                            <select name="course" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                            @for($i=0; $i < $crcnt; $i++)
                            <option value="{{$crs[$i]}}" class="block mt-1 w-full">{{$crs[$i]}}</option>
                            @endfor
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Subject') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12" style="width: 20em; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Level') }}
                    </h2>

                    <form method="POST" action=yrlvl>
                        @csrf
                        
                        <div class="mt-4">
                            <x-label for="subject" value="{{ __('Subject') }}" />
                            <select name="subject" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                            @for($i=0; $i < $subcnt; $i++)
                            <option value="{{$sub[$i]}}" class="block mt-1 w-full">{{$sub[$i]}}</option>
                            @endfor
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('Year level') }}" />
                        
                            <x-input id="schoolyear" class="block mt-1 w-full" type="number" name="yrlevel" required />
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Year Level') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12" style="width: 20em; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Subject to Year') }}
                    </h2>

                    <form method="POST" action=add>
                        @csrf
                        
                        <div class="mt-4">
                            <x-label for="" value="{{ __('Subject') }}" />
                            <select name="role" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                <option value="Student" class="block mt-1 w-full">Student</option>
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('Subject') }}" />
                            <select name="role" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                <option value="Student" class="block mt-1 w-full">Year</option>
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Subject') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <div class="py-12" style="width: 85%; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Current Subjects') }}
                    </h2>

                          
<div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="margin:2em;">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Year Level
                </th>
                <th scope="col" class="px-6 py-3">
                    Course
                </th>
              
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                </th>
                <td class="px-6 py-4">
                    
                </td>
                <td class="px-6 py-4">
                    
                </td>
                
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" style="margin-right: 1em;">Change</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

             

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
