<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home")
            ],

            "report" => [
                "text"  => t("Reports"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports and analyses"),
                "mark-if-parent" => true,

                "submenu" => [
                    "items" => [
                        "report" => [
                            "text"  => t("Kmoms"),
                            "url"   => $this->di->get("url")->create("report"),
                            "title" => t("Reports from kmom assignments"),
                            "mark-if-parent" => true,

                        ],

                        "analysis" => [
                            "text"  => t("Analysis"),
                            "url"   => $this->di->get("url")->create("analysis"),
                            "title" => t("Analyzing websites"),
                            "mark-if-parent" => true,
                        ],

                        "theme" => [
                            "text"  => t("Themes"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Themes")
                        ],
                    ],
                ],
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "blog" => [
                "text"  => t("Blog"),
                "url"   => $this->di->get("url")->create("blog"),
                "title" => t("Picture blog"),
                "mark-if-parent" => true,
            ],

            "testing" => [
                "text"  =>"Testing",
                "url"   => $this->di->get("url")->create("test"),
                "title" => "Testing functions",

                "submenu" => [
                    "items" => [
                        "test" => [
                            "text"  => t("Sandbox"),
                            "url"   => $this->di->get("url")->create("test"),
                            "title" => t("Sandbox")
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Grid")
                        ],

                        "typography" => [
                            "text"  => t("Typography"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typography")
                        ],

                        "images" => [
                            "text"  => t("Images"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Images with Cimage")
                        ],
                    ],
                ],
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home")
            ],

            "report" => [
                "text"  => t("Reports"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports and analyses"),
                "mark-if-parent" => true,

                "submenu" => [
                    "items" => [
                        "report" => [
                            "text"  => t("Kmoms"),
                            "url"   => $this->di->get("url")->create("report"),
                            "title" => t("Reports from kmom assignments"),
                            "mark-if-parent" => true,

                        ],

                        "analysis" => [
                            "text"  => t("Analysis"),
                            "url"   => $this->di->get("url")->create("analysis"),
                            "title" => t("Analyzing websites"),
                            "mark-if-parent" => true,
                        ],

                        "theme" => [
                            "text"  => t("Themes"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Description of themes"),
                            "mark-if-parent" => true,

                        ],
                    ],
                ],
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "blog" => [
                "text"  => t("Blog"),
                "url"   => $this->di->get("url")->create("blog"),
                "title" => t("Picture blog"),
                "mark-if-parent" => true,
            ],

            "testing" => [
                "text"  =>"Testing",
                "url"   => $this->di->get("url")->create("sandbox"),
                "title" => "Testing functions",

                "submenu" => [
                    "items" => [
                        "test" => [
                            "text"  => t("Sandbox"),
                            "url"   => $this->di->get("url")->create("test"),
                            "title" => t("Sandbox")
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Grid")
                        ],

                        "typography" => [
                            "text"  => t("Typography"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Typography")
                        ],

                        "images" => [
                            "text"  => t("Images"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Images with Cimage")
                        ],
                    ],
                ],
            ],
        ],
    ],


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
