<div id="searchWidget" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <form action="{{ route('search') }}" method="POST">
        {{ csrf_field() }}
        <div id="searchBox" class="flex w-full h-20 text-3xl">
            <!-- Search Filter Dropdown -->
            <div class='relative'>
                <select name="searchFilter" id="searchFilter"
                    class="appearance-none h-full border border-gray-300 p-2 pe-10 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="all">{{ __('welcome.searchFilter.all_sources') }}</option>
                    <option value="ebooks">{{ __('welcome.searchFilter.ebooks') }}</option>
                    <option value="ejhournals">{{ __('welcome.searchFilter.ejournals') }}</option>
                    <option value="gscholar">{{ __('welcome.searchFilter.gscholar') }}</option>
                </select>
                <div class='absolute {{ app()->getLocale() == 'ar' ? 'top-[25%] left-2' : 'top-[25%] right-2' }}'>
                    <i class="fas fa-chevron-down text-gray-500"></i>
                </div>
            </div>

            <!-- Search Prefix Dropdown -->
            <div class="relative">
                <select name="searchPrefix" id="searchPrefix"
                    class="appearance-none h-full border border-gray-300 p-2 pe-10 rounded-md focus:outline-none focus:border-blue-500">
                    <option>{{ __('welcome.searchPrefix.keywords') }}</option>
                    <option value="TI">{{ __('welcome.searchPrefix.TI') }}</option>
                    <option value="AU">{{ __('welcome.searchPrefix.AU') }}</option>
                </select>
                <div class='absolute  {{ app()->getLocale() == 'ar' ? 'top-[25%] left-2' : 'top-[25%] right-2' }}'>
                    <i class="fas fa-chevron-down text-gray-500"></i>
                </div>
            </div>
            <!-- Search Text Input -->
            <input type="text" name="searchText" id="searchText" placeholder="{{ __('welcome.search') }}..."
                class="flex-1 border w-full border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500">

            <!-- Search Button -->
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                <i class="fas fa-search"></i> {{ __('welcome.search') }}
            </button>
        </div>

    </form>
</div>