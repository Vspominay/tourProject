<?php

class Authenticate extends APage
{

    private $state;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $state
    ) {
        $this->state = $state;
        parent::__construct($title, $scripts, $stylePath);
    }

    function getState()
    {
        return $this->state;
    }

    function setState($value)
    {
        $this->state = $value;
    }

    public function generateBody()
    {
        $titleForm = $this->state ? "Sign in" : "Sign up";
        $btnText = $this->state ? "Sign in" : "Get started";
        $switchText = $this->state ? "First time here?" : "Already have an account?";

        echo <<< EOT
        <body>
            <div class="wrapper">
                <div class="backgrount-filter"></div>
                <section class="auth">
                    <div class="auth__content tilt-in-top-2">
                        <form class="auth-form ">
                            <div class="auth-title">
                                <h2>$titleForm</h2>
                            </div>

                            <div class="auth-input-block">
                                <label for="login">Your login</label>
                                <input type="email" name="login" class="input-block" placeholder="Login...">
                            </div>

                            <div class="auth-input-block">
                                <label for="password">Your password</label>
                                <input type="password" name="password" class="input-block" placeholder="Password...">
                            </div>

                            <button type="submit" class="auth-btn btn">
                                $btnText
                            </button>

                            <div class="auth-switch">
                                <span>$switchText</span>
                                <a class="switchLink" href="auth?state=1">$titleForm</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        EOT;
    }
}
