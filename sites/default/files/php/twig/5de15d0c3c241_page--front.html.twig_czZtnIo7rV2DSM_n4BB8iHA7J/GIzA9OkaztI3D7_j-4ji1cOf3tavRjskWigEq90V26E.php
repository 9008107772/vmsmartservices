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

/* themes/custom/smartservices/templates/page--front.html.twig */
class __TwigTemplate_726373d2602d963a29174467b226db9470ffcc44366be66336d3afbc46bc3497 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>DURG Indudtry Template by Colorlib</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/favicon.ico\">
    <!-- Place favicon.ico in the root directory -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <!---<div class=\"header-top black-bg d-none d-md-block\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-6 col-md-6 col-lg-6\">
                            <div class=\"header-contact\">
                                <a href=\"#\"><i class=\"fa fa-phone\"></i> +880 256 356 256</a>
                                <a href=\"#\"><i class=\"fa fa-envelope\"></i> support24@durg.com</a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-md-6 col-lg-6\">
                            <div class=\"header-top-menu\">
                                <nav>
                                    <ul>
                                        <li><a href=\"blog.html\">News & media</a></li>
                                        <li><a href=\"review.html\">Review</a></li>
                                        <li><a href=\"faq.html\">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div id=\"sticky-header\" class=\"main-header-area white-bg\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-2 col-lg-2\">
                            <div class=\"logo-img\">
                                <a href=\"index.html\">
                                    <img src=\"/";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/logos.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-10 col-lg-10\">
                            <div class=\"main-menu d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        <li><a class=\"active\" href=\"index.html\">Home</a></li>
                                        <li><a href=\"about.html\">About</a></li>
                                        <li><a href=\"service.html\">SMS Formats</a></li>
                                        <li><a href=\"project.html\">Bank Details</a></li>
                                        <!--<li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">blog</a></li>
                                                <li><a href=\"single-blog.html\">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"elements.html\">elements</a></li>
                                                <li><a href=\"service-details.html\">service-details</a></li>
                                                <li><a href=\"project-details.html\">project-details</a></li>
                                            </ul>
                                        </li>-->
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Android APP</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Register</a></li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--<div class=\"col-xl-3 col-lg-3\">
                            <div class=\"quote-area\">
                                <div class=\"search-bar\">
                                    <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                                </div>
                                <div class=\"get-quote d-none d-lg-block\">
                                    <a class=\"boxed-btn\" href=\"#\">Get a quote</a>
                                </div>
                            </div>
                        </div>-->
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                    <!--<div class=\"search_input\" id=\"search_input_box\">
                        <div class=\"container \">
                            <form class=\"d-flex justify-content-between search-inner\">
                                <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
                                <button type=\"submit\" class=\"btn\"></button>
                                <span class=\"fa fa-close\" id=\"close_search\" title=\"Close Search\"></span>
                            </form>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider-area-start -->
    <div class=\"slider-area\">
        <div class=\"slider-active owl-carousel\">
            <div class=\"single-slider bg-img-1\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 offset-xl-1 col-lg-7\">
                            <div class=\"slider-content\">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class=\"slider-btn\">
                                    <a class=\"boxed-btn2\" href=\"#\">Our Services <i
                                            class=\"Flaticon flaticon-right-arrow\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider bg-img-1\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 offset-xl-1 col-lg-7\">
                            <div class=\"slider-content\">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class=\"slider-btn\">
                                    <a class=\"boxed-btn2\" href=\"#\">Our Services <i
                                            class=\"Flaticon flaticon-right-arrow\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider bg-img-1\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 offset-xl-1 col-lg-7\">
                            <div class=\"slider-content\">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class=\"slider-btn\">
                                    <a class=\"boxed-btn2\" href=\"#\">Our Services <i
                                            class=\"Flaticon flaticon-right-arrow\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- brand-area-start -->
    <div class=\"brand-area gray-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"brand-active owl-carousel\">
                        <div class=\"single-brand\">
                            <img src=\"img/brand/1.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/2.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/3.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/4.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/5.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/6.png\" alt=\"\">
                        </div>
                        <div class=\"single-brand\">
                            <img src=\"img/brand/4.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- service-area-start -->
    <div class=\"service-area\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"section-title text-center mb-65\">
                    <span>OUR SERVICES</span>
                    <h3>We provide all of your <br>
                        industrial solution</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-service\">
                        <div class=\"service-thumb\">
                            <img src=\"img/service/1.jpg\" alt=\"\">
                        </div>
                        <h3>Industrial construction</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href=\"#\" class=\"read-more\">Read More</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-service\">
                        <div class=\"service-thumb\">
                            <img src=\"img/service/2.jpg\" alt=\"\">
                        </div>
                        <h3>Mechanical engineering</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href=\"#\" class=\"read-more\">Read More</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-service\">
                        <div class=\"service-thumb\">
                            <img src=\"img/service/1.jpg\" alt=\"\">
                        </div>
                        <h3>Bridge construction</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href=\"#\" class=\"read-more\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area-end -->

    <!-- project-area-start -->
    <div class=\"project-area bg-img-2 overlay\">
        <div class=\"container-fluid p-lg-0\">
            <div class=\"row justify-content-end no-gutters\">
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"section-title text-white mb-65 ml-80\">
                        <h3>Take a look around <br>
                            our projects</h3>
                        <p>Waters make fish every without firmament saw had. <br> Morning air subdue.</p>
                        <div class=\"more-project\">
                            <a href=\"#\">More Projects</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"project-active owl-carousel\">
                        <div class=\"single-project\">
                            <div class=\"project-thumb\">
                                <img src=\"img/project/1.jpg\" alt=\"\">
                            </div>
                            <div class=\"project-info\">
                                <span>Industrial construction</span>
                                <h3>Research and development center</h3>
                            </div>
                        </div>
                        <div class=\"single-project\">
                            <div class=\"project-thumb\">
                                <img src=\"img/project/1.jpg\" alt=\"\">
                            </div>
                            <div class=\"project-info\">
                                <span>Machine engineering</span>
                                <h3>Project of technological park</h3>
                            </div>
                        </div>
                        <div class=\"single-project\">
                            <div class=\"project-thumb\">
                                <img src=\"img/project/1.jpg\" alt=\"\">
                            </div>
                            <div class=\"project-info\">
                                <span>Industrial construction</span>
                                <h3>Research and development center</h3>
                            </div>
                        </div>
                        <div class=\"single-project\">
                            <div class=\"project-thumb\">
                                <img src=\"img/project/1.jpg\" alt=\"\">
                            </div>
                            <div class=\"project-info\">
                                <span>Machine engineering</span>
                                <h3>Project of technological park</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project-area-end -->

    <!-- about start -->
    <div class=\"about-area section-padding\">
        <div class=\"pattent-bg-img\">
            <img src=\"img/about/pattern.png\" alt=\"\">
        </div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-7 col-md-12 col-lg-6\">
                    <div class=\"about-thumb\">
                        <img src=\"img/about/about.jpg\" alt=\"\">
                        <a class=\"video-icon popup-video\" href=\"https://www.youtube.com/watch?v=vb9uYBtqmeM\">
                            <i class=\"fa fa-play\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-xl-5 col-md-12 col-lg-6\">
                    <div class=\"section-title mb-65\">
                        <span>About Company</span>
                        <h3>Deliver inovative
                            Industrial solution</h3>
                        <p class=\"para-text\">
                            Waters makte fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.
                        </p>
                        <a href=\"#\" class=\"boxed-btn\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"about-pro-active owl-carousel pt-120\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-md-6 col-lg-6 \">
                        <div class=\"about-info-text\">
                            <div class=\"quote\">
                                <i class=\"Flaticon flaticon-quote\"></i>
                            </div>
                            <div class=\"about-ratting\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"about-text\">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class=\"about-author\">
                                <div class=\"autor-thumb\">
                                    <img src=\"img/about/about-author.jpg\" alt=\"\">
                                </div>
                                <div class=\"auhor-text\">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-5 offset-xl-1 col-md-6\">
                        <div class=\"about-review\">
                            <img src=\"img/about/about-project.jpg\" alt=\"\">
                            <div class=\"project-review\">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row  align-items-center\">
                    <div class=\"col-xl-6 col-md-6\">
                        <div class=\"about-info-text\">
                            <div class=\"quote\">
                                <i class=\"Flaticon flaticon-quote\"></i>
                            </div>
                            <div class=\"about-ratting\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"about-text\">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class=\"about-author\">
                                <div class=\"autor-thumb\">
                                    <img src=\"img/about/about-author.jpg\" alt=\"\">
                                </div>
                                <div class=\"auhor-text\">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-5 offset-xl-1 col-md-6\">
                        <div class=\"about-review\">
                            <img src=\"img/about/about-project.jpg\" alt=\"\">
                            <div class=\"project-review\">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-md-6\">
                        <div class=\"about-info-text\">
                            <div class=\"quote\">
                                <i class=\"Flaticon flaticon-quote\"></i>
                            </div>
                            <div class=\"about-ratting\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"about-text\">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class=\"about-author\">
                                <div class=\"autor-thumb\">
                                    <img src=\"img/about/about-author.jpg\" alt=\"\">
                                </div>
                                <div class=\"auhor-text\">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-5 offset-xl-1 col-md-6\">
                        <div class=\"about-review\">
                            <img src=\"img/about/about-project.jpg\" alt=\"\">
                            <div class=\"project-review\">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- cta-area-start -->
    <div class=\"cta-area cta-bg-1\">
        <div class=\"container\">
            <div class=\"col-xl-6 col-lg-7\">
                <div class=\"cta-content\">
                    <h3>Let’s talk about your <br>
                        industrial problems</h3>
                    <p>Waters make fish every without firmament saw had. <br> Morning air subdue very one. Whales grass
                        is
                        fish <br> whales winged.</p>
                    <div class=\"cta-btn\">
                        <a class=\"boxed-btn2 black-bg\" href=\"#\">Discuss now <i
                                class=\"Flaticon flaticon-right-arrow\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-area-end -->

    <!-- location-area-start -->
    <div class=\"addres-area black-bg section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-address text-center\">
                        <div class=\"addres-icon\">
                            <img src=\"img/icon/1.png\" alt=\"\">
                        </div>
                        <h3>Our Location</h3>
                        <p>127, Manchaster city, London <br>
                            86/A, green street, California, USA</p>
                        <a class=\"underline-hover\" href=\"#\">Get Direction</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-address text-center\">
                        <div class=\"addres-icon\">
                            <img src=\"img/icon/2.png\" alt=\"\">
                        </div>
                        <h3>Opening hour</h3>
                        <p>Mon-Fri (9.00-19.00) <br>
                            Sat-Sun <a class=\"underline-hover\" href=\"#\">(Closed)</a></p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-4\">
                    <div class=\"single-address text-center\">
                        <div class=\"addres-icon\">
                            <img src=\"img/icon/3.png\" alt=\"\">
                        </div>
                        <h3>Drop a message</h3>
                        <p>support@durg.com <br>
                            456 267 3572</p>
                        <a class=\"underline-hover\" href=\"#\">Mail Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location-area-end -->

    <!-- footer-start -->
    <footer class=\"footer-area \">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-sm-6 col-md-3 col-xl-4\">
                    <div class=\"single-footer-widget footer_1\">
                        <a href=\"index.html\"> <img src=\"img/footer-logo.png\" alt=\"\"> </a>
                        <p>Waters make fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.</p>
                        <div class=\"social-links\">
                            <ul>
                                <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                <li><a href=\"#\"> <i class=\"fa fa-linkedin\"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-2 col-xl-2\">
                    <div class=\"single-footer-widget\">
                        <h4>Company</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Media</a></li>
                            <li><a href=\"#\">Carrier</a></li>
                            <li><a href=\"#\">Testimonials</a></li>
                            <li><a href=\"#\">Stability</a></li>
                        </ul>

                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xl-3\">
                    <div class=\"single-footer-widget\">
                        <h4>Solutions</h4>
                        <ul>
                            <li><a href=\"#\">Industrial problems</a></li>
                            <li><a href=\"#\"> Construction solution</a></li>
                            <li><a href=\"#\">Car manufacturing</a></li>
                            <li><a href=\"#\">Mechanical problems</a></li>
                        </ul>

                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xl-3\">
                    <div class=\"single-footer-widget footer_icon\">
                        <h4>Branch office</h4>
                        <div class=\"office-location\">
                            <ul>
                                <li>
                                    <strong>London - UK</strong>
                                    <p>127, Manchaster city, London <br>
                                        +008 728 362 278</p>
                                </li>
                                <li>
                                    <strong>New York - USA</strong>
                                    <p>127, Manchaster city, London <br>
                                        +008 728 362 278</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12\">
                    <div class=\"copyright_part_text text-center\">
                        <p class=\"footer-text m-0\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- JS here -->

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/smartservices/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  68 => 12,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/smartservices/templates/page--front.html.twig", "C:\\xampp\\htdocs\\smartservices\\themes\\custom\\smartservices\\templates\\page--front.html.twig");
    }
}
