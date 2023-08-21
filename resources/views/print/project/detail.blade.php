<?php use Carbon\Carbon; ?>
<x-print-page>
<style>
      li{
         margin-bottom: 13px;
      }
      .small{
        
         margin-bottom: 2px;
      }

      small{
          font-size: 12px;
         color:gray;
      }
</style>
     <h2>Detail Projcet</h2>

     <ul type="none">
          <li>
               <div class="small">
                    <Small>Project Name</Small>
               </div>
               <div>
                    {{ $project->name }}
               </div>
          </li>
           <li>
               <div class="small">
                    <Small>Project Type</Small>
               </div>
               <div>
                    {{ $project->type }}
               </div>
          </li>
                     <li>
               <div class="small">
                    <Small>Client</Small>
               </div>
               <div>
                    {{ $project->client->name }}
               </div>
          </li>
           <li>
               <div class="small">
                    <Small>Frontend</Small>
               </div>
               <div>
                    {{ $project->frontend }}
               </div>
          </li>
           <li>
               <div class="small">
                    <Small>Backend</Small>
               </div>
               <div>
                    {{ $project->backend }}
               </div>
          </li>
          <li>
               <div class="small">
                    <Small>Start Date</Small>
               </div>
               <div>
                   {{ Carbon::parse($project->start_date)->isoFormat('DD MMMM Y') }}
               </div>
          </li>
          <li>
               <div class="small">
                    <Small>End Date</Small>
               </div>
               <div>
                   {{ Carbon::parse($project->end_date)->isoFormat('DD MMMM Y') }}
               </div>
          </li>
          <li>
               <div class="small">
                    <Small>Deadline</Small>
               </div>
               <div>
                   {{  Carbon::create($project->start_date)->diffInDays($project->end_date); }} Day
               </div>
          </li>
          <li>
               <div class="small">
                    <Small>Description Project</Small>
               </div>
               <div>
                    {{ $project->description }}
               </div>
          </li>
     </ul>
</x-print-page>
