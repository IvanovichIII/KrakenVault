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

/* repository/dropdown.html.twig */
class __TwigTemplate_1c9607630b91af7ea988b023ef34b2e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repository/dropdown.html.twig"));

        // line 1
        yield "<div class=\"position-relative\">
  <div class=\"dropdown\" style=\"height: 90px;\">
    <a href=\"#\" class=\"d-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
      <h1><u>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</u></h1>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
      ";
        // line 7
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7);
        // line 8
        yield "
      ";
        // line 9
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 9, $this->source); })()) != "repository")) {
            // line 10
            yield "        <li>
          <a class=\"dropdown-item\" href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repository", ["repo" => (isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 11, $this->source); })())]), "html", null, true);
            yield "\">Repository</a>
        </li>
      ";
        }
        // line 14
        yield "      ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 14, $this->source); })()) != "download")) {
            // line 15
            yield "        <li>
          <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#descargar\">Download</a>
        </li>
      ";
        }
        // line 19
        yield "      ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 19, $this->source); })()) != "historic")) {
            // line 20
            yield "        <li>
          <a class=\"dropdown-item\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historic", ["repo" => (isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 21, $this->source); })())]), "html", null, true);
            yield "\">Historical</a>
        </li>
      ";
        }
        // line 24
        yield "      ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 24, $this->source); })()) != "versionControl")) {
            // line 25
            yield "        <li>
          <a class=\"dropdown-item\" href=\"#\">Version Control</a>
        </li>
      ";
        }
        // line 29
        yield "      ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 29, $this->source); })()) != "settings")) {
            // line 30
            yield "        <li>
          <a class=\"dropdown-item\" href=\"#\">Settings</a>
        </li>
      ";
        }
        // line 34
        yield "    </ul>
  </div>
