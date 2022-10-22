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

/* base.html.twig */
class __TwigTemplate_f6a9b8f510b891cc303aca4f645d4509ff913f23df5897ce34d9592a1b1cb51c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>ATN_shop</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 
        viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" 
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\"href=\"http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css\">
        <!-- Google Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"></script>
        

    <!-- My Script -->
    <script src=\"script.js\"></script>
        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "
        
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('nav', $context, $blocks);
        // line 101
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "        ";
        // line 130
        echo "</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 36
        echo "<nav class=\"navbar navbar-expand-lg\" style=\"background-color: rgb(255,105,180);\">   
  <div class=\"container-fluid\">
    ";
        // line 39
        echo "     <a class=\"navbar-brand text-light\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">ATN Shop</a>
    <a class=\"navbar-toggler\"  data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler\"style=\"background-color: rgb(255,20,147);\"><i class=\"fa fa-bars text-light\" ></i></span>
    </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\" style=\"font-size:22px\"></i> Home</a>
        </li>
        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "        <li class=\"nav-item dropdown\" style=\"hover:background-color:red;\">
                        <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" 
                        role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Management</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_mamagement");
                echo "\" style=\"hover:background-color:red;\">Account Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_management");
                echo "\">Order Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_management");
                echo "\">Brand Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pro_manage");
                echo "\">Product Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shopmanage");
                echo "\">Shop Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistics");
                echo "\">Statistics</a></li>
                        </ul>
        </li>                  
                    ";
            }
            // line 63
            echo "                    ";
        }
        // line 64
        echo "        <li class=\"nav-item\">
                </li>
                            <li class=\"nav-item\"> 
                <form class=\"d-flex\" method=\"GET\" action=\"/search\">
                    <input class=\"form-control me-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"search\" value=\"\">
                    <input class=\"btn text-light\" style= \"background-color: rgb(255,20,147);\" type=\"submit\" value=\"Search\"/>      
                </form>
            </li>
     </ul> 
        <ul class=\"navbar-nav\">
                ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74)) {
            // line 75
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\"
                        role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\" style=\"font-size:19px\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "userIdentifier", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_history");
            echo "\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i> Order history</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> Update account</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size:20px\"></i> Log out</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 84
            echo "   
                     <li><a class=\"nav-item nav-link text-light\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"></i> Login</a></li>
\t\t\t\t\t          <li><a class=\"nav-item nav-link text-light\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"></i> Register</a></li>      
                ";
        }
        // line 88
        echo "                    <li class=\"nav-item\">   
                    ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89)) {
            // line 90
            echo "                    <div class=\"navbar-nav ms-auto\"> 
                        <a class=\"nav-link text-light\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            echo "\" ><i class=\"fa fa-shopping-cart\" style=\"font-size:25px\"></i> Cart</a>
                    </div>
                    ";
        }
        // line 94
        echo "                </li>
        </ul>      
    </div>
  </div>
</nav>
</body>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  284 => 102,  277 => 101,  264 => 94,  258 => 91,  255 => 90,  253 => 89,  250 => 88,  245 => 86,  241 => 85,  238 => 84,  231 => 81,  227 => 80,  223 => 79,  218 => 77,  214 => 75,  212 => 74,  200 => 64,  197 => 63,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  164 => 50,  161 => 49,  159 => 48,  154 => 46,  143 => 39,  139 => 36,  132 => 35,  122 => 29,  115 => 28,  105 => 25,  98 => 24,  90 => 130,  88 => 103,  85 => 101,  83 => 35,  77 => 31,  75 => 28,  72 => 27,  70 => 24,  53 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>ATN_shop</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 
        viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" 
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\"href=\"http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css\">
        <!-- Google Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"></script>
        

    <!-- My Script -->
    <script src=\"script.js\"></script>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}

        
    </head>
    <body>
        {% block nav %}
