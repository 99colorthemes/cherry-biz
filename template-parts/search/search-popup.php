<div class="search-block">
    <div class="nnc-search-form h-100 container mb-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <form role="search" method="get" class="search-form d-flex align-items-center" action="">
                    <label class="m-0">
                        <span class="screen-reader-text"><?php esc_html_e('Search for', 'cherry-biz'); ?>:</span>
                        <input type="search"
                               class="search-field"
                               placeholder="<?php esc_attr_e('Search...', 'cherry-biz'); ?>"
                               value=""
                               name="s"
                               autofocus>
                    </label>
                    <button role="button" class="btn btn--primary btn--icon">
                        <i class="fas fa-search text-white"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <button role="button" id="nnc-search-close" class="search-close bg-none p-0">
        <i class="fas fa-times"></i>
    </button>
</div>