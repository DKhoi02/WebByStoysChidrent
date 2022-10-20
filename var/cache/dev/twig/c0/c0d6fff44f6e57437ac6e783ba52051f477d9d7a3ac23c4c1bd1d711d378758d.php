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

/* shopmanage/index.html.twig */
class __TwigTemplate_70cd08e71f9d53332b92997d6cba275fbaa75e8426752c486c82451832c32eef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopmanage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shopmanage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<br>
    <div id=\"main\">
                <div class=\"container\">
                    <h3>Manager Shop</h3> <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_shopmanage");
        echo "\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Telephone</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 26
            echo "                                <tr>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "Telephone", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "Address", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "Email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>  
                                    <td>
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateshop", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\"
                                         style=\"background-color: rgb(255,105,180);\"> Update </a>
                                    </td>        
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shopmanage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  109 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  89 => 26,  85 => 25,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<br>
    <div id=\"main\">
                <div class=\"container\">
                    <h3>Manager Shop</h3> <a href=\"{{path('add_shopmanage')}}\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Telephone</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for s in shop %}
                                <tr>
                                    <td>{{s.id}}</td>
                                    <td>{{s.Telephone}}</td>          
                                    <td>{{s.Address}}</td>          
                                    <td>{{s.Email}}</td>  
                                    <td>
                                        <a href=\"{{path('updateshop',{'id' : s.id})}}\" class=\"btn rounded-pill text-light\"
                                         style=\"background-color: rgb(255,105,180);\"> Update </a>
                                    </td>        
                                </tr>     
                                {% endfor %}                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
{% endblock %}
", "shopmanage/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\shopmanage\\index.html.twig");
    }
}
