<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Bill of Lading Shipments</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th scope="col">#</th>
                <th scope="col">B/L Number</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Shipping Date</th>
                <th scope="col">Company Name</th>
                <th scope="col">Shipper Name</th>
                <th scope="col">Address</th>
                <th scope="col">Final Destination</th>
                <th scope="col">Description</th>
                        </thead>
                        <tbody>
                            @foreach ($shipment as $row)
                            <tr>
                                {{-- <th scope="row">{{ $index + $kategoris->firstItem() }}</th> --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->bolnumber }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->transport->date }}</td>
                                <td>{{ $row->shipping_date }}</td>
                                <td>{{ $row->shipper->name }}</td>
                                <td>{{ $row->consignee->name }}</td>
                                <td>{{ $row->transport->shipping_address }}</td>
                                <td>{{ $row->transport->finaldestination }}</td>
                                <td>{{ $row->good->description }}</td>
                                <td>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>