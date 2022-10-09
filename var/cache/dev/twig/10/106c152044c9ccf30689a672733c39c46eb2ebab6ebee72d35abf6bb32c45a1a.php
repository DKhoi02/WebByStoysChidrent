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

/* account_mamagement/index.html.twig */
class __TwigTemplate_b969973105b4e5f2c8b4f816bb82608c96b61f7083ccdb4b81caaac1b17ae0c5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account_mamagement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account_mamagement/index.html.twig", 1);
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
                    <h3>Manager Account</h3> <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addaccountadmin");
        echo "\"><button type=\"button\" class=\"btn btn-outline-primary\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Username</th>
                            <th scope=\"col\">ROLE</th>
                            <th scope=\"col\">CustomerName</th>
                            <th scope=\"col\">Gender</th>
                            <th scope=\"col\">BirthDay</th>
                            <th scope=\"col\">Telephone</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
            echo "                                <tr>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                    <td>
                                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "role", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 36
                echo "                                        ";
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                    </td>
                                    ";
            // line 40
            echo "                                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Fullname", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Gender", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Birthdate", [], "any", false, false, false, 42), "m/d/Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Telephone", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Address", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>          
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Email", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>          
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return "account_mamagement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  143 => 45,  139 => 44,  135 => 43,  131 => 42,  127 => 41,  122 => 40,  119 => 38,  110 => 36,  106 => 35,  101 => 33,  97 => 32,  94 => 31,  90 => 30,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<br>
    <div id=\"main\">
                <div class=\"container\">
                    <h3>Manager Account</h3> <a href=\"{{path('addaccountadmin')}}\"><button type=\"button\" class=\"btn btn-outline-primary\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Username</th>
                            <th scope=\"col\">ROLE</th>
                            <th scope=\"col\">CustomerName</th>
                            <th scope=\"col\">Gender</th>
                            <th scope=\"col\">BirthDay</th>
                            <th scope=\"col\">Telephone</th>
                            <th scope=\"col\">Address</th>
                            <th scope=\"col\">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for c in account %}
                                <tr>
                                    <td>{{c.id}}</td>
                                    <td>{{c.username}}</td>
                                    <td>
                                    {% for row in c.role %}
                                        {{row}}
                                    {% endfor %}
                                    </td>
                                    {# <td>{{(c.role)|json_encode }}</td> #}
                                    <td>{{c.Fullname}}</td>
                                    <td>{{c.Gender}}</td>
                                    <td>{{c.Birthdate|date(\"m/d/Y\")}}</td>
                                    <td>{{c.Telephone}}</td>          
                                    <td>{{c.Address}}</td>          
                                    <td>{{c.Email}}</td>          
                                </tr>     
                                {% endfor %}                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
    </main>
{% endblock %}
", "account_mamagement/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\account_mamagement\\index.html.twig");
    }
}
