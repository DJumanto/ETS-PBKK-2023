<!DOCTYPE html>
<html>
<head>
    <title>Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Rekam Medis</h1>

        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-2 px-4">Pasien</th>
                    <th class="py-2 px-4">Dokter</th>
                    <th class="py-2 px-4">Kondisi Kesehatan</th>
                    <th class="py-2 px-4">Suhu Tubuh</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach($patientData as $data)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4">{{ $data->pasien_nama }}</td>
                    <td class="py-2 px-4">{{ $data->dokter_nama }}</td>
                    <td class="py-2 px-4">{{ $data->kondisi_kesehatan }}</td>
                    <td class="py-2 px-4">{{ $data->suhu_tubuh }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
