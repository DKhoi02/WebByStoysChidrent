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
    <form method=\"POST\" action=\"/test\">
    <div class=\"container\" style=\"display: flex\">
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"sort\" id=\"sort\">
            <option value=\"1\">Choose how to sort</option>
            <option value=\"1\" >From high to low</option>
            <option value=\"2\" >From low to high</option>
        </select>
        <p style=\"color: #fff\">ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP</p>
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"typeSort\" id=\"typeSort\">
            <option value=\"4\">Choose type to sort</option>
            <option value=\"1\" >Number of Order</option>
            <option value=\"2\" >Number of Product</option>
            <option value=\"3\" >Revenue</option>
            <option value=\"4\" >Interest</option>
        </select>
    </div>
    <div class=\"container\">
        <br>
        <label>Choose time from:</label>
        <input type=\"datetime-local\" id=\"timeFrom\" name=\"timeFrom\">
        <br>
        <br>
        <label>Choose time to:</label>
        <input type=\"datetime-local\" id=\"timeTo\" name=\"timeTo\" >
        <br><br>
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
                ";
        // line 61
        echo "        </table>
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
        return array (  108 => 61,  59 => 4,  52 => 3,  35 => 1,);
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
    <form method=\"POST\" action=\"/test\">
    <div class=\"container\" style=\"display: flex\">
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"sort\" id=\"sort\">
            <option value=\"1\">Choose how to sort</option>
            <option value=\"1\" >From high to low</option>
            <option value=\"2\" >From low to high</option>
        </select>
        <p style=\"color: #fff\">ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP_ATN_SHOP</p>
        <select class=\"form-select\" required=\"required\" style=\"width:200px, display: flex\" name=\"typeSort\" id=\"typeSort\">
            <option value=\"4\">Choose type to sort</option>
            <option value=\"1\" >Number of Order</option>
            <option value=\"2\" >Number of Product</option>
            <option value=\"3\" >Revenue</option>
            <option value=\"4\" >Interest</option>
        </select>
    </div>
    <div class=\"container\">
        <br>
        <label>Choose time from:</label>
        <input type=\"datetime-local\" id=\"timeFrom\" name=\"timeFrom\">
        <br>
        <br>
        <label>Choose time to:</label>
        <input type=\"datetime-local\" id=\"timeTo\" name=\"timeTo\" >
        <br><br>
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
                {# <tbody>
                            {% for s in shop %}
                                <tr>
                                    <td>{{s.id}}</td>
                                    <td>{{s.Telephone}}</td>          
                                    <td>{{s.Address}}</td>          
                                    <td>{{s.Email}}</td>          
                                </tr>     
                                {% endfor %}                        
                        </tbody> #}
        </table>
    </div>
</div>
</main>
{% endblock %}
", "shopmanage/statistics.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\shopmanage\\statistics.html.twig");
    }
}
