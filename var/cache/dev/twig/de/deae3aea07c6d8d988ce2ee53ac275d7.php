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

/* repository/repository.html.twig */
class __TwigTemplate_118b9e1f853602176e28fd6d21ccf15f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/repository.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/repository.html.twig"));

        $this->parent = $this->loadTemplate("navbarRepo.html.twig", "repository/repository.html.twig", 1);
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
.auto-width {
  max-width: 100%;
  width: auto;
  height: auto;
  overflow: auto;
}
</style>
  <div class=\"row\">
    <div class=\"col-md-4 text-truncate\">
      ";
        // line 31
        yield from $this->loadTemplate("repository/dropdown.html.twig", "repository/repository.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["repo" => (isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 31, $this->source); })())]));
        // line 32
        yield "      ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["directorios"]) || array_key_exists("directorios", $context) ? $context["directorios"] : (function () { throw new RuntimeError('Variable "directorios" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "        <span class=\"fs-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 33, $this->source); })()), "html", null, true);
            yield " está vacío.</span>
      ";
        } else {
            // line 35
            yield "      <div class=\"overflow-y-auto\" style=\"max-height: 70vh;\">
        ";
            // line 36
            yield from $this->loadTemplate("repository/recursiveRepo.html.twig", "repository/repository.html.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["directorios" => (isset($context["directorios"]) || array_key_exists("directorios", $context) ? $context["directorios"] : (function () { throw new RuntimeError('Variable "directorios" does not exist.', 36, $this->source); })())]));
            // line 37
            yield "      </div>
      ";
        }
        // line 39
        yield "    </div>
    <div class=\"col-md-8 border-start\" style=\"display:none; max-height: 85vh;\" id=\"file-box\">
      <div id=\"file-title\"class=\"file-title mb-3 d-flex align-items-center gap-2\">
         <i class=\"bi bi-file-earmark-text fs-4 text-primary\"></i>
         <span id=\"file-name\" class=\"fs-5 fw-bold text-dark\"></span>
      </div>
      <div id=\"file-content\" class=\"file-content text-truncate border rounded p-3 bg-light overflow-y-auto\" style=\"white-space: pre-wrap; max-height: 70vh; max-width: 50vw;\"></div>
    </div>
  </div>
  <script>
    //document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.file-link').forEach(el => {
        el.addEventListener('click', async () => {
          document.querySelectorAll('.file-link').forEach(f => f.classList.remove('active'));
          el.classList.add('active');
          const path = el.dataset.filepath;
          const isImage = el.dataset.isImage === 'true';
          const response = await fetch('/file/read?path=' + encodeURIComponent(path));
          const text = await response.text();
          const fileBox = document.getElementById('file-box');
          fileBox.style.display = 'block';
          const titleBox = document.getElementById('file-name');
          titleBox.textContent = path.split('/').pop();
          const contentBox = document.getElementById('file-content');
          if (isImage) {
            contentBox.innerHTML = `<img src=\"/ftp-image/\${encodeURIComponent(path)}\" style=\"max-width: 100%; max-height: 500px;\">`;
            fileBox.classList.add('auto-width');
            fileBox.classList.remove('p-3');
          } else {
            const response = await fetch('/file/read?path=' + encodeURIComponent(path));
            const text = await response.text();
            contentBox.textContent = text;
            fileBox.classList.add('p-3');
            fileBox.classList.remove('auto-width');
          }
        });
      });
      document.querySelectorAll(\".toggle-dir\").forEach(function (toggle) {
      toggle.addEventListener(\"click\", function () {
        const nested = this.nextElementSibling;
        if (nested.style.display === \"none\") {
          nested.style.display = \"block\";
          this.querySelector(\"i\").classList.remove(\"bi-folder-plus\");
          this.querySelector(\"i\").classList.add(\"bi-folder-minus\");
        } else {
          nested.style.display = \"none\";
          this.querySelector(\"i\").classList.remove(\"bi-folder-minus\");
          this.querySelector(\"i\").classList.add(\"bi-folder-plus\");
        }
      });
    });
    //});
  </script>
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
        return "repository/repository.html.twig";
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
        return array (  150 => 39,  146 => 37,  144 => 36,  141 => 35,  135 => 33,  132 => 32,  130 => 31,  106 => 9,  93 => 8,  77 => 4,  64 => 3,  41 => 1,);
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
.auto-width {
  max-width: 100%;
  width: auto;
  height: auto;
  overflow: auto;
}
</style>
  <div class=\"row\">
    <div class=\"col-md-4 text-truncate\">
      {% include 'repository/dropdown.html.twig' with { 'repo': repo } %}
      {% if directorios is empty %}
        <span class=\"fs-4\">{{ repo }} está vacío.</span>
      {% else %}
      <div class=\"overflow-y-auto\" style=\"max-height: 70vh;\">
        {% include 'repository/recursiveRepo.html.twig' with { 'directorios': directorios } %}
      </div>
      {% endif %}
    </div>
    <div class=\"col-md-8 border-start\" style=\"display:none; max-height: 85vh;\" id=\"file-box\">
      <div id=\"file-title\"class=\"file-title mb-3 d-flex align-items-center gap-2\">
         <i class=\"bi bi-file-earmark-text fs-4 text-primary\"></i>
         <span id=\"file-name\" class=\"fs-5 fw-bold text-dark\"></span>
      </div>
      <div id=\"file-content\" class=\"file-content text-truncate border rounded p-3 bg-light overflow-y-auto\" style=\"white-space: pre-wrap; max-height: 70vh; max-width: 50vw;\"></div>
    </div>
  </div>
  <script>
    //document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.file-link').forEach(el => {
        el.addEventListener('click', async () => {
          document.querySelectorAll('.file-link').forEach(f => f.classList.remove('active'));
          el.classList.add('active');
          const path = el.dataset.filepath;
          const isImage = el.dataset.isImage === 'true';
          const response = await fetch('/file/read?path=' + encodeURIComponent(path));
          const text = await response.text();
          const fileBox = document.getElementById('file-box');
          fileBox.style.display = 'block';
          const titleBox = document.getElementById('file-name');
          titleBox.textContent = path.split('/').pop();
          const contentBox = document.getElementById('file-content');
          if (isImage) {
            contentBox.innerHTML = `<img src=\"/ftp-image/\${encodeURIComponent(path)}\" style=\"max-width: 100%; max-height: 500px;\">`;
            fileBox.classList.add('auto-width');
            fileBox.classList.remove('p-3');
          } else {
            const response = await fetch('/file/read?path=' + encodeURIComponent(path));
            const text = await response.text();
            contentBox.textContent = text;
            fileBox.classList.add('p-3');
            fileBox.classList.remove('auto-width');
          }
        });
      });
      document.querySelectorAll(\".toggle-dir\").forEach(function (toggle) {
      toggle.addEventListener(\"click\", function () {
        const nested = this.nextElementSibling;
        if (nested.style.display === \"none\") {
          nested.style.display = \"block\";
          this.querySelector(\"i\").classList.remove(\"bi-folder-plus\");
          this.querySelector(\"i\").classList.add(\"bi-folder-minus\");
        } else {
          nested.style.display = \"none\";
          this.querySelector(\"i\").classList.remove(\"bi-folder-minus\");
          this.querySelector(\"i\").classList.add(\"bi-folder-plus\");
        }
      });
    });
    //});
  </script>
{% endblock %}", "repository/repository.html.twig", "/var/www/krakenvault/templates/repository/repository.html.twig");
    }
}
