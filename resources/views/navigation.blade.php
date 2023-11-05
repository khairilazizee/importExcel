<div class="bg-white shadow mb-5">
    <div class="flex gap-10 mx-auto justify-between py-5 max-w-6xl">
        <div>Home</div>
        <div class="flex gap-4">
            <div>
                <a href="/import-file"
                    class="hover:text-blue-500 hover:font-semibold {{ request()->segment(1) == 'import-file' ? 'text-blue-500' : '' }}">Import</a>
            </div>
            <div>
                <a href="/logout" class="hover:text-blue-500 hover:font-semibold">Logout</a>
            </div>
        </div>
    </div>
</div>
