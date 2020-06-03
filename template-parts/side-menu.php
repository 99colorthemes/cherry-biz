<div id="side-menu" class="nnc-sidenav">
    <div class="nnc-sidenav__bar">
        <div class="d-flex flex-column side-menu__box">
            <nav id="site-navigation" class="nnc-main-navigation nnc-sidenav__menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                ]);
                ?>
            </nav>
            <div class="d-flex justify-content-end p-4">
                <button role="button" id="nnc-close-icon" class="nnc-sidenav__close bg-none p-0 l-h-0" title="close">
                    <svg class="nnc-icon nnc-icon--md" id="nnc-icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.785 469.785">
                        <path d="M285.368 234.691L459.36 60.697c13.895-13.88 13.895-36.395 0-50.275-13.881-13.895-36.38-13.895-50.275 0L235.091 184.416 61.082 10.421c-13.866-13.895-36.395-13.895-50.275 0-13.88 13.881-13.88 36.395 0 50.275l174.01 173.995L10.421 409.085c-13.895 13.895-13.895 36.395 0 50.275 6.94 6.955 16.043 10.425 25.145 10.425 9.088 0 18.19-3.47 25.132-10.425L235.09 284.967l173.995 173.995c6.955 6.94 16.043 10.425 25.145 10.425 9.088 0 18.19-3.485 25.131-10.425 13.895-13.88 13.895-36.38 0-50.275L285.367 234.691z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
