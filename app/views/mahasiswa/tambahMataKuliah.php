<div class="card">
    <div class="card-body">
        <h5 class="card-title center">Tambah Mata Kuliah Umum Anda</h5>
        <form form action="<?= BASEURL; ?>/mahasiswa/gettambahMataKuliah" method="post">
            <input type="hidden" name="id_kuliah" id="id_kuliah">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $data['mhs']['id'] ?>">
            </div>

            <div class="mb-3 form-check">
                <div class="form-group">
                    <label for="mata_kuliah1">Mata Kuliah Umum 1</label>
                    <select class="form-control" id="mata_kuliah1" name="mata_kuliah1">
                        <option value="Pancasila">Pancasila</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris </option>
                        <option value="Kepemimpinan">Kepemimpinan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 form-check">
                <div class="form-group">
                    <label for="mata_kuliah2">Mata Kuliah Umum 2</label>
                    <select class="form-control" id="mata_kuliah2" name="mata_kuliah2">
                        <option value="Pancasila">Pancasila</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris </option>
                        <option value="Kepemimpinan">Kepemimpinan</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </div>
</div>