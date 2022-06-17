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

/* movies/index.html.twig */
class __TwigTemplate_ed1cf8562492a4e596ae5c48378d2c1e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/index.html.twig", 1);
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
        echo "    <div class=\"w-4/5 m-auto text-center\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-6xl pt-11 pb-3\">
                Recenzje filmów (";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 7, $this->source); })())), "html", null, true);
        echo ")
            </h1>

        </div>
        </div>

        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <div class=\"mx-auto w-4/5 my-8\">
            <a 
                href=\"/movies/create\" 
                class=\"uppercase border border-gray-500 text-md py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
                Stwórz nową recenzję
            </a>
        </div>
    ";
        }
        // line 22
        echo "    
    <div class=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
        <!-- Review Item -->
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 26
            echo "       
            <div class=\"text-center pt-8 pb-4\">
                <img
                    src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "imagePath", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
                    alt=\"\"
                    class=\"shadow-xl rounded-md w3-image\"
                    width: auto;
                    height: auto;
                />

                <h2 class=\"text-gray-700 font-bold text-3xl py-2\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "
                </h2>

                
                    <span class=\"italic text-sm text-gray-800\"> Autor: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "userId", [], "any", false, false, false, 41), "html", null, true);
            echo "
                 <br />
                    <span class=\"italic text-sm text-gray-800\"> Utworzone: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "dateCreate", [], "any", false, false, false, 43), "html", null, true);
            echo "
                 
                </span>

                <p class=\"text-base text-gray-700 pt-4 pb-10 leading-8 font-light text-overflow:ellipsis white-space:nowrap overflow:hidden\">
                ";
            // line 49
            echo "                    ";
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 49), 0, 175) . "..."), "html", null, true);
            echo "
                </p>

                <a href=\"/movies/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"uppercase border border-gray-500 text-gray-600 text-md py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
                    Czytaj dalej
                </a>
            </div>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "          
        ";
        // line 63
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  149 => 58,  137 => 52,  130 => 49,  122 => 43,  117 => 41,  110 => 37,  99 => 29,  94 => 26,  90 => 25,  85 => 22,  75 => 14,  73 => 13,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"w-4/5 m-auto text-center\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-6xl pt-11 pb-3\">
                Recenzje filmów ({{ movies|length }})
            </h1>

        </div>
        </div>

        {% if app.user %}
        <div class=\"mx-auto w-4/5 my-8\">
            <a 
                href=\"/movies/create\" 
                class=\"uppercase border border-gray-500 text-md py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
                Stwórz nową recenzję
            </a>
        </div>
    {% endif %}
    
    <div class=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
        <!-- Review Item -->
        {% for movie in movies %}
       
            <div class=\"text-center pt-8 pb-4\">
                <img
                    src=\"{{ movie.imagePath }}\"
                    alt=\"\"
                    class=\"shadow-xl rounded-md w3-image\"
                    width: auto;
                    height: auto;
                />

                <h2 class=\"text-gray-700 font-bold text-3xl py-2\">
                    {{ movie.title }}
                </h2>

                
                    <span class=\"italic text-sm text-gray-800\"> Autor: {{ movie.userId }}
                 <br />
                    <span class=\"italic text-sm text-gray-800\"> Utworzone: {{ movie.dateCreate }}
                 
                </span>

                <p class=\"text-base text-gray-700 pt-4 pb-10 leading-8 font-light text-overflow:ellipsis white-space:nowrap overflow:hidden\">
                {#}Dodane opcja skracania tekstu wyświetlanego{#}
                    {{ movie.description[:175] ~ '...'}}
                </p>

                <a href=\"/movies/{{ movie.id }}\" class=\"uppercase border border-gray-500 text-gray-600 text-md py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
                    Czytaj dalej
                </a>
            </div>
           
        {% endfor %}
          
        {#}Przyciski do nawigacji Paginacją:
             <div class=\"navigation\">
                {{ knp_pagination_render(movies) }}
            </div> {#}
    </div>
{% endblock %}", "movies/index.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\movies\\index.html.twig");
    }
}
