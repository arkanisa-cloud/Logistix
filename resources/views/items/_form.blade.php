<div class="flex flex-col gap-2">
    <label for="code" class="text-sm font-medium">Kode Barang</label>
    <input id="code" name="code" type="text" value="{{ old('code', $item->code ?? '') }}" required maxlength="255"
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
</div>

<div class="flex flex-col gap-2">
    <label for="name" class="text-sm font-medium">Nama Barang</label>
    <input id="name" name="name" type="text" value="{{ old('name', $item->name ?? '') }}" required
        maxlength="255"
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
</div>

<div class="flex flex-col gap-2">
    <label for="category_id" class="text-sm font-medium">Kategori</label>
    <select id="category_id" name="category_id" required
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        <option value="">Pilih kategori</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $item->category_id ?? '') == $category->id)>{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="flex flex-col gap-2">
    <label for="location_id" class="text-sm font-medium">Lokasi</label>
    <select id="location_id" name="location_id" required
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        <option value="">Pilih lokasi</option>
        @foreach ($locations as $location)
            <option value="{{ $location->id }}" @selected(old('location_id', $item->location_id ?? '') == $location->id)>{{ $location->name }}</option>
        @endforeach
    </select>
</div>

<div class="flex flex-col gap-2">
    <label for="condition" class="text-sm font-medium">Kondisi</label>
    <select id="condition" name="condition" required
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">
        <option value="baik" @selected(old('condition', $item->condition ?? 'baik') == 'baik')>Baik</option>
        <option value="rusak_ringan" @selected(old('condition', $item->condition ?? 'baik') == 'rusak_ringan')>Rusak Ringan</option>
        <option value="rusak_berat" @selected(old('condition', $item->condition ?? 'baik') == 'rusak_berat')>Rusak Berat</option>
    </select>
</div>

<div class="flex flex-col gap-2">
    <label for="description" class="text-sm font-medium">Deskripsi (opsional)</label>
    <textarea id="description" name="description" rows="3" maxlength="255"
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-2 focus:outline-blue-600">{{ old('description', $item->description ?? '') }}</textarea>
</div>

<p class="text-sm text-gray-600">Stok awal barang adalah 0. Perubahan stok dicatat melalui transaksi barang masuk dan
    keluar.</p>

<div class="flex flex-wrap items-center gap-4">
    <button type="submit"
        class="cursor-pointer rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800">Simpan</button>
    <a href="{{ route('items.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
</div>
