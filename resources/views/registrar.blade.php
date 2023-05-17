<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="width: 30%; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Semester') }}
                    </h2>

                    <form method="POST" action=addsem>
                        @csrf
                        <div class="mt-4">
                            <x-label for="sem" value="{{ __('Semester') }}" />
                            <x-input id="sem" class="block mt-1 w-full" type="text" name="sem" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="schoolyear" value="{{ __('School Year') }}" />
                            <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required />
                        </div>

                        <div class="mt-4">
                        <x-button class="ml-0">
                            {{ __('Add Semester') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 " style="width: 60%; display: inline-block; ">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg " style="overflow-y: scroll; height: 20em;">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Semesters') }}
                    </h2>

@for($i = 0 ; $i < $cnter; $i++)
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="display:inline-block; width: 30%; margin-top: 1em; margin-right: 1em;">

    <div class="jss32" style="color: rgb(87, 87, 87); font-weight: 600;">{{$sem[$i]}} &nbsp;•&nbsp; {{$schoolyear[$i]}}</div>
    <div class="" style="color: rgb(87, 87, 87); font-weight: 500;">{{$c[$i]}}</div>

    @if($status[$i]==1)
    <button class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: rgb(19, 238, 19); padding: 0.5em; margin-top: 1em;"> Officially Started</button>
    @else
    <button class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: rgb(238, 34, 19); padding: 0.5em; margin-top: 1em;"> Ended</button>
    @endif
</div>

@endfor

                </div>
            </div>
        </div>
    </div>



    <div class="py-12" style="width: 30%; display: inline-block; margin-left: 1.5em;">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Add Schoolyear (Senior High School)') }}
                    </h2>

                    <form method="POST" action=addsy>
                        @csrf
                        <div class="mt-4">
                            <x-label for="schoolyear" value="{{ __('School Year') }}" />
                            <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required />
                        </div>

                        <div class="mt-4">
                        <x-button class="ml-0">
                            {{ __('Add School Year') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 " style="width: 60%; display: inline-block; ">
        <div class="max-w-7xl  sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg " style="overflow-y: scroll; height: 20em;">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('School Years') }}
                    </h2>

@for($x = 0 ; $x < $syc; $x++)
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="display:inline-block; width: 30%; margin-top: 1em; margin-right: 1em;">

    <div class="jss32" style="color: rgb(87, 87, 87); font-weight: 600;"> &nbsp;•&nbsp; {{$sy[$x]}}</div>
    <div class="" style="color: rgb(87, 87, 87); font-weight: 500;">{{$cy[$x]}}</div>

    @if($sxy[$x]==1)
    <button class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: rgb(19, 238, 19); padding: 0.5em; margin-top: 1em;"> Officially Started</button>
    @else
    <button class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: rgb(238, 34, 19); padding: 0.5em; margin-top: 1em;"> Ended</button>
    @endif
</div>

@endfor

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
