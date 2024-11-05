<footer class="bg-gradient-to-br from-blue-900 to-indigo-800 py-20 text-white">
    <div class="container mx-auto lg:px-12">
        <!-- Top Section of Footer -->
        <div class="flex justify-between items-start gap-20 mb-5">
            <!-- About Company -->
            <div class="w-1/4">
                <h2 class="text-xl font-bold mb-2">Tentang Kami</h2>
                <p class="text-sm leading-relaxed text-gray-300">
                    Kami adalah penyedia terpercaya lowongan magang, berkomitmen untuk memberikan pengalaman terbaik bagi para pencari pengalaman. Temukan peluang karir yang cocok untuk masa depan Anda.
                </p>
            </div>

            <!-- Navigation -->
            <div class="w-1/4">
                <h2 class="text-xl font-bold mb-2">Navigasi</h2>
                <ul class="text-sm text-gray-300 space-y-3">
                    <li><a href="{{ route('front.index') }}" class="hover:text-indigo-400 transition-colors">Beranda</a></li>
                    <li><a href="{{ route('front.kategori') }}" class="hover:text-indigo-400 transition-colors">Kategori</a></li>
                    <li><a href="{{ route('front.job') }}" class="hover:text-indigo-400 transition-colors">Lowongan</a></li>
                    <li><a href="{{ route('front.pencarian') }}" class="hover:text-indigo-400 transition-colors">Pencarian</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="w-1/4">
                <h2 class="text-xl font-bold mb-2">Hubungi Kami</h2>
                <ul class="text-sm text-gray-300 space-y-3">
                    <li>Email: <a href="mailto:rhauffierre@gmail.com" class="hover:text-indigo-400 transition-colors">rhauffierre@gmail.com</a></li>
                    <li>Telepon: <a href="tel:+6281384127575" class="hover:text-indigo-400 transition-colors">(+62) 813 8412 7575</a></li>
                    <li>Alamat: Jalan Poras No 07 Kota Bogor</li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="w-1/4">
                <h2 class="text-xl font-bold mb-2">Ikuti Kami</h2>
                <div class="flex justify-start items-center space-x-6 pt-4">
                    <a href="#" aria-label="Facebook" class="text-gray-300 hover:text-indigo-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h11.495V14.708h-3.13v-3.63h3.13V8.412c0-3.1 1.894-4.785 4.66-4.785 1.325 0 2.463.099 2.797.143v3.244l-1.917.001c-1.504 0-1.796.714-1.796 1.76v2.309h3.587l-.467 3.63h-3.12V24h6.116c.73 0 1.324-.593 1.324-1.324V1.325C24 .593 23.406 0 22.675 0z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="text-gray-300 hover:text-indigo-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.556c-.883.392-1.83.656-2.825.775 1.014-.608 1.794-1.574 2.163-2.723-.95.563-2.005.974-3.127 1.195-.896-.954-2.173-1.55-3.59-1.55-2.717 0-4.92 2.203-4.92 4.92 0 .386.044.762.128 1.124-4.087-.205-7.713-2.164-10.141-5.144-.423.725-.666 1.562-.666 2.456 0 1.693.86 3.186 2.169 4.063-.798-.025-1.55-.245-2.205-.614v.062c0 2.364 1.684 4.337 3.918 4.783-.41.111-.843.171-1.287.171-.316 0-.623-.03-.924-.086.624 1.95 2.432 3.372 4.575 3.413-1.68 1.317-3.797 2.102-6.1 2.102-.395 0-.787-.023-1.175-.068 2.179 1.397 4.768 2.211 7.557 2.211 9.053 0 14-7.496 14-13.986 0-.213-.005-.425-.015-.636.961-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="text-gray-300 hover:text-indigo-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.055 1.97.24 2.433.413a4.92 4.92 0 0 1 1.757 1.008 4.927 4.927 0 0 1 1.008 1.756c.173.464.358 1.263.413 2.434.058 1.267.07 1.646.07 4.851s-.012 3.584-.07 4.85c-.055 1.17-.24 1.97-.413 2.433a4.926 4.926 0 0 1-1.008 1.757 4.92 4.92 0 0 1-1.757 1.008c-.464.173-1.263.358-2.433.413-1.267.058-1.646.07-4.851.07s-3.584-.012-4.85-.07c-1.17-.055-1.97-.24-2.433-.413a4.926 4.926 0 0 1-1.757-1.008 4.92 4.92 0 0 1-1.008-1.757c-.173-.464-.358-1.263-.413-2.433-.058-1.267-.07-1.646-.07-4.851s.012-3.584.07-4.85c.055-1.17.24-1.97.413-2.433a4.92 4.92 0 0 1 1.008-1.757 4.926 4.926 0 0 1 1.757-1.008c.464-.173 1.263-.358 2.433-.413 1.267-.058 1.646-.07 4.851-.07zM12 5.838a6.162 6.162 0 1 0 0 12.324A6.162 6.162 0 0 0 12 5.838zm0 10.179a4.017 4.017 0 1 1 0-8.034 4.017 4.017 0 0 1 0 8.034zm6.406-11.845a1.44 1.44 0 1 0-2.882 0 1.44 1.44 0 0 0 2.882 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="border-t border-indigo-700 pt-6 text-center text-sm text-gray-400">
        &copy; 2023 Intern. All rights reserved.
    </div>
</footer>
