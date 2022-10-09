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

/* order_management/index.html.twig */
class __TwigTemplate_59dfb2b4a022926447f0cf5df2397a855c1148ed1e88b4281277f029e8114a4d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_management/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order_management/index.html.twig", 1);
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
                <div class=\"container \">
                    <h3>Manager Order</h3>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">OrderDate</th>
                            <th scope=\"col\">DeliveryDate</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Payment</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">CustomerID</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 29
            echo "                                <tr>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Orderdate", [], "any", false, false, false, 31), "m/d/Y"), "html", null, true);
            echo "</td>
                                    ";
            // line 32
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 32), null))) {
                // line 33
                echo "                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 35
                echo "                                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 35), "m/d/Y"), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 37
            echo "                                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Address", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Payment", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    ";
            // line 39
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["o"], "Status", [], "any", false, false, false, 39), 0))) {
                // line 40
                echo "                                    <td>Delivering</td>
                                    ";
            } else {
                // line 42
                echo "                                    <td>Delivered</td>
                                    ";
            }
            // line 44
            echo "                                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>          
                                    <td>
                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateorder", ["id" => twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Update </a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderdetail", ["id" => twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Detail </a>
                                    </td>
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "order_management/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  145 => 49,  139 => 46,  133 => 44,  129 => 42,  125 => 40,  123 => 39,  119 => 38,  114 => 37,  108 => 35,  102 => 33,  100 => 32,  96 => 31,  92 => 30,  89 => 29,  85 => 28,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div id=\"main\">
                <div class=\"container \">
                    <h3>Manager Order</h3>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">OrderDate</th>
                            <th scope=\"col\">DeliveryDate</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Payment</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">CustomerID</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for o in order %}
                                <tr>
                                    <td>{{o.Oid}}</td>
                                    <td>{{o.Orderdate|date(\"m/d/Y\")}}</td>
                                    {% if o.Deliverydate == null %}
                                    <td>{{o.Deliverydate}}</td>
                                    {% else %}
                                    <td>{{o.Deliverydate|date(\"m/d/Y\")}}</td>
                                    {% endif %}
                                    <td>{{o.Address}}</td>
                                    <td>{{o.Payment}}</td>
                                    {% if o.Status == 0 %}
                                    <td>Delivering</td>
                                    {% else %}
                                    <td>Delivered</td>
                                    {% endif %}
                                    <td>{{o.user}}</td>          
                                    <td>
                                        <a href=\"{{ path('updateorder', {'id' : o.Oid})}}\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Update </a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('orderdetail', {'id' : o.Oid})}}\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Detail </a>
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
", "order_management/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\order_management\\index.html.twig");
    }
}
