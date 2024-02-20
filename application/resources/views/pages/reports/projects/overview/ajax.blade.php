<!--rows-->
@foreach($projects as $project)
<tr>

    <td><a href="{{ url('projects/'.$project->project_id) }}">{{ $project->project_id }}</a></td>
    <td><a href="{{ url('projects/'.$project->project_id) }}">{{ $project->project_custom_field_1 }}</a></td>
    <td><a href="{{ url('projects/'.$project->project_id) }}">{{ str_limit_reports($project->project_title ?? '---', 40) }}</a></td>
    <td>{{ $project->project_custom_field_51 }}</td>
    <td>{{ $project->project_custom_field_2 }}</td>
    <td>{{ runtimeDate($project->project_date_start) }}</td>
    <td>{{ runtimeDate($project->project_date_due) }}</td>
    <td>{{ $project->client->users[0]->first_name }} {{ $project->client->users[0]->last_name }}</td>
    <td>{{ $project->project_custom_field_11 }}</td>
    <td>{{runtimeLang($project->project_status) }}</span></td>
    <td>{{ str_limit_reports($project->project_description ?? '---', 30) }}</td>
    <td>{{ $project->project_custom_field_41 }}</td>
</tr>
@endforeach
