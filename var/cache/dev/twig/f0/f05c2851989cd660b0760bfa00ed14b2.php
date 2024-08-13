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

/* starship/show.html.twig */
class __TwigTemplate_eb0ec1d79e9f7f0e0ed3a36e4733d7a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "starship/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "starship/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "starship/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ship"]) || array_key_exists("ship", $context) ? $context["ship"] : (function () { throw new RuntimeError('Variable "ship" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"my-4 px-8\">
    <a class=\"bg-white hover:bg-gray-200 rounded-xl p-2 text-black\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\">
        <svg class=\"inline text-black\" xmlns=\"http://www.w3.org/2000/svg\" height=\"16\" width=\"14\" viewBox=\"0 0 448 512\"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill=\"#000\" d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg>
        Back
    </a>
</div>
<div class=\"md:flex justify-center space-x-3 mt-5 px-4 lg:px-8\">
    <div class=\"flex justify-center\">
        <img class=\"max-h-[300px] md:max-h-[500px]\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/purple-rocket.png"), "html", null, true);
        yield "\" alt=\"purple ship launching\">
    </div>
    <div class=\"space-y-5\">
        <div class=\"mt-8 max-w-xl mx-auto\">
            <div class=\"px-8 pt-8\">
                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                    <p class=\"uppercase text-xs\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ship"]) || array_key_exists("ship", $context) ? $context["ship"] : (function () { throw new RuntimeError('Variable "ship" does not exist.', 21, $this->source); })()), "statusString", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                </div>

                <h1 class=\"text-[32px] font-semibold border-b border-white/10 pb-5 mb-5\">
                    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ship"]) || array_key_exists("ship", $context) ? $context["ship"] : (function () { throw new RuntimeError('Variable "ship" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "
                </h1>
                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Spaceship Captain</h4>
                <p class=\"text-[22px] font-semibold\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ship"]) || array_key_exists("ship", $context) ? $context["ship"] : (function () { throw new RuntimeError('Variable "ship" does not exist.', 28, $this->source); })()), "captain", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>

                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Class</h4>
                <p class=\"text-[22px] font-semibold\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ship"]) || array_key_exists("ship", $context) ? $context["ship"] : (function () { throw new RuntimeError('Variable "ship" does not exist.', 31, $this->source); })()), "class", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>

                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Ship Status</h4>
                <p class=\"text-[22px] font-semibold\">30,000 lys to next service</p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "starship/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  132 => 31,  126 => 28,  120 => 25,  113 => 21,  103 => 14,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ ship.name }}{% endblock %}

{% block body %}
<div class=\"my-4 px-8\">
    <a class=\"bg-white hover:bg-gray-200 rounded-xl p-2 text-black\" href=\"{{ path('app_homepage') }}\">
        <svg class=\"inline text-black\" xmlns=\"http://www.w3.org/2000/svg\" height=\"16\" width=\"14\" viewBox=\"0 0 448 512\"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill=\"#000\" d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg>
        Back
    </a>
</div>
<div class=\"md:flex justify-center space-x-3 mt-5 px-4 lg:px-8\">
    <div class=\"flex justify-center\">
        <img class=\"max-h-[300px] md:max-h-[500px]\" src=\"{{ asset('images/purple-rocket.png') }}\" alt=\"purple ship launching\">
    </div>
    <div class=\"space-y-5\">
        <div class=\"mt-8 max-w-xl mx-auto\">
            <div class=\"px-8 pt-8\">
                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                    <p class=\"uppercase text-xs\">{{ ship.statusString }}</p>
                </div>

                <h1 class=\"text-[32px] font-semibold border-b border-white/10 pb-5 mb-5\">
                    {{ ship.name }}
                </h1>
                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Spaceship Captain</h4>
                <p class=\"text-[22px] font-semibold\">{{ ship.captain }}</p>

                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Class</h4>
                <p class=\"text-[22px] font-semibold\">{{ ship.class }}</p>

                <h4 class=\"text-xs text-slate-300 font-semibold mt-2 uppercase\">Ship Status</h4>
                <p class=\"text-[22px] font-semibold\">30,000 lys to next service</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "starship/show.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\starship\\show.html.twig");
    }
}
