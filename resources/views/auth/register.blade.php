<x-layout>

    <div class="w-full relative flex flex-row-reverse">
        <div class="w-[850px] min-w-[850px] bg-[#FEF6E4] shadow-xl rounded-l-3xl">
            <div class="w-9/12 m-auto mt-20">
                <h1 class="font-bold text-3xl mb-5">Create Account</h1>
                <form action="/register" method="POST" autocomplete="off">

                    @csrf

                    <input name="first_name" type="text" required placeholder="First Name" class="rounded-t-sm px-1 py-1 w-full mt-7 bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                    @error('first_name')
                        <div class="text-red-500 text-xs font-light italic">{{ $message }}</div>
                    @enderror
                    <input name="last_name" type="text" required placeholder="Last Name" class="rounded-t-sm px-1 py-1 w-full mt-7 bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                    @error('last_name')
                        <div class="text-red-500 text-xs font-light italic">{{ $message }}</div>
                    @enderror
                    <input name="email" type="email" required placeholder="Email" class="rounded-t-sm px-1 py-1 w-full mt-7 bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                    @error('email')
                        <div class="text-red-500 text-xs font-light italic">{{ $message }}</div>
                    @enderror
                    <input name="phone_number" type="number" required placeholder="Phone No." class="rounded-t-sm px-1 py-1 w-full mt-7 bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                    @error('phone_number')
                        <div class="text-red-500 text-xs font-light italic">{{ $message }}</div>
                    @enderror
                    <div class="mt-7 relative">
                        <input id="password" name="password" type="password" minlength="6" required placeholder="Password" class="rounded-t-sm px-1 py-1 toggle-password w-full bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                        <div class="absolute h-7 w-7 right-1 top-1 p-1 cursor-pointer show-hide-password">
                            <svg
                                class="hidden"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill='#aaa' d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill='#aaa' d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                            </svg>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-red-500 text-xs font-light italic">{{ $message }}</div>
                    @enderror
                    <div class="mt-7 relative">
                        <input id="confirm-password" name="password_confirmation" type="password" minlength="6" required placeholder="Confirm Password" class="rounded-t-sm px-1 py-1 toggle-password w-full bg-transparent border-b-2 border-gray-400 focus:outline-none focus:border-black">
                        <div class="absolute h-7 w-7 right-1 top-1 p-1 cursor-pointer show-hide-password">
                            <svg
                                class="hidden"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill='#aaa' d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill='#aaa' d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                            </svg>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="bg-[#FF6E6C] hover:bg-[#ff6361]  text-white text-xl font-mono font-bold py-1 px-20  mt-10 rounded-r-full rounded-l-full">
                            REGISTER
                        </button>
                        <div class="mt-10 text-gray-400">
                            already have an account? <a href="/login" class="underline font-semibold text-[#FF6E6C]">Login</a>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <div class="w-full px-20 py-10">
            <div class="px-10">
                <a href="/" class="inline-block"><img src="images/new-memo-logo.png" alt="Logo" class="h-20 w-20 rounded-xl shadow-md shadow-gray-400"></a>
            </div>
            <h1 class="text-5xl font-localLobster my-16 px-10">
                Join Memories Cake and Savor the Sweetest Moments!
            </h1>
            <div class="m-auto h-[330px] w-[400px]">
                <img src="images/signup.png" alt="icon" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <script src="/js/toggle-password-visibility.js" defer></script>

</x-layout>
