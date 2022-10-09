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

/* brand_mangement/index.html.twig */
class __TwigTemplate_6f1d37f8c3fb89e5d1d5f836a191d7ae75030f53a42516ac01e92c6cc0094371 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand_mangement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand_mangement/index.html.twig", 1);
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
        echo "
    <div id=\"main\">
                <div className=\"page-heading pb-2 mt-4 mb-2 \">
                    <h3>Manager Brand</h3> <a href=\"insert.php\"><button type=\"button\" class=\"btn btn-outline-primary\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">BrandName</th>
                            <th scope=\"col\">Branddes</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 25
            echo "                                <tr>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Brandname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Branddes", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "Status", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"update.php?id=<?=\$row['Product_ID']?>\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Update </a>
                                    </td>
                                </tr>     
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "brand_mangement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  85 => 25,  81 => 24,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"main\">
                <div className=\"page-heading pb-2 mt-4 mb-2 \">
                    <h3>Manager Brand</h3> <a href=\"insert.php\"><button type=\"button\" class=\"btn btn-outline-primary\">Insert</button></a>
                </div>
                <div class=\"page-content\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic outlined example\">
               
                </div>
                <div class=\"container mb-3\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">BrandName</th>
                            <th scope=\"col\">Branddes</th>
                            <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for b in brand %}
                                <tr>
                                    <td>{{b.id}}</td>
                                    <td>{{b.Brandname}}</td>
                                    <td>{{b.Branddes}}</td>
                                    <td>{{b.Status}}</td>
                                    <td>
                                        <a href=\"update.php?id=<?=\$row['Product_ID']?>\" class=\"btn rounded-pill text-light\" style=\"background-color: rgba(26,148,255,255);\"> Update </a>
                                    </td>
                                </tr>     
                                {% endfor %}                        
                        </tbody>
                    </table>
             </div>
            </div>
    </div>
{% endblock %}
", "brand_mangement/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\brand_mangement\\index.html.twig");
    }
}
