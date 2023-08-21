<x-print-page>
     <h3>Daftar Seluruh Karyawan Digitaliz</h3>
     <table cellspacing="0" cellpadding="5" border="1" style="font-size: 14px">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Place Birth</th>
                    <th>Date Birth</th>
                    <th>Hire Date</th>
                    <th>Possition</th>
                    <th>Address</th>
               </tr>
          </thead>
          <tbody>

               @foreach ($employes as $value)
                    <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $value->name }}</td>
                         <td>{{ $value->gender }}</td>
                         <td>{{ $value->user->email }}</td>
                         <td>{{ $value->phone }}</td>
                         <td>{{ $value->place_birth }}</td>
                         <td>{{ $value->date_birth }}</td>
                         <td>{{ $value->hire_date }}</td>
                         <td>{{ $value->position }}</td>
                         <td>{{ $value->address }}</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
</x-print-page>
