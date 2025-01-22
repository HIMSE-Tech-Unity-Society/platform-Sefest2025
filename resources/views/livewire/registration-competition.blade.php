<div class="text-white md:w-[640px] w-full py-6">
    <div class="border border-[#ffffff66] bg-gradient-to-b from-[#8302B2] to-[#6907E366] p-6 rounded-lg" >
        <h1 class="montserrat-black text-xl pb-4">Form Pendaftaraan Lomba <br> SE-Festival 2025</h1>

@if($isClosed == 1)
    <h2 class="font-black text-sm poppins">Form masih tertutup</h2>
    <a href="/" class="text-blue-200 mt-2 block">Goback to landing page -></a>
</div>
@endif

@if ($isClosed != 1)
<pre class="whitespace-pre-wrap poppins font-black text-sm">
"Creating Sustainable Futures with Software Solutions"

Hai, Kamu punya bakat di bidang teknologi? Inilah kesempatanmu untuk bersinar di SE-FEST 2025!

Kategori Lomba:

✨ Web Development: Buat website inovatif yang mengagumkan
🎨 UI/UX Design: Desain antarmuka pengguna yang menarik dan intuitif
🖼  Lomba Poster: Tuangkan kreativitas dalam desain visual yang inspiratif

Date:

1️⃣ Registration Stage
🔹 Registration Competition: 25 Januari - 5 Februari 2025

2️⃣ Elemination Stage
🔹 Technical Meeting Competition: 6 Februari 2025
🔹 Elimination Stage: 6 - 10 Februari 2025
🔹 Announce Finalis: 12 Februari 2025

3️⃣ Final Stage
🔹 Technical Meeting Finalis: 13 Februari 2025
🔹 Final Stage: 13 - 17 Februari 2025
🔹 Final Demo/Presentation: 18 Februari 2025

🎉 Exhibition & Awarding Ceremony: 23 Februari 2024

💰 Hadiah menarik menanti pemenang!
🌐 Info lengkap dan pendaftaran di IG: @se.telkomsurabaya @himse.telkomsurabaya @event.himse

Link Twibbon + Caption:
</pre>
<a href="https://drive.google.com/drive/folders/1EjXhvIziC5OvCdhZKYJRJjzwaDyai82E?usp=sharing" class="text-blue-400" target="_blank">https://drive.google.com/drive/folders/1EjXhvIziC5OvCdhZKYJRJjzwaDyai82E?usp=sharing</a>
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
            <label for="" class="montserrat-black">Jenis Lomba</label>
            <div class="border border-[#ffffff66] rounded-lg p-2">
                <select name="typecompetiton" wire:model.live='typecompetition' id="typecompetiton" class="bg-transparent outline-none w-full">
                    <option value="webdev" class="bg-[#6907E3]">Web development</option>
                    <option value="uiux" class="bg-[#6907E3]">UI UX</option>
                    <option value="poster" class="bg-[#6907E3]">Poster</option>
                </select>
            </div>
            @error('form.typecompetition')
                <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
        <div class="flex flex-col">
            <label for="team" class="montserrat-black pb-1">Nama Tim</label>
            <input type="text" id="team" name="team" wire:model='form.team' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
        </div>
        @error('form.team')
            <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
        @enderror
    </div>
    @if ($typecompetition == "webdev")
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="member1" class="montserrat-black pb-1">Nama Ketua</label>
                <input type="text" id="member1" name="member1" wire:model='member.0.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="member2" class="montserrat-black pb-1">Anggota 1</label>
                <input type="text" id="member2" name="member2" wire:model='member.1.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.1.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="member3" class="montserrat-black pb-1">Anggota 2</label>
                <input type="text" id="member3" name="member3" wire:model='member.2.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.2.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school1" class="montserrat-black pb-1">Asal Sekolah Ketua</label>
                <input type="text" id="school1" name="school1" wire:model='member.0.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school2" class="montserrat-black pb-1">Asal Sekolah Anggota 1</label>
                <input type="text" id="school2" name="school2" wire:model='member.1.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.1.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school3" class="montserrat-black pb-1">Asal Sekolah Anggota 2</label>
                <input type="text" id="school3" name="school3" wire:model='member.2.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.2.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
    @elseif($typecompetition == "poster")
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="member1" class="montserrat-black pb-1">Nama Ketua</label>
                <input type="text" id="member1" name="member1" wire:model='member.0.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="member2" class="montserrat-black pb-1">Anggota 1</label>
                <input type="text" id="member2" name="member2" wire:model='member.1.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.1.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school1" class="montserrat-black pb-1">Asal Sekolah Ketua</label>
                <input type="text" id="school1" name="school1" wire:model='member.0.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school2" class="montserrat-black pb-1">Asal Sekolah Anggota 1</label>
                <input type="text" id="school2" name="school2" wire:model='member.1.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.1.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
    @else
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="name" class="montserrat-black pb-1">Nama Lengkap</label>
                <input type="text" id="name" name="name" wire:model='member.0.name' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.name')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
            <div class="flex flex-col">
                <label for="school" class="montserrat-black pb-1">Asal Sekolah</label>
                <input type="text" id="school" name="school" wire:model='member.0.asalsekolah' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
            </div>
            @error('form.member.0.asalsekolah')
                <span class="text-sm text-red-500 pt-2">{{$message}}</span>
            @enderror
        </div>
    @endif
    <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
        <div class="flex flex-col">
            <label for="email" class="montserrat-black pb-1">Gmail</label>
            <input type="email" id="email" name="email" wire:model='form.email' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
        </div>
        @error('form.email')
            <span class="text-sm text-red-500 pt-2">{{$message}}</span>
        @enderror
    </div>
    <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
        <div class="flex flex-col">
            <label for="phone" class="montserrat-black pb-1">Nomor whatsapp</label>
            <input type="tel" id="phone" name="phone" wire:model='form.phone' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
        </div>
        @error('form.phone')
            <span class="text-sm text-red-500 pt-2">{{$message}}</span>
        @enderror
    </div>
    <div class="border border-[#ffffff66] bg-[#6907E366] p-6 rounded-lg mt-2">
        <div class="flex flex-col">
            <label for="drive" class="montserrat-black pb-1">Link Google Drive (3 file):</label>
            <ol type="1" class="list-decimal montserrat font-bold text-xs ml-4 pb-2">
                <li>Kartu Pelajar/Surat Keterangan Siswa setiap anggota</li>
                <li>{{"Bukti Follow IG @se.telkomsurabaya & @himse.telkomsurabaya & @event.himse (Link di Deskripsi) setiap anggota"}}</li>
                <li>Bukti Post Twibon (Link Twibon + Caption di Deskripsi) setiap anggota</li>
            </ol>
            <input type="text" id="drive" name="drive" wire:model='form.drive' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
        </div>
        @error('form.drive')
            <span class="text-sm text-red-500 pt-2">{{$message}}</span>
        @enderror
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
