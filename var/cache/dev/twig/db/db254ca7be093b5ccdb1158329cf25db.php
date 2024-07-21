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

/* default/index.html.twig */
class __TwigTemplate_dd969be645c6a06b061961d4fba37ca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"row mb-4 m-4\">
        <div class=\"col-lg-8\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    ";
        // line 9
        yield "                    <div class=\"col-lg-6 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Présentation</h5>
                            <p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
                        </div>
                    </div>
                    ";
        // line 16
        yield "                    ";
        // line 17
        yield "                    <div class=\"col-lg-6\">
                        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner rounded-4\">
                                <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/diplodocus.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/sarcosuchus.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/spinosaurus.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
                ";
        // line 36
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Services</h2>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 38, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 39
            yield "                    <div class=\"card-header text-center form-control mb-3 avis\">
                        <h3>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</h3>
                        <div class=\"card-body\">
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                yield "                                <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </div>
                ";
        // line 50
        yield "                ";
        // line 51
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Habitats</h2>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 53, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 54
            yield "                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</h3>
                            <div class=\"card-body\">
                                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                yield "                                    <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
                ";
        // line 65
        yield "                ";
        // line 66
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Animaux</h2>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 68, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 69
            yield "                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 70), "html", null, true);
            yield "</h3>
                            <div class=\"card-body\">
                                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 73
                yield "                                    <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 73), "html", null, true);
                yield "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                </div>
            </div>
        </div>
        ";
        // line 82
        yield "        ";
        // line 83
        yield "        <div class=\"col-lg-4 p-4 rounded-4 border cadre\">
            <h2 class=\"text-center\">Avis</h2>
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 85, $this->source); })())), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["singleReview"]) {
            // line 86
            yield "                <div class=\"card m-2 avis mt-xxl-5\">
                    <div class=\"card-header\">
                        ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "pseudo", [], "any", false, false, false, 88), "html", null, true);
            yield "
                        <div class=\"rating\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 91
                yield "                                ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "rating", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                                    <i class=\"fas fa-star\"></i>
                                ";
                } else {
                    // line 94
                    yield "                                    <i class=\"far fa-star\"></i>
                                ";
                }
                // line 96
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-muted\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "submittedAt", [], "any", false, false, false, 100), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "comment", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleReview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "            <div class=\"card container text-center form-control avis mt-xxl-5\">
                ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start');
        yield "
                <div class=\"card-header\">
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "pseudo", [], "any", false, false, false, 108), 'label');
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "pseudo", [], "any", false, false, false, 109), 'widget');
        yield "
                </div>
                <div class=\"card-body\">
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "comment", [], "any", false, false, false, 112), 'label');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "comment", [], "any", false, false, false, 113), 'widget');
        yield "
                    <div class=\"form-group\">
                        <label>Note</label>
                        <div class=\"rating\" id=\"review-rating-container\">
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "rating", [], "any", false, false, false, 117), 'widget', ["attr" => ["type" => "hidden", "id" => "review_rating"]]);
        yield "
                            <i class=\"far fa-star\" data-value=\"1\"></i>
                            <i class=\"far fa-star\" data-value=\"2\"></i>
                            <i class=\"far fa-star\" data-value=\"3\"></i>
                            <i class=\"far fa-star\" data-value=\"4\"></i>
                            <i class=\"far fa-star\" data-value=\"5\"></i>
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
                ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
        ";
        // line 131
        yield "        ";
        // line 132
        yield "            <div class=\"card container-fluid mt-3  mt-xxl-5\">
                <table class=\"table avis\">
                    <thead>
                    <tr>
                        <th>Jours </th>
                        <th>Heure d'ouverture</th>
                        <th>Heure de fermeture</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 143
            yield "                        <tr>
                            <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "day", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                            ";
            // line 145
            if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "isclosed", [], "any", false, false, false, 145)) {
                // line 146
                yield "                                <td>Fermé</td>
                                <td>Fermé</td>
                            ";
            } else {
                // line 149
                yield "                                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "openingTime", [], "any", false, false, false, 149), "H:i"), "html", null, true);
                yield "</td>
                                <td>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "closingTime", [], "any", false, false, false, 150), "H:i"), "html", null, true);
                yield "</td>
                            ";
            }
            // line 152
            yield "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                    </tbody>
                </table>
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stars_reviews.js"), "html", null, true);
        yield "?\$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
        yield "\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
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
        return "default/index.html.twig";
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
        return array (  433 => 161,  428 => 160,  418 => 159,  403 => 154,  396 => 152,  391 => 150,  386 => 149,  381 => 146,  379 => 145,  375 => 144,  372 => 143,  368 => 142,  356 => 132,  354 => 131,  348 => 127,  335 => 117,  328 => 113,  324 => 112,  318 => 109,  314 => 108,  309 => 106,  306 => 105,  296 => 101,  292 => 100,  287 => 97,  281 => 96,  277 => 94,  273 => 92,  270 => 91,  266 => 90,  261 => 88,  257 => 86,  253 => 85,  249 => 83,  247 => 82,  242 => 78,  234 => 75,  223 => 73,  219 => 72,  214 => 70,  211 => 69,  207 => 68,  203 => 66,  201 => 65,  198 => 63,  190 => 60,  179 => 58,  175 => 57,  170 => 55,  167 => 54,  163 => 53,  159 => 51,  157 => 50,  154 => 48,  146 => 45,  135 => 43,  131 => 42,  126 => 40,  123 => 39,  119 => 38,  115 => 36,  104 => 27,  98 => 24,  92 => 21,  86 => 17,  84 => 16,  76 => 9,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row mb-4 m-4\">
        <div class=\"col-lg-8\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    {# Section présentation #}
                    <div class=\"col-lg-6 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Présentation</h5>
                            <p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
                        </div>
                    </div>
                    {# Fin présentation #}
                    {# Section caroussel #}
                    <div class=\"col-lg-6\">
                        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner rounded-4\">
                                <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('assets/images/dinos/diplodocus.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset('assets/images/dinos/sarcosuchus.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset('assets/images/dinos/spinosaurus.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
                {# Section services #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Services</h2>
                    {% for service in services | slice(0, 3) %}
                    <div class=\"card-header text-center form-control mb-3 avis\">
                        <h3>{{ service.name }}</h3>
                        <div class=\"card-body\">
                            {% for image in service.image %}
                                <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ service.name }}\">
                            {% endfor %}
                        </div>
                    </div>
                    {% endfor %}
                </div>
                {# Fin section services #}
                {# Section habitat #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Habitats</h2>
                    {% for habitat in habitats | slice(0, 3) %}
                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>{{ habitat.name }}</h3>
                            <div class=\"card-body\">
                                {% for image in habitat.image %}
                                    <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\">
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
                {# Fin section habitat #}
                {# Section Dino #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Animaux</h2>
                    {% for animal in animals | slice(0, 3) %}
                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>{{ animal.name }}</h3>
                            <div class=\"card-body\">
                                {% for image in animal.image %}
                                    <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ animal.name }}\">
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        {# Fin section Dino #}
        {# Section Avis #}
        <div class=\"col-lg-4 p-4 rounded-4 border cadre\">
            <h2 class=\"text-center\">Avis</h2>
            {% for singleReview in reviews | reverse | slice(0, 3) %}
                <div class=\"card m-2 avis mt-xxl-5\">
                    <div class=\"card-header\">
                        {{ singleReview.pseudo }}
                        <div class=\"rating\">
                            {% for i in 1..5 %}
                                {% if i <= singleReview.rating %}
                                    <i class=\"fas fa-star\"></i>
                                {% else %}
                                    <i class=\"far fa-star\"></i>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-muted\">{{ singleReview.submittedAt|date('d/m/Y') }}</p>
                        <p>{{ singleReview.comment }}</p>
                    </div>
                </div>
            {% endfor %}
            <div class=\"card container text-center form-control avis mt-xxl-5\">
                {{ form_start(form) }}
                <div class=\"card-header\">
                    {{ form_label(form.pseudo) }}
                    {{ form_widget(form.pseudo) }}
                </div>
                <div class=\"card-body\">
                    {{ form_label(form.comment) }}
                    {{ form_widget(form.comment) }}
                    <div class=\"form-group\">
                        <label>Note</label>
                        <div class=\"rating\" id=\"review-rating-container\">
                            {{ form_widget(form.rating, { 'attr': {'type': 'hidden', 'id': 'review_rating'} }) }}
                            <i class=\"far fa-star\" data-value=\"1\"></i>
                            <i class=\"far fa-star\" data-value=\"2\"></i>
                            <i class=\"far fa-star\" data-value=\"3\"></i>
                            <i class=\"far fa-star\" data-value=\"4\"></i>
                            <i class=\"far fa-star\" data-value=\"5\"></i>
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
                {{ form_end(form) }}
            </div>
        </div>
        {# Fin section avis #}
        {# Section Horaires #}
            <div class=\"card container-fluid mt-3  mt-xxl-5\">
                <table class=\"table avis\">
                    <thead>
                    <tr>
                        <th>Jours </th>
                        <th>Heure d'ouverture</th>
                        <th>Heure de fermeture</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for schedule in schedules %}
                        <tr>
                            <td>{{ schedule.day }}</td>
                            {% if schedule.isclosed %}
                                <td>Fermé</td>
                                <td>Fermé</td>
                            {% else %}
                                <td>{{ schedule.openingTime|date('H:i') }}</td>
                                <td>{{ schedule.closingTime|date('H:i') }}</td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/stars_reviews.js') }}?\${{ \"now\"|date(\"U\") }}\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
{% endblock %}", "default/index.html.twig", "/var/www/html/templates/default/index.html.twig");
    }
}
