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

/* pro_manage/update.html.twig */
class __TwigTemplate_235a2da363d97298ff6e5bfe414fbcaa95fc3950e7bec6975b6b0df2eca3c41f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pro_manage/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pro_manage/update.html.twig", 1);
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
        echo "<div  class=\"container\">
<br>
<h1> Product Manage</h1>
<br>
<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pro_manage");
        echo "\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Back to index</button></a>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group\">
    <input type=\"button\" id=\"click-input\" value=\"Choose file\" onclick=\"document.getElementById('file').click();\" name=\"files\"/>
    <label for=\"click-input\" id=\"file-name\" name=\"file-name\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 13, $this->source); })()), "Productimage", [], "any", false, false, false, 13), "html", null, true);
        echo "</label>
    <input type=\"file\" style=\"display:none;\" id=\"file\" name=\"file\">
    <input type=\"hidden\" name=\"oldimg\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 15, $this->source); })()), "Productimage", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <script>
        inputElement = document.getElementById('file')
        labelElement = document.getElementById('file-name')
        inputElement.onchange = function(event) {
            var path = inputElement.value;
            if (path) {
            labelElement.innerHTML = path.split(/(\\\\|\\/)/g).pop()
            }
        }
    </script>
    </div> 
    <br>
    <input type=\"submit\" value=\"Submit\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\"/>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
    <br>  
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pro_manage/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  84 => 15,  79 => 13,  73 => 10,  69 => 9,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div  class=\"container\">
<br>
<h1> Product Manage</h1>
<br>
<a href=\"{{path('app_pro_manage')}}\"><button type=\"button\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Back to index</button></a>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <div class=\"form-group\">
    <input type=\"button\" id=\"click-input\" value=\"Choose file\" onclick=\"document.getElementById('file').click();\" name=\"files\"/>
    <label for=\"click-input\" id=\"file-name\" name=\"file-name\">{{p.Productimage}}</label>
    <input type=\"file\" style=\"display:none;\" id=\"file\" name=\"file\">
    <input type=\"hidden\" name=\"oldimg\" value=\"{{p.Productimage}}\">
    <script>
        inputElement = document.getElementById('file')
        labelElement = document.getElementById('file-name')
        inputElement.onchange = function(event) {
            var path = inputElement.value;
            if (path) {
            labelElement.innerHTML = path.split(/(\\\\|\\/)/g).pop()
            }
        }
    </script>
    </div> 
    <br>
    <input type=\"submit\" value=\"Submit\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\"/>
    {{ form_end(form) }}
    <br>  
</div>
{% endblock %}", "pro_manage/update.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\pro_manage\\update.html.twig");
    }
}
