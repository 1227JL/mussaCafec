
<header class="user">
    <div class="contain">
        <div class="logo">
            <h1 class="heading">Mussa Cafec</h1>
            <button class="menu" onclick="handleMenu()">
                <img src="/build/assets/navegacion/menu.png" height="50" alt="icono menu hamburguesa">
            </button>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/">Inicio</a>
                </li>
                <li>
                    <a href="/concursos.php">Concursos</a>
                </li>
                <li>
                    <a href="/nosotros.php">Nosotros</a>
                </li>
                <li>
                    <a href="">Contáctanos</a>
                </li>
                <li>
                    <a href="/admin">Admin</a>
                </li>
            </ul>
        </nav>   
    </div>
    <section class="contain message">
        <h1 class="heading">¡Bienvenidos al <span>VI</span> Encuentro de Semilleros de Investigación SENA Regional Casanare!</h1>
        <h2>Impulsando la Innovación y la Transferencia Energética en la Región Orinoquia</h2>
    </section>
    <section class="eventos">
        <!-- <h1 class="heading">Eventos</h1> -->
    </section>
</header>
<div class="modal-menu-phone">
    <div class="nav-phone">
        <button class="close" onclick="handleMenu()">X</button>
        <div class="head">
            <img class="logo" src='/build/assets/logo.jpg' alt="logo sena">
            <h1 class="heading">Mussa Cafec</h1>
        </div>
        <ul>
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="/concursos.php">Concursos</a>
            </li>
            <li>
                <a href="/nosotros.php">Nosotros</a>
            </li>
            <li>
                <a href="">Contáctanos</a>
            </li>
            <li>
                <a href="/admin">Admin</a>
            </li>
        </ul>
    </div>
</div>
<script>
    const menuIcon = document.querySelector('.menu');
    var menu = document.querySelector('.modal-menu-phone');
    var nav = document.querySelector('.nav-phone');

    function handleMenu() {
        if (!menu.classList.contains('display')) {
            menu.classList.add('display');
            setTimeout(() => {
                nav.classList.add('display-nav');
            }, 100);
        } else {
            nav.classList.remove('display-nav');
            setTimeout(() => {
                menu.classList.remove('display');
            }, 400);
        }
    }

    function validateWidth() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth > 768) {
            nav.classList.remove('display-nav');
            menu.classList.remove('display');
        }
    }

    window.addEventListener('resize', validateWidth);
    
    function toggleNotifications() {
        const notificationList = document.getElementById('notificationList');
        if (notificationList) {
            notificationList.classList.toggle('display');
        } else {
            console.log("El elemento con ID 'notificationList' no existe en el DOM.");
        }
    }
</script>