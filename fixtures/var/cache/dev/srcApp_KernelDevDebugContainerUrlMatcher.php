<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/change-password' => [[['_route' => 'doyo_user.change_password', '_controller' => 'Doyo\\UserBundle\\Controller\\ProfileController::changePassword'], null, ['POST' => 0], null, false, false, null]],
            '/register' => [[['_route' => 'doyo_user.register', '_controller' => 'Doyo\\UserBundle\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null]],
            '/reset-password/request' => [[['_route' => 'doyo_user_reset_password_request', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::request'], null, ['POST' => 0], null, false, false, null]],
            '/reset-password/new-password' => [[['_route' => 'doyo_user_new_password', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::newPassword'], null, null, null, false, false, null]],
            '/login-check' => [[['_route' => 'login_check'], null, ['POST' => 0], null, false, false, null]],
            '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/default\\-reset\\-password/confirm/([^/]++)(*:211)'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:254)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:285)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:321)'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:355)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:393)'
                                .')'
                            .')'
                            .'|reset\\-password/foo/([^/]++)(*:431)'
                        .')'
                    .')'
                    .'|/reset\\-password/confirm/([^/]++)(*:474)'
                    .'|/((?!.*_wdt|_profiler).+)(*:507)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            211 => [[['_route' => 'doyo_user_reset_password_confirm', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::confirmResetPassword'], ['token'], null, null, false, true, null]],
            254 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            285 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            321 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            355 => [
                [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            393 => [
                [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            431 => [[['_route' => 'api_users_reset_password_item', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'reset_password', 'method' => 'testNewPassword'], ['token'], ['POST' => 0], null, false, true, null]],
            474 => [[['_route' => 'app_reset_password_confirm', '_controller' => 'App\\Controller\\MainController::resetPasswordConfirm'], ['token'], null, null, false, true, null]],
            507 => [[['_route' => 'vue_pages', '_controller' => 'App\\Controller\\MainController::index'], ['route'], null, null, false, true, null]],
        ];
    }
}
