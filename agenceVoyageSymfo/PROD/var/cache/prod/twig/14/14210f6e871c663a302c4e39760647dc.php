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

/* voyage/show.html.twig */
class __TwigTemplate_9a57faa7ba8efb49d148b9fea45f90a9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "voyage/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Voyage";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>Voyage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom_voyage</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "nomVoyage", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Photo_voyage</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "photoVoyage", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Duree_voyage</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "dureeVoyage", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DateDepart_voyage</th>
                <td>";
        // line 28
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "dateDepartVoyage", [], "any", false, false, false, 28)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "dateDepartVoyage", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>DateRetour_voyage</th>
                <td>";
        // line 32
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "dateRetourVoyage", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "dateRetourVoyage", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Visibility_voyage</th>
                <td>";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "visibilityVoyage", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "voyage/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/show.html.twig";
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
        return array (  128 => 45,  123 => 43,  118 => 41,  110 => 36,  103 => 32,  96 => 28,  89 => 24,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "voyage/show.html.twig", "C:\\Users\\sanaa\\Desktop\\Agence de Voyage 2\\agenceVoyageSymfo\\PROD\\templates\\voyage\\show.html.twig");
    }
}
