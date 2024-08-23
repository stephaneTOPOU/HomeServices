<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "LDN - Fournisseur de services en ligne pour vos besoins domestiques", // set false to total remove
            'titleBefore'  => "LDN Service", // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Bienvenu sur le site officiel ldn service, LDN est une plateforme numérique qui permet aux utilisateurs de trouver et de réserver des services pour leurs besoins domestiques.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["ldn services", "ldn service", "LDN Services", "LDN Services", "ldn", "LDN", "services", "Services"],
            'canonical'    => "https://www.homes-services.com/", // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => "https://www.homes-services.com/robots.txt", // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'LDN - Fournisseur de services en ligne pour vos besoins domestiques', // set false to total remove
            'description' => 'Bienvenu sur le site officiel ldn service, LDN est une plateforme numérique qui permet aux utilisateurs de trouver et de réserver des services pour leurs besoins domestiques.', // set false to total remove
            'url'         => "https://www.homes-services.com/", // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => 'LDN Service',
            'images'      => ["https://www.homes-services.com/images/logo.png"],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '#',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'LDN - Fournisseur de services en ligne pour vos besoins domestiques', // set false to total remove
            'description' => 'Bienvenu sur le site officiel ldn service, LDN est une plateforme numérique qui permet aux utilisateurs de trouver et de réserver des services pour leurs besoins domestiques.', // set false to total remove
            'url'         => "https://www.homes-services.com/", // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ["https://www.homes-services.com/images/logo.png"],
        ],
    ],
];
