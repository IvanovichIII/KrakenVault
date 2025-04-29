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

/* repository/historic.html.twig */
class __TwigTemplate_f297ec10ddc0bdaa1360a28319b056c3 extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "navbarRepo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/historic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/historic.html.twig"));

        $this->parent = $this->loadTemplate("navbarRepo.html.twig", "repository/historic.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        yield "<style>
.file-content{
  white-space: pre-wrap;
  border: 1px solid #ccc;
  padding: 1rem;
  margin-top: 1rem;
  font-family: monospace;
}
.file-link.active {
  text-decoration: underline;
  font-weight: bold;
  color: #0d6efd;
}
</style>
  <div class=\"row\">
    <div class=\"col-md-4\">
      ";
        // line 25
        yield from $this->loadTemplate("repository/dropdown.html.twig", "repository/historic.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["repo" => (isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 25, $this->source); })())]));
        // line 26
        yield "      <div class=\"col-md-8 border-start\" style=\"display:none;\" id=\"file-box\">
        <div id=\"file-title\"class=\"file-title mb-3 d-flex align-items-center gap-2\">
          <i class=\"bi bi-file-earmark-text fs-4 text-primary\"></i>
          <span id=\"file-name\" class=\"fs-5 fw-bold text-dark\"></span>
        </div>
      <div id=\"file-content\" class=\"file-content border rounded p-3 bg-light\" style=\"white-space: pre-wrap;\"></div>
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
        return "repository/historic.html.twig";
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
        return array (  126 => 26,  124 => 25,  106 => 9,  93 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navbarRepo.html.twig' %}

{% block title %}
  {{ repo }} - {{ usuario }}
{% endblock %}


{% block content %}
<style>
.file-content{
  white-space: pre-wrap;
  border: 1px solid #ccc;
  padding: 1rem;
  margin-top: 1rem;
  font-family: monospace;
}
.file-link.active {
  text-decoration: underline;
  font-weight: bold;
  color: #0d6efd;
}
</style>
  <div class=\"row\">
    <div class=\"col-md-4\">
      {% include 'repository/dropdown.html.twig' with { 'repo': repo } %}
      <div class=\"col-md-8 border-start\" style=\"display:none;\" id=\"file-box\">
        <div id=\"file-title\"class=\"file-title mb-3 d-flex align-items-center gap-2\">
          <i class=\"bi bi-file-earmark-text fs-4 text-primary\"></i>
          <span id=\"file-name\" class=\"fs-5 fw-bold text-dark\"></span>
        </div>
      <div id=\"file-content\" class=\"file-content border rounded p-3 bg-light\" style=\"white-space: pre-wrap;\"></div>
    </div>
  </div>
{% endblock %}", "repository/historic.html.twig", "/var/www/krakenvault/templates/repository/historic.html.twig");
    }
}
