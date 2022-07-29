<x-layout>

    <div class="flex h-auto min-h-screen bg-[#1B1C21]">
        <div>
            <x-confessions.confessions-sidebar />
        </div>
        <div class="flex flex-col w-[100vw] bg-img relative bg-[top_right] bg-no-repeat">
            <x-confessions.confessions-searchbar />
            <x-confessions.view-confessions :confessions="$confessions"/>
        </div>
    </div>
</x-layout>