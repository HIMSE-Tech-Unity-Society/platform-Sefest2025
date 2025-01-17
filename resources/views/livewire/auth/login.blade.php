<div class="text-white md:w-[640px] w-full py-6">
    <form wire:submit='save'>
        <div class="border border-[#ffffff66] bg-gradient-to-b from-[#8302B2] to-[#6907E366] p-6 rounded-lg" >
            <div class="flex items-center justify-center">
                <h1 class="montserrat-black text-xl pb-4 text-center">Login Page</h1>
            </div>
            <div class="flex flex-col mb-4">
                <label for="email" class="montserrat-black pb-1">Email</label>
                <input type="email" id="email" name="email" wire:model='email' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                @error('email')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="password" class="montserrat-black pb-1">Password</label>
                <input type="password" id="password" name="password" wire:model='password' class="border poppins text-base border-[#FFFFFF66] bg-transparent p-2 rounded-md outline-none">
                @error('password')
                    <span class="text-sm text-red-500 pt-2">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="w-full border border-[#ffffff66] bg-[#6907E366] p-2 rounded-lg font-bold">Login</button>
            </div>
        </div>
    </form>
</div>
