<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prodi</title>
</head>
<body>
    <h1>Form Prodi</h1>
    <hr>
    <form action="/prodi" method="POST">
        @csrf
        <table>
            <tr>
                <th style="text-align: left;">
                    <label for="nama_prodi">Prodi</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_prodi" id="nama_prodi" required>
                </td>
            </tr>
            <tr>
                <th style="text-align: left;">
                    <label for="fakultas">Fakultas</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="fakultas" id="fakultas" required>
                </td>
            </tr>
            <tr>
                <th style="text-align: left;">
                    <label for="kaprodi">Kaprodi</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="kaprodi" id="kaprodi" required>
                </td>
            </tr>
            <tr>
                <th style="text-align: left;">
                    <label for="sekprodi">Sekprodi</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="sekprodi" id="sekprodi" required>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button style="width:100%" type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>