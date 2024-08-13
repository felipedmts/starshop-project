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

/* main/homepage.html.twig */
class __TwigTemplate_30caaeafa75b6a686c7845f66c517de8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
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

        yield "Starshop: Beam up some parts!";
        
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
        yield "    <main class=\"flex flex-col lg:flex-row\">
        ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "main/__shipStatusAside.html.twig");
        yield "

        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue 
            </h1>

            <div class=\"space-y-5\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 16
            yield "                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "statusImageFilename", [], "any", false, false, false, 18)), "html", null, true);
            yield "\" alt=\"Status: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "statusString", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "statusString", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\"
                                    >";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</a>
                                </h4>
                            </div> 
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "captain", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ship"], "class", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </div>

            <p class=\"text-lg mt-5 text-center md:text-left\">
                Looking for your next galactic ride?
                <a href=\"#\" class=\"underline font-semibold\">Browse the ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 49, $this->source); })())) * 10), "html", null, true);
        yield " starships for sale!</a>
            </p>
        </div>
    </main>
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
        return "main/homepage.html.twig";
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
        return array (  168 => 49,  162 => 45,  151 => 40,  143 => 35,  133 => 28,  129 => 27,  121 => 22,  112 => 18,  108 => 16,  104 => 15,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Starshop: Beam up some parts!{% endblock %}

{% block body %}
    <main class=\"flex flex-col lg:flex-row\">
        {{ include('main/__shipStatusAside.html.twig') }}

        <div class=\"px-12 pt-10 w-full\">
            <h1 class=\"text-4xl font-semibold mb-8\">
                Ship Repair Queue 
            </h1>

            <div class=\"space-y-5\">
                {% for ship in ships %}
                    <div class=\"bg-[#16202A] rounded-2xl pl-5 py-5 pr-11 flex flex-col min-[1174px]:flex-row min-[1174px]:justify-between\">
                        <div class=\"flex justify-center min-[1174px]:justify-start\">
                            <img class=\"h-[83px] w-[84px]\" src=\"{{ asset(ship.statusImageFilename) }}\" alt=\"Status: {{ ship.statusString }}\">
                            <div class=\"ml-5\">
                                <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center bg-amber-400/10\">
                                    <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                                    <p class=\"uppercase text-xs text-nowrap\">{{ ship.statusString }}</p>
                                </div>
                                <h4 class=\"text-[22px] pt-1 font-semibold\">
                                    <a
                                        class=\"hover:text-slate-200\"
                                        href=\"{{ path('app_starship_show', { id: ship.id }) }}\"
                                    >{{ ship.name }}</a>
                                </h4>
                            </div> 
                        </div>
                        <div class=\"flex justify-center min-[1174px]:justify-start mt-2 min-[1174px]:mt-0 shrink-0\">
                            <div class=\"border-r border-white/20 pr-8\">
                                <p class=\"text-slate-400 text-xs\">Captain</p>
                                <p class=\"text-xl\">{{ ship.captain }}</p>
                            </div>

                            <div class=\"pl-8 w-[100px]\">
                                <p class=\"text-slate-400 text-xs\">Class</p>
                                <p class=\"text-xl\">{{ ship.class }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <p class=\"text-lg mt-5 text-center md:text-left\">
                Looking for your next galactic ride?
                <a href=\"#\" class=\"underline font-semibold\">Browse the {{ ships|length * 10 }} starships for sale!</a>
            </p>
        </div>
    </main>
{% endblock %}", "main/homepage.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\main\\homepage.html.twig");
    }
}
