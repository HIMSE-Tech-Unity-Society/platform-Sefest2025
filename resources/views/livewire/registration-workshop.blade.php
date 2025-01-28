<div class="text-white md:w-[640px] w-full py-6">
    <div class="border border-[#ffffff66] bg-gradient-to-b from-[#8302B2] to-[#6907E366] p-6 rounded-lg" >
        <h1 class="montserrat-black text-xl pb-4">Form Pendaftaran Workshop <br> SE-Festival 2025</h1>

@if($isClosed == 1)
<h2 class="font-black text-sm poppins">Form masih tertutup</h2>
<a href="/" class="text-blue-200 mt-2 block">Goback to landing page -></a>
</div>
@endif
@if ($isClosed != 1)
<pre class="whitespace-pre-wrap poppins font-medium text-sm">
<span class="font-black text-center">⚠️ WORKSHOP DILAKSANAKAN SECARA HYBRID OFFLINE serta ONLINE⚠️
😉Ketersediaan Tempat Terbatas!! First Come, First Serve!!😉</span>

Berikut merupakan Registrasi Pendaftaran Workshop SEFEST 2025 yang akan dibuka dari Hari Sabtu, 25 Januari 2025 Hingga Hari Jumat, 21 Februari 2025. Workshop akan Dilaksanakan dengan Rincian Sebagai Berikut:

<span class="font-black inline-block mb-1">📅 : Minggu, 23 Februari 2025</span>
<span class="font-black inline-block mb-1">⏰ : 09.00 - 15.30 WIB</span>
<span class="font-black inline-block mb-1">📍: Offline Aula Gedung UtamaTelkom University Surabaya dan Online Zoom Meeting</span>

<span class="font-black mb-1 inline-block">Semua peserta akan mendapatkan Benefit, yaitu sebagai berikut:</span>
1. Mendapat insight, Ilmu, dan keterampilan yang bermanfaat Seputar React JS
2. E-Sertifikat
3. Snack selama berjalannya Acara Workshop (Offline)
4. Menambah Portfolio Professional Pribadi
5. Menambah Relasi
6. Konsultasi Kepada Mentor Professional

Workshop <span class="italic font-bold">"Sustainable Innovation: Full-Stack Development React Application"</span> berikut dibuka untuk Umum, dengan Ketentuan Harga sebagai berikut:

OFFLINE:
1. Umum: 30k
2. Mahasiswa Internal TUS: 25k
3. Pelajar SMA/SMK/MA: 20k

ONLINE:
1.  Peserta Online: 28k (Umum dan Siswa)
( NOTE: Mahasiswa TEL-U Surabaya WAJIB menghadiri workshop secara offline )

Pembayaran Dapat dilakukan pada Tujuan berikut:
Rekening Bank
BCA: <span class="font-black">6225056891</span> a/n Alif Akbar Ramadhan
BNI: <span class="font-black">1816725843</span> a/n Mufid Nursirot Jati

E-Money
Gopay: <span class="font-black">081230389254</span>  a/n MUFID NURSIROT JATI
OVO: <span class="font-black">081230389254</span>  a/n MUFID NURSIROT JATI
DANA: <span class="font-black">081230389254</span>  a/n MUFID NURSIROT JATI

<span class="font-black">⚠️Uang yang telah dibayarkan tidak dapat dikembalikan⚠️</span>

Registrasi Workshop berikut memerlukan beberapa Tanda Bukti pada Kategori Peserta yang dipilih, yaitu sebagai berikut:
<span class="font-black">• Umum (Bukti Pembayaran)</span>
<span class="font-black">• Mahasiswa Internal TUS (Bukti Pembayaran; Kartu Tanda Mahasiswa TUS)</span>
<span class="font-black">• Pelajar SMA/SMK/MA dan Sederajat (Bukti Pembayaran; Kartu Pelajar Aktif)</span>
<span class="font-black">• Peserta Online (Bukti Pembayaran)</span>

👋🏻Get your Seat, and See you Soon!! 👋🏻

Contact Person :
Rere : <a href="http://wa.me/6285708830732" class="inline-block break-all text-blue-400 font-medium" target="_blank">http://wa.me/6285708830732</a>
Rara : <a href="http://wa.me/628895607451" class="inline-block break-all text-blue-400 font-medium" target="_blank">http://wa.me/628895607451</a>
</pre>
@if ($success)
<pre class="whitespace-pre-wrap poppins font-black text-sm">
Terima kasih telah mendaftar Workshop SE-FEST 2025!,

Diharapkan segera join ke grup nya yaa..

Link Group Workshop:
<a href="https://chat.whatsapp.com/BU39OVPIt2iFFpYtpjHOjG" class="inline-block break-all text-blue-400 font-medium" target="_blank">https://chat.whatsapp.com/BU39OVPIt2iFFpYtpjHOjG</a>

NOTE: untuk membantu kelancaran bergabung dalam grup, harap username WA diubah sementara ya kak

Format: nama_asalsekolah / nama_institusi

Terima kasih kak, atas partisipasinya😊🙏
</pre>
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
