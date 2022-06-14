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

/* movies/show.html.twig */
class __TwigTemplate_fc1602973ef6ca440d299c4bdc215692 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Stworzył: Admin
                </h2>

                <p class=\"text-sm text-gray-600\">
                    Odczytane: <script> document.write(new Date().toLocaleDateString()); </script>
                </p>
            </div>
        </div>

             <a 
                href=\"/movies\"
                class=\"bg-gray-500 font-bold py-2 px-4 rounded transition-all hover:bg-gray-300\">
                Wróć do wszystkich recenzji
            </a>
            </br>
            </br>
            </br>
        <img
            src=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 30, $this->source); })()), "imagePath", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
            class=\"rounded-xl w-full shadow-xl w3-image\"
            alt=\"Icon of Patryk Sitek\"
        />

        <p class=\"text-xl py-6\">
            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "
        </p>
     
            
        ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40) && (twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 40, $this->source); })()), "userId", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)))) {
            // line 41
            echo "            <a 
                href=\"/movies/edit/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
                Edytuj recenzję
            </a>

            <a 
                href=\"/movies/delete/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
                Usuń recenzję
            </a>

     

        ";
        }
        // line 56
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  120 => 48,  111 => 42,  108 => 41,  106 => 40,  99 => 36,  90 => 30,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            {{ movie.title }}
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Stworzył: Admin
                </h2>

                <p class=\"text-sm text-gray-600\">
                    Odczytane: <script> document.write(new Date().toLocaleDateString()); </script>
                </p>
            </div>
        </div>

             <a 
                href=\"/movies\"
                class=\"bg-gray-500 font-bold py-2 px-4 rounded transition-all hover:bg-gray-300\">
                Wróć do wszystkich recenzji
            </a>
            </br>
            </br>
            </br>
        <img
            src=\"{{ movie.imagePath }}\"
            class=\"rounded-xl w-full shadow-xl w3-image\"
            alt=\"Icon of Patryk Sitek\"
        />

        <p class=\"text-xl py-6\">
            {{ movie.description }}
        </p>
     
            
        {% if app.user and movie.userId == app.user.id %}
            <a 
                href=\"/movies/edit/{{ movie.id }}\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
                Edytuj recenzję
            </a>

            <a 
                href=\"/movies/delete/{{ movie.id }}\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
                Usuń recenzję
            </a>

     

        {% endif %}
    </div>
{% endblock %}", "movies/show.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\movies\\show.html.twig");
    }
}
