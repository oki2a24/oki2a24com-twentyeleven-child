<?php
/**
 * JavaScript や CSS を読み込みます。
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        '201806200127',
        'all'
    );
}

/**
 * more タグで URL 末端に付く #more-xxxx を削除します。
 */
function remove_more_link_scroll( $link ) {
        $link = preg_replace( '|#more-[0-9]+|', '', $link );
        return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/**
 * 親テーマのセットアップに追加する処理を定義します。
 */
function remove_twentyseventeen_headers() {
    // デフォルトヘッダー画像登録を削除
    unregister_default_headers( array(
        'default-image'
    ) );
}
add_action( 'after_setup_theme', 'remove_twentyseventeen_headers', 11 );

function oki2a24_twentyseventeen_child_setup() {
    // デフォルトヘッダー画像を設定
    register_default_headers( array(
        'PC292698' => array(
            'url' => '%2$s/images/headers/PC292698.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC292698-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC292698', 'twentyeleven' )
        ),
        'PC292705' => array(
            'url' => '%2$s/images/headers/PC292705.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC292705-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC292705', 'twentyeleven' )
        ),
        'PC292714' => array(
            'url' => '%2$s/images/headers/PC292714.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC292714-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC292714', 'twentyeleven' )
        ),
        'PC292720' => array(
            'url' => '%2$s/images/headers/PC292720.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC292720-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC292720', 'twentyeleven' )
        ),
        'PC302860' => array(
            'url' => '%2$s/images/headers/PC302860.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC302860-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC302860', 'twentyeleven' )
        ),
        'PC312874' => array(
            'url' => '%2$s/images/headers/PC312874.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312874-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312874', 'twentyeleven' )
        ),
        'PC312888' => array(
            'url' => '%2$s/images/headers/PC312888.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312888-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312888', 'twentyeleven' )
        ),
        'PC312889' => array(
            'url' => '%2$s/images/headers/PC312889.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312889-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312889', 'twentyeleven' )
        ),
        'PC312903' => array(
            'url' => '%2$s/images/headers/PC312903.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312903-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312903', 'twentyeleven' )
        ),
        'PC312905' => array(
            'url' => '%2$s/images/headers/PC312905.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312905-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312905', 'twentyeleven' )
        ),
        'PC312907' => array(
            'url' => '%2$s/images/headers/PC312907.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312907-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312907', 'twentyeleven' )
        ),
        'PC312908' => array(
            'url' => '%2$s/images/headers/PC312908.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312908-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312908', 'twentyeleven' )
        ),
        'PC312913' => array(
            'url' => '%2$s/images/headers/PC312913.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312913-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312913', 'twentyeleven' )
        ),
        'PC312929' => array(
            'url' => '%2$s/images/headers/PC312929.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312929-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312929', 'twentyeleven' )
        ),
        'PC312932' => array(
            'url' => '%2$s/images/headers/PC312932.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312932-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312932', 'twentyeleven' )
        ),
        'PC312936' => array(
            'url' => '%2$s/images/headers/PC312936.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312936-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312936', 'twentyeleven' )
        ),
        'PC312938' => array(
            'url' => '%2$s/images/headers/PC312938.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312938-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312938', 'twentyeleven' )
        ),
        'PC312939' => array(
            'url' => '%2$s/images/headers/PC312939.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312939-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312939', 'twentyeleven' )
        ),
        'PC312954' => array(
            'url' => '%2$s/images/headers/PC312954.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312954-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312954', 'twentyeleven' )
        ),
        'PC312955' => array(
            'url' => '%2$s/images/headers/PC312955.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312955-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312955', 'twentyeleven' )
        ),
        'P1013000' => array(
            'url' => '%2$s/images/headers/P1013000.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013000-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013000', 'twentyeleven' )
        ),
        'P1013020' => array(
            'url' => '%2$s/images/headers/P1013020.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013020-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013020', 'twentyeleven' )
        ),
        'P1013024' => array(
            'url' => '%2$s/images/headers/P1013024.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013024-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013024', 'twentyeleven' )
        ),
        'P1013025' => array(
            'url' => '%2$s/images/headers/P1013025.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013025-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013025', 'twentyeleven' )
        ),
        'P1013031' => array(
            'url' => '%2$s/images/headers/P1013031.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013031-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013031', 'twentyeleven' )
        ),
        'P1013032' => array(
            'url' => '%2$s/images/headers/P1013032.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013032-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013032', 'twentyeleven' )
        ),
        'P1013033' => array(
            'url' => '%2$s/images/headers/P1013033.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013033-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013033', 'twentyeleven' )
        ),
        'P1023066' => array(
            'url' => '%2$s/images/headers/P1023066.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1023066-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1023066', 'twentyeleven' )
        ),
        'P1033099' => array(
            'url' => '%2$s/images/headers/P1033099.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1033099-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1033099', 'twentyeleven' )
        ),
        'P1033111' => array(
            'url' => '%2$s/images/headers/P1033111.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1033111-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1033111', 'twentyeleven' )
        ),
        'P1033112' => array(
            'url' => '%2$s/images/headers/P1033112.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1033112-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1033112', 'twentyeleven' )
        ),
        'P1063299' => array(
            'url' => '%2$s/images/headers/P1063299.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063299-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063299', 'twentyeleven' )
        ),
        'P1063301' => array(
            'url' => '%2$s/images/headers/P1063301.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063301-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063301', 'twentyeleven' )
        ),
        'P1063306' => array(
            'url' => '%2$s/images/headers/P1063306.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063306-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063306', 'twentyeleven' )
        ),
        'P1063308' => array(
            'url' => '%2$s/images/headers/P1063308.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063308-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063308', 'twentyeleven' )
        ),
        'P1063327' => array(
            'url' => '%2$s/images/headers/P1063327.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063327-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063327', 'twentyeleven' )
        ),
        'P1063329' => array(
            'url' => '%2$s/images/headers/P1063329.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063329-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063329', 'twentyeleven' )
        ),
        'P1063330' => array(
            'url' => '%2$s/images/headers/P1063330.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063330-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063330', 'twentyeleven' )
        ),
        'P1063331' => array(
            'url' => '%2$s/images/headers/P1063331.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063331-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063331', 'twentyeleven' )
        ),
        'P1063337' => array(
            'url' => '%2$s/images/headers/P1063337.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063337-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063337', 'twentyeleven' )
        ),
        'P1063340' => array(
            'url' => '%2$s/images/headers/P1063340.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1063340-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1063340', 'twentyeleven' )
        ),
        'P1083464' => array(
            'url' => '%2$s/images/headers/P1083464.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083464-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083464', 'twentyeleven' )
        ),
        'P1083465' => array(
            'url' => '%2$s/images/headers/P1083465.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083465-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083465', 'twentyeleven' )
        ),
        'P1083466' => array(
            'url' => '%2$s/images/headers/P1083466.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083466-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083466', 'twentyeleven' )
        ),
        'P1083467' => array(
            'url' => '%2$s/images/headers/P1083467.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083467-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083467', 'twentyeleven' )
        ),
        'P1083469' => array(
            'url' => '%2$s/images/headers/P1083469.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083469-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083469', 'twentyeleven' )
        ),
        'P1083471' => array(
            'url' => '%2$s/images/headers/P1083471.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083471-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083471', 'twentyeleven' )
        ),
        'P1083509' => array(
            'url' => '%2$s/images/headers/P1083509.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083509-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083509', 'twentyeleven' )
        ),
        'P1083517' => array(
            'url' => '%2$s/images/headers/P1083517.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083517-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083517', 'twentyeleven' )
        ),
        'P1083523' => array(
            'url' => '%2$s/images/headers/P1083523.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083523-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083523', 'twentyeleven' )
        ),
        'P1083525' => array(
            'url' => '%2$s/images/headers/P1083525.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1083525-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1083525', 'twentyeleven' )
        ),
        'P1113648' => array(
            'url' => '%2$s/images/headers/P1113648.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1113648-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1113648', 'twentyeleven' )
        ),
        'P1113772' => array(
            'url' => '%2$s/images/headers/P1113772.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1113772-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1113772', 'twentyeleven' )
        ),
        'P1113773' => array(
            'url' => '%2$s/images/headers/P1113773.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1113773-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1113773', 'twentyeleven' )
        ),
        'P1113774' => array(
            'url' => '%2$s/images/headers/P1113774.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1113774-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1113774', 'twentyeleven' )
        ),
        'P1123778' => array(
            'url' => '%2$s/images/headers/P1123778.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1123778-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1123778', 'twentyeleven' )
        ),
        'P1123779' => array(
            'url' => '%2$s/images/headers/P1123779.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1123779-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1123779', 'twentyeleven' )
        ),
        'P7243812' => array(
            'url' => '%2$s/images/headers/P7243812.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7243812-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7243812', 'twentyeleven' )
        ),
        'P7243816' => array(
            'url' => '%2$s/images/headers/P7243816.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7243816-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7243816', 'twentyeleven' )
        ),
        'V4010034' => array(
            'url' => '%2$s/images/headers/V4010034.JPG',
            'thumbnail_url' => '%2$s/images/headers/V4010034-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'V4010034', 'twentyeleven' )
        ),
        'P7142884' => array(
            'url' => '%2$s/images/headers/P7142884.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7142884-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7142884', 'twentyeleven' )
        ),
        'P7142885' => array(
            'url' => '%2$s/images/headers/P7142885.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7142885-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7142885', 'twentyeleven' )
        ),
        'P7142886' => array(
            'url' => '%2$s/images/headers/P7142886.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7142886-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7142886', 'twentyeleven' )
        ),
        'P7173225' => array(
            'url' => '%2$s/images/headers/P7173225.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7173225-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7173225', 'twentyeleven' )
        ),
        'P7173303' => array(
            'url' => '%2$s/images/headers/P7173303.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7173303-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7173303', 'twentyeleven' )
        ),
        'P7193401' => array(
            'url' => '%2$s/images/headers/P7193401.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7193401-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7193401', 'twentyeleven' )
        ),
        'P7284113' => array(
            'url' => '%2$s/images/headers/P7284113.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7284113-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7284113', 'twentyeleven' )
        ),
        'P7284115' => array(
            'url' => '%2$s/images/headers/P7284115.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7284115-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7284115', 'twentyeleven' )
        ),
        'P7294301' => array(
            'url' => '%2$s/images/headers/P7294301.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7294301-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7294301', 'twentyeleven' )
        ),
        'P7294303' => array(
            'url' => '%2$s/images/headers/P7294303.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7294303-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7294303', 'twentyeleven' )
        ),
        'P7314484' => array(
            'url' => '%2$s/images/headers/P7314484.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7314484-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7314484', 'twentyeleven' )
        ),
        'P7314485' => array(
            'url' => '%2$s/images/headers/P7314485.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7314485-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7314485', 'twentyeleven' )
        ),
        'P8075118' => array(
            'url' => '%2$s/images/headers/P8075118.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8075118-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8075118', 'twentyeleven' )
        ),
        'PC272782' => array(
            'url' => '%2$s/images/headers/PC272782.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC272782-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC272782', 'twentyeleven' )
        ),
        'PC272789' => array(
            'url' => '%2$s/images/headers/PC272789.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC272789-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC272789', 'twentyeleven' )
        ),
        'PC272791' => array(
            'url' => '%2$s/images/headers/PC272791.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC272791-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC272791', 'twentyeleven' )
        ),
        'PC282825' => array(
            'url' => '%2$s/images/headers/PC282825.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC282825-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC282825', 'twentyeleven' )
        ),
        'PC282829' => array(
            'url' => '%2$s/images/headers/PC282829.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC282829-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC282829', 'twentyeleven' )
        ),
        'PC282835' => array(
            'url' => '%2$s/images/headers/PC282835.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC282835-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC282835', 'twentyeleven' )
        ),
        'PC282838' => array(
            'url' => '%2$s/images/headers/PC282838.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC282838-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC282838', 'twentyeleven' )
        ),
        'PC282859' => array(
            'url' => '%2$s/images/headers/PC282859.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC282859-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC282859', 'twentyeleven' )
        ),
        'PC302957' => array(
            'url' => '%2$s/images/headers/PC302957.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC302957-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC302957', 'twentyeleven' )
        ),
        'PC312969' => array(
            'url' => '%2$s/images/headers/PC312969.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312969-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312969', 'twentyeleven' )
        ),
        'PC312970' => array(
            'url' => '%2$s/images/headers/PC312970.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312970-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312970', 'twentyeleven' )
        ),
        'PC312972' => array(
            'url' => '%2$s/images/headers/PC312972.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312972-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312972', 'twentyeleven' )
        ),
        'PC312989' => array(
            'url' => '%2$s/images/headers/PC312989.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312989-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312989', 'twentyeleven' )
        ),
        'PC312990' => array(
            'url' => '%2$s/images/headers/PC312990.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC312990-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC312990', 'twentyeleven' )
        ),
        'PC313011' => array(
            'url' => '%2$s/images/headers/PC313011.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC313011-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC313011', 'twentyeleven' )
        ),
        'PC313019' => array(
            'url' => '%2$s/images/headers/PC313019.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC313019-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC313019', 'twentyeleven' )
        ),
        'PC313021' => array(
            'url' => '%2$s/images/headers/PC313021.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC313021-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC313021', 'twentyeleven' )
        ),
        'PC313024' => array(
            'url' => '%2$s/images/headers/PC313024.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC313024-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC313024', 'twentyeleven' )
        ),
        'PC313033' => array(
            'url' => '%2$s/images/headers/PC313033.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC313033-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC313033', 'twentyeleven' )
        ),
        'P1013068' => array(
            'url' => '%2$s/images/headers/P1013068.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1013068-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1013068', 'twentyeleven' )
        ),
        'P1043081' => array(
            'url' => '%2$s/images/headers/P1043081.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1043081-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1043081', 'twentyeleven' )
        ),
        'P7317055' => array(
            'url' => '%2$s/images/headers/P7317055.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7317055-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7317055', 'twentyeleven' )
        ),
        'P7317068' => array(
            'url' => '%2$s/images/headers/P7317068.JPG',
            'thumbnail_url' => '%2$s/images/headers/P7317068-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P7317068', 'twentyeleven' )
        ),
        'P8017070' => array(
            'url' => '%2$s/images/headers/P8017070.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8017070-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8017070', 'twentyeleven' )
        ),
        'P8017091' => array(
            'url' => '%2$s/images/headers/P8017091.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8017091-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8017091', 'twentyeleven' )
        ),
        'P8017093' => array(
            'url' => '%2$s/images/headers/P8017093.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8017093-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8017093', 'twentyeleven' )
        ),
        'P8047206' => array(
            'url' => '%2$s/images/headers/P8047206.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047206-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047206', 'twentyeleven' )
        ),
        'P8047207' => array(
            'url' => '%2$s/images/headers/P8047207.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047207-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047207', 'twentyeleven' )
        ),
        'P8047208' => array(
            'url' => '%2$s/images/headers/P8047208.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047208-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047208', 'twentyeleven' )
        ),
        'P8047209' => array(
            'url' => '%2$s/images/headers/P8047209.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047209-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047209', 'twentyeleven' )
        ),
        'P8047210' => array(
            'url' => '%2$s/images/headers/P8047210.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047210-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047210', 'twentyeleven' )
        ),
        'P8047211' => array(
            'url' => '%2$s/images/headers/P8047211.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8047211-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8047211', 'twentyeleven' )
        ),
        'P8067457' => array(
            'url' => '%2$s/images/headers/P8067457.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8067457-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8067457', 'twentyeleven' )
        ),
        'PC239795' => array(
            'url' => '%2$s/images/headers/PC239795.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC239795-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC239795', 'twentyeleven' )
        ),
        'PC239797' => array(
            'url' => '%2$s/images/headers/PC239797.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC239797-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC239797', 'twentyeleven' )
        ),
        'PC250061' => array(
            'url' => '%2$s/images/headers/PC250061.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC250061-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC250061', 'twentyeleven' )
        ),
        'PC270107' => array(
            'url' => '%2$s/images/headers/PC270107.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC270107-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC270107', 'twentyeleven' )
        ),
        'PC290183' => array(
            'url' => '%2$s/images/headers/PC290183.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC290183-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC290183', 'twentyeleven' )
        ),
        'PC310251' => array(
            'url' => '%2$s/images/headers/PC310251.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC310251-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC310251', 'twentyeleven' )
        ),
        'PC310256' => array(
            'url' => '%2$s/images/headers/PC310256.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC310256-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC310256', 'twentyeleven' )
        ),
        'PC310257' => array(
            'url' => '%2$s/images/headers/PC310257.JPG',
            'thumbnail_url' => '%2$s/images/headers/PC310257-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'PC310257', 'twentyeleven' )
        ),
        'P1010300' => array(
            'url' => '%2$s/images/headers/P1010300.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010300-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010300', 'twentyeleven' )
        ),
        'P1010303' => array(
            'url' => '%2$s/images/headers/P1010303.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010303-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010303', 'twentyeleven' )
        ),
        'P1010304' => array(
            'url' => '%2$s/images/headers/P1010304.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010304-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010304', 'twentyeleven' )
        ),
        'P1010305' => array(
            'url' => '%2$s/images/headers/P1010305.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010305-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010305', 'twentyeleven' )
        ),
        'P1010306' => array(
            'url' => '%2$s/images/headers/P1010306.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010306-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010306', 'twentyeleven' )
        ),
        'P1010310' => array(
            'url' => '%2$s/images/headers/P1010310.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1010310-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1010310', 'twentyeleven' )
        ),
        'P1020313' => array(
            'url' => '%2$s/images/headers/P1020313.JPG',
            'thumbnail_url' => '%2$s/images/headers/P1020313-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P1020313', 'twentyeleven' )
        ),
        'P8233211' => array(
            'url' => '%2$s/images/headers/P8233211.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8233211-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8233211', 'twentyeleven' )
        ),
        'P8233212' => array(
            'url' => '%2$s/images/headers/P8233212.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8233212-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8233212', 'twentyeleven' )
        ),
        'P8233213' => array(
            'url' => '%2$s/images/headers/P8233213.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8233213-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8233213', 'twentyeleven' )
        ),
        'P8233218' => array(
            'url' => '%2$s/images/headers/P8233218.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8233218-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8233218', 'twentyeleven' )
        ),
        'P8243237' => array(
            'url' => '%2$s/images/headers/P8243237.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8243237-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8243237', 'twentyeleven' )
        ),
        'P8243238' => array(
            'url' => '%2$s/images/headers/P8243238.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8243238-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8243238', 'twentyeleven' )
        ),
        'P8243259' => array(
            'url' => '%2$s/images/headers/P8243259.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8243259-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8243259', 'twentyeleven' )
        ),
        'P8243262' => array(
            'url' => '%2$s/images/headers/P8243262.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8243262-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8243262', 'twentyeleven' )
        ),
        'P8253275' => array(
            'url' => '%2$s/images/headers/P8253275.JPG',
            'thumbnail_url' => '%2$s/images/headers/P8253275-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'P8253275', 'twentyeleven' )
        ),
        'R0011378' => array(
            'url' => '%2$s/images/headers/R0011378.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0011378-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0011378', 'twentyeleven' )
        ),
        'R0011714' => array(
            'url' => '%2$s/images/headers/R0011714.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0011714-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0011714', 'twentyeleven' )
        ),
        'R0011715' => array(
            'url' => '%2$s/images/headers/R0011715.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0011715-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0011715', 'twentyeleven' )
        ),
        'R0011725' => array(
            'url' => '%2$s/images/headers/R0011725.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0011725-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0011725', 'twentyeleven' )
        ),
        'R0011979' => array(
            'url' => '%2$s/images/headers/R0011979.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0011979-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0011979', 'twentyeleven' )
        ),
        'R0012231' => array(
            'url' => '%2$s/images/headers/R0012231.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0012231-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0012231', 'twentyeleven' )
        ),
        'R0012232' => array(
            'url' => '%2$s/images/headers/R0012232.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0012232-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0012232', 'twentyeleven' )
        ),
        'R0013017' => array(
            'url' => '%2$s/images/headers/R0013017.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013017-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013017', 'twentyeleven' )
        ),
        'R0013018' => array(
            'url' => '%2$s/images/headers/R0013018.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013018-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013018', 'twentyeleven' )
        ),
        'R0013049' => array(
            'url' => '%2$s/images/headers/R0013049.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013049-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013049', 'twentyeleven' )
        ),
        'R0013051' => array(
            'url' => '%2$s/images/headers/R0013051.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013051-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013051', 'twentyeleven' )
        ),
        'R0013052' => array(
            'url' => '%2$s/images/headers/R0013052.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013052-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013052', 'twentyeleven' )
        ),
        'R0013053' => array(
            'url' => '%2$s/images/headers/R0013053.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013053-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013053', 'twentyeleven' )
        ),
        'R0013113' => array(
            'url' => '%2$s/images/headers/R0013113.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013113-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013113', 'twentyeleven' )
        ),
        'R0013152' => array(
            'url' => '%2$s/images/headers/R0013152.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013152-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013152', 'twentyeleven' )
        ),
        'R0013318' => array(
            'url' => '%2$s/images/headers/R0013318.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013318-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013318', 'twentyeleven' )
        ),
        'R0013324' => array(
            'url' => '%2$s/images/headers/R0013324.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013324-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013324', 'twentyeleven' )
        ),
        'R0013325' => array(
            'url' => '%2$s/images/headers/R0013325.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013325-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013325', 'twentyeleven' )
        ),
        'R0013326' => array(
            'url' => '%2$s/images/headers/R0013326.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013326-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013326', 'twentyeleven' )
        ),
        'R0013330' => array(
            'url' => '%2$s/images/headers/R0013330.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013330-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013330', 'twentyeleven' )
        ),
        'R0013331' => array(
            'url' => '%2$s/images/headers/R0013331.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013331-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013331', 'twentyeleven' )
        ),
        'R0013332' => array(
            'url' => '%2$s/images/headers/R0013332.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013332-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013332', 'twentyeleven' )
        ),
        'R0013337' => array(
            'url' => '%2$s/images/headers/R0013337.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013337-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013337', 'twentyeleven' )
        ),
        'R0013338' => array(
            'url' => '%2$s/images/headers/R0013338.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013338-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013338', 'twentyeleven' )
        ),
        'R0013343' => array(
            'url' => '%2$s/images/headers/R0013343.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0013343-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0013343', 'twentyeleven' )
        ),
        'R0014340' => array(
            'url' => '%2$s/images/headers/R0014340.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014340-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014340', 'twentyeleven' )
        ),
        'R0014341' => array(
            'url' => '%2$s/images/headers/R0014341.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014341-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014341', 'twentyeleven' )
        ),
        'R0014349' => array(
            'url' => '%2$s/images/headers/R0014349.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014349-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014349', 'twentyeleven' )
        ),
        'R0014350' => array(
            'url' => '%2$s/images/headers/R0014350.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014350-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014350', 'twentyeleven' )
        ),
        'R0014352' => array(
            'url' => '%2$s/images/headers/R0014352.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014352-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014352', 'twentyeleven' )
        ),
        'R0014353' => array(
            'url' => '%2$s/images/headers/R0014353.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014353-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014353', 'twentyeleven' )
        ),
        'R0014354' => array(
            'url' => '%2$s/images/headers/R0014354.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014354-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014354', 'twentyeleven' )
        ),
        'R0014355' => array(
            'url' => '%2$s/images/headers/R0014355.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014355-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014355', 'twentyeleven' )
        ),
        'R0014356' => array(
            'url' => '%2$s/images/headers/R0014356.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014356-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014356', 'twentyeleven' )
        ),
        'R0014357' => array(
            'url' => '%2$s/images/headers/R0014357.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014357-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014357', 'twentyeleven' )
        ),
        'R0014358' => array(
            'url' => '%2$s/images/headers/R0014358.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014358-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014358', 'twentyeleven' )
        ),
        'R0014360' => array(
            'url' => '%2$s/images/headers/R0014360.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014360-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014360', 'twentyeleven' )
        ),
        'R0014364' => array(
            'url' => '%2$s/images/headers/R0014364.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014364-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014364', 'twentyeleven' )
        ),
        'R0014365' => array(
            'url' => '%2$s/images/headers/R0014365.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014365-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014365', 'twentyeleven' )
        ),
        'R0014380' => array(
            'url' => '%2$s/images/headers/R0014380.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014380-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014380', 'twentyeleven' )
        ),
        'R0014381' => array(
            'url' => '%2$s/images/headers/R0014381.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0014381-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0014381', 'twentyeleven' )
        ),
        'R0016528' => array(
            'url' => '%2$s/images/headers/R0016528.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016528-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016528', 'twentyeleven' )
        ),
        'R0016534' => array(
            'url' => '%2$s/images/headers/R0016534.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016534-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016534', 'twentyeleven' )
        ),
        'R0016541' => array(
            'url' => '%2$s/images/headers/R0016541.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016541-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016541', 'twentyeleven' )
        ),
        'R0016561' => array(
            'url' => '%2$s/images/headers/R0016561.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016561-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016561', 'twentyeleven' )
        ),
        'R0016562' => array(
            'url' => '%2$s/images/headers/R0016562.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016562-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016562', 'twentyeleven' )
        ),
        'R0016575' => array(
            'url' => '%2$s/images/headers/R0016575.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016575-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016575', 'twentyeleven' )
        ),
        'R0016619' => array(
            'url' => '%2$s/images/headers/R0016619.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016619-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016619', 'twentyeleven' )
        ),
        'R0016628' => array(
            'url' => '%2$s/images/headers/R0016628.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016628-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016628', 'twentyeleven' )
        ),
        'R0016774' => array(
            'url' => '%2$s/images/headers/R0016774.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016774-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016774', 'twentyeleven' )
        ),
        'R0016798' => array(
            'url' => '%2$s/images/headers/R0016798.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0016798-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0016798', 'twentyeleven' )
        ),
        'R0017524' => array(
            'url' => '%2$s/images/headers/R0017524.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0017524-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0017524', 'twentyeleven' )
        ),
        'R0017540' => array(
            'url' => '%2$s/images/headers/R0017540.JPG',
            'thumbnail_url' => '%2$s/images/headers/R0017540-thumbnail.JPG',
            /* translators: header image description */
            'description' => __( 'R0017540', 'twentyeleven' )
        ),
        'wheel' => array(
            'url' => '%2$s/images/headers/wheel.jpg',
            'thumbnail_url' => '%2$s/images/headers/wheel-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Wheel', 'twentyeleven' )
        ),
        'shore' => array(
            'url' => '%2$s/images/headers/shore.jpg',
            'thumbnail_url' => '%2$s/images/headers/shore-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Shore', 'twentyeleven' )
        ),
        'trolley' => array(
            'url' => '%2$s/images/headers/trolley.jpg',
            'thumbnail_url' => '%2$s/images/headers/trolley-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Trolley', 'twentyeleven' )
        ),
        'pine-cone' => array(
            'url' => '%2$s/images/headers/pine-cone.jpg',
            'thumbnail_url' => '%2$s/images/headers/pine-cone-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Pine Cone', 'twentyeleven' )
        ),
        'chessboard' => array(
            'url' => '%2$s/images/headers/chessboard.jpg',
            'thumbnail_url' => '%2$s/images/headers/chessboard-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Chessboard', 'twentyeleven' )
        ),
        'lanterns' => array(
            'url' => '%2$s/images/headers/lanterns.jpg',
            'thumbnail_url' => '%2$s/images/headers/lanterns-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Lanterns', 'twentyeleven' )
        ),
        'willow' => array(
            'url' => '%2$s/images/headers/willow.jpg',
            'thumbnail_url' => '%2$s/images/headers/willow-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Willow', 'twentyeleven' )
        ),
        'hanoi' => array(
            'url' => '%2$s/images/headers/hanoi.jpg',
            'thumbnail_url' => '%2$s/images/headers/hanoi-thumbnail.jpg',
            /* translators: header image description */
            'description' => __( 'Hanoi Plant', 'twentyeleven' )
        )
    ) );
}
add_action( 'after_setup_theme', 'oki2a24_twentyseventeen_child_setup' );
