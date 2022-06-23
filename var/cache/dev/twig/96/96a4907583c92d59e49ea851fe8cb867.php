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

/* Pagination/bootstrap_v5_pagination.html.twig */
class __TwigTemplate_7d9bd80b233112080d75241a2588e6a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pagination/bootstrap_v5_pagination.html.twig"));

        $this->parent = $this->loadTemplate("@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", "Pagination/bootstrap_v5_pagination.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Pagination/bootstrap_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap v5 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Bootstrap CSS Framework
 * https://getbootstrap.com/docs/5.0/components/pagination/
 */
#}
{% extends '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig' %}", "Pagination/bootstrap_v5_pagination.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\Pagination\\bootstrap_v5_pagination.html.twig");
    }
}
