<div class="bg-[#2666ab] p-4">
    <div class="container mx-auto flex justify-between items-center">

        <ul class="flex space-x-4">
            <li><a href="#" class="text-white">{{ __('nav.home') }} <i class="fas fa-home"></i>
                </a></li>
            <li>
                <div class="relative inline-block text-left">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none">
                        {{ __('nav.aboutSDL') }}
                    </button>
                    <div class="absolute hidden bg-white rounded mt-2 w-32 shadow-md">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Item
                            1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Item
                            2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Item
                            3</a>

                    </div>
                </div>
            </li>
            <li><a href="#" class="text-white">{{ __('nav.searchEngine') }}</a></li>
            <li><a href="#" class="text-white">{{ __('nav.knowledgeGate') }}</a></li>
            <li><a href="#" class="text-white">{{ __('nav.news') }}</a></li>
            <li><a href="#" class="text-white">{{ __('nav.training') }}</a></li>
            <li><a href="#" class="text-white">{{ __('nav.help') }}</a></li>
            <li><a href="#" class="text-white">{{ __('nav.login') }}</a></li>
        </ul>
        <a href="{{ app()->getLocale() == 'en' ? 'setLang/ar' : 'setLang/en' }}" class="text-white font-bold text-lg">
            {{ app()->getLocale() == 'en' ? 'عربي' : 'English' }}
        </a>
    </div>
</div>
