<div class="bg-[#2666ab]">
    <div class="container mx-auto flex justify-between items-center text-white">
        <ul class="flex gap-3">
            <li class="hover:bg-blue-100 hover:text-black  p-3"><a href="#">{{ __('nav.home') }}
            </li>
            <li class="p-3">
                <div class="group relative">
                    <div>
                        {{ __('nav.aboutSDL') }} <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="absolute hidden bg-[#2666ab] p-3 w-60 z-[1] shadow-md group-hover:block" tabindex="0">
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.aboutSDLList.visionAndMission') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.aboutSDLList.SDLGoals') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.aboutSDLList.generalDirector') }}</a>
                    </div>
                </div>
            </li>
            <li class="hover:bg-blue-100 hover:text-black  p-3"><a href="#">{{ __('nav.searchEngine') }}</a></li>
            <li class="p-3">
                <div class="group relative">
                    <div>
                        {{ __('nav.knowledgeGate') }} <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="absolute hidden bg-[#2666ab] p-3 w-60 z-[1] shadow-md group-hover:block" tabindex="0">
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.knowledgeGateList.knowledgeResources') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.knowledgeGateList.digitalRepository') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.knowledgeGateList.researchTools') }}</a>
                    </div>
                </div>
            </li>
            <li class="hover:bg-blue-100 hover:text-black  p-3"><a href="#">{{ __('nav.news') }}</a></li>
            <li class="hover:bg-blue-100 hover:text-black  p-3"><a href="#">{{ __('nav.training') }}</a></li>
            <li class="p-3">
                <div class="group relative">
                    <div>
                        {{ __('nav.help') }} <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="absolute hidden bg-[#2666ab] p-3 w-60 z-[1] shadow-md group-hover:block" tabindex="0">
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.helpList.contactUs') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.helpList.newTicket') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.helpList.trackTicket') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.helpList.policy') }}</a>
                    </div>
                </div>
            </li>
            <li class="p-3">
                <div class="group relative">
                    <div>
                        {{ __('nav.login') }} <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="absolute hidden bg-[#2666ab] p-3 w-60 z-[1] shadow-md group-hover:block" tabindex="0">
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.loginList.SACMStudentLogin') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.loginList.SACMStudent') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.loginList.loginForUniversityStudentsAndFaculty') }}</a>
                        <a href="#"
                            class="block px-4 py-2 border-b-[0.5px] hover:bg-gray-200 hover:text-black">{{ __('nav.loginList.SDLStaffLogin') }}</a>
                    </div>
                </div>
            </li>
        </ul>
        <a href="{{ app()->getLocale() == 'en' ? 'setLang/ar' : 'setLang/en' }}" class=" font-bold text-lg">
            {{ app()->getLocale() == 'en' ? 'عربي' : 'English' }}
        </a>
    </div>
</div>

@section('scripts')
    <script type="module"></script>
@endsection
