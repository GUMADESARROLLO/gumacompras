
<!--totals-->
<tr class="report-results-table-totals">
    <td colspan="5">@lang('lang.page_totals')</td>


</tr>

<!--pagination-->
<tr>
    <td class="pagination-container" data-tableexport-display="none" colspan="11">
        <div class="pagination">
            {{ $projects->links('pages.reports.components.misc.pagination') }}
        </div>
    </td>
</tr>