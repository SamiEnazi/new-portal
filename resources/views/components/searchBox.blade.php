<div id="searchWidget" class="p-3">
    <form action="{{ route('search') }}" method="POST">
        {{ csrf_field() }}
        <div id="searchBox" class="flex w-full h-20 text-3xl ">
            <div class='relative'>
                <select name="searchFilter" id="searchFilter"
                    class="appearance-none h-full border-2 rounded-s-xl  p-2 pe-10  focus:outline-none focus:border-gray-500">
                    <option value="all">{{ __('welcome.searchFilter.allSources') }}</option>
                    <option value="ebooks">{{ __('welcome.searchFilter.ebooks') }}</option>
                    <option value="ejhournals">{{ __('welcome.searchFilter.ejournals') }}</option>
                    <option value="gscholar">{{ __('welcome.searchFilter.gscholar') }}</option>
                </select>
                <div class='absolute {{ app()->getLocale() == 'ar' ? 'top-[25%] left-2' : 'top-[25%] right-2' }}'>
                    <i class="fas fa-chevron-down text-gray-500"></i>
                </div>
            </div>

            <div class="relative">
                <select name="searchPrefix" id="searchPrefix"
                    class="appearance-none h-full border-t-2 border-b-2  p-2 pe-10 focus:outline-none focus:border-gray-500 focus:border-2">
                    <option>{{ __('welcome.searchPrefix.keywords') }}</option>
                    <option value="TI">{{ __('welcome.searchPrefix.TI') }}</option>
                    <option value="AU">{{ __('welcome.searchPrefix.AU') }}</option>
                </select>
                <div
                    class='absolute
                    {{ app()->getLocale() == 'ar' ? 'top-[25%] left-2' : 'top-[25%] right-2' }}'>
                    <i class="fas fa-chevron-down text-gray-500"></i>
                </div>
            </div>
            <input type="text" name="searchText" id="searchText" placeholder="{{ __('welcome.search') }}..."
                class="flex-1 w-full border-2 p-2  focus:outline-none focus:border-gray-500">

            <button type="submit"
                class="bg-blue-500 text-white rounded-e-xl px-4 py-2  hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                {{ __('welcome.search') }} <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
    <p class="text-2xl text-blue-500"><a href="#" target="_blank"
            rel="noopener noreferrer">{{ __('welcome.advancedSearch') }}</a></p>
    <button type="button"
        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">
        Vertically centered modal
    </button>
</div>
