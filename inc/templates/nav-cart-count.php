<a class="mobile-bottom-nav-cart-link" href="<?php echo esc_url(wc_get_cart_url() );?> " title="Cart Link">

    <svg width="32px" height="32px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_62_465)">
            <path
                d="M29.166 74.9999C24.5827 74.9999 20.8743 78.7499 20.8743 83.3333C20.8743 87.9166 24.5827 91.6666 29.166 91.6666C33.7493 91.6666 37.4993 87.9166 37.4993 83.3333C37.4993 78.7499 33.7493 74.9999 29.166 74.9999ZM4.16602 12.4999C4.16602 14.7916 6.04102 16.6666 8.33268 16.6666H12.4993L27.4993 48.2916L21.8743 58.4583C18.8327 64.0416 22.8327 70.8333 29.166 70.8333H74.9993C77.291 70.8333 79.166 68.9583 79.166 66.6666C79.166 64.3749 77.291 62.4999 74.9993 62.4999H29.166L33.7493 54.1666H64.791C67.916 54.1666 70.666 52.4583 72.0827 49.8749L86.9993 22.8333C88.541 20.0833 86.541 16.6666 83.3743 16.6666H21.7077L18.916 10.7083C18.2493 9.24992 16.7493 8.33325 15.166 8.33325H8.33268C6.04102 8.33325 4.16602 10.2083 4.16602 12.4999ZM70.8327 74.9999C66.2493 74.9999 62.541 78.7499 62.541 83.3333C62.541 87.9166 66.2493 91.6666 70.8327 91.6666C75.416 91.6666 79.166 87.9166 79.166 83.3333C79.166 78.7499 75.416 74.9999 70.8327 74.9999Z"
                fill="#47483B" />
        </g>
        <defs>
            <clipPath id="clip0_62_465">
                <rect width="100" height="100" fill="white" />
            </clipPath>
        </defs>
    </svg>
    <div class="view-cart-wrapper">
        <span class="dynamic-count"><?php echo WC()->cart->get_cart_contents_count();?></span>
        <span>
            View Cart
        </span>
    </div>
</a>