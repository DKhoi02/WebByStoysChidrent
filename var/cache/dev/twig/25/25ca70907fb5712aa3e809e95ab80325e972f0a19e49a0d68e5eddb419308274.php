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

/* compare_product/index.html.twig */
class __TwigTemplate_e30da910c202242c5b86c2170b0ba169400125033ad5a90d4b1cf461db65e85c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compare_product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compare_product/index.html.twig", 1);
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
<div class=\"container\">
  <H2>Compare Product</H2>
  <br>
  <div class=\"row\" style=\"background-color: aliceblue;\">
     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 10
            echo "        <div class=\"col-md-6\">
            <div class=\"card\">
            <br>
              <img 
                src=\"../img/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productimage", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 40%;\"
              />
              <div class=\"card-body align-self-center\">
                <h4 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productname", [], "any", false, false, false, 20), "html", null, true);
            echo "</h4>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Price", [], "any", false, false, false, 21), "html", null, true);
            echo " VND</h6>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productdes", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>
              </div>
            </div>
        </div>
      <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>  
</div>
<br>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "compare_product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  93 => 22,  89 => 21,  85 => 20,  76 => 14,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
<div class=\"container\">
  <H2>Compare Product</H2>
  <br>
  <div class=\"row\" style=\"background-color: aliceblue;\">
     {% for p in product %}
        <div class=\"col-md-6\">
            <div class=\"card\">
            <br>
              <img 
                src=\"../img/{{p.Productimage}}\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 40%;\"
              />
              <div class=\"card-body align-self-center\">
                <h4 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Productname}}</h4>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Price}} VND</h6>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Productdes}}</h6>
              </div>
            </div>
        </div>
      <br>
    {% endfor %}
  </div>  
</div>
<br>
</main>
{% endblock %}", "compare_product/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\compare_product\\index.html.twig");
    }
}
