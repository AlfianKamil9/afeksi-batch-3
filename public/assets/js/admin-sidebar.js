window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    const activeIcon = document.querySelector('.active-icon');
    const inactiveIcon = document.querySelector('.inactive-icon');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                'sb-sidenav-toggled'));

            activeIcon.classList.toggle('hidden');
            inactiveIcon.classList.toggle('hidden');
        });
    }
});
