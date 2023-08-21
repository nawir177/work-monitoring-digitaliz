<x-print-page>
     <style>
          li {
               margin-bottom: 20px;
          }
     </style>
     <h1>Detail Client</h1>
     <ul type="none">
          <li>
               <strong> Name : </strong>
               {{ $client->name }}
               <hr>
          </li>
          <li>
               <strong> Company : </strong>
               {{ $client->company }}
                <hr>
          </li>
          <li>
               <strong> Email : </strong>
               {{ $client->email }}
                <hr>
          </li>

          <li>
               <strong> Phone : </strong>
               {{ $client->phone }}
                <hr>
          </li>
          <li>
               <strong> Address : </strong>
               {{ $client->address }}
                <hr>
          </li>
          <li>
               <strong> Project Type : </strong>
               {{ $client->project_type }}
                <hr>
          </li>
          <li>
               <strong> Project Description : </strong>
               <div class="">
                    {{ $client->project_description }}
               </div>
          </li>

     </ul>

</x-print-page>
