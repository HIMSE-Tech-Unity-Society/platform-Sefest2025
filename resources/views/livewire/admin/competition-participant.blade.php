<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="lg:flex">
                        <div>
                            <h5 class="mb-0">Semua Form Peserta Lomba</h5>
                            <p class="mb-0 leading-normal text-sm">Management Form Peserta Lomba</p>
                        </div>
                        <div class="my-auto mt-6 ml-auto lg:mt-0">
                            <div class="my-auto ml-auto">
                                <button export-button-products data-type="csv"
                                    class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-fuchsia-500 text-fuchsia-500 hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-fuchsia-500 active:bg-fuchsia-500 active:text-white hover:active:border-fuchsia-500 hover:active:bg-transparent hover:active:text-fuchsia-500 hover:active:opacity-75">Export</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-0">
                    <div class="overflow-x-auto table-responsive">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown">
                                    <label>
                                        <select class="dataTable-selector" wire:model.live='perPage'>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                        entries per page
                                    </label>
                                </div>
                                <div class="dataTable-search"><input wire:model.live.debounce.300ms='search'
                                        class="dataTable-input focus:shadow-soft-primary-outline dark:text-white/80 ease-soft focus:outline-none focus:transition-shadow"
                                        placeholder="Search..." type="text"></div>
                            </div>
                            <div class="dataTable-container">
                                <table class="table dataTable-table" id="accounts-list">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Jenis Lomba</th>
                                            <th>Nama Team</th>
                                            <th>Nomor Telephone</th>
                                            {{-- ditambahkan copy link drive --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participants as $user)
                                            <tr>
                                                <td>
                                                    @if ($user->type == "uiux")
                                                        {{"ui ux"}}
                                                    @elseif($user->type == "webdev")
                                                        {{"Web development"}}
                                                    @else
                                                        {{"Poster"}}
                                                    @endif
                                                </td>
                                                <td>{{$user->team}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>
                                                    <a href="/dashboard/accounts/{{$user->id}}" wire:navigate class="text-sm font-semibold leading-tight py-2 px-4 bg-blue-400 rounded-2xl text-white">Detail </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{$participants->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
