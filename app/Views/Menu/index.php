<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

                <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2">Tambah Menu Website</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-2">
                        <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class="col-10 p-5 form-data-editDosen form-data border border-2">
                                        <h3 class="mb-3">Website Menu</h3>
                                        <form action="/MenuDashboard/tambahWeb" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                                              <div class="col-md-6 mb-3">
                                                <label for="InputForNama" class="form-label">Nama Menu</label>
                                                <input type="text" name="nama" class="form-control p-2" id="InputForNama"  required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="InputForDeskripsi" class="form-label">Icon Menu</label>
                                                <input type="text" name="deskripsi" class="form-control p-2" id="InputForDeskripsi" placeholder="examples : fa-home">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="InputForJabatan" class="form-label">Link Menu atau URL</label>
                                                <input type="text" required name="menu-url" class="form-control p-2" id="InputForJabatan" >
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="InputForSite" class="form-label">Menu Site</label>
                                            <select class="form-select" name="menu-site" required aria-label="Default select example">
                                            <option selected>Pilih</option>
                                            <option value="A">Halaman Admin</option>
                                            <option value="H">Halaman User</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="InputForlevel" class="form-label">Menu Access</label>
                                            <select class="form-select" name="menu-access" required aria-label="Default select example">
                                            <option selected>Pilih</option>
                                            <option value="1">Superadmin</option>
                                            <option value="2">Administrator</option>
                                            <option value="3">Operator</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="InputForUrutan" class="form-label">Menu Urutan</label>
                                                <input type="text" required name="urutan" class="form-control p-2" id="InputForUrutan" >
                                            </div>                                            
                                            <div class="button d-flex justify-content-center">
                                            <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                                            <a href="/dashboard/" class="btn rounded-pill button-login-profile button-login">Kembali</a>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


                <!-- End page content -->

            <!-- Footer -->
<?=$this->include('partial/footer')?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?=$this->endSection()?>