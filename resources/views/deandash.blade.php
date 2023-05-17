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

                    <form method="POST" action=addsem>
                        @csrf
                        <div class="mt-4">
                            <x-label for="course" value="{{ __('Course') }}" />
                            <x-input id="course" class="block mt-1 w-full" type="text" name="course" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('School Year') }}" />
                            <select name="role" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                <option value="Student" class="block mt-1 w-full">Student</option>
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

                    <form method="POST" action=addsem>
                        @csrf
                        <div class="mt-4">
                            <x-label for="sub" value="{{ __('Subject') }}" />
                            <x-input id="sub" class="block mt-1 w-full" type="text" name="sub" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('Course') }}" />
                            <select name="role" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                <option value="Student" class="block mt-1 w-full">Student</option>
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Semester') }}
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
                        {{ __('Add Grade Level or College Level') }}
                    </h2>

                    <form method="POST" action=addsem>
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
                            {{ __('Add Semester') }}
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

                    <form method="POST" action=addsem>
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
                            {{ __('Add Semester') }}
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
                        {{ __('Add Subject') }}
                    </h2>

                    <form method="POST" action=addsem>
                        @csrf
                        <div class="mt-4">
                            <x-label for="sub" value="{{ __('Subject') }}" />
                            <x-input id="sub" class="block mt-1 w-full" type="text" name="sub" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="" value="{{ __('Course') }}" />
                            <select name="role" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                <option value="Student" class="block mt-1 w-full">Student</option>
                </select>
                            <!-- <x-input id="schoolyear" class="block mt-1 w-full" type="text" name="schoolyear" required /> -->
                        </div>

                        <div class="mt-4" style="margin-top: 2em;">
                        <x-button class="ml-0">
                            {{ __('Add Semester') }}
                        </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
