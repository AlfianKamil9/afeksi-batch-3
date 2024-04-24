@extends('../layout')

@section('title', 'Popup Konseling')

@section('styles')
    <link rel="stylesheet" href="assets/css/konseling.css">
@endsection

@section('content')

<div class="mt-5">
    <h1 class="fw-bold text-center mt-5">
      <span>Layanan Professional Konseling Berupa :</span>
    </h1>
  </div>

  <div class="mt-5 p-3">
    <div class="row gap-2">
      <div class="col">
        <div class="popup --bg-1 float-md-end p-4">
          <h3 class="text-center">Equality Gender</h3>
          <p class="mt-5">
            Layanan Konseling Kesetaraan Gender di Afeksi adalah bagian
            integral dari produk kami yang bertujuan untuk membantu individu
            dan pasangan membangun hubungan yang sehat, seimbang, dan setara.
            Layanan ini menawarkan bimbingan professional yang fokus pada
            isu-isu gender, dengan tujuan mempromosikan pemahaman yang lebih
            baik tentang peran dan tanggung jawab dalam hubungan
          </p>
          <h3>Apa saja yang dibahas :</h3>
          <div
            class="list-popup bg-dark text-white rounded-5 px-4 pt-2 pb-2 mt-5"
            style="--bs-bg-opacity: 0.9"
          >
            <ul>
              <li class="mt-3">Pemahaman Hubungan</li>
              <li class="mt-3">Membangun Intimasi</li>
              <li class="mt-3">Perencanaan Masa Depan</li>
            </ul>
          </div>
        </div>
      </div>

        <div class="col">
          <div class="popup --bg-2 p-4">
              <h3 class="text-center">Relationship</h3>
              <p class="mt-5">
              Layanan Relationship membantu individu dan pasangan membangun
              hubungan yang sehat, harmonis, dan berkelanjutan. Layanan ini
              dirancang untuk memberikan pemahaman, dukungan, dan alat yang
              diperlukan untuk mengatasi masalah yang mungkin muncul dalam
              hubungan, serta memperkuat ikatan antarindividu dan pasangan.
              </p>
              <h3>Apa saha yang dibahas :</h3>
              <div
              class="list-popup bg-dark text-white rounded-5 px-4 pt-2 pb-2 mt-5"
              style="--bs-bg-opacity: 0.9"
              >
              <ul>
                  <li class="mt-3">Pemahaman Hubungan</li>
                  <li class="mt-3">Membangun Intimasi</li>
                  <li class="mt-3">Perencanaan Masa Depan</li>
              </ul>
              </div>
          </div>
        </div>

        <div class="col-12 p-5 text-center">
          <button class="btn btn-warning rounded-4 btn-lg fw-semibold shadow button-popup">Pilih Konselor</button>
        </div>
      </div>
    </div>
  </div>

  @endsection