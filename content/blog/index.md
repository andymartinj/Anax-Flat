---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list
...
Picture Blog
===========================

Here I will be uploading my photos of the day.
