<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Mobil_C/index') ?>">Master Mobil</a>
                        </li>
                        <li class="breadcrumb-item active">Ubah Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-car"></i>
                        Form Entri Data Mobil
                    </h3>
                </div>
                <form action="<?= base_url('Mobil_C/UpdateMobil') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <!-- No Plat -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Plat</label>
                                    <input type="text"
                                        name="no_plat"
                                        class="form-control"
                                        placeholder="Contoh: BN 1234 AB"
                                        value="<?= $mobil['no_plat'] ?>"
                                        readonly>
                                </div>
                            </div>

                            <!-- Nama Mobil -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text"
                                        name="nm_mobil"
                                        class="form-control"
                                        placeholder="Contoh: Toyota Avanza"
                                        value="<?= $mobil['nm_mobil'] ?>"
                                        required>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <!-- Jumlah Kursi -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Kursi</label>
                                    <input type="number"
                                        name="nkursi"
                                        class="form-control"
                                        min="1"
                                        value="<?= $mobil['nkursi'] ?>"
                                        required>
                                </div>
                            </div>

                            <!-- Jumlah Bagasi -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Bagasi</label>
                                    <input type="number"
                                        name="nbagasi"
                                        class="form-control"
                                        min="0"
                                        value="<?= $mobil['nbagasi'] ?>"
                                        required>
                                </div>
                            </div>

                            <!-- Jenis Mobil -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jenis Mobil</label>
                                    <select name="jns_mobil" class="form-control" required>
                                        <option value="Sedan" <?= $mobil['jns_mobil'] == 'Sedan' ? 'selected' : '' ?>>Sedan</option>
                                        <option value="Hatchback" <?= $mobil['jns_mobil'] == 'Hatchback' ? 'selected' : '' ?>>Hatchback</option>
                                        <option value="MPV" <?= $mobil['jns_mobil'] == 'MPV' ? 'selected' : '' ?>>MPV</option>
                                        <option value="SUV" <?= $mobil['jns_mobil'] == 'SUV' ? 'selected' : '' ?>>SUV</option>
                                        <option value="Pickup" <?= $mobil['jns_mobil'] == 'Pickup' ? 'selected' : '' ?>>Pickup</option>
                                        <option value="Minibus" <?= $mobil['jns_mobil'] == 'Minibus' ? 'selected' : '' ?>>Minibus</option>
                                    </select>

                                </div>
                            </div>

                            <!-- Transmisi -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <select name="transmisi" class="form-control" required>
                                        <option value="">-- Pilih Transmisi --</option>
                                        <option value="Manual" <?= $mobil['transmisi'] == 'Manual' ? 'selected' : '' ?>>Manual</option>
                                        <option value="Automatic" <?= $mobil['transmisi'] == 'Automatic' ? 'selected' : '' ?>>Automatic</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <!-- Tahun -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input type="number"
                                        name="thn_buat"
                                        class="form-control"
                                        min="1900"
                                        max="2100"
                                        placeholder="Contoh: 2024"
                                        value="<?= $mobil['thn_buat'] ?>"
                                        required>
                                </div>
                            </div>

                            <!-- Harga -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Biaya Per Hari</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number"
                                            name="hrg_hari"
                                            class="form-control"
                                            min="0"
                                            step="0.01"
                                            placeholder="Contoh: 350000"
                                            value="<?= $mobil['hrg_hari'] ?>"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status Unit</label>
                                    <select name="status_unit" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Tersedia" <?= $mobil['status_unit'] == 'Tersedia' ? 'selected' : '' ?>>Tersedia</option>
                                        <option value="Disewa" <?= $mobil['status_unit'] == 'Disewa' ? 'selected' : '' ?>>Disewa</option>
                                        <option value="Servis" <?= $mobil['status_unit'] == 'Servis' ? 'selected' : '' ?>>Servis</option>
                                        <option value="Tidak Aktif" <?= $mobil['status_unit'] == 'Tidak Aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <hr>

                        <h5>
                            <i class="fas fa-camera"></i>
                            Foto Mobil
                        </h5>

                        <div class="row">

                            <!-- Foto Depan -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Depan</label>
                                    <input type="file"
                                        name="ft_depan"
                                        class="form-control"
                                        accept="image/*">
                                    <small class="form-text text-muted">
                                        Format JPG, JPEG atau PNG
                                    </small>

                                    <input type="text" name="ft_depan_asli" value="<?= $mobil['ft_depan'] ?>" hidden>
                                    <input type="text" name="ft_blkg_asli" value="<?= $mobil['ft_blkg'] ?>" hidden>
                                    <input type="text" name="ft_interior_asli" value="<?= $mobil['ft_interior'] ?>" hidden>

                                </div>
                            </div>

                            <!-- Foto Belakang -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Belakang</label>
                                    <input type="file"
                                        name="ft_blkg"
                                        class="form-control"
                                        accept="image/*">
                                    <small class="form-text text-muted">
                                        Format JPG, JPEG atau PNG
                                    </small>
                                </div>
                            </div>

                            <!-- Foto Interior -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Interior</label>
                                    <input type="file"
                                        name="ft_interior"
                                        class="form-control"
                                        accept="image/*">
                                    <small class="form-text text-muted">
                                        Format JPG, JPEG atau PNG
                                    </small>
                                </div>
                            </div>

                        </div>

                        <!-- Catatan -->
                        <div class="form-group">
                            <label>Catatan Unit</label>
                            <textarea name="cttn_unit"
                                class="form-control"
                                rows="3"
                                placeholder="Masukkan catatan mengenai kendaraan"><?= $mobil['cttn_unit'] ?></textarea>
                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Ubah
                        </button>

                        <a href="<?= base_url('Mobil_C/index') ?>"
                            class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </section>

</div>