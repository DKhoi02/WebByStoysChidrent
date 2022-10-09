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

/* cart/index.html.twig */
class __TwigTemplate_d74a0536a1b35626a08e24e1b0f2080c6b7064dbe703de46de0514de2cb297d8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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
        echo "    <section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-8\">
                <div class=\"p-5\">
                  <div class=\"d-flex justify-content-between align-items-center mb-5\">
                    <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                    <h6 class=\"mb-0 text-muted\"></h6>
                  </div>
                
                  <hr class=\"my-4\">

                  <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <img 
                      src=\"./img/\"
                      class=\"img-fluid rounded-3\" alt=\"\">
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h6 class=\"text-black mb-0\"></h6>
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"\" type=\"number\"
                      class=\"form-control form-control-sm\" />
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h6 class=\"mb-0\"><span>&#8363;</span></h6>
                  </div>
                  
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                    <a href=\"#\" class=\"text-muted text-decoration-none\">x</a>
                  </div>
                </div>
                  <hr class=\"my-4\">

                  <div class=\"pt-5\">
                    <h6 class=\"mb-0\"><a class=\"text-body\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\"><i
                        class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 bg-grey\">
                <div class=\"p-5\">
                  <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                  <hr class=\"my-4\">

                  <div class=\"d-flex justify-content-between mb-5\">
                    <h5 class=\"text-uppercase\">Total price</h5>
                    <h5><span>&#8363;</span></h5>
                  </div>
                  <form class=\"d-flex\" method=\"POST\">
                    <a href=\"#\" class=\"btn text-light \" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Payment\" name=\"payment\">Order</a> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-8\">
                <div class=\"p-5\">
                  <div class=\"d-flex justify-content-between align-items-center mb-5\">
                    <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                    <h6 class=\"mb-0 text-muted\"></h6>
                  </div>
                
                  <hr class=\"my-4\">

                  <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <img 
                      src=\"./img/\"
                      class=\"img-fluid rounded-3\" alt=\"\">
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h6 class=\"text-black mb-0\"></h6>
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"\" type=\"number\"
                      class=\"form-control form-control-sm\" />
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h6 class=\"mb-0\"><span>&#8363;</span></h6>
                  </div>
                  
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                    <a href=\"#\" class=\"text-muted text-decoration-none\">x</a>
                  </div>
                </div>
                  <hr class=\"my-4\">

                  <div class=\"pt-5\">
                    <h6 class=\"mb-0\"><a class=\"text-body\" href=\"{{path('home_page')}}\"><i
                        class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 bg-grey\">
                <div class=\"p-5\">
                  <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                  <hr class=\"my-4\">

                  <div class=\"d-flex justify-content-between mb-5\">
                    <h5 class=\"text-uppercase\">Total price</h5>
                    <h5><span>&#8363;</span></h5>
                  </div>
                  <form class=\"d-flex\" method=\"POST\">
                    <a href=\"#\" class=\"btn text-light \" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Payment\" name=\"payment\">Order</a> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}


", "cart/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\cart\\index.html.twig");
    }
}