<nav class=\"navbar navbar-expand-lg\" style=\"background-color: rgb(255,105,180);\">   
  <div class=\"container-fluid\">
    {# <a class=\"navbar-brand text-light\" href=\"{{path('home_page')}}\"><img src=\"../img/Logo_KTK_Shop.png\" width=\"160\" height=\"90\" alt=\"Image not available\"></a> #}
     <a class=\"navbar-brand text-light\" href=\"{{path('home_page')}}\">ATN Shop</a>
    <a class=\"navbar-toggler\"  data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler\"style=\"background-color: rgb(255,20,147);\"><i class=\"fa fa-bars text-light\" ></i></span>
    </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"{{path('home_page')}}\"><i class=\"fa fa-home\" aria-hidden=\"true\" style=\"font-size:22px\"></i> Home</a>
        </li>
        {% if app.user %}
        {% if is_granted('ROLE_ADMIN')  %}
        <li class=\"nav-item dropdown\" style=\"hover:background-color:red;\">
                        <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" 
                        role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Management</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{path('app_account_mamagement')}}\" style=\"hover:background-color:red;\">Account Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('app_order_management')}}\">Order Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('app_brand_management')}}\">Brand Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('app_pro_manage')}}\">Product Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('app_shopmanage')}}\">Shop Management</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{path('statistics')}}\">Statistics</a></li>
                        </ul>
        </li>                  
                    {% endif %}
                    {% endif %}
        <li class=\"nav-item\">
                </li>
                            <li class=\"nav-item\"> 
                <form class=\"d-flex\" method=\"GET\" action=\"/search\">
                    <input class=\"form-control me-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"search\" value=\"\">
                    <input class=\"btn text-light\" style= \"background-color: rgb(255,20,147);\" type=\"submit\" value=\"Search\"/>      
                </form>
            </li>
     </ul> 
        <ul class=\"navbar-nav\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\"
                        role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\" style=\"font-size:19px\"></i> {{app.user.userIdentifier}}</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{path('app_order_history')}}\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i> Order history</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('profile') }}\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> Update account</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size:20px\"></i> Log out</a></li>
                        </ul>
                    </li>
                {% else %}   
                     <li><a class=\"nav-item nav-link text-light\" href=\"{{path('app_login')}}\"></i> Login</a></li>
\t\t\t\t\t          <li><a class=\"nav-item nav-link text-light\" href=\"{{path('app_register')}}\"></i> Register</a></li>      
                {% endif %}
                    <li class=\"nav-item\">   
                    {% if app.user %}
                    <div class=\"navbar-nav ms-auto\"> 
                        <a class=\"nav-link text-light\" href=\"{{path('app_cart')}}\" ><i class=\"fa fa-shopping-cart\" style=\"font-size:25px\"></i> Cart</a>
                    </div>
                    {% endif %}
                </li>
        </ul>      
    </div>
  </div>
</nav>
</body>
        {% endblock %}
        {% block body %}
        {% endblock %}
        {# {% block footer %}
    <div class=\" text-center text-lg-start text-light\" style=\"background-color: rgb(255,105,180);\">
  <div class=\"container p-4 \" >
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase text-light\">Address</h5>

        <p>
            No. 160, 30/4 Street, An Phu Ward, Ninh Kieu District, Can Tho City
        </p>
        <div class = \"btn-social-icon\">
            <h5 class=\"text-uppercase text-light\">Contact</h5>
            <button type=\"button\" class=\"btn btn-social-icon btn-facebook\" style=\"background-color: #243996; color: aliceblue;\"><i class=\"fa fa-facebook\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-youtube\" style=\"background-color: #e71212; color: aliceblue;\"><i class=\"fa fa-youtube\"></i></button>                                        
            <button type=\"button\" class=\"btn btn-social-icon btn-twitter\" style=\"background-color: #50d0e0; color: aliceblue;\"><i class=\"fa fa-twitter\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-dribbble\" style=\"background-color: #e050cdf1; color: aliceblue;\"><i class=\"fa fa-dribbble\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-linkedin\" style=\"background-color: #100797; color: aliceblue;\"><i class=\"fa fa-linkedin\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-instagram\" style=\"background-color: #f7672e; color: aliceblue;\"><i class=\"fa fa-instagram\"></i></button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"text-center p-3 text-light\" style=\"background-color: rgb(255,105,180);\">© 2022 Copyright:
<a class=\"text-light\" href=\"{{path('home_page')}}\">ATN_shop.Com</a>
  </div>
    </div>
    {% endblock %} #}
</html>
", "base.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\base.html.twig");
    }
}
