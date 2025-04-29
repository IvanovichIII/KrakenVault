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

/* navbar.html.twig */
class __TwigTemplate_753b8b065f6e82ac72b42f5ff195fb66 extends Template
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
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "navbar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        yield "  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary px-4\">
    <div class=\"container-fluid\">
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarPirata\" aria-controls=\"navbarPirata\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

      <div class=\"collapse navbar-collapse\" id=\"navbarPirata\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
            ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11) == "repositories")) {
            // line 12
            yield "              <span class=\"nav-link text-grey\" style=\"user-select: none;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
            yield "\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</span>
            ";
        } else {
            // line 14
            yield "              <a class=\"nav-link text-white\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
            yield "\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</a>
            ";
        }
        // line 16
        yield "          </li>
          <li class=\"nav-item\">
            <button class=\"nav-link text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#CrearRepositorio\"><i class=\"bi bi-archive me-1\"></i>Crear Repositorio</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"CrearRepositorio\" tabindex=\"-1\" aria-labelledby=\"CrearRepositorioLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\" id=\"modalAllId\">
        <div class=\"modal-header\" id=\"modalHeaderId\">
          <h5 class=\"modal-title\" id=\"CrearRepositorioLabel\">Crear Repositorio</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
        </div>
        <div class=\"modal-body\" id=\"modalBodyId\">
          <label for=\"titulo\">Título:</label>
          <input type=\"text\" id=\"titulo\" class=\"form-control\" placeholder=\"Repositorio\" />
          <label for=\"descripcion\">Descripción:</label>
          <textarea id=\"descripcion\" class=\"form-control\" style=\"resize: both; max-width: 100%; min-width: 100%; max-height: 300px;\" placeholder=\"Descripción\"></textarea>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" id=\"guardarModalId\" onclick=\"guardarModal()\" class=\"btn btn-primary\">Crear</button>
        </div>
      </div>
    </div>
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
        return "navbar.html.twig";
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
        return array (  99 => 16,  93 => 14,  87 => 12,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sidebar.html.twig' %}

{% block navbar %}
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary px-4\">
    <div class=\"container-fluid\">
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarPirata\" aria-controls=\"navbarPirata\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

      <div class=\"collapse navbar-collapse\" id=\"navbarPirata\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
            {% if app.request.get('_route') == 'repositories' %}
              <span class=\"nav-link text-grey\" style=\"user-select: none;\" href=\"{{ path('repositories') }}\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</span>
            {% else %}
              <a class=\"nav-link text-white\" href=\"{{ path('repositories') }}\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</a>
            {% endif %}
          </li>
          <li class=\"nav-item\">
            <button class=\"nav-link text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#CrearRepositorio\"><i class=\"bi bi-archive me-1\"></i>Crear Repositorio</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"CrearRepositorio\" tabindex=\"-1\" aria-labelledby=\"CrearRepositorioLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\" id=\"modalAllId\">
        <div class=\"modal-header\" id=\"modalHeaderId\">
          <h5 class=\"modal-title\" id=\"CrearRepositorioLabel\">Crear Repositorio</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
        </div>
        <div class=\"modal-body\" id=\"modalBodyId\">
          <label for=\"titulo\">Título:</label>
          <input type=\"text\" id=\"titulo\" class=\"form-control\" placeholder=\"Repositorio\" />
          <label for=\"descripcion\">Descripción:</label>
          <textarea id=\"descripcion\" class=\"form-control\" style=\"resize: both; max-width: 100%; min-width: 100%; max-height: 300px;\" placeholder=\"Descripción\"></textarea>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" id=\"guardarModalId\" onclick=\"guardarModal()\" class=\"btn btn-primary\">Crear</button>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "navbar.html.twig", "C:\\Users\\ivin0\\Desktop\\KrakenVault\\templates\\navbar.html.twig");
    }
}
