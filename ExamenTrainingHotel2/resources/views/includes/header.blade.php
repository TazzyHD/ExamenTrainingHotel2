<nav class="bg-[#D9D9D9]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3 flex-shrink-0">
            <span class="text-xl">💎</span>
            <span class="text-xl font-semibold whitespace-nowrap">
                Starlight Hotel &amp; Resort
            </span>
        </div>

        <div class="flex gap-8">
            <a href="{{ route('reserveringen.index') }}"
               class="{{ request()->routeIs('reserveringen.*')
                    ? 'font-medium border-b-2 border-blue-400 pb-1 text-gray-900'
                    : 'text-gray-400 hover:text-gray-700' }}">
                Reserveringen
            </a>

            <a href="{{ route('kamers.index') }}"
               class="{{ request()->routeIs('kamers.*')
                    ? 'font-medium border-b-2 border-blue-400 pb-1 text-gray-900'
                    : 'text-gray-400 hover:text-gray-700' }}">
                Kamers
            </a>

            <a href="{{ route('meldingen.index') }}"
               class="{{ request()->routeIs('meldingen.*')
                    ? 'font-medium border-b-2 border-blue-400 pb-1 text-gray-900'
                    : 'text-gray-400 hover:text-gray-700' }}">
                Meldingen
            </a>
        </div>
    </div>
</nav>
