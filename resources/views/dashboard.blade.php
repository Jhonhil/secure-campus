<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-4">Mata Kuliah</h2>
                <div class="overflow-x-auto bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50 dark:bg-zinc-700 text-gray-900 dark:text-zinc-100">
                            <tr>
                                <th class="px-6 py-4 text-left font-semibold">Kode</th>
                                <th class="px-6 py-4 text-left font-semibold">Nama Mata Kuliah</th>
                                <th class="px-6 py-4 text-left font-semibold">Dosen</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-zinc-600">
                            @forelse (\App\Models\Course::query()->select(['id', 'code', 'name', 'lecturer'])->orderBy('code')->get() as $course)
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
                <div class="mt-4">
                    <flux:link :href="route('courses.index')" wire:navigate>
                        Lihat Semua Mata Kuliah
                    </flux:link>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
