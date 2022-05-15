<?php
abstract class APage
{
    protected $title;
    protected $scripts;
    protected $stylePath;

    public function __construct(
        $title,
        $scripts,
        $stylePath
    ) {
        $this->title = $title;
        $this->scripts = $scripts;
        $this->stylePath = $stylePath;
    }

    private function generateHead()
    {
        $scriptsLine = '';
        $title = $this->title;

        if ($this->scripts != null) {
            foreach ($this->scripts as $script) {
                $scriptsLine .= "<script defer src=$script></script>\r\n";
            }
        }

        echo <<< EOT
                <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>

            <!-- scripts -->
            $scriptsLine

            <!-- styles -->
            <link rel="stylesheet" href="$this->stylePath">

        </head>
        EOT;
    }

    private function generateFooter()
    {
        echo <<< EOT
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__inner-logo">
                        <img src="../../images/footer-logo.png" width="80" height="115" alt="logo">
                    </div>
                    <div class="footer__content">
                        <ul class="footer__content-nav-items">
                            <li class="footer__content-item"><a href="/pages/HomePage">Home</a></li>
                            <li class="footer__content-item"><a href="/pages/HomePage">Tours</a></li>
                            <li class="footer__content-item"><a href="/pages/HomePage">My tours</a></li>
                        </ul>

                        <ul class="footer__content-contact-items">
                            <li class="footer__content-item"><span class="icon-phone"></span><a href="tel:+380678798449"> +380678798449</a></li>
                            <li class="footer__content-item"><span class="icon-main"></span><a href="mailto:dmytro.horkun@gmail.com"> Mail</a></li>
                            <li class="footer__content-item"><span class="icon-th"></span><a href="https://t.me/dimonchikg"> Telegram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </body>
        EOT;
    }

    abstract protected function generateBody();

    function generatePage()
    {
        $this->generateHead();
        $this->generateBody();
        $this->generateFooter();
    }
}
