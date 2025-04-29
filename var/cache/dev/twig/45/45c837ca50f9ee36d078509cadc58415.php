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

/* repository/recursiveRepoDownload.html.twig */
class __TwigTemplate_9cf6818fd14dfb2310b8728193da5c20 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/recursiveRepoDownload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/recursiveRepoDownload.html.twig"));

        // line 1
        yield "<ul style=\"user-select: none;\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["directorios"]) || array_key_exists("directorios", $context) ? $context["directorios"] : (function () { throw new RuntimeError('Variable "directorios" does not exist.', 2, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["directorio"]) {
            // line 3
            yield "    <li>
      ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "type", [], "any", false, false, false, 4) == "dir")) {
                // line 5
                yield "        <span class=\"toggle-dir\" style=\"cursor: pointer;\">
          <i class=\"bi bi-folder-plus me-1\"></i>
          <input type=\"checkbox\" class=\"form-check-input\" data-type=\"dir\" id=\"file-";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 7), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 7), "html", null, true);
                yield "\"
                onclick=\"event.stopPropagation();\">
          <label class=\"form-check-label\" for=\"file-";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 9), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 9), "html", null, true);
                yield "</label>
        </span>
        <ul class=\"nested\" style=\"display: none;\">
          ";
                // line 12
                yield from $this->loadTemplate("repository/recursiveRepoDownload.html.twig", "repository/recursiveRepoDownload.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["directorios" => CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "content", [], "any", false, false, false, 12)]));
                // line 13
                yield "        </ul>
      ";
            } else {
                // line 15
                yield "        <i class=\"bi bi-file-earmark-text me-1\"></i>
        <span class=\"file\" data-filepath=\"";
                // line 16
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 16), "html", null, true)) : (""));
                yield "\" style=\"cursor: pointer;\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"file-";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 17), "html", null, true);
                yield "\"><label class=\"form-check-label\" for=\"file-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "</label>
        </span>
      ";
            }
            // line 20
            yield "    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['directorio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "repository/recursiveRepoDownload.html.twig";
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
        return array (  132 => 22,  117 => 20,  105 => 17,  101 => 16,  98 => 15,  94 => 13,  92 => 12,  84 => 9,  77 => 7,  73 => 5,  71 => 4,  68 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul style=\"user-select: none;\">
  {% for directorio in directorios %}
    <li>
      {% if directorio.type == 'dir' %}
        <span class=\"toggle-dir\" style=\"cursor: pointer;\">
          <i class=\"bi bi-folder-plus me-1\"></i>
          <input type=\"checkbox\" class=\"form-check-input\" data-type=\"dir\" id=\"file-{{ directorio.name }}\" value=\"{{ directorio.fullPath }}\"
                onclick=\"event.stopPropagation();\">
          <label class=\"form-check-label\" for=\"file-{{ directorio.name }}\">{{ directorio.name }}</label>
        </span>
        <ul class=\"nested\" style=\"display: none;\">
          {% include 'repository/recursiveRepoDownload.html.twig' with { 'directorios': directorio.content } %}
        </ul>
      {% else %}
        <i class=\"bi bi-file-earmark-text me-1\"></i>
        <span class=\"file\" data-filepath=\"{{ directorio.fullPath ?? '' }}\" style=\"cursor: pointer;\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"file-{{ directorio.name }}\" value=\"{{ directorio.fullPath }}\"><label class=\"form-check-label\" for=\"file-{{ directorio.name }}\">{{ directorio.name }}</label>
        </span>
      {% endif %}
    </li>
  {% endfor %}
</ul>
", "repository/recursiveRepoDownload.html.twig", "/var/www/krakenvault/templates/repository/recursiveRepoDownload.html.twig");
    }
}
