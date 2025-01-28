<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6">
                    <div class="lg:flex">
                        <div>
                            <h5 class="mb-0">Detail peserta Workshop</h5>
                            <p class="mb-0 leading-normal text-sm">View Detail Peserta Workshop</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="flex gap-4">
                            <h4 class="text-sm md:text-lg font-normal">Team</h4>
                            <h4 class="text-sm md:text-lg font-normal">: {{$data->full_name}}</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm md:text-lg font-normal">Email</h4>
                            <h4 class="text-sm md:text-lg font-normal">: {{$data->email}}</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm md:text-lg font-normal">Institution</h4>
                            <h4 class="text-sm md:text-lg font-normal">: {{$data->institution}}</h4>
                        </div>
                        <div class="flex gap-4 items-center">
                            <h4 class="text-sm md:text-lg font-normal">Phone</h4>
                            <h4 class="text-sm md:text-lg font-normal">: {{$data->phone}}</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm md:text-lg font-normal">Tau Workshop darimana ?</h4>
                            <h4 class="text-sm md:text-lg font-normal">: @if ($data->referral_source == "friend") Teman / Kenalan @endif @if ($data->referral_source == "instagram") Postingan Instagram @endif @if ($data->referral_source == "poster") Poster / Banner @endif</h4>
                        </div>
                        <div class="flex gap-4">
                            <h4 class="text-sm md:text-lg font-normal">Kategori Peserta</h4>
                            <h4 class="text-sm md:text-lg font-normal">: @if ($data->participant_category == "umum") Umum (IDR 30.000,00) @endif @if ($data->type == "internal") Mahasiswa Internal TUS (IDR 25.000,00) @endif @if ($data->type == "shs") Pelajar SMA/SMK/MA dan Sederajat (IDR 20.000,00) @endif @if ($data->type == "online") Peserta Online (IDR 28.000,00) @endif</h4>
                        </div>
                        <div class="pt-4">
                            <embed class="w-full h-[500px]" src="{{ asset('storage/payments').'/'. $data->proof_of_payment }}" type="application/pdf">
                            {{-- <embed class="hidden" src="{{ asset('storage/payments').'/'. $data->proof_of_payment }}" type="application/pdf"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
