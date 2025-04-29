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

/* navbarRepo.html.twig */
class __TwigTemplate_b8d74b8c7389ecd5bfacd9715ab2b39f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarRepo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarRepo.html.twig"));

        $this->parent = $this->loadTemplate("sidebar.html.twig", "navbarRepo.html.twig", 1);
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
            yield "              <span class=\"nav-link text-grey fs-5 me-5\" style=\"user-select: none;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
            yield "\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</span>
            ";
        } else {
            // line 14
            yield "              <a class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repositories");
            yield "\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</a>
            ";
        }
        // line 16
        yield "          </li>
          <li class=\"nav-item\">
            ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["_route"], "method", false, false, false, 18) == "repositories")) {
            // line 19
            yield "              <button class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" data-bs-toggle=\"modal\" data-bs-target=\"#CrearRepositorio\"><i class=\"bi bi-folder-plus me-1\"></i>Crear Repositorio</button>
            ";
        }
        // line 21
        yield "          </li>
          <li class=\"nav-item\">
            ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23) == "repository")) {
            // line 24
            yield "              <button class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" data-bs-toggle=\"modal\" data-bs-target=\"#SubirArchivos\"><i class=\"bi bi-folder-plus me-1\"></i>Subir Archivos o Repositorios</button>
            ";
        }
        // line 26
        yield "          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"CrearRepositorio\" tabindex=\"-1\" aria-labelledby=\"CrearRepositorioLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\" id=\"modalAllId\">
        <div class=\"modal-header\" id=\"modalHeaderId\">
          <h5 class=\"modal-title\" id=\"CrearRepositorioLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Crear Repositorio</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
        </div>
        <form id=\"formCrear\" method=\"POST\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ftp_create_repo");
        yield "\">
          <div class=\"modal-body\" id=\"modalBodyId\">
            <label for=\"titulo\">Título:</label>
            <input type=\"text\" id=\"titulo\" name=\"titulo\" class=\"form-control\" placeholder=\"Repositorio\" />
            <label for=\"descripcion\">Descripción:</label>
            <textarea id=\"descripcion\" name=\"descripcion\" class=\"form-control\" style=\"resize: both; max-width: 100%; min-width: 100%; max-height: 300px;\" placeholder=\"Descripción\"></textarea>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
            <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "get", ["_route"], "method", false, false, false, 53) == "repository")) {
            // line 54
            yield "    <div class=\"modal fade\" id=\"SubirArchivos\" tabindex=\"-1\" aria-labelledby=\"SubirArchivosLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\" id=\"modalAllId\">
          <div class=\"modal-header\" id=\"modalHeaderId\">
            <h5 class=\"modal-title\" id=\"SubirArchivosLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Subir Archivos y Directorios</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
          </div>
          <form id=\"upload-form-dir\" action=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ftp_upload");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"repo\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 62, $this->source); })()), "html", null, true);
            yield "\" />
            <div class=\"modal-body\" id=\"modalBodyId\">
              <input id=\"fileInput\" type=\"file\" name=\"files[]\" multiple=\"multiple\" webkitdirectory directory hidden onchange=\"mostrarArchivos(this.files)\" />
              <div class=\"mt-2\">
                <div id=\"dropZone\" class=\"dropzone border border-primary rounded p-2 mx-4 text-center\" 
                    ondragover=\"event.preventDefault()\" 
                    ondrop=\"handleDrop(event)\" 
                    onclick=\"document.getElementById('fileInput').click()\">
                  <i class=\"bi bi-cloud-arrow-up fs-1\"></i>
                  <p class=\"mt-2\">Haz clic o arrastra archivos aquí</p>
                </div>
                <span class=\"mx-4\">Archivos seleccionados: </span><span id=\"file-count\">0</span>
              </div>
              <div id=\"previewEstructura\" class=\"text-truncate mt-3 overflow-y-auto\" style=\"font-family: monospace; max-height: 42vh;\"></div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
              <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\">Subir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
    var datosDir = [];
    document.getElementById(\"upload-form-dir\").addEventListener(\"submit\", function (e) {
      e.preventDefault();
      if (datosDir.length == 0) {
          alert(\"No hay archivos para subir.\");
          return;
      }
      const formData = new FormData();
      datosDir.forEach(file => {
          formData.append('files[]', file);
          formData.append('file_paths[]', file.webkitRelativePath);
      });
      const repoValue = document.querySelector('input[name=\"repo\"]').value;
      formData.append('repo', repoValue);
      fetch('/ftp/upload', {
          method: 'POST',
          body: formData
      })
      .then(response => {
          if (response.ok) {
              window.location.href = '/repository/";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["repo"]) || array_key_exists("repo", $context) ? $context["repo"] : (function () { throw new RuntimeError('Variable "repo" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "';
          } else {
              alert(\"Hubo un problema al subir los archivos.\");
          }
      })
      .catch(error => {
          console.error(\"Error:\", error);
          alert(\"Hubo un problema al subir los archivos.\");
      });
    });

    function handleDrop(event) {
      event.preventDefault();
      const files = event.dataTransfer.files;
      mostrarArchivos(files);
    }

    async function mostrarArchivos(files) {
      const estructura = {};
      var i = 0;
      files = await filtrarArchivos(files);
      if (!files || files.length === 0) {
        alert(\"No se han detectado archivos.\");
        return;
      }
      document.getElementById('file-count').textContent = files.length;
      for (const file of files) {
          datosDir[i] = file;
          i++;
          const partes = file.webkitRelativePath.split('/');
          let nivelActual = estructura;

          for (let i = 0; i < partes.length; i++) {
              const parte = partes[i];
              if (i === partes.length - 1) {
                  if (!nivelActual.__archivos) nivelActual.__archivos = [];
                  nivelActual.__archivos.push(parte);
              } else {
                  if (!nivelActual[parte]) nivelActual[parte] = {};
                  nivelActual = nivelActual[parte];
              }
          }
      }

      async function filtrarArchivos(files) {
        const ignorados = [];
        const krakignoreFile = Array.from(files).find(f => f.name === '.krakignore');
        if (krakignoreFile) {
          const text = await krakignoreFile.text();
          const reglas = text.split('\\n').map(line => line.trim()).filter(line => line && !line.startsWith('#'));

          for (const file of files) {
            const ignorado = reglas.some(regla => {
              const pattern = new RegExp(regla.replace(/\\./g, '\\\\.').replace(/\\*/g, '.*') + '\$');
              return pattern.test(file.webkitRelativePath || file.name);
            });
            if (!ignorado) {
              ignorados.push(file);
            }
          }
          return ignorados;
        }
        return Array.from(files);
      }

      function imprimirEstructura(nodo, nivel = 0) {
          let salida = '';
          const sangria = '&nbsp;'.repeat(nivel * 3);

          for (const key in nodo) {
              if (key === '__archivos') {
                  for (const archivo of nodo[key]) {
                      salida += `<span title='\${archivo}'>\${sangria}📄 \${archivo}</span><br>`;
                  }
              } else {
                  salida += `<span title='\${key}'>\${sangria}📁 <strong>\${key}/</strong></span><br>`;
                  salida += imprimirEstructura(nodo[key], nivel + 1);
              }
          }
          return salida;
      }

      document.getElementById('previewEstructura').innerHTML = imprimirEstructura(estructura);
    }
    </script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbarRepo.html.twig";
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
        return array (  213 => 106,  166 => 62,  162 => 61,  153 => 54,  151 => 53,  133 => 38,  119 => 26,  115 => 24,  113 => 23,  109 => 21,  105 => 19,  103 => 18,  99 => 16,  93 => 14,  87 => 12,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
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
              <span class=\"nav-link text-grey fs-5 me-5\" style=\"user-select: none;\" href=\"{{ path('repositories') }}\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</span>
            {% else %}
              <a class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" href=\"{{ path('repositories') }}\"><i class=\"bi bi-archive me-1\"></i>Mis Repositorios</a>
            {% endif %}
          </li>
          <li class=\"nav-item\">
            {% if app.request.get('_route') == 'repositories' %}
              <button class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" data-bs-toggle=\"modal\" data-bs-target=\"#CrearRepositorio\"><i class=\"bi bi-folder-plus me-1\"></i>Crear Repositorio</button>
            {% endif %}
          </li>
          <li class=\"nav-item\">
            {% if app.request.get('_route') == 'repository' %}
              <button class=\"nav-link text-white fs-5 me-5\" style=\"user-select: none;\" data-bs-toggle=\"modal\" data-bs-target=\"#SubirArchivos\"><i class=\"bi bi-folder-plus me-1\"></i>Subir Archivos o Repositorios</button>
            {% endif %}
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"CrearRepositorio\" tabindex=\"-1\" aria-labelledby=\"CrearRepositorioLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\" id=\"modalAllId\">
        <div class=\"modal-header\" id=\"modalHeaderId\">
          <h5 class=\"modal-title\" id=\"CrearRepositorioLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Crear Repositorio</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
        </div>
        <form id=\"formCrear\" method=\"POST\" action=\"{{ path('ftp_create_repo') }}\">
          <div class=\"modal-body\" id=\"modalBodyId\">
            <label for=\"titulo\">Título:</label>
            <input type=\"text\" id=\"titulo\" name=\"titulo\" class=\"form-control\" placeholder=\"Repositorio\" />
            <label for=\"descripcion\">Descripción:</label>
            <textarea id=\"descripcion\" name=\"descripcion\" class=\"form-control\" style=\"resize: both; max-width: 100%; min-width: 100%; max-height: 300px;\" placeholder=\"Descripción\"></textarea>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
            <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {% if app.request.get('_route') == 'repository' %}
    <div class=\"modal fade\" id=\"SubirArchivos\" tabindex=\"-1\" aria-labelledby=\"SubirArchivosLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\" id=\"modalAllId\">
          <div class=\"modal-header\" id=\"modalHeaderId\">
            <h5 class=\"modal-title\" id=\"SubirArchivosLabel\"><i class=\"bi bi-folder-plus me-1\"></i>Subir Archivos y Directorios</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Cerrar\"></button>
          </div>
          <form id=\"upload-form-dir\" action=\"{{ path('ftp_upload') }}\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"repo\" value=\"{{ repo }}\" />
            <div class=\"modal-body\" id=\"modalBodyId\">
              <input id=\"fileInput\" type=\"file\" name=\"files[]\" multiple=\"multiple\" webkitdirectory directory hidden onchange=\"mostrarArchivos(this.files)\" />
              <div class=\"mt-2\">
                <div id=\"dropZone\" class=\"dropzone border border-primary rounded p-2 mx-4 text-center\" 
                    ondragover=\"event.preventDefault()\" 
                    ondrop=\"handleDrop(event)\" 
                    onclick=\"document.getElementById('fileInput').click()\">
                  <i class=\"bi bi-cloud-arrow-up fs-1\"></i>
                  <p class=\"mt-2\">Haz clic o arrastra archivos aquí</p>
                </div>
                <span class=\"mx-4\">Archivos seleccionados: </span><span id=\"file-count\">0</span>
              </div>
              <div id=\"previewEstructura\" class=\"text-truncate mt-3 overflow-y-auto\" style=\"font-family: monospace; max-height: 42vh;\"></div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cerrar</button>
              <button type=\"submit\" id=\"guardarModalId\" class=\"btn btn-primary\">Subir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
    var datosDir = [];
    document.getElementById(\"upload-form-dir\").addEventListener(\"submit\", function (e) {
      e.preventDefault();
      if (datosDir.length == 0) {
          alert(\"No hay archivos para subir.\");
          return;
      }
      const formData = new FormData();
      datosDir.forEach(file => {
          formData.append('files[]', file);
          formData.append('file_paths[]', file.webkitRelativePath);
      });
      const repoValue = document.querySelector('input[name=\"repo\"]').value;
      formData.append('repo', repoValue);
      fetch('/ftp/upload', {
          method: 'POST',
          body: formData
      })
      .then(response => {
          if (response.ok) {
              window.location.href = '/repository/{{ repo }}';
          } else {
              alert(\"Hubo un problema al subir los archivos.\");
          }
      })
      .catch(error => {
          console.error(\"Error:\", error);
          alert(\"Hubo un problema al subir los archivos.\");
      });
    });

    function handleDrop(event) {
      event.preventDefault();
      const files = event.dataTransfer.files;
      mostrarArchivos(files);
    }

    async function mostrarArchivos(files) {
      const estructura = {};
      var i = 0;
      files = await filtrarArchivos(files);
      if (!files || files.length === 0) {
        alert(\"No se han detectado archivos.\");
        return;
      }
      document.getElementById('file-count').textContent = files.length;
      for (const file of files) {
          datosDir[i] = file;
          i++;
          const partes = file.webkitRelativePath.split('/');
          let nivelActual = estructura;

          for (let i = 0; i < partes.length; i++) {
              const parte = partes[i];
              if (i === partes.length - 1) {
                  if (!nivelActual.__archivos) nivelActual.__archivos = [];
                  nivelActual.__archivos.push(parte);
              } else {
                  if (!nivelActual[parte]) nivelActual[parte] = {};
                  nivelActual = nivelActual[parte];
              }
          }
      }

      async function filtrarArchivos(files) {
        const ignorados = [];
        const krakignoreFile = Array.from(files).find(f => f.name === '.krakignore');
        if (krakignoreFile) {
          const text = await krakignoreFile.text();
          const reglas = text.split('\\n').map(line => line.trim()).filter(line => line && !line.startsWith('#'));

          for (const file of files) {
            const ignorado = reglas.some(regla => {
              const pattern = new RegExp(regla.replace(/\\./g, '\\\\.').replace(/\\*/g, '.*') + '\$');
              return pattern.test(file.webkitRelativePath || file.name);
            });
            if (!ignorado) {
              ignorados.push(file);
            }
          }
          return ignorados;
        }
        return Array.from(files);
      }

      function imprimirEstructura(nodo, nivel = 0) {
          let salida = '';
          const sangria = '&nbsp;'.repeat(nivel * 3);

          for (const key in nodo) {
              if (key === '__archivos') {
                  for (const archivo of nodo[key]) {
                      salida += `<span title='\${archivo}'>\${sangria}📄 \${archivo}</span><br>`;
                  }
              } else {
                  salida += `<span title='\${key}'>\${sangria}📁 <strong>\${key}/</strong></span><br>`;
                  salida += imprimirEstructura(nodo[key], nivel + 1);
              }
          }
          return salida;
      }

      document.getElementById('previewEstructura').innerHTML = imprimirEstructura(estructura);
    }
    </script>
  {% endif %}
{% endblock %}
", "navbarRepo.html.twig", "/var/www/krakenvault/templates/navbarRepo.html.twig");
    }
}
