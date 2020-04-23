<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig */
class __TwigTemplate_c2256f5ee36b8837f643d6b327380802e9cabaafbc07abecacd6253746efffcf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_home_link' => [$this, 'block_layout_navigation_offcanvas_navigation_home_link'],
            'layout_navigation_offcanvas_navigation_home_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_home_link_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_offcanvas_navigation_home_link', $context, $blocks);
    }

    public function block_layout_navigation_offcanvas_navigation_home_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <a class=\"nav-item nav-link is-home-link navigation-offcanvas-link js-navigation-offcanvas-link\"
       href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "\"
       itemprop=\"url\"
       title=\"";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu")), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('layout_navigation_offcanvas_navigation_home_link_text', $context, $blocks);
        // line 14
        echo "    </a>
";
    }

    // line 6
    public function block_layout_navigation_offcanvas_navigation_home_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                ";
        // line 8
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", 8);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 9
        echo "            </span>
            <span itemprop=\"";
        // line 10
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu")), "html", null, true);
        echo "\">
                ";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu"));
        echo "
            </span>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  83 => 10,  80 => 9,  72 => 8,  69 => 7,  65 => 6,  60 => 14,  58 => 6,  54 => 5,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-all-link.html.twig");
    }
}
