<x-print-page>
     <h3>Daftar Seluruh Client Digitaliz</h3>
     <table cellspacing="0" cellpadding="5" border="1" style="font-size: 14px">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
               </tr>
          </thead>
          <tbody>

               @foreach ($clients as $client)
                    <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $client->name }}</td>
                         <td>{{ $client->company }}</td>
                         <td>{{ $client->email }}</td>
                         <td>{{ $client->phone }}</td>
                         <td>{{ $client->address }}</td>

                    </tr>
               @endforeach
          </tbody>
     </table>
</x-print-page>
