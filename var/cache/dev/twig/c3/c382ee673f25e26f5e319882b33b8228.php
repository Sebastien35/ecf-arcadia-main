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

/* review/index.html.twig */
class __TwigTemplate_a77e1f62c7a661c10766f7e10f10fb82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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

        yield "Gestion des avis";
        
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
        yield "    <h1 class=\"text-center\">Gestion des avis</h1>
    <div class=\"container mt-5\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 10
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Avis #";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Pseudo:</strong> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "pseudo", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Commentaire:</strong> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Soumis le:</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "submittedAt", [], "any", false, false, false, 16), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Approuvé:</strong> ";
            // line 17
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "valid", [], "any", false, false, false, 17)) ? ("Oui") : ("Non"));
            yield "</p>
                            <div>
                                ";
            // line 19
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["review"], "valid", [], "any", false, false, false, 19)) {
                // line 20
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir approuver cet avis ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 21))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-success mb-2\">Approuver</button>
                                    </form>
                                ";
            }
            // line 25
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 26))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun avis trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </div>
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
        return "review/index.html.twig";
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
        return array (  169 => 40,  158 => 34,  145 => 26,  140 => 25,  133 => 21,  128 => 20,  126 => 19,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  105 => 13,  100 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des avis{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Gestion des avis</h1>
    <div class=\"container mt-5\">
        <div class=\"row\">
            {% for review in reviews %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Avis #{{ review.id }}</h5>
                            <p class=\"card-text\"><strong>Pseudo:</strong> {{ review.pseudo }}</p>
                            <p class=\"card-text\"><strong>Commentaire:</strong> {{ review.comment }}</p>
                            <p class=\"card-text\"><strong>Soumis le:</strong> {{ review.submittedAt|date('Y-m-d H:i') }}</p>
                            <p class=\"card-text\"><strong>Approuvé:</strong> {{ review.valid ? 'Oui' : 'Non' }}</p>
                            <div>
                                {% if not review.valid %}
                                    <form method=\"post\" action=\"{{ path('app_review_approve', {'id': review.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir approuver cet avis ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('approve' ~ review.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-success mb-2\">Approuver</button>
                                    </form>
                                {% endif %}
                                <form method=\"post\" action=\"{{ path('app_review_delete', {'id': review.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ review.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun avis trouvé
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "review/index.html.twig", "/var/www/html/templates/review/index.html.twig");
    }
}
