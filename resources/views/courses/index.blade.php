<x-layouts::app :title="'Mata Kuliah'">
    <div class="space-y-6">
        <div class="flex items-center gap-3">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 dark:border-zinc-700 dark:bg-zinc-900 dark:text-slate-200 dark:hover:bg-zinc-800">
                <svg class="mr-2 h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Kembali
            </a>
        </div>

        <div>
            <h1 class="text-2xl font-semibold">Mata Kuliah</h1>
            <p class="text-sm text-gray-600">
                Halaman ini hanya dapat diakses oleh user yang sudah login dan email-nya sudah terverifikasi.
            </p>
        </div>

        <div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-zinc-700 bg-white dark:bg-zinc-800">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50 dark:bg-zinc-700 text-gray-900 dark:text-zinc-100">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold">Kode</th>
                        <th class="px-6 py-4 text-left font-semibold">Nama Mata Kuliah</th>
                        <th class="px-6 py-4 text-left font-semibold">Dosen</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-zinc-600">
                    @forelse ($courses as $course)
                        <tr class="hover:bg-gray-50 dark:hover:bg-zinc-700 transition-colors">
                            <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-zinc-100">{{ $course->code }}</td>
                            <td class="px-6 py-4 text-gray-900 dark:text-zinc-100">{{ $course->name }}</td>
                            <td class="px-6 py-4 text-gray-700 dark:text-zinc-300">{{ $course->lecturer }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500 dark:text-zinc-400 py-8">
                                <div class="flex flex-col items-center">
                                    <svg class="w-12 h-12 text-gray-400 dark:text-zinc-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    Belum ada data mata kuliah.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>