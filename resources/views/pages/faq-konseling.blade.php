
@extends('../layout')

@section('title', 'FAQ | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
    <link rel="stylesheet" href="/assets/css/faq-konseling.css">
@endsection


@section('content')
<section id="Konseling">
  <div class="hero-2 d-flex align-items-center" style="padding-top: 94px">
    <div class="container py-5 my-5">
      <h1 class="display-5 fw-semibold">F.A.Q - Pertanyaan yang Sering Ditanyakan</h1>
      <p class="fs-4 mt-5 fw-light">Bagaimana kami bisa membantu Anda?</p>
    </div>
  </div>

  <div>
    <div class="container pe-2 py-5">
      <div class="row">
        <div class="col-sm">
              <button onclick="konseling()" id="btn-konseling" class="tombol-aktif btn px-5 py-3 fw-bold btn-secondary" >FAQ Konseling</button>
              <button onclick="mentoring()" id="btn-mentoring" class="btn px-5 py-3 fw-bold btn-outline-secondary">FAQ Mentoring</button>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="accordion mb-5 container" id="accordionExample">
    <section id="konseling-badge" >
      <div class="accordion mb-5 container" id="accordionExample">
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingOne">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <h2>Apa itu Konseling</h2>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
              Konseling adalah layanan konsultasi one on one maupun berpasangan dalam waktu tertentu dan jadwal yang sudah dipesan dan dijadwalkan di awal pemesanan.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTwo">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h2>Apa saja masalah yang bisa ditangani dalam konseling</h2>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Masalah yang ditangani dalam konseling sangat beragam mulai dari masalah berkaitan dengan overthinking, butuh teman bercerita, masalah kecemasan hingga masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingThree">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h2>Ada berapa macam layanan konseling</h2>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Kami membedakan layanan konseling kami berdasarkan pada kebutuhan Anda serta tingkat permasalahan yang anda alami. Kami memiliki dua layanan yaitu <span class="fst-italic">peers konseling serta professional konseling</span>.
                  </p>
                </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFour">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h2>Apa perbedaan keduanya?</h2> 
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Peers konseling hanya diperuntukkan untuk Anda yang memiliki masalah kecemasan, overthinking, maupun masalah non klinis yang tidak membahayakan Anda serta orang di sekitar anda. Professional konseling diperuntukkan bagi Anda yang memiliki masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>         
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFive">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h2>Siapa saja yang memberikan layanan dalam konseling?</h2> 
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Peers konseling akan dilayani oleh lulusan psikologi dari berbagai kampus kenamaan di seluruh Indonesia yang sudah melewati pelatihan khusus terkait dengan masalah psikologis dan sudah memiliki ilmu serta pemahaman mendalam tentang ilmu psikologi dan selalu dipantau oleh psikolog Afeksi.Professional konseling akan dilayani oleh professional di bidangnya masing-masing sehingga dapat menjawab keresahan dan menyelesaikan permasalahan klinis maupun permasalahan yang membahayakan keselamatan jiwa dengan baik. Kami memiliki psikolog professional dengan keahlian masing-masing, Kami memiliki ahli hukum yang berpengalaman terkait hubungan relasi, Kami juga memiliki ahli kekerasan seksual yang akan membantu menyelesaikan permasalahanmu.
                  </p>   
              </div>
          </div>
        </div>
        
    
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingEight">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <h2>Keamanan Informasi Pribadi Anda</h2> 
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kerahasiaan Informasi Pribadi Anda adalah hal yang terpenting, sehingga kami selalu berusaha menjaga erat Informasi Pribadi Anda. Kami akan memberlakukan upaya terbaik untuk melindungi dan mengamankan data dan Informasi Pribadi Anda dari akses, pengumpulan, penggunaan atau pengungkapan oleh orang-orang yang tidak berwenang dan dari pengolahan yang bertentangan dengan hukum, kehilangan yang tidak disengaja, pemusnahan dan kerusakan atau risiko serupa. Namun, pengiriman informasi melalui internet tidak sepenuhnya aman. Walau kami akan berusaha sebaik mungkin untuk melindungi Informasi Pribadi Anda, Anda mengakui bahwa kami tidak dapat menjamin keutuhan dan keakuratan Informasi Pribadi apa pun yang Anda kirimkan melalui Internet, atau menjamin bahwa Informasi Pribadi tersebut tidak akan dicegat, diakses, diungkapkan, diubah atau dihancurkan oleh pihak ketiga yang tidak berwenang, karena faktor-faktor di luar kendali kami. Anda bertanggung jawab untuk menjaga kerahasiaan detail Akun Anda, termasuk kata sandi Anda dengan siapapun dan harus selalu menjaga dan bertanggung jawab atas keamanan perangkat yang Anda gunakan.
                  </p>      
                </div>
          </div>
        </div>
        
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTen">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <h2>Materi Pemasaran</h2> 
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kami dapat mengirimkan Anda pemasaran langsung, iklan, dan komunikasi promosi melalui iklan, push-notification, email marketing, social media, dan berbagai layanan pesan yang terkait (“Materi Pemasaran”) jika Anda telah setuju untuk menerima materi pemasaran dari kami, Anda dapat memilih untuk tidak menerima komunikasi pemasaran tersebut kapan saja dengan mengklik pilihan “berhenti berlangganan” yang ada dalam pesan yang bersangkutan, atau menghubungi kami melalui detail kontak yang tercantum di bawah ini. Mohon perhatikan bahwa jika Anda memilih untuk keluar, kami masih dapat mengirimi Anda pesan-pesan non-pemasaran, seperti Anda terima atau informasi tentang Akun Anda.
                  </p>
              </div>
          </div>
        </div>
      </div>
    </section>

    {{-- MENTORING BADGE --}}
  <section id="mentoring-badge">
      <div class="accordion mb-5 container" id="accordionExample">
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingOne">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <h2>Apa itu Mentoring</h2>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
              Mentoring adalah sebuah kegiatan pendampingan untuk beberapa orang baik itu dari perusahaan ataupun tempat lain seperti universitas. Dimana mereka yang akan didampingi biasanya memiliki keterbatasan wawasan atau bisa dikatakan kurang mahir dalam melakukan sesuatu.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTwo">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h2>Apa saja masalah yang bisa ditangani dalam Mentoring</h2>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Masalah yang ditangani dalam konseling sangat beragam mulai dari masalah berkaitan dengan overthinking, butuh teman bercerita, masalah kecemasan hingga masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingThree">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h2>Ada berapa macam layanan mentoring</h2>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Kami membedakan layanan mentoring kami berdasarkan pada kebutuhan Anda serta tingkat permasalahan yang anda alami. Kami memiliki tiga layanan yaitu <span class="fst-italic">relationship mentoring, pre-marriage mentoring, serta parenting mentoring</span>.
                  </p>
                </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFour">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h2>Apa perbedaan keduanya?</h2> 
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                Peers konseling hanya diperuntukkan untuk Anda yang memiliki masalah kecemasan, overthinking, maupun masalah non klinis yang tidak membahayakan Anda serta orang di sekitar anda. Professional konseling diperuntukkan bagi Anda yang memiliki masalah yang bersifat klinis dan dikhawatirkan dapat menyebabkan perselisihan maupun membahayakan hubungan relasi maupun individu lain.
                </p>         
              </div>
          </div>
        </div>
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingFive">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h2>Siapa saja yang memberikan layanan dalam mentoring?</h2> 
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                  Peers konseling akan dilayani oleh lulusan psikologi dari berbagai kampus kenamaan di seluruh Indonesia yang sudah melewati pelatihan khusus terkait dengan masalah psikologis dan sudah memiliki ilmu serta pemahaman mendalam tentang ilmu psikologi dan selalu dipantau oleh psikolog Afeksi.Professional konseling akan dilayani oleh professional di bidangnya masing-masing sehingga dapat menjawab keresahan dan menyelesaikan permasalahan klinis maupun permasalahan yang membahayakan keselamatan jiwa dengan baik. Kami memiliki psikolog professional dengan keahlian masing-masing, Kami memiliki ahli hukum yang berpengalaman terkait hubungan relasi, Kami juga memiliki ahli kekerasan seksual yang akan membantu menyelesaikan permasalahanmu.

                  </p>   
              </div>
          </div>
        </div>
        
    
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingEight">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <h2>Keamanan Informasi Pribadi Anda</h2> 
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kerahasiaan Informasi Pribadi Anda adalah hal yang terpenting, sehingga kami selalu berusaha menjaga erat Informasi Pribadi Anda. Kami akan memberlakukan upaya terbaik untuk melindungi dan mengamankan data dan Informasi Pribadi Anda dari akses, pengumpulan, penggunaan atau pengungkapan oleh orang-orang yang tidak berwenang dan dari pengolahan yang bertentangan dengan hukum, kehilangan yang tidak disengaja, pemusnahan dan kerusakan atau risiko serupa. Namun, pengiriman informasi melalui internet tidak sepenuhnya aman. Walau kami akan berusaha sebaik mungkin untuk melindungi Informasi Pribadi Anda, Anda mengakui bahwa kami tidak dapat menjamin keutuhan dan keakuratan Informasi Pribadi apa pun yang Anda kirimkan melalui Internet, atau menjamin bahwa Informasi Pribadi tersebut tidak akan dicegat, diakses, diungkapkan, diubah atau dihancurkan oleh pihak ketiga yang tidak berwenang, karena faktor-faktor di luar kendali kami. Anda bertanggung jawab untuk menjaga kerahasiaan detail Akun Anda, termasuk kata sandi Anda dengan siapapun dan harus selalu menjaga dan bertanggung jawab atas keamanan perangkat yang Anda gunakan.
                  </p>      
                </div>
          </div>
        </div>
        
        <div class="accordion-item-custom rounded-3">
          <h2 class="accordion-header rounded-3" id="headingTen">
            <button class="accordion-button-custom arrow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <h2>Materi Pemasaran</h2> 
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p>
                      Kami dapat mengirimkan Anda pemasaran langsung, iklan, dan komunikasi promosi melalui iklan, push-notification, email marketing, social media, dan berbagai layanan pesan yang terkait (“Materi Pemasaran”) jika Anda telah setuju untuk menerima materi pemasaran dari kami, Anda dapat memilih untuk tidak menerima komunikasi pemasaran tersebut kapan saja dengan mengklik pilihan “berhenti berlangganan” yang ada dalam pesan yang bersangkutan, atau menghubungi kami melalui detail kontak yang tercantum di bawah ini. Mohon perhatikan bahwa jika Anda memilih untuk keluar, kami masih dapat mengirimi Anda pesan-pesan non-pemasaran, seperti Anda terima atau informasi tentang Akun Anda.
                  </p>
                </div>
          </div>
        </div>
      </div>
  </section>
    </div>

 <div class="mb-5">
    <div class="container p-5 rounded" style="background-color: #d3daff">
      <div class="row">
        <div class="col-sm-8 fw-bold mb-3" style="color: #233dff">Memiliki pertanyaan lain atau ingin berdiskusi lebih lanjut?</div>
        <div class="col-sm-4">
          <a href="#" class="btn-whatsapp d-flex align-items-center gap-2" style="color: #ffffff; width:fit-content;"
            ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.0508 4.91006C18.134 3.98399 17.042 3.24973 15.8384 2.75011C14.6349 2.25049 13.3439 1.99552 12.0408 2.00006C6.58078 2.00006 2.13078 6.45006 2.13078 11.9101C2.13078 13.6601 2.59078 15.3601 3.45078 16.8601L2.05078 22.0001L7.30078 20.6201C8.75078 21.4101 10.3808 21.8301 12.0408 21.8301C17.5008 21.8301 21.9508 17.3801 21.9508 11.9201C21.9508 9.27006 20.9208 6.78006 19.0508 4.91006ZM12.0408 20.1501C10.5608 20.1501 9.11078 19.7501 7.84078 19.0001L7.54078 18.8201L4.42078 19.6401L5.25078 16.6001L5.05078 16.2901C4.22853 14.977 3.79192 13.4593 3.79078 11.9101C3.79078 7.37006 7.49078 3.67006 12.0308 3.67006C14.2308 3.67006 16.3008 4.53006 17.8508 6.09006C18.6183 6.85402 19.2265 7.76272 19.6402 8.76348C20.0539 9.76425 20.2648 10.8372 20.2608 11.9201C20.2808 16.4601 16.5808 20.1501 12.0408 20.1501ZM16.5608 13.9901C16.3108 13.8701 15.0908 13.2701 14.8708 13.1801C14.6408 13.1001 14.4808 13.0601 14.3108 13.3001C14.1408 13.5501 13.6708 14.1101 13.5308 14.2701C13.3908 14.4401 13.2408 14.4601 12.9908 14.3301C12.7408 14.2101 11.9408 13.9401 11.0008 13.1001C10.2608 12.4401 9.77078 11.6301 9.62078 11.3801C9.48078 11.1301 9.60078 11.0001 9.73078 10.8701C9.84078 10.7601 9.98078 10.5801 10.1008 10.4401C10.2208 10.3001 10.2708 10.1901 10.3508 10.0301C10.4308 9.86006 10.3908 9.72006 10.3308 9.60006C10.2708 9.48006 9.77078 8.26006 9.57078 7.76006C9.37078 7.28006 9.16078 7.34006 9.01078 7.33006H8.53078C8.36078 7.33006 8.10078 7.39006 7.87078 7.64006C7.65078 7.89006 7.01078 8.49006 7.01078 9.71006C7.01078 10.9301 7.90078 12.1101 8.02078 12.2701C8.14078 12.4401 9.77078 14.9401 12.2508 16.0101C12.8408 16.2701 13.3008 16.4201 13.6608 16.5301C14.2508 16.7201 14.7908 16.6901 15.2208 16.6301C15.7008 16.5601 16.6908 16.0301 16.8908 15.4501C17.1008 14.8701 17.1008 14.3801 17.0308 14.2701C16.9608 14.1601 16.8108 14.1101 16.5608 13.9901Z"
                fill="white" />
            </svg>
            Whatsapp Kami</a
          >
        </div>
      </div>
    </div>
  </div>

    

@include('../partials/footer') 
@endsection

@section('script')
   <script src="/assets/js/faq.js"></script>
@endsection


