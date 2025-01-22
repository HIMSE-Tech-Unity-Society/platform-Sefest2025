<div class="text-white md:w-[640px] w-full py-6">
    <div class="border border-[#ffffff66] bg-gradient-to-b from-[#8302B2] to-[#6907E366] p-6 rounded-lg" >
        <h1 class="montserrat-black text-xl pb-4">Form Pendaftaran Workshop <br> SE-Festival 2025</h1>

@if($isClosed == 1)
<h2 class="font-black text-sm poppins">Form masih tertutup</h2>
<a href="/" class="text-blue-200 mt-2 block">Goback to landing page -></a>
</div>
@endif
@if ($isClosed != 1)
        <pre class="whitespace-pre-wrap poppins font-black text-sm">
⚠️WORKSHOP DILAKSANAKAN SECARA HYBRID OFFLINE serta ONLINE⚠️
😉Ketersediaan Tempat Terbatas!! First Come, First Serve!!😉


Berikut merupakan Registrasi Pendaftaran Workshop SEFEST 2024 yang akan dibuka dari Hari Sabtu, 6 Juli 2024 Hingga Hari Jumat, 26 Juli 2024. Workshop akan Dilaksanakan dengan Rincian Sebagai Berikut:
📅: Sabtu, 27 Juli 2024
⏰: 09.00 - 15.30 WIB
📍: Offline Aula Gedung Utama Telkom University Surabaya & Online Zoom Meeting

Semua peserta akan mendapatkan Benefit, yaitu sebagai berikut:
Pemahaman mendalam serta keterampilan praktis dalam Software Testing;
E-Sertifikat;
Snack selama berjalannya Acara Workshop (Kecuali Peserta Online); serta
Menambah Relasi.


Workshop "Mastering Software Testing: From Theory to Practice" berikut dibuka untuk Umum, dengan Ketentuan Harga sebagai berikut:  1. Umum: PROMO! (70k) to (50k) 2. Mahasiswa Internal TUS: PROMO! (60k) to (40k)  3. Mahasiswa Eksternal: PROMO! (50K) to (30k)  4.  Pelajar SMA/SMK/MA: 25k 5.  Peserta Online: PROMO! (25k) to (15k) (NOTE: PROMO DIPERPANJANG HINGGA TANGGAL 20 JUNI 2024!)  
Pembayaran Dapat dilakukan pada Tujuan berikut:
Rekening Bank
a/n YEMIMA ALDA PUTURUHU
Bank Mandiri
1440022243403

E money
Gopay: 082139678323  a/n YEMIMA ALDA PUTURUHU
LINKAJA: 082139678323  a/n YEMIMA ALDA PUTURUHU
DANA: 082139678323  a/n YEMIMA ALDA PUTURUHU


⚠️Uang yang telah dibayarkan tidak dapat dikembalikan⚠️



Registrasi Workshop berikut memerlukan beberapa Tanda Bukti pada Kategori Peserta yang dipilih, yaitu sebagai berikut:

Umum (Bukti Pembayaran)
Mahasiswa Internal TUS (Bukti Pembayaran; Kartu Tanda Mahasiswa TUS)
Mahasiswa Eksternal (Bukti Pembayaran; Kartu Tanda Mahasiswa)
Pelajar SMA/SMK/MA dan Sederajat (Bukti Pembayaran; Kartu Pelajar Aktif)
Peserta Online (Bukti Pembayaran)


👋🏻Get your Seat, and See you Soon!! 👋🏻
</pre>
@if ($success)
    <p class="font-bold poppins mt-4 text-green-300">Data Anda telah kami simpan. Silakan tunggu konfirmasi lebih lanjut dari panitia lomba melalui email atau WhatsApp :)</p>
    <a href="/" class="text-blue-200 mt-2 block">Goback to landing page -></a>
