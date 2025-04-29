<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sidebar.html.twig */
class __TwigTemplate_50dbe7616945ddcb1106a0840e44966b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sidebar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        yield "  <h1 class=\"visually-hidden\">KrakenVault</h1>

  <div class=\"d-flex flex-column flex-shrink-0 p-3 text-bg-dark\" style=\"width: 280px;\">
    <div class=\"dropdown\">
      <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ftp_image", ["filename" => (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 9, $this->source); })())]), "html", null, true);
        yield "\" style=\"user-select: none;\" alt=\"Avatar\" width=\"48\" height=\"48\" class=\"rounded-4 me-2\" style=\"box-shadow: 0 0px 10px rgba(0, 0, 0, 1);\"/>
        <span class=\"fs-3\"><u>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</u></span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
        <li>
          <a class=\"dropdown-item\" href=\"#\">New project...</a>
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"#\">Settings</a>
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"#\">Profile</a>
        </li>
        <li>
          <hr class=\"dropdown-divider\" />
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">Log out</a>
        </li>
      </ul>
    </div>
    <hr />
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
      <svg class=\"bi pe-none me-2\" width=\"40\" height=\"32\">
        <use xlink:href=\"#bootstrap\" />
      </svg>
      <span class=\"fs-4\">KrakenVault</span>
    </a>
    <hr />
    <ul class=\"nav nav-pills flex-column mb-auto\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40) == "Home")) {
            yield "active";
        } else {
            yield "text-white";
        }
        yield "\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        yield "\" />
          </svg>Home
        </a>
      </li>
      <li>
         <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) == "repositories")) {
            yield "active";
        } else {
            yield "text-white";
        }
        yield "\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
        yield "\" />
          </svg>Repositories
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#table\" />
          </svg>Orders
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#grid\" />
          </svg>Products
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#people-circle\" />
          </svg>Customers
        </a>
      </li>
    </ul>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 49,  142 => 47,  134 => 42,  123 => 40,  106 => 26,  87 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block sidebar %}
  <h1 class=\"visually-hidden\">KrakenVault</h1>

  <div class=\"d-flex flex-column flex-shrink-0 p-3 text-bg-dark\" style=\"width: 280px;\">
    <div class=\"dropdown\">
      <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <img src=\"{{ path('ftp_image', {'filename': avatar}) }}\" style=\"user-select: none;\" alt=\"Avatar\" width=\"48\" height=\"48\" class=\"rounded-4 me-2\" style=\"box-shadow: 0 0px 10px rgba(0, 0, 0, 1);\"/>
        <span class=\"fs-3\"><u>{{ usuario }}</u></span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
        <li>
          <a class=\"dropdown-item\" href=\"#\">New project...</a>
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"#\">Settings</a>
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"#\">Profile</a>
        </li>
        <li>
          <hr class=\"dropdown-divider\" />
        </li>
        <li>
          <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Log out</a>
        </li>
      </ul>
    </div>
    <hr />
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
      <svg class=\"bi pe-none me-2\" width=\"40\" height=\"32\">
        <use xlink:href=\"#bootstrap\" />
      </svg>
      <span class=\"fs-4\">KrakenVault</span>
    </a>
    <hr />
    <ul class=\"nav nav-pills flex-column mb-auto\">
      <li class=\"nav-item\">
        <a href=\"{{ path('Home') }}\" class=\"nav-link {% if app.request.get('_route') == 'Home' %}active{% else %}text-white{% endif %}\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"{{ path('Home') }}\" />
          </svg>Home
        </a>
      </li>
      <li>
         <a href=\"{{ path('repositories') }}\" class=\"nav-link {% if app.request.get('_route') == 'repositories' %}active{% else %}text-white{% endif %}\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"{{ path('repositories') }}\" />
          </svg>Repositories
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#table\" />
          </svg>Orders
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#grid\" />
          </svg>Products
        </a>
      </li>
      <li>
        <a href=\"#\" class=\"nav-link text-white\">
          <svg class=\"bi pe-none me-2\" width=\"16\" height=\"16\">
            <use xlink:href=\"#people-circle\" />
          </svg>Customers
        </a>
      </li>
    </ul>
  </div>
{% endblock %}
", "sidebar.html.twig", "/var/www/krakenvault/templates/sidebar.html.twig");
    }
}
