<?php use Carbon\Carbon; ?>
<x-print-page>
     <h3>List Books </h3>
     <table cellspacing="0" cellpadding="9" border="1" style="font-size: 14px">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                  
               </tr>
          </thead>
          <tbody>

               @foreach ($data as $value)
                    <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $value->data1 }}</td>
                         <td>{{ $value->data2 }}</td>
                          <td>{{ $value->data3 }}</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
</x-print-page>
