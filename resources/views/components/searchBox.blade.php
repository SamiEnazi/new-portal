<div id="searchWidget" class="p-3">
    <form action="{{ route('search') }}" method="POST">
        {{ csrf_field() }}
        <div id="searchBox" class="flex w-full h-20 text-3xl ">
            <!-- Search Filter Dropdown -->
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

            <!-- Search Prefix Dropdown -->
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
            <!-- Search Text Input -->
            <input type="text" name="searchText" id="searchText" placeholder="{{ __('welcome.search') }}..."
                class="flex-1 w-full border-2 p-2  focus:outline-none focus:border-gray-500">

            <!-- Search Button -->
            <button type="submit"
                class="bg-blue-500 text-white rounded-e-xl px-4 py-2  hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                <i class="fas fa-search"></i> {{ __('welcome.search') }}
            </button>
        </div>
    </form>

</div>
