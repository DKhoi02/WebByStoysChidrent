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

/* brand_management/index.html.twig */
class __TwigTemplate_2d715263d36cda8afb813709e66d3339bc4c0fb427b7ca06ba823ac17112f304 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand_management/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand_management/index.html.twig", 1);
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

    <div class=\"container\" id=\"main\">
                <div className=\"page-heading pb-2 mt-4 mb-2 \">
                <br>
                    <h3>Manager Brand</h3> <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addbrandmanage");
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
                            <th scope=\"col\">Brand Name</th>
                            <th scope=\"col\">Brand Description</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Brandname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Branddes", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    ";
            // line 31
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["b"], "Status", [], "any", false, false, false, 31), 1))) {
                // line 32
                echo "                                    <td>Available</td>
                                    ";
            } else {
                // line 34
                echo "                                    <td>Unavailable</td>
                                    ";
            }
            // line 36
            echo "                                    <td>
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatebrandmanage", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\">Update</button></a>
                                    </td>
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "brand_management/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  118 => 37,  115 => 36,  111 => 34,  107 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  90 => 27,  86 => 26,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div class=\"container\" id=\"main\">
                <div className=\"page-heading pb-2 mt-4 mb-2 \">
                <br>
                    <h3>Manager Brand</h3> <a href=\"{{path('addbrandmanage')}}\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Brand Name</th>
                            <th scope=\"col\">Brand Description</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for b in brand %}
                                <tr>
                                    <td>{{b.id}}</td>
                                    <td>{{b.Brandname}}</td>
                                    <td>{{b.Branddes}}</td>
                                    {% if b.Status == 1 %}
                                    <td>Available</td>
                                    {% else %}
                                    <td>Unavailable</td>
                                    {% endif %}
                                    <td>
                                        <a href=\"{{path('updatebrandmanage', {'id' : b.id})}}\"><button type=\"button\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\">Update</button></a>
                                    </td>
                                </tr>     
                                {% endfor %}                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
{% endblock %}", "brand_management/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\brand_management\\index.html.twig");
    }
}
