<div class="bg-blue-400 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ app()->getLocale() == 'en' ? 'setLang/ar' : 'setLang/en' }}" class="text-white font-bold text-lg">
            {{ app()->getLocale() == 'en' ? 'عربي' : 'English' }}
        </a>
        <ul class="flex space-x-4">
            <li><a href="#" class="text-white">Home<i class="fas fa-home"></i>
                </a></li>
            <li><a href="#" class="text-white">About</a></li>
            <li><a href="#" class="text-white">Services</a></li>
            <li><a href="#" class="text-white">Contact</a></li>
        </ul>
    </div>
</div>
