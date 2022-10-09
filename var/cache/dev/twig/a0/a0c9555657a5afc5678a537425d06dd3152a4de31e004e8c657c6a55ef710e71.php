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

/* order_history/index.html.twig */
class __TwigTemplate_ef978bc56cd162918926f47d8bb56051bfa0e2a2996b9b0d4dcf0832bcb52cfa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_history/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order_history/index.html.twig", 1);
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

    <div id=\"main\">
                <div class=\"container\">
                    <h3>Order History</h3> 
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">ProductName</th>
                            <th scope=\"col\">Quantity</th>
                            <th scope=\"col\">Price</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">OrderDate</th>
                            <th scope=\"col\">DeliveryDate</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 30
            echo "                                <tr>
                                    <td><img src=\"../img/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                                     alt=\"\" style=\"margin: auto; width: 20%;\"></td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "productname", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "total", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "orderdate", [], "any", false, false, false, 37), "m/d/Y"), "html", null, true);
            echo "</td> 
                                    ";
            // line 38
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["h"], "deliverydate", [], "any", false, false, false, 38), null))) {
                // line 39
                echo "                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "deliverydate", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 41
                echo "                                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "deliverydate", [], "any", false, false, false, 41), "m/d/Y"), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 43
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["h"], "status", [], "any", false, false, false, 43), 0))) {
                // line 44
                echo "                                    <td>Delivering </td> 
                                    ";
            } else {
                // line 46
                echo "                                    <td>Delivered </td>   
                                    ";
            }
            // line 47
            echo "     
                                    <td>
                                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productDetail", ["id" => twig_get_attribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Buy more </a>
                                    </td>
                                </tr>     
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    
                                ";
        // line 54
        echo "                        </tbody>
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
        return "order_history/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  157 => 52,  147 => 49,  143 => 47,  139 => 46,  135 => 44,  132 => 43,  126 => 41,  120 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  93 => 31,  90 => 30,  86 => 29,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div id=\"main\">
                <div class=\"container\">
                    <h3>Order History</h3> 
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">ProductName</th>
                            <th scope=\"col\">Quantity</th>
                            <th scope=\"col\">Price</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">OrderDate</th>
                            <th scope=\"col\">DeliveryDate</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for h in history %}
                                <tr>
                                    <td><img src=\"../img/{{h.image}}\"
                                     alt=\"\" style=\"margin: auto; width: 20%;\"></td>
                                    <td>{{h.productname}}</td>
                                    <td>{{h.quantity}}</td>
                                    <td>{{h.price}}</td>
                                    <td>{{h.total}}</td>
                                    <td>{{h.orderdate|date(\"m/d/Y\")}}</td> 
                                    {% if h.deliverydate == null %}
                                    <td>{{h.deliverydate}}</td>
                                    {% else %}
                                    <td>{{h.deliverydate|date(\"m/d/Y\")}}</td>
                                    {% endif %}
                                    {% if h.status == 0 %}
                                    <td>Delivering </td> 
                                    {% else %}
                                    <td>Delivered </td>   
                                    {% endif %}     
                                    <td>
                                        <a href=\"{{ path('productDetail', {'id' : h.id})}}\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Buy more </a>
                                    </td>
                                </tr>     
                            {% endfor %}    
                                {# {% endfor %} #}
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
{% endblock %}
", "order_history/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\order_history\\index.html.twig");
    }
}