</div>
@endif
    </div>
    @if (!$success)
        <form wire:submit='save'>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label for="name" class="montserrat-black pb-1">Nama Lengkap</label>
                    <input type="text" id="name" name="name" wire:model='form.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                </div>
                @error('form.name')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label for="email" class="montserrat-black pb-1">Email</label>
                    <input type="email" id="email" name="email" wire:model='form.email' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                </div>
                @error('form.email')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label for="institution" class="montserrat-black pb-1">Institution / Sekolah</label>
                    <input type="text" id="institution" name="institution" wire:model='form.institution' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                </div>
                @error('form.institution')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label for="phone" class="montserrat-black pb-1">Nomor Whatsapp</label>
                    <input type="tel" id="phone" name="phone" wire:model='form.phone' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                </div>
                @error('form.phone')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label class="montserrat-black pb-1">Tau workshop darimana ?</label>
                    <div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" id="friend" wire:model='form.referral_source' value="friend" name="referral_source">
                            <label for="friend">Teman / Kenalan</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" id="instagram" wire:model='form.referral_source' value="instagram" name="referral_source">
                            <label for="instagram">Postingan Instagram</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" value="poster" wire:model='form.referral_source' id="poster" name="referral_source">
                            <label for="poster">Poster / Banner</label>
                        </div>
                    </div>
                </div>
                @error('form.referral_source')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label class="montserrat-black pb-1">Kategori peserta ?</label>
                    <div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" id="umum"  wire:model='form.participant_category' value="umum" name="participant_category">
                            <label for="umum">Umum (IDR 25.000,00)</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" id="internal" value="internal" wire:model='form.participant_category' name="participant_category">
                            <label for="internal">Mahasiswa Internal TUS (IDR 20.000,00)</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" value="shs" id="shs" wire:model='form.participant_category' name="participant_category">
                            <label for="shs">Pelajar SMA/SMK/MA dan Sederajat (IDR 15.000,00)</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" class="accent-[#C58EF0]" value="online" id="online" wire:model='form.participant_category' name="participant_category">
                            <label for="online">Peserta Online (IDR 20.000,00)</label>
                        </div>
                    </div>
                </div>
                @error('form.participant_category')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
                <div class="flex flex-col">
                    <label for="bukti" class="montserrat-black pb-1">Tanda Bukti:</label>
                    <ol type="1" class="list-decimal montserrat font-bold text-xs ml-4 pb-2">
                        <li>Umum<span class="italic">(Bukti pembayaran)</span></li>
                        <li>Mahasiswa internal <span class="italic">(Bukti Pembayaran; Kartu tanda mahasiswa TUS)</span></li>
                        <li>Pelajar SMA/SMK/MA dan Sederajat <span class="italic">(Bukti Pembayaran; Kartu Pelajar Aktif)</span></li>
                        <li>Peserta Online <span class="italic">(Bukti Pembayaran)</span></li>
                    </ol>
                    <p class="italic text-sm">(Sesuai dengan Urutan yang telah dijelaskan; Tanda Bukti dijadikan satu PDF)</p>
                    <input type="file" id="bukti" wire:model='form.proof_of_payment' class="hidden" accept="application/pdf"/>
                    <div class="mt-4">
                        <label for="bukti" class="hover:bg-white hover:text-black py-2 px-6 rounded-lg border border-[#FFFFFF66]">upload</label>
                    </div>
                </div>
                <div>

                    @if ($form->proof_of_payment && !is_array($form->proof_of_payment))
                        <div class="flex items-center rounded-md ">
                            <div class="mt-4 bg-white text-black gap-2 flex items-center p-2 rounded-md">
                                <p class="poppins font-medium">{{$form->proof_of_payment->getClientOriginalName()}}</p>
                                <button type="button" class="hover:bg-slate-200 p-1 rounded-md block" wire:click='deletepdf'>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                    @if ($pdfload)
                        <div class="flex items-center rounded-md ">
                            <div class="mt-4 bg-white text-black gap-2 flex items-center p-2 rounded-md">
                                <p class="poppins font-medium">{{$pdfload['originalname']}}</p>
                                <button type="button" class="hover:bg-slate-200 p-1 rounded-md block" wire:click='deletepdf'>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                    @error('form.proof_of_payment')
                        <span class="text-sm text-red-500 pt-4 block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="text-[#6907E3] bg-white border-2 border-[#6907E3] mt-4 font-bold montserrat-black py-2 px-4 rounded-lg">Kumpulkan</button>
                <button type="button" wire:click='arsip' class="text-[#6907E3] bg-white border-2 border-[#6907E3] mt-4 font-bold montserrat-black py-2 px-4 rounded-lg">Simpan</button>
                <button type="button" wire:click='resetform' class="text-[#6907E3] bg-white border-2 border-[#6907E3] mt-4 font-bold montserrat-black py-2 px-4 rounded-lg">Reset</button>
            </div>
        </form>
    @endif
    @endif
</div>
