<?php use Carbon\Carbon; ?>
<x-print-page>
     <h3>List All Projcet Digitaliz</h3>
     <table cellspacing="0" cellpadding="9" border="1" style="font-size: 14px">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Project Name</th>
                    <th>client</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Progres</th>
                    <th>Deadline</th>
               </tr>
          </thead>
          <tbody>

               @foreach ($projects as $project)
                    <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $project->name }}</td>
                         <td>{{ $project->client->name }}</td>
                         <td>{{ Carbon::parse($project->start_date)->isoFormat('DD MMMM Y') }}</td>
                         <td>{{ Carbon::parse($project->end_date)->isoFormat('DD MMMM Y') }}</td>
                         <td>{{ $project->progres }}%</td>
                         <td>{{  Carbon::create($project->start_date)->diffInDays($project->end_date); }} Day</td>

                    </tr>
               @endforeach
          </tbody>
     </table>
</x-print-page>
