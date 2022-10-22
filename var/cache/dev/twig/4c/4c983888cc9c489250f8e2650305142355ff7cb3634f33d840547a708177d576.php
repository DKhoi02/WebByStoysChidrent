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

/* order_management/detail.html.twig */
class __TwigTemplate_28c635d168dda0fe4529504009ef7a15a2ad8cfaadf140c7275aba87c0d8f647 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_management/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order_management/detail.html.twig", 1);
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
                <br>
                    <h3>Order Detail</h3>
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_management");
        echo "\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Back to index</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">Order ID</th>
                            <th scope=\"col\" class=\"text-center\">OrderDetail ID</th>
                            <th scope=\"col\" class=\"text-center\">Product Name</th>
                            <th scope=\"col\" class=\"text-center\">Product Quantity</th>
                            <th scope=\"col\" class=\"text-center\">Price</th>
                            <th scope=\"col\" class=\"text-center\">Total</th><span class=\"badge text-dark\" style=\"background-color: rgb(255,105,180);\">Summary: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " VND</span>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 30
            echo "                            <tr>
                            <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "order", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "odid", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "product", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "total", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return "order_management/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  96 => 30,  92 => 29,  85 => 25,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div id=\"main\">
                <div class=\"container\">
                <br>
                    <h3>Order Detail</h3>
                    <a href=\"{{path('app_order_management')}}\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Back to index</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">Order ID</th>
                            <th scope=\"col\" class=\"text-center\">OrderDetail ID</th>
                            <th scope=\"col\" class=\"text-center\">Product Name</th>
                            <th scope=\"col\" class=\"text-center\">Product Quantity</th>
                            <th scope=\"col\" class=\"text-center\">Price</th>
                            <th scope=\"col\" class=\"text-center\">Total</th><span class=\"badge text-dark\" style=\"background-color: rgb(255,105,180);\">Summary: {{payment}} VND</span>
                            </tr>
                        </thead>
                        <tbody>
                            {% for d in detail %}
                            <tr>
                            <td class=\"text-center\">{{d.order}}</td>
                            <td class=\"text-center\">{{d.odid}}</td>
                            <td class=\"text-center\">{{d.product}}</td>
                            <td class=\"text-center\">{{d.quantity}}</td>
                            <td class=\"text-center\">{{d.price}}</td>
                            <td class=\"text-center\">{{d.total}}</td>
                            </tr>
                            {% endfor %}   
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
{% endblock %}", "order_management/detail.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\order_management\\detail.html.twig");
    }
}
