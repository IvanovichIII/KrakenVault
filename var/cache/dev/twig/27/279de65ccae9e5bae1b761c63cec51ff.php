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

/* registration/register.html.twig */
class __TwigTemplate_6e9803e8eadaf0d2b9ad12068a5d495e extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        yield "  Signup - KrakenVault
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "  <section class=\"vh-100 gradient-custom\">
    <div class=\"container py-5 h-100\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
          <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
            <div class=\"card-body p-5 text-center\">
              <div class=\"mb-md-5 mt-md-4 pb-5\">
                <h2 class=\"fw-bold mb-2 text-uppercase\">Sign Up</h2>
                <p class=\"text-white-50 mb-5\">Please enter your login and password!</p>

                <form method=\"POST\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "\">
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"text\" id=\"username\" class=\"form-control form-control-lg\" name=\"username\" required />
                    <label class=\"form-label\" for=\"username\">Username</label>
                  </div>
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"email\" id=\"email\" class=\"form-control form-control-lg\" name=\"email\" required />
                    <label class=\"form-label\" for=\"email\">Email</label>
                  </div>
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"password\" id=\"password\" class=\"form-control form-control-lg\" name=\"password\" required />
                    <label class=\"form-label\" for=\"password\">Password</label>
                  </div>
                  <button class=\"btn btn-outline-warning btn-lg px-5\" type=\"submit\">Sign Up</button>

                  <div class=\"mt-3\">
                    <p class=\"mb-0\">
                      Already have an account? <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"text-white-50 fw-bold\">Login</a>
                    </p>
                  </div>

                  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "                    <div class=\"alert alert-danger mt-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
        return "registration/register.html.twig";
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
        return array (  154 => 42,  145 => 40,  141 => 39,  134 => 35,  114 => 18,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Signup - KrakenVault
{% endblock %}

{% block body %}
  <section class=\"vh-100 gradient-custom\">
    <div class=\"container py-5 h-100\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
          <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
            <div class=\"card-body p-5 text-center\">
              <div class=\"mb-md-5 mt-md-4 pb-5\">
                <h2 class=\"fw-bold mb-2 text-uppercase\">Sign Up</h2>
                <p class=\"text-white-50 mb-5\">Please enter your login and password!</p>

                <form method=\"POST\" action=\"{{ path('signup') }}\">
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"text\" id=\"username\" class=\"form-control form-control-lg\" name=\"username\" required />
                    <label class=\"form-label\" for=\"username\">Username</label>
                  </div>
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"email\" id=\"email\" class=\"form-control form-control-lg\" name=\"email\" required />
                    <label class=\"form-label\" for=\"email\">Email</label>
                  </div>
                  <div class=\"form-outline form-white mb-4\">
                    <input type=\"password\" id=\"password\" class=\"form-control form-control-lg\" name=\"password\" required />
                    <label class=\"form-label\" for=\"password\">Password</label>
                  </div>
                  <button class=\"btn btn-outline-warning btn-lg px-5\" type=\"submit\">Sign Up</button>

                  <div class=\"mt-3\">
                    <p class=\"mb-0\">
                      Already have an account? <a href=\"{{ path('login') }}\" class=\"text-white-50 fw-bold\">Login</a>
                    </p>
                  </div>

                  {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger mt-3\">{{ message }}</div>
                  {% endfor %}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\ivin0\\Desktop\\KrakenVault\\templates\\registration\\register.html.twig");
    }
}
