<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <div class="flex gap-4">
                <div class="bg-white border-0 shadow-soft-xl flex flex-row gap-2 items-center rounded-lg p-6">
                    <p class="m-0 font-bold text-sm">Pendaftar Lomba</p>
                    <span>{{$peserta['jumlahkompetisi']}} Orang</span>
                </div>
                <div class="bg-white border-0 shadow-soft-xl flex flex-row gap-2 items-center rounded-lg p-6">
                    <p class="m-0 font-bold text-sm">Pendaftar Workshop</p>
                    <span>{{$peserta['jumlahworkshop']}} Orang</span>
                </div>
            </div>
            <form class="flex flex-col gap-4 mt-4" wire:submit='save'>
                <div class="flex gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model='lomba' class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900">Aktivasi Form Lomba</span>
                      </label>
                      <label class="inline-flex items-center cu rsor-pointer">
                        <input type="checkbox" wire:model='workshop' class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900">Aktivasi Form Workshop</span>
                      </label>
                </div>
                <div>
                    <button type="submit" class="w-1/4 bg-blue-400 rounded text-white py-2">Ubah Aktivasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
