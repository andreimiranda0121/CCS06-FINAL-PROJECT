const menuIcon = document.querySelector('.menu-icon');
    const sidebar = document.querySelector('.sidebar');
    const container = document.querySelector('.container');

    menuIcon.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-active');
        container.classList.toggle('container-active');
    });

    container.addEventListener('click', (event) => {
        if (event.target === container) {
            sidebar.classList.remove('sidebar-active');
            container.classList.remove('container-active');
        }
    });