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

/* pro_manage/index.html.twig */
class __TwigTemplate_39018a935c0e1632e8ddbd79ce2badf8c87daba62064e307ad276ebf5d96d7d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pro_manage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pro_manage/index.html.twig", 1);
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
                    <h3>Manager Product</h3> <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpromanage");
        echo "\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">ID</th>
                            <th scope=\"col\" class=\"text-center\">Name</th>
                            <th scope=\"col\" class=\"text-center\">Price</th>
                            <th scope=\"col\" class=\"text-center\">Description</th>
                            <th scope=\"col\" class=\"text-center\">Quantity</th>
                            <th scope=\"col\" class=\"text-center\">Image</th>
                            <th scope=\"col\" class=\"text-center\">Brand Name</th>
                            <th scope=\"col\" class=\"text-center\">Address Shop</th>
                            <th scope=\"col\" class=\"text-center\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "                                <tr>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "productid", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productname", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Price", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productdes", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productquantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td><img src=\"../img/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productimage", [], "any", false, false, false, 38), "html", null, true);
            echo "\"
                                     alt=\"\" width=\"100px\" height=\"100px\"></td>
                                    <td class=\"text-center\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "brandid", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "address", [], "any", false, false, false, 41), "html", null, true);
            echo "</td> 
                                    ";
            // line 42
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "Status", [], "any", false, false, false, 42), 1))) {
                // line 43
                echo "                                    <td>Available</td>
                                    ";
            } else {
                // line 45
                echo "                                    <td>Unavailable</td>
                                    ";
            }
            // line 46
            echo "         
                                    <td>
                                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatepromanage", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "productid", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn rounded-pill text-light\"
                                         style=\"background-color: rgb(255,105,180);\"> Update </a>
                                    </td>
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
        return "pro_manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  145 => 48,  141 => 46,  137 => 45,  133 => 43,  131 => 42,  127 => 41,  123 => 40,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  95 => 32,  91 => 31,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">

    <div id=\"main\">
                <div class=\"container\">
                <br>
                    <h3>Manager Product</h3> <a href=\"{{path('addpromanage')}}\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\" class=\"text-center\">ID</th>
                            <th scope=\"col\" class=\"text-center\">Name</th>
                            <th scope=\"col\" class=\"text-center\">Price</th>
                            <th scope=\"col\" class=\"text-center\">Description</th>
                            <th scope=\"col\" class=\"text-center\">Quantity</th>
                            <th scope=\"col\" class=\"text-center\">Image</th>
                            <th scope=\"col\" class=\"text-center\">Brand Name</th>
                            <th scope=\"col\" class=\"text-center\">Address Shop</th>
                            <th scope=\"col\" class=\"text-center\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for p in product %}
                                <tr>
                                    <td>{{p.productid}}</td>
                                    <td>{{p.Productname}}</td>
                                    <td>{{p.Price}}</td>
                                    <td>{{p.Productdes}}</td>
                                    <td class=\"text-center\">{{p.Productquantity}}</td>
                                    <td><img src=\"../img/{{p.Productimage}}\"
                                     alt=\"\" width=\"100px\" height=\"100px\"></td>
                                    <td class=\"text-center\">{{p.brandid}}</td>          
                                    <td>{{p.address}}</td> 
                                    {% if p.Status == 1 %}
                                    <td>Available</td>
                                    {% else %}
                                    <td>Unavailable</td>
                                    {% endif %}         
                                    <td>
                                        <a href=\"{{path('updatepromanage',{'id' : p.productid})}}\" class=\"btn rounded-pill text-light\"
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
", "pro_manage/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\pro_manage\\index.html.twig");
    }
}
