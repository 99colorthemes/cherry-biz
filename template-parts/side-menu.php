<div id="side-menu" class="nnc-sidenav">
    <div class="nnc-sidenav__bar">
        <div class="d-flex flex-column side-menu__box">
            <div class="d-flex justify-content-end p-4">
            <button role="button" id="nnc-close-icon" class="nnc-sidenav__close bg-none p-0 l-h-0" title="close">
                <svg class="nnc-icon nnc-icon--md">
                    <use xlink:href="#nnc-icon-close"></use>
                </svg>
            </button>
            </div>
            <nav id="site-navigation" class="nnc-main-navigation nnc-sidenav__menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                ]);
                ?>
            </nav>
        </div>
    </div>
</div>
