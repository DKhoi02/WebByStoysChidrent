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
                <br>
                    <h3>Manager Order</h3>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">ID</th>
                            <th scope=\"col\" class=\"text-center\">OrderDate</th>
                            <th scope=\"col\" class=\"text-center\">DeliveryDate</th>
                            <th scope=\"col\" class=\"text-center\">Address</th>
                            <th scope=\"col\" class=\"text-center\">Payment</th>
                            <th scope=\"col\" class=\"text-center\">Status</th>
                            <th scope=\"col\" class=\"text-center\">Customer Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 30
            echo "                                <tr>
                                    <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Orderdate", [], "any", false, false, false, 32), "m/d/Y"), "html", null, true);
            echo "</td>
                                    ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 33), null))) {
                // line 34
                echo "                                    <td class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 36
                echo "                                    <td class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Deliverydate", [], "any", false, false, false, 36), "m/d/Y"), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 38
            echo "                                    <td class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Address", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "Payment", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    ";
            // line 40
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["o"], "Status", [], "any", false, false, false, 40), 0))) {
                // line 41
                echo "                                    <td class=\"text-center\">Delivering</td>
                                    ";
            } else {
                // line 43
                echo "                                    <td class=\"text-center\">Delivered</td>
                                    ";
            }
            // line 45
            echo "                                    <td class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>          
                                    <td>
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateorder", ["id" => twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\"> Update </a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderdetail", ["id" => twig_get_attribute($this->env, $this->source, $context["o"], "Oid", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\"> Detail </a>
                                    </td>
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return array (  156 => 53,  146 => 50,  140 => 47,  134 => 45,  130 => 43,  126 => 41,  124 => 40,  120 => 39,  115 => 38,  109 => 36,  103 => 34,  101 => 33,  97 => 32,  93 => 31,  90 => 30,  86 => 29,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div id=\"main\">
                <div class=\"container \">
                <br>
                    <h3>Manager Order</h3>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">ID</th>
                            <th scope=\"col\" class=\"text-center\">OrderDate</th>
                            <th scope=\"col\" class=\"text-center\">DeliveryDate</th>
                            <th scope=\"col\" class=\"text-center\">Address</th>
                            <th scope=\"col\" class=\"text-center\">Payment</th>
                            <th scope=\"col\" class=\"text-center\">Status</th>
                            <th scope=\"col\" class=\"text-center\">Customer Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for o in order %}
                                <tr>
                                    <td class=\"text-center\">{{o.Oid}}</td>
                                    <td class=\"text-center\">{{o.Orderdate|date(\"m/d/Y\")}}</td>
                                    {% if o.Deliverydate == null %}
                                    <td class=\"text-center\">{{o.Deliverydate}}</td>
                                    {% else %}
                                    <td class=\"text-center\">{{o.Deliverydate|date(\"m/d/Y\")}}</td>
                                    {% endif %}
                                    <td class=\"text-center\">{{o.Address}}</td>
                                    <td class=\"text-center\">{{o.Payment}}</td>
                                    {% if o.Status == 0 %}
                                    <td class=\"text-center\">Delivering</td>
                                    {% else %}
                                    <td class=\"text-center\">Delivered</td>
                                    {% endif %}
                                    <td class=\"text-center\">{{o.user}}</td>          
                                    <td>
                                        <a href=\"{{ path('updateorder', {'id' : o.Oid})}}\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\"> Update </a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('orderdetail', {'id' : o.Oid})}}\" class=\"btn rounded-pill text-light\" style=\"background-color: rgb(255,105,180);\"> Detail </a>
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
", "order_management/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\order_management\\index.html.twig");
    }
}
