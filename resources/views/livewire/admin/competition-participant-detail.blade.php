<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6">
                    <div class="lg:flex">
                        <div>
                            <h5 class="mb-0">Detail peserta</h5>
                            <p class="mb-0 leading-normal text-sm">View Detail Peserta</p>
                        </div>
                    </div>
                    <div class="pt-2 md:hidden">
                        <div class="flex gap-4">
                            <h4 class="text-sm font-normal">Team</h4>
                            <h4 class="text-sm font-normal">: {{$data->team}}</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm font-normal">Jenis Lomba yang diikuti</h4>
                            <h4 class="text-sm font-normal">: @if ($data->type == "uiux") ui ux @endif @if ($data->type == "webdev") Web Development @endif @if ($data->type == "poster") Poster @endif</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm font-normal">Member</h4>
                            <div class="flex flex-col text-sm font-semibold">
                                <div>
                                    <ol>
                                    @foreach ($members as $member)
                                        <li>
                                            {{$member->name}},
                                            {{$member->asalsekolah}}
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm font-normal">Gmail</h4>
                            <h4 class="text-sm font-normal">: {{$data->gmail}}</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm font-normal">phone</h4>
                            <h4 class="text-sm font-normal">: {{$data->phone}}</h4>
                        </div>
                        <div class="flex gap-4 items-center">
                            <h4 class="text-sm font-normal">Link google drive</h4>
                            <h4 class="text-sm font-normal">: {{$data->drive}}</h4>
                        </div>
                    </div>
                    <div class="pt-2 hidden md:block">
                        <table class="table">
                            <tr>
                                <td>Team</td>
                                <td>{{$data->team}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Lomba yang diikuti</td>
                                <td>{{$data->type}}</td>
                            </tr>
                            <tr>
                                <td>Member</td>
                                <td>
                                    <div>
                                        <ol>
                                        @foreach ($members as $member)
                                            <li>
                                                {{$member->name}},
                                                {{$member->asalsekolah}}
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gmail</td>
                                <td>{{$data->gmail}}</td>
                            </tr>
                            <tr>
                                <td>Nomor Whatsapp</td>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <td>Kartu Pelajar, Bukti follow ig, Bukti post twibbon</td>
                                <td>{{$data->drive}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
