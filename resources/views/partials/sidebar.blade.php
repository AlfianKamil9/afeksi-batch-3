<div class="bg-light rounded-circle d-flex justify-content-center align-items-center border" id="profile-foto" style="width: 125px; height: 125px;cursor:pointer;">
    <svg data-src="/assets/img/dashboard-profile/user.svg" width="50px" height="50px"></svg>
</div>
<div class="mt-3" id="profile-foto" style="cursor:pointer;">
    <h6 class="fw-bold">{{ Auth::user()->nama }}</h6>
    <p>{{ Auth::user()->email }}</p>
</div>
 
<div class="mb-4 mt-5 p-1  @if(Route::currentRouteName() == 'dashboard.index') active @endif "><a href="{{ route('dashboard.index') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/dashboard.svg" class="me-2" width="20" height="20" fill="#828282"></svg>Dashboard</a></div>
<div class="mb-4 @if(Route::currentRouteName() == 'dashboard.profile.index') active @endif p-1"><a href="{{ route('dashboard.profile.index') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/user.svg" class="me-2" width="20" height="20"></svg>Profile</a></div>
<div class="mb-4 p-1"><a href="#" class="text-secondary"><img src="/assets/img/dashboard-profile/voucher.svg" width="20" height="20" class="me-2">Voucher</a></div>
{{-- <div class="mb-4 p-1"><a href="#" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/courses.svg" width="20" height="20" fill="#828282" class="me-2"></svg>My Courses</a></div> --}}
<div class="mb-4 @if(Route::currentRouteName() == 'dashboard.show.e-book') active @endif p-1"><a href="{{ route('dashboard.show.e-book') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/e-book.svg" width="20" height="20" fill="#828282" class="me-2"></svg>My E-Book</a></div>
<div class="mb-4 @if(Route::currentRouteName() == 'dashboard.show.rekap.transaksi') active @endif p-1"><a href="{{ route('dashboard.show.rekap.transaksi') }}" class="text-secondary"><img src="/assets/img/dashboard-profile/transaction.svg" alt="" width="20" height="20" fill="#828282" class="me-2">Rekap Transaksi</a></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function() {
            $('#profile-foto').click(function(event) {
            event.preventDefault();
            window.location.href = '{{ route("dashboard.profile.index") }}';
            });
        });
</script>