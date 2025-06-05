<?php
$show_hero = get_field('show_hero');
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_buttons = get_field('hero_buttons');
$first_cta = $hero_buttons['cta_lets_talk'];
$second_cta = $hero_buttons['cta_portfolio'];

$hero_image = get_field('hero_image');
?>

<?php if ($show_hero): ?>

    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if ($hero_title <> ''): ?>
                        <h1><?php echo $hero_title; ?></h1>
                    <?php endif; ?>
                    <?php if ($hero_description <> ''): ?>
                        <p><?php echo $hero_description; ?></p>
                    <?php endif; ?>

                    <?php if ($first_cta <> ''): ?>
                        <a href="<?php echo $first_cta['url']; ?>" class="btn--primary"><?php echo $first_cta['title']; ?>
                            <svg width="20.000000" height="19.000000" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs />
                                <path id="Icon"
                                    d="M17 1C18.1 1 19 1.89 19 3L19 11C19 12.1 18.1 13 17 13L12 13L7 18L7 13L3 13C1.89 13 1 12.1 1 11L1 3C1 1.89 1.89 1 3 1L17 1ZM6 7L6.01 7M10 7L10.01 7M14 7L14.01 7"
                                    stroke="#FFFFFF" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </svg>

                        </a>

                    <?php endif; ?>
                    <?php if ($second_cta <> ''): ?>
                        <a href="<?php echo $second_cta['url']; ?>"
                            class="btn--secondary ml-3"><?php echo $second_cta['title']; ?>
                            <svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                <defs>
                                    <clipPath id="clip2_158">
                                        <rect id="Arrow right" width="20.000004" height="20.000000" fill="white"
                                            fill-opacity="0" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clip2_158)">
                                    <path id="Icon"
                                        d="M10.29 3.29C10.68 2.9 11.31 2.9 11.7 3.29L17.7 9.29C18.09 9.68 18.09 10.31 17.7 10.7L11.7 16.7C11.31 17.09 10.68 17.09 10.29 16.7C9.9 16.31 9.9 15.68 10.29 15.29L14.58 11L3 11C2.44 11 2 10.55 2 10C2 9.44 2.44 9 3 9L14.58 9L10.29 4.7C9.9 4.31 9.9 3.68 10.29 3.29Z"
                                        fill="#6B7280" fill-opacity="1.000000" fill-rule="evenodd" />
                                </g>
                            </svg>

                        </a>

                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $hero_image ?>" alt="">
                </div>
            </div>
        </div>
        </div>

    </section>

<?php endif;