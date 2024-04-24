
<section class="logo">
        <a href="/" class="">
            <img src="assetds/images/OIG4.jpeg" alt="Logo" style="margin-left: 53px;width: 190px;">
        </a>
    </section>
    <nav>
        <ul class="menu">
            <li><a href="../../index.php" class="no-decoration">HOME</a></li>
            <li><a href="#" class="no-decoration">MEER INFO</a></li>
            <li><a href="#" class="no-decoration">CONTACT</a></li>
            <li><a href="#" class="no-decoration">CREDITS</a></li>
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