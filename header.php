
<section class="logo">
        <a href="/" class="">
            <img src="../../images/headerLogo.png" alt="Logo" style="margin-left: 53px;width: 190px;">
        </a>
    </section>
    <nav>
        <ul class="menu">
            <li><a href="../../index.php" class="no-decoration">HOME</a></li>
            <li><a href="../../pages/menu/index.php" class="no-decoration">MEER INFO</a></li>
            <li><a href="../../pages/item/index.php" class="no-decoration"></a>CONTACT</li>
            <li><a href="../../pages/arrangementen/index.php" class="no-decoration">CREDITS</a></li>
        </ul>
    </nav>
    <div class="menu-toggle">&#9776;</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        menuToggle.addEventListener('click', function () {
            menu.classList.toggle('active');
        });
    });
</script>