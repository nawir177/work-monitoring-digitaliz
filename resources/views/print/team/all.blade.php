<?php use Carbon\Carbon; ?>
<x-print-page>
     <h3>List All Team Digitaliz</h3>
     <table cellspacing="0" cellpadding="9" border="1" style="font-size: 14px">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Team Name</th>
                    <th>Project</th>
                    <th>Leader</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>progres</th>
               </tr>
          </thead>
          <tbody>

               @foreach ($teams as $team)
                    <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $team->name }}</td>
                         <td>{{ $team->project->name }}</td>
                         <td>{{ $team->user->employe->name }}</td>
                         <td>{{ Carbon::parse($team->project->start_date)->isoFormat('DD MMMM Y') }}</td>
                         <td>{{ Carbon::parse($team->project->end_date)->isoFormat('DD MMMM Y') }}</td>
                         <td>{{ $team->project->progres }}%</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
</x-print-page>
