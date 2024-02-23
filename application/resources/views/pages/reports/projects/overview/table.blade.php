<!--table-->
@if (@count($projects ?? []) > 0)
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap" id="report-results-table">
        <thead>
            <tr>
                <th class="col_project_id"><a href="javascript:void(0)">@lang('lang.id')<span class="sorting-icons"><i
                            class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_sku"><a href="javascript:void(0)">@lang('lang.item_sku')<span class="sorting-icons"><i
                            class="ti-arrows-vertical"></i></span></a></th>
            
                <th class="col_project_title"><a href="javascript:void(0)">@lang('lang.item_desc')<span class="sorting-icons"><i
                            class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_cant"><a href="javascript:void(0)">@lang('lang.item_CANT')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_und"><a href="javascript:void(0)">@lang('lang.item_UND')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_start_date"><a href="javascript:void(0)">@lang('lang.start_date')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_due_date"><a href="javascript:void(0)">@lang('lang.due_date')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_client"><a href="javascript:void(0)">@lang('lang.item_cls')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_und"><a href="javascript:void(0)">@lang('lang.auth_date')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_status"><a href="javascript:void(0)">@lang('lang.status')<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_description"><a href="javascript:void(0)">OBSERVACION<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <th class="col_project_proveedor"><a href="javascript:void(0)">COMPAÑÍA<span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <!--rows-->
            @include('pages.reports.projects.overview.ajax')
        </tbody>
        <tfoot>
            <!--rows-->
            @include('pages.reports.projects.overview.footer')
        </tfoot>
    </table>

</div>
@else
<div id="report-results-container">
    @include('notifications.no-results-found')
</div>
@endif