</div>
<div class=\"modal fade\" id=\"descargar\" tabindex=\"-1\" aria-labelledby=\"descargarLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\" id=\"modalAllId\">
      <div class=\"modal-header\" id=\"modalHeaderId\">
        <h5 class=\"modal-title\" id=\"descargarLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Descargar Repositorio</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
      </div>
      <form id=\"download-form-dir\" action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ftp_download");
        yield "\" method=\"POST\" data-turbo=\"false\">
        <input type=\"hidden\" name=\"repo\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "\" />
        <div class=\"modal-body\" id=\"modalBodyId\">
          <label for=\"downloadOption\" class=\"form-label\">Método de descarga:</label>
          <select class=\"form-select\" id=\"downloadOption\" name=\"downloadOption\">
            <option value=\"zip\" selected>Descargar el repositorio como un archivo ZIP</option>
            <option value=\"individual\">Descargar archivos individuales</option>
          </select>
          <div id=\"fileList\" class=\"mt-3\">
            ";
        // line 53
        yield from $this->loadTemplate("repository/recursiveRepoDownload.html.twig", "repository/dropdown.html.twig", 53)->unwrap()->yield(CoreExtension::merge($context, ["directorios" => (isset($context["directorios"]) || array_key_exists("directorios", $context) ? $context["directorios"] : (function () { throw new RuntimeError('Variable "directorios" does not exist.', 53, $this->source); })())]));
        // line 54
        yield "            <input type=\"hidden\" id=\"selectedFiles\" name=\"selectedFiles\" value=\"\">
          </div>
          <div id=\"previewEstructura\" class=\"text-truncate mt-3\" style=\"font-family: monospace;\"></div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
          <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\"><span id=\"descText\"></span></button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const options = document.getElementById('downloadOption');
    const button = document.getElementById('descText');
    const modal = document.getElementById('descargar');
    const fileList = document.getElementById('fileList');
    button.textContent = 'Descargar como ZIP';
    fileList.style.display = 'none';
    options.addEventListener('change', () => {
      const option = options.value;
      if (option === 'zip') {
        button.textContent = 'Descargar como ZIP';
        fileList.style.display = 'none';
      } else if (option === 'individual') {
        button.textContent = 'Descargar archivos individuales';
        fileList.style.display = 'block';
      }
    });
    document.querySelectorAll('input[data-type=\"dir\"]').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        const nestedCheckboxes = this.closest('li').querySelectorAll('.nested input[type=\"checkbox\"]');
        nestedCheckboxes.forEach(function (nestedCheckbox) {
          nestedCheckbox.checked = checkbox.checked;
        });
      });
    });
    document.querySelectorAll('input[type=\"checkbox\"][class=\"form-check-input\"]').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        if (checkbox.checked) {
          let parentDir = checkbox.closest('li').parentNode.closest('li');
          while (parentDir && parentDir.querySelector('input[data-type=\"dir\"]')) {
            let parentCheckbox = parentDir.querySelector('input[data-type=\"dir\"]');
            parentCheckbox.checked = true;
            parentDir = parentDir.parentNode.closest('li');
          }
        } else {
          let parentDir = checkbox.closest('li').parentNode.closest('li');
          while (parentDir && parentDir.querySelector('input[data-type=\"dir\"]')) {
            let parentCheckbox = parentDir.querySelector('input[data-type=\"dir\"]');
            let childCheckboxes = parentDir.querySelectorAll('.nested input[type=\"checkbox\"]:checked');
            if (childCheckboxes.length === 0) {
              parentCheckbox.checked = false;
            }
            parentDir = parentDir.parentNode.closest('li');
          }
        }
      });
    });
    document.querySelectorAll('input[type=\"checkbox\"].form-check-input').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        let selectedFiles = [];
        
        document.querySelectorAll('input[type=\"checkbox\"].form-check-input:checked').forEach(function (checkedBox) {
          if (!checkedBox.closest('span').querySelector('.file-link')) {
            selectedFiles.push(checkedBox.value);
          }
        });
        document.getElementById('selectedFiles').value = selectedFiles.join(',');
      });
    });
  });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "repository/dropdown.html.twig";
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
        return array (  143 => 54,  141 => 53,  130 => 45,  126 => 44,  114 => 34,  108 => 30,  105 => 29,  99 => 25,  96 => 24,  90 => 21,  87 => 20,  84 => 19,  78 => 15,  75 => 14,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"position-relative\">
  <div class=\"dropdown\" style=\"height: 90px;\">
    <a href=\"#\" class=\"d-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
      <h1><u>{{ repo }}</u></h1>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
      {% set current_route = app.request.get('_route') %}

      {% if current_route != 'repository' %}
        <li>
          <a class=\"dropdown-item\" href=\"{{ path('repository', { repo: repo }) }}\">Repository</a>
        </li>
      {% endif %}
      {% if current_route != 'download' %}
        <li>
          <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#descargar\">Download</a>
        </li>
      {% endif %}
      {% if current_route != 'historic' %}
        <li>
          <a class=\"dropdown-item\" href=\"{{ path('historic', { repo: repo }) }}\">Historical</a>
        </li>
      {% endif %}
      {% if current_route != 'versionControl' %}
        <li>
          <a class=\"dropdown-item\" href=\"#\">Version Control</a>
        </li>
      {% endif %}
      {% if current_route != 'settings' %}
        <li>
          <a class=\"dropdown-item\" href=\"#\">Settings</a>
        </li>
      {% endif %}
    </ul>
  </div>
</div>
<div class=\"modal fade\" id=\"descargar\" tabindex=\"-1\" aria-labelledby=\"descargarLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\" id=\"modalAllId\">
      <div class=\"modal-header\" id=\"modalHeaderId\">
        <h5 class=\"modal-title\" id=\"descargarLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Descargar Repositorio</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
      </div>
      <form id=\"download-form-dir\" action=\"{{ path('ftp_download') }}\" method=\"POST\" data-turbo=\"false\">
        <input type=\"hidden\" name=\"repo\" value=\"{{ repo }}\" />
        <div class=\"modal-body\" id=\"modalBodyId\">
          <label for=\"downloadOption\" class=\"form-label\">Método de descarga:</label>
          <select class=\"form-select\" id=\"downloadOption\" name=\"downloadOption\">
            <option value=\"zip\" selected>Descargar el repositorio como un archivo ZIP</option>
            <option value=\"individual\">Descargar archivos individuales</option>
          </select>
          <div id=\"fileList\" class=\"mt-3\">
            {% include 'repository/recursiveRepoDownload.html.twig' with { 'directorios': directorios } %}
            <input type=\"hidden\" id=\"selectedFiles\" name=\"selectedFiles\" value=\"\">
          </div>
          <div id=\"previewEstructura\" class=\"text-truncate mt-3\" style=\"font-family: monospace;\"></div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
          <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\"><span id=\"descText\"></span></button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const options = document.getElementById('downloadOption');
    const button = document.getElementById('descText');
    const modal = document.getElementById('descargar');
    const fileList = document.getElementById('fileList');
    button.textContent = 'Descargar como ZIP';
    fileList.style.display = 'none';
    options.addEventListener('change', () => {
      const option = options.value;
      if (option === 'zip') {
        button.textContent = 'Descargar como ZIP';
        fileList.style.display = 'none';
      } else if (option === 'individual') {
        button.textContent = 'Descargar archivos individuales';
        fileList.style.display = 'block';
      }
    });
    document.querySelectorAll('input[data-type=\"dir\"]').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        const nestedCheckboxes = this.closest('li').querySelectorAll('.nested input[type=\"checkbox\"]');
        nestedCheckboxes.forEach(function (nestedCheckbox) {
          nestedCheckbox.checked = checkbox.checked;
        });
      });
    });
    document.querySelectorAll('input[type=\"checkbox\"][class=\"form-check-input\"]').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        if (checkbox.checked) {
          let parentDir = checkbox.closest('li').parentNode.closest('li');
          while (parentDir && parentDir.querySelector('input[data-type=\"dir\"]')) {
            let parentCheckbox = parentDir.querySelector('input[data-type=\"dir\"]');
            parentCheckbox.checked = true;
            parentDir = parentDir.parentNode.closest('li');
          }
        } else {
          let parentDir = checkbox.closest('li').parentNode.closest('li');
          while (parentDir && parentDir.querySelector('input[data-type=\"dir\"]')) {
            let parentCheckbox = parentDir.querySelector('input[data-type=\"dir\"]');
            let childCheckboxes = parentDir.querySelectorAll('.nested input[type=\"checkbox\"]:checked');
            if (childCheckboxes.length === 0) {
              parentCheckbox.checked = false;
            }
            parentDir = parentDir.parentNode.closest('li');
          }
        }
      });
    });
    document.querySelectorAll('input[type=\"checkbox\"].form-check-input').forEach(function (checkbox) {
      checkbox.addEventListener(\"change\", function () {
        let selectedFiles = [];
        
        document.querySelectorAll('input[type=\"checkbox\"].form-check-input:checked').forEach(function (checkedBox) {
          if (!checkedBox.closest('span').querySelector('.file-link')) {
            selectedFiles.push(checkedBox.value);
          }
        });
        document.getElementById('selectedFiles').value = selectedFiles.join(',');
      });
    });
  });
</script>", "repository/dropdown.html.twig", "/var/www/krakenvault/templates/repository/dropdown.html.twig");
    }
}
