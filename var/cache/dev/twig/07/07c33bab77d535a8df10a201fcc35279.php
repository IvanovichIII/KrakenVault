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

/* repository/recursiveRepo.html.twig */
class __TwigTemplate_512cf3e8cbf6e339cc6f48678c248f47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/recursiveRepo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/recursiveRepo.html.twig"));

        // line 1
        yield "<style>
  ul {
    list-style-type: none;
    padding-left: 0.5em;
  }

  .nested {
    margin-left: 0.5em;
  }

  .toggle-dir:hover {
    text-decoration: underline;
  }
</style>

<ul style=\"user-select: none;\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["directorios"]) || array_key_exists("directorios", $context) ? $context["directorios"] : (function () { throw new RuntimeError('Variable "directorios" does not exist.', 17, $this->source); })()));
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
            // line 18
            yield "    <li>
      ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "type", [], "any", false, false, false, 19) == "dir")) {
                // line 20
                yield "        <span class=\"toggle-dir\" style=\"cursor: pointer;\">
          <i class=\"bi bi-folder-plus me-1\"></i>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 21), "html", null, true);
                yield "
        </span>
        <ul class=\"nested\" style=\"display: none;\">
          ";
                // line 24
                yield from $this->loadTemplate("repository/recursiveRepo.html.twig", "repository/recursiveRepo.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["directorios" => CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "content", [], "any", false, false, false, 24)]));
                // line 25
                yield "        </ul>
      ";
            } else {
                // line 27
                yield "        <i class=\"bi bi-file-earmark-text me-1\"></i>
        <span class=\"file-link\" data-filepath=\"";
                // line 28
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 28)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "fullPath", [], "any", false, false, false, 28), "html", null, true)) : (""));
                yield "\" data-is-image=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "isImage", [], "any", false, false, false, 28)) ? ("true") : ("false"));
                yield "\" style=\"cursor: pointer;\">
          ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["directorio"], "name", [], "any", false, false, false, 29), "html", null, true);
                yield "
        </span>
      ";
            }
            // line 32
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
        // line 34
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
        return "repository/recursiveRepo.html.twig";
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
        return array (  133 => 34,  118 => 32,  112 => 29,  106 => 28,  103 => 27,  99 => 25,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  83 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
  ul {
    list-style-type: none;
    padding-left: 0.5em;
  }

  .nested {
    margin-left: 0.5em;
  }

  .toggle-dir:hover {
    text-decoration: underline;
  }
</style>

<ul style=\"user-select: none;\">
  {% for directorio in directorios %}
    <li>
      {% if directorio.type == 'dir' %}
        <span class=\"toggle-dir\" style=\"cursor: pointer;\">
          <i class=\"bi bi-folder-plus me-1\"></i>{{ directorio.name }}
        </span>
        <ul class=\"nested\" style=\"display: none;\">
          {% include 'repository/recursiveRepo.html.twig' with { 'directorios': directorio.content } %}
        </ul>
      {% else %}
        <i class=\"bi bi-file-earmark-text me-1\"></i>
        <span class=\"file-link\" data-filepath=\"{{ directorio.fullPath ?? '' }}\" data-is-image=\"{{ directorio.isImage ? 'true' : 'false' }}\" style=\"cursor: pointer;\">
          {{ directorio.name }}
        </span>
      {% endif %}
    </li>
  {% endfor %}
</ul>
", "repository/recursiveRepo.html.twig", "/var/www/krakenvault/templates/repository/recursiveRepo.html.twig");
    }
}
