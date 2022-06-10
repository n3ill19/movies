<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_1f946fa9e297347e0183e7d3a83c6235 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
    </head>
    <body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
            ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "
            ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "
            ";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "            <!--DODANA LINIA DLA GOOGLE reCAPTCHA -->
             <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
         ";
        // line 146
        echo "            </script>
            <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl=";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "locale", [], "any", false, false, false, 147), "html", null, true);
        echo "\" async defer>
            </script>
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "                <header>
                    <nav
                            class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\"
                            x-data=\"{ isOpen: false }\"
                            @keydown.escape=\"isOpen = false\"
                            :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

                        <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
                            <a
                                    class=\"text-white no-underline hover:text-white hover:no-underline\"
                                    href=\"/movies\">
            <span class=\"text-2xl pl-2 font-extrabold\">
                F I L M O 
            <span class=\"text-blue-300\"> 
                Z N A W C Y 
            </span>
            </span>
                            </a>
                        </div>

                        <button
                                @click=\"isOpen = !isOpen\"
                                type=\"button\"
                                class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\"
                                :class=\"{ 'transition transform-180': isOpen }\">

                            <svg
                                    class=\"h-6 w-6 fill-current\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    viewBox=\"0 0 24 24\">

                                <path
                                        x-show=\"isOpen\"
                                        fill-rule=\"evenodd\"
                                        clip-rule=\"evenodd\"
                                        d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"
                                />

                                <path
                                        x-show=\"!isOpen\"
                                        fill-rule=\"evenodd\"
                                        d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"
                                />
                            </svg>
                        </button>

                        <div
                                class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\"
                                :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\"
                                @click.away=\"isOpen = false\"
                                x-show.transition=\"true\">

                            <ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
                            <!--    <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/\"
                                            @click=\"isOpen = false\">
                                        Strona startowa
                                    </a>
                                </li>
                            -->
                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/movies\"
                                            @click=\"isOpen = false\">
                                        Recenzje
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/contact\"
                                            @click=\"isOpen = false\">
                                        Kontakt
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/register\"
                                            @click=\"isOpen = false\">
                                        Rejestracja
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                        class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                        href=\"/";
        // line 104
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) ? ("logout") : ("login"));
        echo "\"
                                        @click=\"isOpen = false\">
                                        ";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) ? ("Wyloguj") : ("Zaloguj"));
        echo "
                                    </a>
                                </li>     

                            </ul>
                        </div>
                    </nav>
                </header>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 118
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 119
        echo "                <footer class=\"bg-gray-600 py-6 mt-20\">
                    <p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
                        Utworzone w Symfony. Wszelkie prawa zastrzeżone
                    </p>
                </footer>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 119,  240 => 118,  228 => 116,  212 => 106,  207 => 104,  113 => 12,  106 => 11,  93 => 5,  82 => 147,  79 => 146,  71 => 125,  69 => 118,  66 => 117,  64 => 116,  61 => 115,  59 => 11,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
    </head>
    <body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
            {% block header %}
                <header>
                    <nav
                            class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\"
                            x-data=\"{ isOpen: false }\"
                            @keydown.escape=\"isOpen = false\"
                            :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

                        <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
                            <a
                                    class=\"text-white no-underline hover:text-white hover:no-underline\"
                                    href=\"/movies\">
            <span class=\"text-2xl pl-2 font-extrabold\">
                F I L M O 
            <span class=\"text-blue-300\"> 
                Z N A W C Y 
            </span>
            </span>
                            </a>
                        </div>

                        <button
                                @click=\"isOpen = !isOpen\"
                                type=\"button\"
                                class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\"
                                :class=\"{ 'transition transform-180': isOpen }\">

                            <svg
                                    class=\"h-6 w-6 fill-current\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    viewBox=\"0 0 24 24\">

                                <path
                                        x-show=\"isOpen\"
                                        fill-rule=\"evenodd\"
                                        clip-rule=\"evenodd\"
                                        d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"
                                />

                                <path
                                        x-show=\"!isOpen\"
                                        fill-rule=\"evenodd\"
                                        d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"
                                />
                            </svg>
                        </button>

                        <div
                                class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\"
                                :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\"
                                @click.away=\"isOpen = false\"
                                x-show.transition=\"true\">

                            <ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
                            <!--    <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/\"
                                            @click=\"isOpen = false\">
                                        Strona startowa
                                    </a>
                                </li>
                            -->
                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/movies\"
                                            @click=\"isOpen = false\">
                                        Recenzje
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/contact\"
                                            @click=\"isOpen = false\">
                                        Kontakt
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                            class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                            href=\"/register\"
                                            @click=\"isOpen = false\">
                                        Rejestracja
                                    </a>
                                </li>

                                <li class=\"mr-3\">
                                    <a
                                        class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                                        href=\"/{{app.user ? 'logout' : 'login'}}\"
                                        @click=\"isOpen = false\">
                                        {{ app.user ? 'Wyloguj' : 'Zaloguj' }}
                                    </a>
                                </li>     

                            </ul>
                        </div>
                    </nav>
                </header>
            {% endblock %}

            {% block body %}{% endblock %}

            {% block footer %}
                <footer class=\"bg-gray-600 py-6 mt-20\">
                    <p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
                        Utworzone w Symfony. Wszelkie prawa zastrzeżone
                    </p>
                </footer>
            {% endblock %}
            <!--DODANA LINIA DLA GOOGLE reCAPTCHA -->
             <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
         {#
         ReCaptcha
         
            *{% macro recaptcha(siteKey)%}
            *<script src='https://www.google.com/recaptcha/api.js'></script>
            *<div class=\"g-recaptcha\" data-sitekey=\"{{siteKey}}\"></div>
            *{% endmacro %} 
    
         
            function onGoogleReCaptchaApiLoad() {
                var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');
                for (var i = 0; i < widgets.length; i++) {
                    renderReCaptcha(widgets[i]); 
                } 
            } #}
            </script>
            <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl={{app.request.locale}}\" async defer>
            </script>
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\base.html.twig");
    }
}
