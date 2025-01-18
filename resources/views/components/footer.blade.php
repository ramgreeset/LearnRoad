<footer class="flex sticky bottom-0 justify-between bg-blue-200 py-4">
    <div class="container">
        <div>
            <span class="text-xs font-semibold text-gray-500">add thermin</span>
            <form class="flex" action="/" method="POST">
                @csrf
                <input class="rounded-l  px-4 w-1/2" type="text" name="title" placeholder="therm">
                <button class="py-2 px-2 bg-violet-500 rounded-r">
                    <x-icon name="check" class="size-6 fill-white"/>
                </button>
            </form>
        </div>
    </div>
</footer>
