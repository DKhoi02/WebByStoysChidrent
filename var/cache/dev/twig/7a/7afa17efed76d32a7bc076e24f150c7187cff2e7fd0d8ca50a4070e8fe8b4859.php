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

/* home_page/confirmpassword.htm.twig */
class __TwigTemplate_623c4199051cf3c9e2526949f2f6c42d35909889a183a922cb7e86a0e0e6b4e5 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/confirmpassword.htm.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/confirmpassword.htm.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<form method=\"POST\" action=\"/temp\">
<div class=\"col d-flex justify-content-center text-center\">
    <div class=\"form-outline mb-4\">
    <br><br><br><br>
        <label class=\"form-label\" for=\"confirmpassword\"><h3>Confirm Old Password</h3></label>
        <br>
        <input type=\"password\" id=\"confirmpassword\" class=\"form-control\" name=\"password\"/>
        <br>
        <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Confirm\"/> 
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><button type=\"button\" class=\"btn btn-outline-primary\">Back to index</button></a>
    </div>
    </div>
</form>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_page/confirmpassword.htm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<form method=\"POST\" action=\"/temp\">
<div class=\"col d-flex justify-content-center text-center\">
    <div class=\"form-outline mb-4\">
    <br><br><br><br>
        <label class=\"form-label\" for=\"confirmpassword\"><h3>Confirm Old Password</h3></label>
        <br>
        <input type=\"password\" id=\"confirmpassword\" class=\"form-control\" name=\"password\"/>
        <br>
        <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Confirm\"/> 
        <a href=\"{{path('profile')}}\"><button type=\"button\" class=\"btn btn-outline-primary\">Back to index</button></a>
    </div>
    </div>
</form>
</main>
{% endblock %}", "home_page/confirmpassword.htm.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\home_page\\confirmpassword.htm.twig");
    }
}
