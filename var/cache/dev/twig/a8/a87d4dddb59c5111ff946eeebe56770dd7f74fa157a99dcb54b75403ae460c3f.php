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

/* shopmanage/statistics.html.twig */
class __TwigTemplate_372d2eecdec41baf8a42c05dcc5497c555c1f8d97a5a468c80d2aff3be8309ac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopmanage/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shopmanage/statistics.html.twig", 1);
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
        <h3>Manager Statistics</h3>
    </div>
    <br>
    <form method=\"POST\" action=\"/statistics\">
    <div class=\"container\" style=\"display: flex\">
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"sort\" id=\"sort\">
            <option value=\"\">Choose how to sort</option>
            ";
        // line 15
        if ((0 === twig_compare((isset($context["sortValue"]) || array_key_exists("sortValue", $context) ? $context["sortValue"] : (function () { throw new RuntimeError('Variable "sortValue" does not exist.', 15, $this->source); })()), 1))) {
            // line 16
            echo "                <option value=\"1\" selected>From high to low</option>
                <option value=\"2\" >From low to high</option>
            ";
        } elseif ((0 === twig_compare(        // line 18
(isset($context["sortValue"]) || array_key_exists("sortValue", $context) ? $context["sortValue"] : (function () { throw new RuntimeError('Variable "sortValue" does not exist.', 18, $this->source); })()), 2))) {
            // line 19
            echo "                <option value=\"1\" >From high to low</option>
                <option value=\"2\" selected>From low to high</option>
            ";
        } else {
            // line 22
            echo "                <option value=\"1\">From high to low</option>
                <option value=\"2\">From low to high</option>
            ";
        }
        // line 25
        echo "
        </select>
        <p style=\"color: #fff\">ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP</p>
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"typeSort\" id=\"typeSort\">
                <option value=\"\">Choose type to sort</option>
            ";
        // line 30
        if ((0 === twig_compare((isset($context["typeSortValue"]) || array_key_exists("typeSortValue", $context) ? $context["typeSortValue"] : (function () { throw new RuntimeError('Variable "typeSortValue" does not exist.', 30, $this->source); })()), 1))) {
            // line 31
            echo "                <option value=\"1\" selected>Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            ";
        } elseif ((0 === twig_compare(        // line 35
(isset($context["typeSortValue"]) || array_key_exists("typeSortValue", $context) ? $context["typeSortValue"] : (function () { throw new RuntimeError('Variable "typeSortValue" does not exist.', 35, $this->source); })()), 2))) {
            // line 36
            echo "                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" selected>Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            ";
        } elseif ((0 === twig_compare(        // line 40
(isset($context["typeSortValue"]) || array_key_exists("typeSortValue", $context) ? $context["typeSortValue"] : (function () { throw new RuntimeError('Variable "typeSortValue" does not exist.', 40, $this->source); })()), 3))) {
            // line 41
            echo "                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" selected>Revenue</option>
                <option value=\"4\" >Interest</option>
            ";
        } elseif ((0 === twig_compare(        // line 45
(isset($context["typeSortValue"]) || array_key_exists("typeSortValue", $context) ? $context["typeSortValue"] : (function () { throw new RuntimeError('Variable "typeSortValue" does not exist.', 45, $this->source); })()), 4))) {
            // line 46
            echo "                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" selected>Interest</option>
            ";
        } else {
            // line 51
            echo "                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            ";
        }
        // line 56
        echo "
        </select>
    </div>
    <div class=\"container\" >
        <br>
        <label>Choose time from:</label>
        <input required=\"required\" id=\"timeFrom\" class=\"form-control\" type=\"date\" name=\"timeFrom\" value =";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["timeFromFormat"]) || array_key_exists("timeFromFormat", $context) ? $context["timeFromFormat"] : (function () { throw new RuntimeError('Variable "timeFromFormat" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " style=\"width:200px\"/> 
        <br>
        <label>Choose time to:</label>
        <input required=\"required\" id=\"timeTo\" class=\"form-control\" type=\"date\" name=\"timeTo\" value =";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["timeToFormat"]) || array_key_exists("timeToFormat", $context) ? $context["timeToFormat"] : (function () { throw new RuntimeError('Variable "timeToFormat" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " style=\"width:200px\"/>
        <br>
        <input class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\" type=\"submit\" value=\"Submit\"/> 
    </div>
    </form>

    <div class=\"container mb-3\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">Address</th>
                    <th scope=\"col\"> Number of Order</th>
                    <th scope=\"col\"> Number of Product</th>
                    <th scope=\"col\">Revenue</th>
                    <th scope=\"col\">Interest</th>
                </tr>
            </thead>
                <tbody>
                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 84
            echo "                                <tr>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "address", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "order", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "product", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "res", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>          
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                        
                        </tbody>
        </table>
    </div>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shopmanage/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 91,  195 => 89,  191 => 88,  187 => 87,  183 => 86,  179 => 85,  176 => 84,  172 => 83,  151 => 65,  145 => 62,  137 => 56,  130 => 51,  123 => 46,  121 => 45,  115 => 41,  113 => 40,  107 => 36,  105 => 35,  99 => 31,  97 => 30,  90 => 25,  85 => 22,  80 => 19,  78 => 18,  74 => 16,  72 => 15,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<br>
<div id=\"main\">
    <div class=\"container\">
        <h3>Manager Statistics</h3>
    </div>
    <br>
    <form method=\"POST\" action=\"/statistics\">
    <div class=\"container\" style=\"display: flex\">
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"sort\" id=\"sort\">
            <option value=\"\">Choose how to sort</option>
            {% if sortValue == 1%}
                <option value=\"1\" selected>From high to low</option>
                <option value=\"2\" >From low to high</option>
            {% elseif sortValue == 2 %}
                <option value=\"1\" >From high to low</option>
                <option value=\"2\" selected>From low to high</option>
            {% else %}
                <option value=\"1\">From high to low</option>
                <option value=\"2\">From low to high</option>
            {% endif %}

        </select>
        <p style=\"color: #fff\">ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP</p>
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"typeSort\" id=\"typeSort\">
                <option value=\"\">Choose type to sort</option>
            {% if typeSortValue == 1 %}
                <option value=\"1\" selected>Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            {% elseif typeSortValue == 2 %}
                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" selected>Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            {% elseif typeSortValue == 3 %}
                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" selected>Revenue</option>
                <option value=\"4\" >Interest</option>
            {% elseif typeSortValue == 4 %}
                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" selected>Interest</option>
            {% else %}
                <option value=\"1\" >Number of Order</option>
                <option value=\"2\" >Number of Product</option>
                <option value=\"3\" >Revenue</option>
                <option value=\"4\" >Interest</option>
            {% endif %}

        </select>
    </div>
    <div class=\"container\" >
        <br>
        <label>Choose time from:</label>
        <input required=\"required\" id=\"timeFrom\" class=\"form-control\" type=\"date\" name=\"timeFrom\" value ={{timeFromFormat}} style=\"width:200px\"/> 
        <br>
        <label>Choose time to:</label>
        <input required=\"required\" id=\"timeTo\" class=\"form-control\" type=\"date\" name=\"timeTo\" value ={{timeToFormat}} style=\"width:200px\"/>
        <br>
        <input class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\" type=\"submit\" value=\"Submit\"/> 
    </div>
    </form>

    <div class=\"container mb-3\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">Address</th>
                    <th scope=\"col\"> Number of Order</th>
                    <th scope=\"col\"> Number of Product</th>
                    <th scope=\"col\">Revenue</th>
                    <th scope=\"col\">Interest</th>
                </tr>
            </thead>
                <tbody>
                            {% for r in result %}
                                <tr>
                                    <td>{{r.address}}</td>
                                    <td>{{r.order}}</td>          
                                    <td>{{r.product}}</td>          
                                    <td>{{r.total}}</td>          
                                    <td>{{r.res}}</td>          
                                </tr>     
                                {% endfor %}                        
                        </tbody>
        </table>
    </div>
</div>
</main>
{% endblock %}
", "shopmanage/statistics.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\shopmanage\\statistics.html.twig");
    }
}
