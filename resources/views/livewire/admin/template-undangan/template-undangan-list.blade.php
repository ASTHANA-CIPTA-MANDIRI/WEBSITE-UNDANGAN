<div>
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
            Daftar Template Tersedia
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Template</th>
                            <th>Kategori Template</th>
                            <th>Layout Template</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataTemplateUndangan as $template)
                        <tr>
                            <td>
                                <strong>{{ $template->nama_template }}</strong><br>
                                <small class="text-muted">{{ $template->slug }}</small>
                            </td>
                            <td><span class="badge bg-info text-light">{{ ucfirst($template->kategori_template) }}</span></td>
                            <td><code>{{ $template->layout_template }}</code></td>
                            <td>Rp {{ number_format($template->harga, 0, ',', '.') }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada template yang terdaftar.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-3 mx-3">
                    {{ $dataTemplateUndangan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>