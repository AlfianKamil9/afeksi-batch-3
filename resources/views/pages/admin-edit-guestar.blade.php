@extends('../layout-admin')
@section('title', 'Edit Guestar | AFEKSI')

@section('styles')
@endsection

@section('sidebarContent')
    <div class="main-content container d-flex flex-column mt-3" style="padding-left: 5dvh; padding-right: 5dvh;">
        <div style="font-size: 24px; font-weight: 500;">
            <h3 style="margin: 0;">Pengelolaan Data Guestar</h3>
            <p style="font-size: 16px; font-weight: 400;">Kelola dan atur semua guestar webinar untuk setiap detailnya. </p>
        </div>
        <div class="container mt-1">
            <div class="card" style="border: 1px solid #7B7B7B;">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 20px; font-weight: 500;">Edit Data Guestar</h4>
                    <hr style="border: none; border-top: 1px solid #7B7B7B; margin-top: 14px; margin-bottom: 0;">
                    <div class="card-body">
                        <form>
                            <div class="form-group profile-pic-container d-flex align-items-center">
                                <img src="/assets/img/admin/profile.png" alt="Profile Picture" id="profilePicture"
                                    style=" margin: 10px;">
                                <div>
                                    <button type="button"
                                        style="background-color: #4C2BDB; color: #F4F4F4; border: none; padding: 4px 15px 4px 15px; border-radius: 3px; margin: 10px;"
                                        onclick="document.getElementById('photo').click()">Pilih Foto</button>
                                    <button type="button"
                                        style="background-color: #7B7B7B; color: #F4F4F4; border: none; padding: 4px 15px 4px 15px; border-radius: 3px;"
                                        onclick="removeImage()">Hapus Foto</button>
                                </div>
                            </div>
                            <div class="mb-3 mt-3 row align-items-center" style="color:#7B7B7B">
                                <label for="guestName" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="guestName" placeholder="Nama"
                                        value="Barra Rafeyfa Zayan">
                                </div>
                            </div>

                            <div class="mb-3 row align-items-center" style="color:#7B7B7B">
                                <label for="guestProfile" class="col-sm-2 col-form-label">Profile Singkat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="guestProfile" rows="3" placeholder="Profile Singkat">Ahli Teknologi dan Pengusaha Muda</textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit"
                                    style="background-color: #1121B7; color: #F4F4F4; border: none; padding: 4px 15px 4px 15px; border-radius: 3px; margin-top:60px;">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
