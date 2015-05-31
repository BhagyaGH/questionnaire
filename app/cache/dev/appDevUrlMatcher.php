<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // gene_questionnaire_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage');
            }

            return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultController::homeAction',  '_route' => 'gene_questionnaire_homepage',);
        }

        // gene_questionnaire_user_q
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultController::indexAction',));
        }

        // gene_questionnaire_question
        if (0 === strpos($pathinfo, '/question') && preg_match('#^/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultController::questionAction',));
        }

        // gene_questionnaire_save_answer
        if (0 === strpos($pathinfo, '/saveAnswer') && preg_match('#^/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gene_questionnaire_save_answer;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultController::saveAnswerAction',));
        }
        not_gene_questionnaire_save_answer:

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tellusaboutyou')) {
                // gene_questionnaire_user_english
                if ($pathinfo === '/tellusaboutyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserController::englishAction',  '_route' => 'gene_questionnaire_user_english',);
                }

                // gene_questionnaire_user_save
                if ($pathinfo === '/tellusaboutyou/save') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gene_questionnaire_user_save;
                    }

                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserController::saveUserAction',  '_route' => 'gene_questionnaire_user_save',);
                }
                not_gene_questionnaire_user_save:

            }

            // gene_questionnaire_final
            if ($pathinfo === '/thankyou') {
                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultController::thankyouAction',  '_route' => 'gene_questionnaire_final',);
            }

        }

        if (0 === strpos($pathinfo, '/ch')) {
            // gene_questionnaire_homepage_ch
            if (rtrim($pathinfo, '/') === '/ch') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_ch');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultChineseController::homeAction',  '_route' => 'gene_questionnaire_homepage_ch',);
            }

            // gene_questionnaire_user_q_ch
            if (0 === strpos($pathinfo, '/ch/user') && preg_match('#^/ch/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_ch')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultChineseController::indexAction',));
            }

            // gene_questionnaire_question_ch
            if (0 === strpos($pathinfo, '/ch/question') && preg_match('#^/ch/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_ch')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultChineseController::questionAction',));
            }

            // gene_questionnaire_save_answer_ch
            if (0 === strpos($pathinfo, '/ch/saveAnswer') && preg_match('#^/ch/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_ch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_ch')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultChineseController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_ch:

            if (0 === strpos($pathinfo, '/ch/t')) {
                if (0 === strpos($pathinfo, '/ch/tellusaboutyou')) {
                    // gene_questionnaire_user_ch
                    if ($pathinfo === '/ch/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserChineseController::chineseAction',  '_route' => 'gene_questionnaire_user_ch',);
                    }

                    // gene_questionnaire_user_save_ch
                    if ($pathinfo === '/ch/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_ch;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserChineseController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_ch',);
                    }
                    not_gene_questionnaire_user_save_ch:

                }

                // gene_questionnaire_final_ch
                if ($pathinfo === '/ch/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultChineseController::thankyouAction',  '_route' => 'gene_questionnaire_final_ch',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/fr')) {
            // gene_questionnaire_homepage_fr
            if (rtrim($pathinfo, '/') === '/fr') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_fr');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultFrenchController::homeAction',  '_route' => 'gene_questionnaire_homepage_fr',);
            }

            // gene_questionnaire_user_q_fr
            if (0 === strpos($pathinfo, '/fr/user') && preg_match('#^/fr/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_fr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultFrenchController::indexAction',));
            }

            // gene_questionnaire_question_fr
            if (0 === strpos($pathinfo, '/fr/question') && preg_match('#^/fr/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_fr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultFrenchController::questionAction',));
            }

            // gene_questionnaire_save_answer_fr
            if (0 === strpos($pathinfo, '/fr/saveAnswer') && preg_match('#^/fr/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_fr;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_fr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultFrenchController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_fr:

            if (0 === strpos($pathinfo, '/fr/t')) {
                if (0 === strpos($pathinfo, '/fr/tellusaboutyou')) {
                    // gene_questionnaire_user_fr
                    if ($pathinfo === '/fr/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserFrenchController::frenchAction',  '_route' => 'gene_questionnaire_user_fr',);
                    }

                    // gene_questionnaire_user_save_fr
                    if ($pathinfo === '/fr/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_fr;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserFrenchController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_fr',);
                    }
                    not_gene_questionnaire_user_save_fr:

                }

                // gene_questionnaire_final_fr
                if ($pathinfo === '/fr/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultFrenchController::thankyouAction',  '_route' => 'gene_questionnaire_final_fr',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/hn')) {
            // gene_questionnaire_homepage_hn
            if (rtrim($pathinfo, '/') === '/hn') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_hn');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultHindiController::homeAction',  '_route' => 'gene_questionnaire_homepage_hn',);
            }

            // gene_questionnaire_user_q_hn
            if (0 === strpos($pathinfo, '/hn/user') && preg_match('#^/hn/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_hn')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultHindiController::indexAction',));
            }

            // gene_questionnaire_question_hn
            if (0 === strpos($pathinfo, '/hn/question') && preg_match('#^/hn/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_hn')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultHindiController::questionAction',));
            }

            // gene_questionnaire_save_answer_hn
            if (0 === strpos($pathinfo, '/hn/saveAnswer') && preg_match('#^/hn/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_hn;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_hn')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultHindiController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_hn:

            if (0 === strpos($pathinfo, '/hn/t')) {
                if (0 === strpos($pathinfo, '/hn/tellusaboutyou')) {
                    // gene_questionnaire_user_hn
                    if ($pathinfo === '/hn/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserHindiController::hindiAction',  '_route' => 'gene_questionnaire_user_hn',);
                    }

                    // gene_questionnaire_user_save_hn
                    if ($pathinfo === '/hn/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_hn;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserHindiController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_hn',);
                    }
                    not_gene_questionnaire_user_save_hn:

                }

                // gene_questionnaire_final_hn
                if ($pathinfo === '/hn/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultHindiController::thankyouAction',  '_route' => 'gene_questionnaire_final_hn',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/jp')) {
            // gene_questionnaire_homepage_jp
            if (rtrim($pathinfo, '/') === '/jp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_jp');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultJapaneseController::homeAction',  '_route' => 'gene_questionnaire_homepage_jp',);
            }

            // gene_questionnaire_user_q_jp
            if (0 === strpos($pathinfo, '/jp/user') && preg_match('#^/jp/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_jp')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultJapaneseController::indexAction',));
            }

            // gene_questionnaire_question_jp
            if (0 === strpos($pathinfo, '/jp/question') && preg_match('#^/jp/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_jp')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultJapaneseController::questionAction',));
            }

            // gene_questionnaire_save_answer_jp
            if (0 === strpos($pathinfo, '/jp/saveAnswer') && preg_match('#^/jp/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_jp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_jp')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultJapaneseController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_jp:

            if (0 === strpos($pathinfo, '/jp/t')) {
                if (0 === strpos($pathinfo, '/jp/tellusaboutyou')) {
                    // gene_questionnaire_user_jp
                    if ($pathinfo === '/jp/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserJapaneseController::japaneseAction',  '_route' => 'gene_questionnaire_user_jp',);
                    }

                    // gene_questionnaire_user_save_jp
                    if ($pathinfo === '/jp/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_jp;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserJapaneseController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_jp',);
                    }
                    not_gene_questionnaire_user_save_jp:

                }

                // gene_questionnaire_final_jp
                if ($pathinfo === '/jp/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultJapaneseController::thankyouAction',  '_route' => 'gene_questionnaire_final_jp',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/es')) {
            // gene_questionnaire_homepage_es
            if (rtrim($pathinfo, '/') === '/es') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_es');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultSpanishController::homeAction',  '_route' => 'gene_questionnaire_homepage_es',);
            }

            // gene_questionnaire_user_q_es
            if (0 === strpos($pathinfo, '/es/user') && preg_match('#^/es/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_es')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultSpanishController::indexAction',));
            }

            // gene_questionnaire_question_es
            if (0 === strpos($pathinfo, '/es/question') && preg_match('#^/es/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_es')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultSpanishController::questionAction',));
            }

            // gene_questionnaire_save_answer_es
            if (0 === strpos($pathinfo, '/es/saveAnswer') && preg_match('#^/es/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_es;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_es')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultSpanishController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_es:

            if (0 === strpos($pathinfo, '/es/t')) {
                if (0 === strpos($pathinfo, '/es/tellusaboutyou')) {
                    // gene_questionnaire_user_es
                    if ($pathinfo === '/es/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserSpanishController::spanishAction',  '_route' => 'gene_questionnaire_user_es',);
                    }

                    // gene_questionnaire_user_save_es
                    if ($pathinfo === '/es/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_es;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserSpanishController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_es',);
                    }
                    not_gene_questionnaire_user_save_es:

                }

                // gene_questionnaire_final_es
                if ($pathinfo === '/es/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultSpanishController::thankyouAction',  '_route' => 'gene_questionnaire_final_es',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/tr')) {
            // gene_questionnaire_homepage_tr
            if (rtrim($pathinfo, '/') === '/tr') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gene_questionnaire_homepage_tr');
                }

                return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultTurkishController::homeAction',  '_route' => 'gene_questionnaire_homepage_tr',);
            }

            // gene_questionnaire_user_q_tr
            if (0 === strpos($pathinfo, '/tr/user') && preg_match('#^/tr/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_user_q_tr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultTurkishController::indexAction',));
            }

            // gene_questionnaire_question_tr
            if (0 === strpos($pathinfo, '/tr/question') && preg_match('#^/tr/question/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_question_tr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultTurkishController::questionAction',));
            }

            // gene_questionnaire_save_answer_tr
            if (0 === strpos($pathinfo, '/tr/saveAnswer') && preg_match('#^/tr/saveAnswer/(?P<id>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gene_questionnaire_save_answer_tr;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gene_questionnaire_save_answer_tr')), array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultTurkishController::saveAnswerAction',));
            }
            not_gene_questionnaire_save_answer_tr:

            if (0 === strpos($pathinfo, '/tr/t')) {
                if (0 === strpos($pathinfo, '/tr/tellusaboutyou')) {
                    // gene_questionnaire_user_tr
                    if ($pathinfo === '/tr/tellusaboutyou') {
                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserTurkishController::turkishAction',  '_route' => 'gene_questionnaire_user_tr',);
                    }

                    // gene_questionnaire_user_save_tr
                    if ($pathinfo === '/tr/tellusaboutyou/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gene_questionnaire_user_save_tr;
                        }

                        return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\UserTurkishController::saveUserAction',  '_route' => 'gene_questionnaire_user_save_tr',);
                    }
                    not_gene_questionnaire_user_save_tr:

                }

                // gene_questionnaire_final_tr
                if ($pathinfo === '/tr/thankyou') {
                    return array (  '_controller' => 'Gene\\Bundle\\QuestionnaireBundle\\Controller\\DefaultTurkishController::thankyouAction',  '_route' => 'gene_questionnaire_final_tr',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
