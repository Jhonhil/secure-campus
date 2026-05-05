<x-layouts.app :title="'Mata Kuliah'">
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-semibold">Mata Kuliah</h1>
            <p class="text-sm text-gray-600">
                Halaman ini hanya dapat diakses oleh user yang sudah login dan email-nya sudah terverifikasi.
            </p>
        </div>

        <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-3">Kode</th>
                        <th class="px-4 py-3">Nama Mata Kuliah</th>
                        <th class="px-4 py-3">Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr class="border-t">
                            <td class="px-4 py-3 font-medium">{{ $course->code }}</td>
                            <td class="px-4 py-3">{{ $course->name }}</td>
                            <td class="px-4 py-3">{{ $course->lecturer }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-gray-500">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>