<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul data-modular-id="reports_tabs_menu" class="nav nav-tabs profile-tab reports-top-nav list-pages-crumbs"
            role="tablist">
        


            <!--projects-->
            <li class="nav-item dropdown <?php echo e($page['reports_tabs_productivty'] ?? ''); ?>">
                <a class="nav-link dropdown-toggle  tabs-menu-item" data-loading-class="loading-tabs"
                    data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true"
                    id="reports_tabs_projects" aria-expanded="false">
                    <span class="hidden-xs-down"><?php echo e(cleanLang(__('lang.projects'))); ?></span>
                </a>
                <div class="dropdown-menu" x-placement="bottom-start" id="fx-topnav-dropdown">
                
                    <a class="dropdown-item js-dynamic-url js-ajax-ux-request" data-toggle="tab"
                        data-loading-class="loading-tabs" data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(url('/reports/projects/overview')); ?>"
                        data-url="<?php echo e(url('/report/projects/overview')); ?>" href="javascript:void(0);"
                        role="tab"><?php echo app('translator')->get('lang.overview'); ?></a>
                
                    <!-- <a class="dropdown-item js-dynamic-url js-ajax-ux-request" data-toggle="tab"
                        data-loading-class="loading-tabs" data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(url('/reports/projects/client')); ?>"
                        data-url="<?php echo e(url('/report/projects/client')); ?>" href="javascript:void(0);"
                        role="tab"><?php echo app('translator')->get('lang.client_projects'); ?></a>
                
                    <a class="dropdown-item js-dynamic-url js-ajax-ux-request" data-toggle="tab"
                        data-loading-class="loading-tabs" data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(url('/reports/projects/category')); ?>"
                        data-url="<?php echo e(url('/report/projects/category')); ?>" href="javascript:void(0);"
                        role="tab"><?php echo app('translator')->get('lang.project_category'); ?></a> -->
                </div>
            </li>



        </ul>
        <!-- Tab panes -->
    </div>
</div><?php /**PATH E:\Wamp\www\GumaCompras\application\resources\views/pages/reports/components/misc/topnav.blade.php ENDPATH**/ ?>