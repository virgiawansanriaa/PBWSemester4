<?php
require_once "koneksi.php";
class comic
{
    public function get_comics()
    {
        global $koneksi;
        $query = "SELECT * FROM list";
        $data = array();
        $result = $koneksi->query($query);
        while ($row = mysqli_fetch_object($result)) {
            $data[] = $row;
        }
        $response = array(
            'status' => 1,
            'message' => 'List Barang.',
            'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    public function get_comic($id = 0)
    {
        global $koneksi;
        $query = "SELECT * FROM list";
        if ($id != 0) {
            $query .= " WHERE id=" . $id . " LIMIT 1";
        }
        $data = array();
        $result = $koneksi->query($query);
        while ($row = mysqli_fetch_object($result)) {
            $data[] = $row;
        }
        $response = array(
            'status' => 1,
            'message' => 'List Barang.',
            'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    public function insert_comic()
    {
        global $koneksi;
        $arrcheckpost = array('judul' => '', 'harga' => '', 'qty' => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if ($hitung == count($arrcheckpost)) {
            $result = mysqli_query($koneksi, "INSERT INTO list SET
judul = '$_POST[judul]',
harga = '$_POST[harga]',
qty = '$_POST[qty]'");
            if ($result) {
                $response = array(
                    'status' => 1,
                    'message' => 'Barang berhasil ditambahkan.'
                );
            } else {
                $response = array(
                    'status' => 0,
                    'message' => 'Barang gagal ditambahkan.'
                );
            }
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    function update_comic($id)
    {
        global $koneksi;
        $arrcheckpost = array('judul' => '', 'harga' => '', 'qty' => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if ($hitung == count($arrcheckpost)) {
            $result = mysqli_query($koneksi, "UPDATE list SET
judul = '$_POST[judul]',
harga = '$_POST[harga]',
qty = '$_POST[qty]'
WHERE id='$id'");
            if ($result) {
                $response = array(
                    'status' => 1,
                    'message' => 'Barang berhasil diupdate.'
                );
            } else {
                $response = array(
                    'status' => 0,
                    'message' => 'BBarang gagal diupdate.'
                );
            }
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    function delete_comic($id)
    {
        global $koneksi;
        $query = "DELETE FROM list WHERE id=" . $id;
        if (mysqli_query($koneksi, $query)) {
            $response = array(
                'status' => 1,
                'message' => 'Barang berhasil dihapus.'
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Barang gagal dihapus.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
