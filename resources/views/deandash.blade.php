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
<!--  -->

    

    <div class="py-12">
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
        @if($cnteryr > 0)
        @for($i=0; $i < $cnteryr; $i++)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$yrsub[$i]}}
                </th>
                <td class="px-6 py-4">
                {{$yrlvl[$i]}}
                </td>
                <td class="px-6 py-4">
                {{$yrcrs[$i]}}
                </td>
                
                <td class="px-6 py-4">
                    <a href="editsub?id={{$ids[$i]}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" style="margin-right: 1em;">Change</a>
                    <a href="deletesub?id={{$ids[$i]}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
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

    
<!-- Modal toggle -->


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
