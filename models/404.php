<?php

class NotFound extends APage
{

    public function __construct(
        $title,
        $scripts,
        $stylePath
    ) {
        parent::__construct($title, $scripts, $stylePath);
    }


    public function generateBody()
    {
        echo <<< EOT
        <body>
            <div class="wrapper">
                <div class="notFound">
                    <div class="notFound-title">
                        <h1>404</h1>
                        <span>Page is not found</span>
                    </div>
                    <div class="notFound-back">
                        <a href="/" class="btn">
                            Home
                        </a>
                    </div>
                </div>
            </div>
        EOT;
    }
}
