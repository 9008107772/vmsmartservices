<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/smartservices/templates/page.html.twig */
class __TwigTemplate_ea8cd3d4a07ccddb02fb2ac98b4b059e0c156de0bc08230991b67fcfe7f865b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 244];
        $filters = ["t" => 55, "escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 53
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <!--<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
        ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      </div>
    </header>-->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\">Mega Dropdown</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Category</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 1
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

          
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-white\">Category 1</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 2
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-white\">Category 2</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 3
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
               <span class=\"text-uppercase text-white\">Category 3</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">

                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>
                
              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>

    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
  
  </nav>
  
  
    ";
        // line 244
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 245
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 251
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 252
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 258
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 260
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 264
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 267
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 268
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 270
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 274
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 275
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 277
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 281
        echo "      </div>
    </div>
    ";
        // line 283
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 284
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 286
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 287
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 292
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 294
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 295
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 296
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 297
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 298
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 299
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 302
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 303
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 304
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 307
        echo "      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smartservices/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 307,  389 => 304,  386 => 303,  383 => 302,  377 => 299,  373 => 298,  369 => 297,  365 => 296,  362 => 295,  360 => 294,  356 => 292,  349 => 288,  345 => 287,  341 => 286,  337 => 284,  335 => 283,  331 => 281,  324 => 277,  320 => 275,  317 => 274,  310 => 270,  306 => 268,  304 => 267,  298 => 264,  291 => 260,  287 => 258,  280 => 254,  276 => 252,  273 => 251,  266 => 247,  262 => 245,  260 => 244,  72 => 59,  68 => 58,  64 => 57,  59 => 55,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/smartservices/templates/page.html.twig", "C:\\xampp\\htdocs\\smartservices\\themes\\custom\\smartservices\\templates\\page.html.twig");
    }
}
