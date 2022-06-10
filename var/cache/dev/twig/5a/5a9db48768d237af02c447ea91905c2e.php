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

/* contact/index.html.twig */
class __TwigTemplate_0006f517e6daeeffdc1ef57a20d05394 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"w-4/5 m-auto\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-5xl pt-12 pb-8\">
                Formularz kontaktowy:
            </h1>

        </div>
    </div>


<div class=\"w-4/5 bg-gray contact-form m-auto\">
    <div class=\"form-group\">
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 19, $this->source); })()), "fullName", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

</div>
<div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

</div>
<div class=\"form-group\">
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 27, $this->source); })()), "message", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

</div>

<div class=\"form-group\">
    <input type=\"submit\" value=\"Send\" class=\"btn btn-primary py-3 px-5\">
</div>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
</div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  92 => 27,  85 => 23,  78 => 19,  74 => 18,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %}


{% block body %}

    <div class=\"w-4/5 m-auto\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-5xl pt-12 pb-8\">
                Formularz kontaktowy:
            </h1>

        </div>
    </div>


<div class=\"w-4/5 bg-gray contact-form m-auto\">
    <div class=\"form-group\">
{{ form_start(our_form) }}
    {{ form_row(our_form.fullName, {'attr': {'class': 'form-control'}}) }}

</div>
<div class=\"form-group\">
    {{ form_row(our_form.email, {'attr': {'class': 'form-control'}}) }}

</div>
<div class=\"form-group\">
    {{ form_row(our_form.message, {'attr': {'class': 'form-control'}}) }}

</div>

<div class=\"form-group\">
    <input type=\"submit\" value=\"Send\" class=\"btn btn-primary py-3 px-5\">
</div>
{{ form_end(our_form) }}
</div>

</div>
{% endblock %}", "contact/index.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\contact\\index.html.twig");
    }
}
