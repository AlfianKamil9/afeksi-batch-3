@extends('../layout')

@section('title', 'Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/konseling.css">
@endsection


@section('content')
  <!-- HEADER -->
  <div class="mb-5 pt-5 bg-transparent text-white overflow-hidden">
    <div class="container-fluid py-5" style="height: 31.9rem">
      <div class="row mt-5 pt-5">
        <div class="col-md">
          <h1 class="mb-3 fw-bold mb-md-5">Apa Itu Konseling</h1>
          <p class="w-75">Konseling adalah hubungan pribadi yang dilakukan secara tatap muka antara dua orang dalam mana konselor melalui hubungan itu dengan kemampuan-kemampuan khusus yang dimilikinya, menyediakan situasi belajar.</p>
        </div>
        <div class="col-md">
          <img
            src="assets/img/konseling/hero.png"
            alt="Header"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>

  <img
    class="background left d-none d-md-block"
    src="assets/img/about-us/Frame-1.png"
    alt=""
  />
  <img
    class="background right d-none d-md-block"
    src="assets/img/about-us/Frame-2.png"
    alt=""
  />
  <!-- End HEADER -->

  <!-- CONTENT -->
  <div class="container-md overflow-hidden">
    <div class="row align-items-center">
      <div class="col-md-12 text-center mt-5">
        <h2 class="fw-bold">
          <span>Mengapa Seseorang</span> Membutuhkan Konseling?
        </h2>
        <p class="text-body-tertiary fw-bold">
          Seseorang membutuhkan layanan mentoring di Afeksi karena mentoring
          merupakan alat yang sangat efektif dalam membantu individu membangun
          hubungan yang sehat dan mencapai keseimbangan dalam kehidupan
          mereka. Berikut adalah beberapa alasan mengapa seseorang membutuhkan
          layanan mentoring di Afeksi secara komprehensif:
        </p>
      </div>
      <div class="col-md-12 mt-4">
        <div class="row g-5">
          <div class="col-md-12 col-lg-6 text-center">
            <img
              src="assets/img/mentoring/content.png"
              width="90%"
              class="img-fluid"
            />
          </div>

          <div
            class="col-md-12 col-lg-4 justify-content-center d-flex flex-column ms-0 ms-md-5"
          >
            <div class="d-flex flex-row">
              <div class="d-flex align-items-center mb-3">
                <img
                  src="assets/img/mentoring/point.png"
                  alt=""
                  class="me-3"
                />
                <div class="d-flex flex-column">
                  <h6 class="fw-bold">Memberikan Inspirasi</h6>
                  <p class="text-body-tertiary fw-bold">
                    Mampu memberikan anda inspirasi dan membuat anda tetap
                    fokus.
                  </p>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row">
              <div class="d-flex align-items-center mb-3">
                <img
                  src="assets/img/mentoring/point.png"
                  alt=""
                  class="me-3"
                />
                <div class="d-flex flex-column">
                  <h6 class="fw-bold">Jalur Karir yang Tepat</h6>
                  <p class="text-body-tertiary fw-bold">
                    Dapat membantu anda menciptakan jalur karir yang sesuai
                    dengan bakat dan minat individual.
                  </p>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row">
              <div class="d-flex align-items-center">
                <img
                  src="assets/img/mentoring/point.png"
                  alt=""
                  class="me-3"
                />
                <div class="d-flex flex-column">
                  <h6 class="fw-bold">Cara Untuk Bertumbuh</h6>
                  <p class="text-body-tertiary fw-bold">
                    Dapat membantu anda menemukan cara untuk tumbuh secara
                    profesional.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h2 class="fw-bold text-center mt-5">
          <span>Macam - Macam Konseling</span>
        </h2>
        <p class="text-body-tertiary fw-bold text-center mt-2 mb-5">
          Macam-macam mentoring mencakup Professional Konseling dan Peers Konseling.
        </p>
      </div>
      <div class="container mt-5 mb-5">

          <div class="card mb-5 bg-card-custom border-0">
              <div class="row gap-0 p-md-4 align-items-center">
                <div class="col-lg-5 col-md-6">
                  <img
                      src="/assets/img/konseling/konseling-1.png"
                      alt="Gambar Anda"
                      class="img-fluid w-100"
                  />
                </div>
                <div class="col col-md-6 ">
                  <div class="card-body">
                    <h2 class="card-title mb-3">Professional Konseling</h2>
                    <p class="card-text mb-md-4 mb-5 mb-lg-5" >Konsultasi yang dilakukan dengan professional di bidangnya
                      masing - masing meliputi equality gender dan relationship.</p>
                    @auth
                      <button
                          type="submit"
                          class="btn btn-primary rounded-pill"
                          style="width: 200px"
                          data-bs-toggle="modal" data-bs-target="#professional-konseling" data-bs-whatever="@mdo"
                        >
                          Pilih
                      </button>
                    @else
                      <button class="btn btn-primary rounded-pill"
                          style="width: 200px" id="btn-harus-login1" style="width: 100px;">Pilih</button>
                    @endauth
                  </div>
                </div>
              </div>
          </div>

          <div class="card mb-5 bg-card-custom border-0">
              <div class="row gap-0 p-md-4 align-items-center">
                <div class="col-lg-5 col-md-6">
                  <img
                      src="assets/img/konseling/konseling-1.png"
                      alt="Gambar Anda"
                      class="img-fluid w-100"
                  />
                </div>
                <div class="col-md-6 ">
                  <div class="card-body">
                    <h2 class="card-title mb-3">Peers Konseling</h2>
                    <p class="card-text mb-md-4 mb-5 mb-lg-5">Konsultasi non klinis dengan peers yang sudah bersertifikasi bisa berkonsultasi secara individu maupun secara pasangan.</p>
                    @auth
                    <form method="POST" action="{{ route('peers.konseling.create.first') }}">
                      @csrf
                        <button
                            name="value_id"
                            type="submit"
                            class="btn btn-primary rounded-pill"
                            style="width: 200px"
                            data-bs-toggle="modal" data-bs-target="#peers-konseling" data-bs-whatever="@mdo"
                          >
                            Pilih
                        </button>
                    </form>
                    @else
                        <button class="btn btn-primary rounded-pill" type="submit"
                          style="width: 200px" id="btn-harus-login" style="width: 100px;">Pilih</button>
                    @endauth
                  </div>
                </div>
              </div>
          </div>
          
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/konseling/content.png"
              class="img-fluid w-50"
              alt="Image"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <h2 class="fw-bold">
              Yuk booking konsultasi kamu dengan <span>Mudah</span>
            </h2>
            <p>
              Yuk, tingkatkan kualitas hubungan Anda dengan layanan konseling dan mentoring di Afeksi! Temukan keseimbangan, kebahagiaan, dan kesetaraan dalam hubungan Anda. Mari kita bersama-sama membangun hubungan yang sehat dan memuaskan. Bergabunglah dengan kami hari ini dan mulailah perjalanan menuju hubungan yang lebih baik!
            </p>
            <div class="checklist me-3">
              <img src="assets/img/konseling/vector.png" class="me-3" /> Pilih
              Paket <br />
              <img src="assets/img/konseling/vector.png" class="me-3" /> Pilih
              Psikolog <br />
              <img src="assets/img/konseling/vector.png" class="me-3" /> Isi
              Identitas & Pilih Jadwal <br />
              <img src="assets/img/konseling/vector.png" class="me-3" />
              Pembayaran
            </div>
          </div>
        </div>
      </div>

      <div class="mt-5 mb-5">
        <div
          class="container-md py-5 px-4 rounded"
          style="background-color: #5a74fd; z-index: -3"
        >
          <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
              <img
                src="assets/img/konseling/tanyaadmin/tanyadmin.png"
                alt="tanyadmin"
                class="img-fluid"
                width="400"
              />
            </div>
            <div class="col-md-5 position-relative" style="z-index: 0">
              <img
                src="assets/img/konseling/tanyaadmin/Ellipse 1215.svg"
                alt=""
                style="
                  position: absolute;
                  top: 40px;
                  right: 120px;
                  z-index: -1;
                "
              />
              <img
                src="assets/img/konseling/tanyaadmin/Ellipse 1215.svg"
                alt=""
                style="
                  width: 30px;
                  position: absolute;
                  top: 140px;
                  right: 300px;
                  z-index: -1;
                "
              />
              <h2 class="fw-bold mb-3 text-white">
                Ingin Berkonsultasi Terlebih Dahulu?
              </h2>
              <p class="mb-5 pb-3" style="color: #ffffff">
                Masih bingung dengan layanan yang cocok dengan kamu, yuk
                konsultasikan bersama admin melalui Whatsapp di tombol ini.
              </p>
              <a href="https://wa.me/6282142625552" target="blank" class="btn-tanya mt-5"
                >Tanya Admin Yuk
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-whatsapp pb-1"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                  /></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End CONTENT -->


  @auth
  <!-- MODAL PROFESSIONAL KONSELING -->
  <div class="modal fade static" id="professional-konseling" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="fw-bold text-center mt-3">
          <span>Layanan Professional Konseling Berupa :</span>
        </h3>
        <div class="row d-flex p-3 justify-content-center">
          <div class="col-md-5  mx-3  mb-3" style=" flex:1; background-image: url('../assets/img/konseling/popup/pop-1.jpg'); object-fit: contain; background-repeat: no-repeat; border-radius: 40px; height: 70%; color: rgb(235, 224, 14)">
            <h4 class="text-warning text-center pt-4">Equality Gender</h4>
            <p class="text-warning p-3 text-justify" style="font-size: 14px;">Layanan Konseling Kesetaraan Gender di Afeksi adalah bagian integral dari produk kami yang bertujuan untuk membantu individu dan pasangan membangun hubungan yang sehat, seimbang, dan setara. Layanan ini menawarkan bimbingan professional yang fokus pada isu-isu gender, dengan tujuan mempromosikan pemahaman yang lebih baik tentang peran dan tanggung jawab dalam hubungan</p>
            <div class="ps-3 pe-3">
              <h5 class="text-warning">Apa saja yang dibahas :</h5>
              <div class="p-3 fw-bold bg-dark text-light bg-opacity-75" style="border-radius: 25px; style=font-size:12px">
                <ul>
                  <li class="mt-3">Pemahaman Hubungan</li>
                  <li class="mt-3">Membangun Intimasi</li>
                  <li class="mt-3">Perencanaan Masa Depan</li>
                </ul>
              </div>
            </div>
            <center class="p-2">
              <form method="POST" action="{{ route('professional.konseling.create.first') }}">
                @csrf
              <button type="submit" class="btn btn-warning mb-1" name="value_id" value="2" style="width: 100px;">Pilih</button>
              </form>
            </center>
          </div>
          <div class="col-md-5 mx-3 " style=" flex:1;background-image: url('../assets/img/konseling/popup/pop-2.jpg'); object-fit: contain; background-repeat: no-repeat; border-radius: 40px; height: 70%; color: rgb(235, 224, 14)">
            <h4 class="text-warning text-center pt-4">Relationship</h4>
            <p class="text-warning p-3 text-justify" style="font-size: 14px;">Layanan Relationship membantu individu dan pasangan membangun hubungan yang sehat, harmonis, dan berkelanjutan. Layanan ini dirancang untuk memberikan pemahaman, dukungan, dan alat yang diperlukan untuk mengatasi masalah yang mungkin muncul dalam hubungan, serta memperkuat ikatan antarindividu dan pasangan.</p>
            <div class="ps-3 pe-3 mt-4 ">
              <h5 class="text-warning">Apa saja yang dibahas :</h5>
              <div class="p-3 fw-bold bg-dark text-light bg-opacity-75" style="border-radius: 25px; style=font-size:12px">
                <ul>
                  <li class="mt-3">Pemahaman Hubungan</li>
                  <li class="mt-3">Membangun Intimasi</li>
                  <li class="mt-3">Perencanaan Masa Depan</li>
                </ul>
              </div>
            </div>
            <center class="p-2 mt-2">
              <form method="POST" action="{{ route('professional.konseling.create.first') }}">
                @csrf
               <button type="submit" class="btn btn-warning mb-1" name="value_id" value="1" style="width: 100px;">Pilih</button>
              </form>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- END-MODAL -->

    {{-- <!-- MODAL PEERS KONSELING -->
  <div class="modal fade static" id="peers-konseling" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="fw-bold text-center mt-3">
          <span>Layanan Peers Konseling Berupa :</span>
        </h3>
        <div class="row d-flex p-3 justify-content-center">
          <div class="col-md-5  mx-3  mb-3" style=" flex:1; background-image: url('../assets/img/konseling/popup/pop-1.jpg'); object-fit: contain; background-repeat: no-repeat; border-radius: 40px; height: 70%; color: rgb(235, 224, 14)">
            <h4 class="text-warning text-center pt-4">Equality Gender</h4>
            <p class="text-warning p-3 text-justify" style="font-size: 14px;">Layanan Konseling Kesetaraan Gender di Afeksi adalah bagian integral dari produk kami yang bertujuan untuk membantu individu dan pasangan membangun hubungan yang sehat, seimbang, dan setara. Layanan ini menawarkan bimbingan professional yang fokus pada isu-isu gender, dengan tujuan mempromosikan pemahaman yang lebih baik tentang peran dan tanggung jawab dalam hubungan</p>
            <div class="ps-3 pe-3">
              <h5 class="text-warning">Apa saja yang dibahas :</h5>
              <div class="p-3 fw-bold bg-dark text-light bg-opacity-75" style="border-radius: 25px; style=font-size:12px">
                <ul>
                  <li class="mt-3">Pemahaman Hubungan</li>
                  <li class="mt-3">Membangun Intimasi</li>
                  <li class="mt-3">Perencanaan Masa Depan</li>
                </ul>
              </div>
            </div>
            <center class="p-2">
              <form method="POST" action="{{ route('peers.konseling.create.first') }}">
                @csrf
              <button type="submit" class="btn btn-warning mb-1" name="value_id" value="4" style="width: 100px;">Pilih</button>
              </form>
            </center>
          </div>
          <div class="col-md-5 mx-3 " style=" flex:1;background-image: url('../assets/img/konseling/popup/pop-2.jpg'); object-fit: contain; background-repeat: no-repeat; border-radius: 40px; height: 70%; color: rgb(235, 224, 14)">
            <h4 class="text-warning text-center pt-4">Relationship</h4>
            <p class="text-warning p-3 text-justify" style="font-size: 14px;">Layanan Relationship membantu individu dan pasangan membangun hubungan yang sehat, harmonis, dan berkelanjutan. Layanan ini dirancang untuk memberikan pemahaman, dukungan, dan alat yang diperlukan untuk mengatasi masalah yang mungkin muncul dalam hubungan, serta memperkuat ikatan antarindividu dan pasangan.</p>
            <div class="ps-3 pe-3 mt-4 ">
              <h5 class="text-warning">Apa saja yang dibahas :</h5>
              <div class="p-3 fw-bold bg-dark text-light bg-opacity-75" style="border-radius: 25px; style=font-size:12px">
                <ul>
                  <li class="mt-3">Pemahaman Hubungan</li>
                  <li class="mt-3">Membangun Intimasi</li>
                  <li class="mt-3">Perencanaan Masa Depan</li>
                </ul>
              </div>
            </div>
            <center class="p-2 mt-2">
              <form method="POST" action="{{ route('peers.konseling.create.first') }}">
                @csrf
               <button type="submit" class="btn btn-warning mb-1" name="value_id" value="3" style="width: 100px;">Pilih</button>
              </form>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- END-MODAL --> --}}
@else
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function() {
              $('#btn-harus-login').click(function() {
                  window.location.href = '{{ route("login") }}';
              });
          });
          $(document).ready(function() {
              $('#btn-harus-login1').click(function() {
                  window.location.href = '{{ route("login") }}';
              });
          });
  </script>
@endauth
  


@section('script')
   <script src="assets/js/slider.js"></script>
@endsection


@include('../partials/footer') 
@endsection

